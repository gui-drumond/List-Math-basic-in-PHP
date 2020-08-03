<?php
session_start();
$N=$_POST["img"];
if(isset($N)==1&&$N==1){

   $_SESSION['img']="../../img/1.png";
}

if(isset($N)&&$N==2){

  $_SESSION['img']="../../img/2.png";
}

if(isset($N)==3&&$N==3){

  $_SESSION['img']="../../img/3.png";
}

 header("Location: ../pages/exs/ex3.php");
?>