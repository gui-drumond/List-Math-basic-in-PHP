<?php
session_start();
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$resposta = $n1 + $n2;

$_SESSION['resposta']=$resposta;

header("Location: ../pages/exs/ex1.php");


?>