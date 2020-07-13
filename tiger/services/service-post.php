<?php
session_start();
include '../includes/db.php';

$service_icon=$_POST['service-icon'];
$service_title=$_POST['service-title'];
$service_desp=$_POST['service-desp'];
$status=$_POST['status'];

$sql="INSERT INTO service(service_icon,service_title,service_desp,status)VALUES('$service_icon','$service_title','$service_desp',$status)";
$query=mysqli_query($conn,$sql);

$_SESSION['success']="service Added !";
header('location:add-service.php');

 ?>
