<?php
session_start();
include "connection.php";
$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];
$size=$_FILES['photo']['size'];
$path='imageupload/'.$photo;

$ext=pathinfo($photo,PATHINFO_EXTENSION);

if($ext=='JPG' || $ext=='jpg' || $ext=='gif')
{
    move_uploaded_file($tmp,$path);
    echo "File Name is ".$photo."<br>";
    echo "Size of the File is ".$size;
    $s="insert into ".'f'.$_SESSION["name"]." values( '".$path."')";
    mysqli_query($conn,$s);
  // echo $s;
    header("Location:add_photo.php?er=2");
}
else
{
 header("Location:add_photo.php?er=1");
}