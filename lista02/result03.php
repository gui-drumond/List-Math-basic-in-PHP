<?php 
session_start();

$av1 = $_POST['av1'];
$av2 = $_POST['av2'];
$av3 = $_POST['av3'];
$media = ($av1 + $av2 + $av3) / 3;

$_SESSION['media']=$media;
header("Location: ex03.php");
?>