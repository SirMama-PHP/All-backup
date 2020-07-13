<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("Not connected");

$sql = "UPDATE student SET Name='{$stu_name}',Address = '{$stu_address}', Class = '{$stu_class}',Phone='{$stu_phone}' WHERE ID = {$stu_id}";
$result = mysqli_query($conn,$sql) or die("Not connected Not");

header("Location:http://127.0.0.1/work/crud_html/index.php");


mysqli_close($conn);




 ?>
