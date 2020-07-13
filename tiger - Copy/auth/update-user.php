<?php
require '../includes/header.php';

$id = $_POST['id'];
$name =$_POST['name'];
$email =$_POST['email'];

if ($_FILES['user-photo']['name']!='') {
  $select_photo = "SELECT users_photo FROM users WHERE id=$id";
  $select_photo_result = mysqli_query($conn,$select_photo);
  $after_assoc = mysqli_fetch_assoc($select_photo_result);
  $delete_from = "../uploads/users/".$after_assoc['users_photo'];
  unlink($delete_from);


  $uploaded_file = $_FILES['user-photo'];
  $after_explode = explode('.',$uploaded_file['name']);
  $extension = end($after_explode);
  $allowed_extennsion = array('jpg','png','jpeg','gif');

  if (in_array($extension,$allowed_extennsion)) {
    if ($uploaded_file['size']<=5500000 ) {
      $file_name = $id . '.' .$extension;
      $new_location = "../uploads/users/" . $file_name;
      move_uploaded_file($uploaded_file['tmp_name'],$new_location);

      $update_photo = "UPDATE users SET users_photo='$file_name' WHERE id=$id";
      $update_query = mysqli_query($conn,$update_photo);

      $update = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
      $query=mysqli_query($conn,$update);
      header('location:all-users.php');
    }
    else {
      echo "size beshi";
    }
  }
  else {
    echo "file formate no support";
  }
}

else {
  $update = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
  $query=mysqli_query($conn,$update);
  header('location:all-users.php');
}

?>
