<?php  include '../includes/header.php';
$id = $_GET['id'];

$select_photo = "SELECT users_photo FROM users WHERE id=$id";
$select_photo_result = mysqli_query($conn,$select_photo);
$after_assoc = mysqli_fetch_assoc($select_photo_result);
$delete_from = "../uploads/users/".$after_assoc['users_photo'];
unlink($delete_from);

$delete="DELETE FROM users WHERE id=$id";
$query=mysqli_query($conn,$delete);

header("location:all-users.php");


 ?>
