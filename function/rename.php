<?php

if (isset($_GET["request"])&&($_GET["request"]==true))
{
    $oldname=$_GET["oldname"];
    $newname=$_GET["newname"];
    rename("../webstorage/".$oldname,"../webstorage/".$newname);
}

?>