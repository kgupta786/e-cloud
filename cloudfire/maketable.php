<?php
include"connection.php";
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$values="(files varchar(500));";
$value1="(music_path varchar(500),music_name varchar(300));";
$value2="(video_path varchar(500),video_name varchar(300));";
$s="create table ";
$s1=$s.'f'.$name;
$s3=$s1.$values;
$s5=$s.'m'.$name;
$s6=$s5.$value1;
$s7=$s.'v'.$name.$value2;
$s4="insert into login values('$name','$email','$pass')";
mysqli_query($conn,$s4);
mysqli_query($conn,$s3);
mysqli_query($conn,$s6);
mysqli_query($conn,$s7);
session_start();
$_SESSION["name"]=$name;
$tablename='a'.$_SESSION["name"];
//echo $s4;
header("location:add_photo.php");


?>