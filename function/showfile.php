<?php
header("content-type:text/html;charset=utf-8");

$filearr = scandir("../webstorage");   //获取文件夹内的所有文件；
ini_set('date.timezone', 'Asia/Shanghai'); //时区设置，东八区上海时间；
function format_bytes($size)
{             //文件大小转换方法（字节转换为KB,MB,GB,TB）;
    $units = array(' B', ' KB', ' MB', ' GB', ' TB');
    for ($i = 0; $size >= 1024 && $i < 4; $i++) $size /= 1024;
    return round($size, 2) . $units[$i];
}
$num = 0;
$data = array();
if (isset($_GET["request"]) && ($_GET["request"] == 0)) {
    foreach ($filearr as $key => $value) {
        if ($key > 1) {
            $data[$key - 2] = array("name" => $value, "size" => format_bytes(filesize("../webstorage/$value")), "time" => date("Y-m-d H:i:s", filemtime("../webstorage/$value")));
            $num++;
        }
    }
} else 
if (isset($_GET["request"]) && ($_GET["request"] == 1)) {
    foreach ($filearr as $key => $value) {
        $suffix = substr(strrchr($value, '.'), 1);
        if ($key > 1 && (($suffix == "mp4" || $suffix == "avi" || $suffix == 'flv' || $suffix == "mkv" || $suffix == "wmv"))) {
            $data[$num] = array("name" => $value, "size" => format_bytes(filesize("../webstorage/$value")), "time" => date("Y-m-d H:i:s", filemtime("../webstorage/$value")));
            $num++;
        }
    }
} else 
if (isset($_GET["request"]) && ($_GET["request"] == 2)) {
    foreach ($filearr as $key => $value) {
        $suffix = substr(strrchr($value, '.'), 1);
        if ($key > 1 && (($suffix == "mp3" || $suffix == "m4a" || $suffix == "wav" || $suffix == "flac" || $suffix == "aac"))) {
            $data[$num] = array("name" => $value, "size" => format_bytes(filesize("../webstorage/$value")), "time" => date("Y-m-d H:i:s", filemtime("../webstorage/$value")));
            $num++;
        }
    }
} else 
if (isset($_GET["request"]) && ($_GET["request"] == 3)) {
    foreach ($filearr as $key => $value) {
        $suffix = substr(strrchr($value, '.'), 1);
        if ($key > 1 && (($suffix == "jpg" || $suffix == "png" || $suffix == "gif" || $suffix == "jpeg" || $suffix == "bmp"))) {
            $data[$num] = array("name" => $value, "size" => format_bytes(filesize("../webstorage/$value")), "time" => date("Y-m-d H:i:s", filemtime("../webstorage/$value")));
            $num++;
        }
    }
} else 
if (isset($_GET["request"]) && ($_GET["request"] == 4)) {
    foreach ($filearr as $key => $value) {
        $suffix = substr(strrchr($value, '.'), 1);
        if ($key > 1 && (($suffix=="txt"||$suffix=="doc"||$suffix=="docx"||$suffix=="xls"||$suffix=="xlsx"||$suffix=="ppt"||$suffix=="pptx"||$suffix=="pdf"))) {
            $data[$num] = array("name" => $value, "size" => format_bytes(filesize("../webstorage/$value")), "time" => date("Y-m-d H:i:s", filemtime("../webstorage/$value")));
            $num++;
        }
    }
}
$obj = array("total" => $num, "data" => $data);
echo json_encode($obj);
