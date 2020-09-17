<?php

if (isset($_GET["request"])&&($_GET["request"]==true))
{
    $filename=$_GET["filename"];
    unlink("../webstorage/".$filename);
}

?>