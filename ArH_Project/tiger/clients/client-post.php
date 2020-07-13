<?php
session_start();
include '../includes/db.php';

$dsp=$_POST['client_dsp'];
$name=$_POST['client_name'];
$title=$_POST['client_title'];
$uploaded_file = $_FILES['img'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extennsion = array('jpg','png','jpeg','gif');
if (in_array($extension,$allowed_extennsion)) {
  if ($uploaded_file['size']<=5500000 ) {

         $file_name =uniqid('','true'). '.' .$extension;
         $new_location = "../uploads/client/" . $file_name;
     move_uploaded_file($uploaded_file['tmp_name'],$new_location);
         $update_photo = "INSERT INTO clients_quotes(img,client_dsp, client_name, client_title) VALUES('$file_name','$dsp','$name','$title') ";
         $update_query = mysqli_query($conn,$update_photo);

         $_SESSION['client']='Add Client';
         header('location:add-client.php');
    }

  else {
    echo "size beshi";
  }
}

else {
    echo "File formet is not supported";
}


?>
