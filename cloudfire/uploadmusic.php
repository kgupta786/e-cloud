<?php
session_start();
include "connection.php";
$musicname=$_POST["music_name"];
$photo=$_FILES['audioFile']['name'];

$tmp=$_FILES['audioFile']['tmp_name'];
$size=$_FILES['audioFile']['size'];
$path='./uploads/'.$photo;

$ext=pathinfo($photo,PATHINFO_EXTENSION);

if($ext=='mp3' || $ext=='mpeg' || $ext=='mp4')
{
    move_uploaded_file($tmp,$path);
    echo "File Name is ".$photo."<br>";
    echo "Size of the File is ".$size;
    $date="select SYSDATE()";
    mysqli_query($conn,$date);
    $s="insert into ".'m'.$_SESSION["name"]." values( '".$path."','".$musicname."')";
    mysqli_query($conn,$s);
    header("Location:view_music.php?er=2");
}
else
{
    header("Location:view_music.php?er=1");
}