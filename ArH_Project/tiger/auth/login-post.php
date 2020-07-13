<?php
session_start();

require '../includes/header.php';


$email =$_POST['email'];
$password =$_POST['password'];

$select = "SELECT COUNT(*) as login_email, name, email,role,users_photo FROM users WHERE email='$email'";
$query = mysqli_query($conn,$select);
$assoc=mysqli_fetch_assoc($query);

if ($assoc['login_email']==1) {
  $select2 = "SELECT * FROM users WHERE email='$email'";
  $query2 = mysqli_query($conn,$select2);
  $assoc2=mysqli_fetch_assoc($query2);
  if (password_verify($password,$assoc2['password'])) {
    $_SESSION['login']="visa ashe";
    $_SESSION['name']=$assoc['name'];
    $_SESSION['email']=$assoc['email'];
    $_SESSION['role']=$assoc['role'];
    $_SESSION['users_photo']=$assoc['users_photo'];
    header('location:/tiger/auth/all-users.php');
  }
  else {
    $_SESSION['login_err']="invalid Email or Password ";
   header('location:login.php');
  }
}
else {
  $_SESSION['login_err']="invalid Email or Password ";
 header('location:login.php');
}

 ?>
