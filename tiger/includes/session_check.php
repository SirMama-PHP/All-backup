<?php
session_start();
if (!isset( $_SESSION['login'])) {
header('location:/tiger/auth/login.php');
}

 ?>
