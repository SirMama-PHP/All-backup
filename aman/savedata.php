<?php
  $stu_name = $_POST['sname'];
  $stu_address = $_POST['saddress'];
  $stu_class = $_POST['class'];
  $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("Not connected");

$sql = " INSERT INTO student(Name,Address,Class,Phone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}');";
$result = mysqli_query($conn,$sql) or die("Not connected Not");

header("Location:http://127.0.0.1/work/crud_html/index.php");


mysqli_close($conn);




 ?>
