<?php
session_start();
include '../includes/db.php';

// $id=$_GET['id'];

$uploaded_file = $_FILES['logo'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);

$allowed_extennsion = array('jpg','png','jpeg','gif');
if (in_array($extension,$allowed_extennsion)) {
  if ($uploaded_file['size']<=5500000 ) {



        // $last_id = mysqli_insert_id($conn);
         $file_name =uniqid('','true'). '.' .$extension;
         $new_location = "../uploads/logo/" . $file_name;
         move_uploaded_file($uploaded_file['tmp_name'],$new_location);

         $update_photo = "INSERT INTO our_patner(logo) VALUES('$file_name') ";
         $update_query = mysqli_query($conn,$update_photo);
         $_SESSION['logo']='Add logo';
         header('location:add-logo.php');
    }

  else {
    echo "size beshi";
  }
}

else {
    echo "File formet is not supported";
}


?>
