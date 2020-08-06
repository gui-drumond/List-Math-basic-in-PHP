<?php 
session_start();
$raio = $_POST['raio'];
$area = M_PI * ($raio * $raio);
$perimetro = 2* (M_PI) * $raio;

echo "A área é: ".$area."\n";
echo "O perimetro é: ".$perimetro;
$_SESSION['area'] =$area ;
$_SESSION['perimetro'] =$perimetro ;

header("Location: ex01.php");

?>