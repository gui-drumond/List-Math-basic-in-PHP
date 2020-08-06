<?php 

$av1 = $_POST['av1'];
$av2 = $_POST['av2'];
$av3 = $_POST['av3'];
$media = ($av1 + $av2 + $av3) / 3;

echo "A media é: ".$media;

?>