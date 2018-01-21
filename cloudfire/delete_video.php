<?php
session_start();
include "connection.php";
$s="delete from ";
$s1='v'.$_SESSION["name"];
$del=$_GET["query"];
$s2=" where video_path='$del'";

$final=$s.$s1.$s2;
mysqli_query($conn,$final);
//echo $final;
header("Location:view_video.php");