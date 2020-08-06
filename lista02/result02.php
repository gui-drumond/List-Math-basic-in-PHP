<?php 
session_start();
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$soma = $n1 + $n2;

$_SESSION['soma'] =$soma ;

header("Location: ex02.php");

?>