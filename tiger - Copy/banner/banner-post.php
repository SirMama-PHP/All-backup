<?php
session_start();
include '../includes/db.php';

$banner_title=$_POST['banner_title'];
$banner_name=$_POST['banner_name'];
$banner_dsp=$_POST['banner_dsp'];
$banner_icon=$_POST['banner_icon'];


$sql="INSERT INTO banner(banner_title,banner_name,banner_dsp,banner_icon)VALUES('$banner_title','$banner_name','$banner_dsp','$banner_icon')";
$query=mysqli_query($conn,$sql);

$_SESSION['success']="Banner Added !";
header('location:add-banner.php');

 ?>
