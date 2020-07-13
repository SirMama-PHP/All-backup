<?php
  include '../includes/db.php';

  $id =$_GET['id'];

  $trash_message = "UPDATE massages SET status=2 WHERE id=$id";
  $trash_massage_result = mysqli_query($conn,$trash_message);
  header('location:all-messages.php');
 ?>
