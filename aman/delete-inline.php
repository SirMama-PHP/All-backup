<?php

echo $stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE ID ={$stu_id} ";
$result = mysqli_query($conn,$sql) or die("Not connected");

header("Location:http://localhost/work/crud_html/index.php");

mysqli_close($conn);
 ?>
