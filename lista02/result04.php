<?php 
session_start();
$n1 = $_POST['n1'];
$cm = $n1 * 100;

$_SESSION['cm']=$cm;
header("Location: ex04.php");

?>