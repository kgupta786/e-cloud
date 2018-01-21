<?php
session_start();
$_SESSION["name"]=null;
session_destroy();
header("location:login.php");