/*禁用右键*/
$(document).ready(function () {
    $(document).bind("contextmenu", function (e) {
        return false;
    });
});

//html代码转义
function HTMLEncode(html) { var temp = document.createElement("div"); (temp.textContent != null) ? (temp.textContent = html) : (temp.innerText = html); var output = temp.innerHTML; temp = null; return output; }


//获取文件后缀名
function getSuffix(filename) {
    filename = filename.toLowerCase();
    var spl = filename.split(".");
    var suffix = spl[spl.length - 1];
    return suffix;
}

function controllerMenu(x, y, that) {
    that.css("background-color", "#dfdfdf");
    $("#file-item-menu").css({ 'top': y, 'left': x, 'visibility': 'visible', 'opacity': "1", 'transform': 'scale(1)' });
    $("#cover_o").css("display", "block");
    var file_id = that.attr("file-id");
    var file_name = that.find(".mdui-list-item-title").text();
    //下载文件
    $("#download_file").off("click").click(function () {
        hideMenu();
        $("#download-file").attr("src", "./function/download.php?file_name=" + file_name);
    })
    //预览文件
    $("#open_file").off("click").click(function () {
        hideMenu();
        var suffix = getSuffix(file_name);
        if (suffix == 'mp4' || suffix == 'flv') { //视频预览支持的格式 与remote/FileManger的同步
            $("#video").show();
            $("#cover_o").css("display", "block");
            type = "auto";
            if (suffix == 'flv') {
                type = 'flv';
            }

            var url = "./webstorage/" + file_name;
            dp = new DPlayer({
                container: document.getElementById('dplayer'),
                video: {
                    url: url,
                    type: type
                },
            });
        } else if (suffix == 'pdf') {
            window.open("./webstorage/" + file_name, "_blank");
        } else if (suffix == 'txt' || suffix == 'php' || suffix == 'java' || suffix == 'sql' || suffix == 'py' || suffix == 'css' || suffix == 'js' || suffix == 'html') {
            $("#view_txt").show();
            var url = "./webstorage/" + file_name;
            var k = $.get(url, function (data, status) {
                $("#view_txt code").html(HTMLEncode(data));
                $("#view_txt code").attr("class", "language-" + suffix);
                var oHead = document.getElementsByTagName('HEAD').item(0);
                var oScript = document.createElement("script");
                oScript.type = "text/javascript";
                oScript.src = "./static/js/prism.js";
                oHead.appendChild(oScript);

            })
        } else if (suffix == "doc" || suffix == "docx" || suffix == "xls" || suffix == "xlsx" || suffix == "ppt" || suffix == "pptx") {

            //微软官方接口
            //地址必须是域名，不可以使用ip地址，且端口需要是80
            window.open("https://view.officeapps.live.com/op/view.aspx?src=" + encodeURIComponent("./webstorage/" + file_name), "_blank");

        } else {
            alert("此类文件暂不支持预览", "error");
        }

    })

    //文件重命名
    $("#rename_file").off("click").click(function () {
        hideMenu();
        mdui.prompt('文件重命名为',
            function (value) {
                if (value != "") {
                    var request = './function/rename.php?request=true&newname=' + value + "&oldname=" + file_name;
                    xhr = new XMLHttpRequest();
                    xhr.open('get', request);
                    xhr.onreadystatechange = function () { //回调函数
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            alert("重命名成功！");
                        }
                    }
                    xhr.send();
                }
            },
            function (value) {

            },
            {
                confirmText: "确认",
                cancelText: "取消",
                defaultValue: file_name
            }
        );
    })

    //文件删除
    $("#delete_file").off("click").click(function () {
        hideMenu();
        mdui.confirm('确认要删除文件吗？',
            function () {
                var request = './function/delete.php?request=true&filename='+file_name;
                xhr = new XMLHttpRequest();
                xhr.open('get', request);
                xhr.onreadystatechange = function () { //回调函数
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        alert("删除成功！");
                    }
                }
                xhr.send();

            },
            function () {

            },
            {
                confirmText: "确认",
                cancelText: "取消",
            }
        );
    })
}

//获取窗口高度
function getClientHeight() {
    var clientHeight = 0;
    if (document.body.clientHeight && document.documentElement.clientHeight) {
        var clientHeight = (document.body.clientHeight < document.documentElement.clientHeight) ? document.body.clientHeight : document.documentElement.clientHeight;
    }
    else {
        var clientHeight = (document.body.clientHeight > document.documentElement.clientHeight) ? document.body.clientHeight : document.documentElement.clientHeight;
    }
    return clientHeight;
}

/*文件右键打开自定义目录列表*/
$(document).off("mousedown", ".file-item").on("mousedown", ".file-item", function (e) {

    var e = e || window.event;
    var x, y;
    $("#cover_o").css('height', $("#page-index").height() + 84 + "px");
    x = e.clientX;
    y = e.clientY;
    if (y > (getClientHeight() - 280)) {
        y = getClientHeight() - 280;
    }

    if (e.button == "2") {
        controllerMenu(x, y, $(this));
    }
    return false;
})

/*点击空白处隐藏列表*/
$("#cover_o").click(function () {
    hideMenu();
    $("#video").hide();
    //dp.destroy();
})
/*隐藏列表*/
function hideMenu() {
    $("#file-item-menu").css({ 'visibility': 'hidden', 'opacity': "0", 'transform': 'scale(0)' });
    $("#cover_o").css("display", "none");
    $(".file-item").css("background-color", "");
    $("#download_file").show();
}


