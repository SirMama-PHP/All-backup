<?php
 include '../includes/db.php';
 $id = $_GET['id'];

 $update="UPDATE banner SET status=0 WHERE id=$id";
 $query=mysqli_query($conn,$update);
 header('location:all-banner.php');

 ?>
