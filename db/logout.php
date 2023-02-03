<?php 
session_start();
$_SESSION = array();
unset($_SESSION['ativo']);
unset($_SESSION['login']);

session_destroy();
header("Location:../pages/login.php");

?>