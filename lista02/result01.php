<?php 

$raio = $_POST['raio'];
$area = M_PI * ($raio * $raio);
$perimetro = 2* (M_PI) * $raio;

echo "A área é: ".$area."\n";
echo "O perimetro é: ".$perimetro;

?>