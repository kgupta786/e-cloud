<?php
include "connection.php";
$name=$_POST["mobile"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$s="select * from login where email='$email' and password='$pass' and mobileno='$name'";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_row($result);
if($row==null){
    echo "Your email or password is not correct";
    echo $s;
   header("location:login.php");
}
else{
    session_start();
    $_SESSION["name"]=$name;
    header("location:add_photo.php");
}
