
//显示上传队列中的数量
function check_upload_queue_num() {
    var file_queue_num = $("#upload_queue li").length;
    if (file_queue_num > 0) {
        $(".tag_num").show();
        $(".tag_num").text(file_queue_num);
    } else {
        $(".tag_num").hide();
    }
}
//字节转换
function tranFileSize(fileByte) {
    var fileSizeByte = fileByte;
    var fileSizeMsg = "";
    if (fileSizeByte < 1048576) fileSizeMsg = (fileSizeByte / 1024).toFixed(2) + "KB";
    else if (fileSizeByte == 1048576) fileSizeMsg = "1MB";
    else if (fileSizeByte > 1048576 && fileSizeByte < 1073741824) fileSizeMsg = (fileSizeByte / (1024 * 1024)).toFixed(2) + "MB";
    else if (fileSizeByte > 1048576 && fileSizeByte == 1073741824) fileSizeMsg = "1GB";
    else if (fileSizeByte > 1073741824 && fileSizeByte < 1099511627776) fileSizeMsg = (fileSizeByte / (1024 * 1024 * 1024)).toFixed(2) + "GB";
    else fileSizeMsg = "文件超过1TB";
    return fileSizeMsg;
}

//添加文件到队列
var upload_fun = new plupload.Uploader({
    runtimes: 'html5,flash,silverlight,html4', //上传方式顺序优先级
    browse_button: 'select_file_btn', //选择图片按钮id
    container: 'upload_queue', //容器
    url: './function/upload.php', //服务器接口地址
    flash_swf_url: 'Moxie.swf',
    multi_selection: true, //false为单图上传，true为多图上传
    chunk_size: "2mb",//分片上传，每片的大小
    max_retries: 3, // 上传失败最大重试次数
    dragdrop: true, // 开启可拖曳上传
    drop_element: 'upload_queue', // 拖曳上传区域元素的ID，拖曳文件或文件夹后可触发上传
    auto_start: true, // 选择文件后自动上传，若关闭需要自己绑定事件触发上传
    init: {
        //init事件发生后触发
        PostInit: function () {
            console.log("init(初始化上传队列)...")
        },
        FilesAdded: function (up, files) { //文件选择之后的触发的方法
            plupload.each(files, function (file) {

                var filesize = tranFileSize(file.size);
                // 文件添加进队列后,处理相关的事情
                $("#upload_queue ul").append(`<li id=` + file.id + ` class="mdui-list-item mdui-ripple">
                    <div class="up_progress" style="width:0%"></div>
                    <div class="mdui-list-item-content line-limit-length">
                      <div class="mdui-list-item-title line-limit-length">`+ file.name + `</div>
                      <div class="mdui-list-item-text"><span class="size">`+ filesize + ` </span><span class="upload_pro_text">排队中</span></div>
                    </div>
                    <i file-el-id=`+ file.id + ` class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-grey-400 delete_queue">delete</i>
                </li>`);
                check_upload_queue_num();

                //删除上传队列
                $(".delete_queue").click(function () {
                    var fileelid = $(this).attr("file-el-id");
                    upload_fun.removeFile(fileelid);
                    $(this).parent().remove();
                    check_upload_queue_num();
                });


            });
            //开始上传
            upload_fun.start();

        },
        UploadComplete: function () {
            // 队列文件处理完毕后,处理相关的事情
            alert("文件上传完成");
            $("#upload_queue .mdui-list li").remove();
            check_upload_queue_num();
        },
        //进度条
        UploadProgress: function (up, file) { //上传过程中调用的方法
            var percent = file.percent;
            // console.log(percent);
            $('#' + file.id + " .up_progress").css('width', percent + '%');
            $('#' + file.id + " .upload_pro_text").html(percent + '%');
            // $('#speed_con').html(trans_byte(file.speed)+"/s");
        },
        FileUploaded: function (up, file, res) { //文件上传完成后，up:plupload对象，file:上传的文件相关信息，res:服务器返回的信息
            
            //上传完成处理
            console.log("上传完成！");
            check_upload_queue_num();

        },
        Error: function (up, err) {
            console.log("发生错误，错误内容如下:");
            console.log(err);
        }
    }
});
upload_fun.init();
