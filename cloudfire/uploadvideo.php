<?php
session_start();
include "connection.php";
$videoname=$_POST["video_name"];
echo $videoname;
$photo=$_FILES['videoFile']['name'];
$tmp=$_FILES['videoFile']['tmp_name'];
$size=$_FILES['videoFile']['size'];
$path='./uploadvideo/'.$photo;

$ext=pathinfo($photo,PATHINFO_EXTENSION);

if($ext=='mp4' || $ext=='mpeg' || $ext=='gif')
{
    move_uploaded_file($tmp,$path);
    echo "File Name is ".$photo."<br>";
    echo "Size of the File is ".$size;
    $s="insert into ".'v'.$_SESSION["name"]." values( '".$path."','".$videoname."')";
    mysqli_query($conn,$s);
    echo $s;
    header("Location:video.php?er=2");
}
else
{
    //echo "error is here";
    header("Location:video.php?er=1");
}