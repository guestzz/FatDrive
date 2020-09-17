function getvideolist() {

    //$("#file-list>.mdui-list").append(`<div id="loading" class="mdui-spinner mdui-valign" style="margin: 15px auto;"><div class="mdui-spinner-layer "><div class="mdui-spinner-circle-clipper mdui-spinner-left"><div class="mdui-spinner-circle"></div></div><div class="mdui-spinner-gap-patch"><div class="mdui-spinner-circle"></div></div><div class="mdui-spinner-circle-clipper mdui-spinner-right"><div class="mdui-spinner-circle"></div></div></div></div>`);
    $("#file-list>.mdui-list").html(`<div id="loading" class="mdui-spinner mdui-valign" style="margin: 100px auto;"><div class="mdui-spinner-layer "><div class="mdui-spinner-circle-clipper mdui-spinner-left"><div class="mdui-spinner-circle"></div></div><div class="mdui-spinner-gap-patch"><div class="mdui-spinner-circle"></div></div><div class="mdui-spinner-circle-clipper mdui-spinner-right"><div class="mdui-spinner-circle"></div></div></div></div>`);
    xhr = new XMLHttpRequest();
    xhr.open('get', './function/showfile.php?request=4');
    xhr.onreadystatechange = function () { //回调函数
        if (xhr.readyState == 4 && xhr.status == 200) {
            $("#loading").remove();
            var data = JSON.parse(xhr.responseText); //得到数据
            var total = data.total;
            var list = data.data; //得到data数组
            for (var i = 0; i < total; i++) {
                var files = list[i];
                var icon = checkFile(files.name);
                $("#file-list>.mdui-list").append(`<li class="file-item mdui-list-item" "` + `" file-id="` + i + `">
                ` + icon + `
                <div class="mdui-list-item-content line-limit-length">
                  <div class="mdui-list-item-title line-limit-length">` + files.name + `</div>
                  <div class="mdui-list-item-text"><span class="date">` + files.time + `</span><span class="size">` + `&nbsp;&nbsp;&nbsp;` + files.size + `</span></div>
                </div>
                
              </li>`);
            }
        }
    }
    xhr.send();

}
getvideolist();