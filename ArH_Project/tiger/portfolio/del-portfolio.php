<?php  include '../includes/header.php';
$id = $_GET['id'];



$delete="DELETE FROM portfolio WHERE id=$id";
$query=mysqli_query($conn,$delete);

header("location:view-portfolio.php");


 ?>
