<?php
session_start();
require '../includes/db.php';

$name = $_POST['fname'];
$email = $_POST['email'];
$massage = $_POST['massage'];

$sql = "INSERT INTO massages(name,email,massage) VALUES ('$name','$email','$massage')";
$query = mysqli_query($conn,$sql);
$_SESSION['msg'] = 'Successfully Sent';
header('location:/tiger/index.php#contact');




 ?>
