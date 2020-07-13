<?php
session_start();
include '../includes/db.php';

$about_dsp = $_POST['about_dsp'];
$ed_year =$_POST['ed_year'];
$ed_title =$_POST['ed_title'];
$ed_percentage =$_POST['ed_percentage'];


$uploaded_file = $_FILES['about-photo'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extennsion = array('jpg','png','jpeg','gif');
if (in_array($extension,$allowed_extennsion)) {
  if ($uploaded_file['size']<=5500000 ) {


      $insert= "INSERT INTO about(about_dsp,ed_year,ed_title,ed_percentage) VALUES('$about_dsp','$ed_year','$ed_title','$ed_percentage')";
         $insert_query=mysqli_query($conn,$insert);
         $last_id = mysqli_insert_id($conn);
         $file_name = $last_id . '.' .$extension;
         $new_location = "../uploads/about/" . $file_name;
         move_uploaded_file($uploaded_file['tmp_name'],$new_location);

         $update_photo = "UPDATE about SET about_photo='$file_name' WHERE id=$last_id";
         $update_query = mysqli_query($conn,$update_photo);
         $_SESSION['register']='Register ok';
         header('location:add-about.php');
    }

  else {
    echo "size beshi";
  }
}

else {
    echo "File formet is not supported";
}


// if (empty($name)) {
//   echo "nam nai";
// }
// elseif (empty($email)) {
//   echo "email nai";
// }
// elseif (empty($password)) {
//   echo "password nai";
// }
// else {

//
  // if($assoc['duplicate']==1){
  //   $_SESSION['duplicate'] = 'same Email';
  //   header("location:register.php");
  // }
//   else {
//     $insert= "INSERT INTO users(name,email,password) VALUES('$name','$email','$hash_pass')";
//     $in_query=mysqli_query($conn,$insert);
//     $_SESSION['register']='Register ok';
//     header('location:register.php');
//   }
// }
?>
