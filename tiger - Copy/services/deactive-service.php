<?php
 include '../includes/db.php';
 $id = $_GET['id'];

 $update="UPDATE service SET status=0 WHERE id=$id";
 $query=mysqli_query($conn,$update);
 header('location:all-service.php');

 ?>
