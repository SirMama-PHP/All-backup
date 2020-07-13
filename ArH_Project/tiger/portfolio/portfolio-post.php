<?php
session_start();
include '../includes/db.php';

$cet=$_POST['portfolio_cetagory'];
$name=$_POST['portfolio_name'];

$uploaded_file = $_FILES['portfolio_img'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extennsion = array('jpg','png','jpeg','gif');
if (in_array($extension,$allowed_extennsion)) {
  if ($uploaded_file['size']<=5500000 ) {

         $file_name =uniqid('','true'). '.' .$extension;
         $new_location = "../uploads/portfolio/" . $file_name;
     move_uploaded_file($uploaded_file['tmp_name'],$new_location);
         $update_photo = "INSERT INTO portfolio(portfolio_img,portfolio_cetagory,portfolio_name) VALUES('$file_name','$cet','$name') ";
         $update_query = mysqli_query($conn,$update_photo);

         $_SESSION['portfolio']='Add portfolio';
         header('location:add-portfolio.php');
    }

  else {
    echo "size beshi";
  }
}

else {
    echo "File formet is not supported";
}


?>
