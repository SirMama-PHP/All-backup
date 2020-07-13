<?php
require '../includes/db.php';
$id = $_GET['id'];


$delete="DELETE FROM contact WHERE id=$id";
$query=mysqli_query($conn,$delete);

header("location:all-contact.php");

 ?>
