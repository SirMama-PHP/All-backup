<?php
session_start();
include '../includes/db.php';

$contact_name=$_POST['contact_name'];
$contact_title=$_POST['contact_title'];
$contact_desp=$_POST['contact_desp'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];


$sql="INSERT INTO contact(contact_name,contact_title,contact_desp,address,phone,email)VALUES('$contact_name','$contact_title','$contact_desp','$address','$phone','$email')";
$query=mysqli_query($conn,$sql);

$_SESSION['success']="Successfully Contact Added !";
header('location:add-contact.php');

 ?>
