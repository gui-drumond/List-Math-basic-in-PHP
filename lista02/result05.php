<?php 
session_start();
$lado = $_POST['lado'];
$area = $lado * $lado;
$dobro = $area * 2;

$_SESSION['dobro']=$dobro;
header("Location: ex05.php");

?>