<?php
session_start();
include "connection.php";
$s="delete from ";
$s1='m'.$_SESSION["name"];
$del=$_GET["query"];
$s2=" where music_path='$del'";

$final=$s.$s1.$s2;
mysqli_query($conn,$final);
//$final;
header("Location:view_music.php");