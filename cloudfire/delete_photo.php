<?php
session_start();
include "connection.php";
$s="delete from ";
$s1='f'.$_SESSION["name"];
$del=$_GET["query"];
$s2=" where files='$del'";

$final=$s.$s1.$s2;
mysqli_query($conn,$final);
//echo $final;
header("Location:view_photo.php");