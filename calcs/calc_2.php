<?php
session_start();
$N=$_POST["nome"];
$E=$_POST["end"];
$B=$_POST["bairro"];
$C=$_POST["cep"];
$NUM=$_POST["num"];
$T=$_POST["tel"];
$D=$_POST["data"];
 $_SESSION['resposta']='
      <table class="table table-dark table-striped">
        <th>Nome</th>
        <th>Endereco</th>
        <th>Bairro</th>
        <th>Cep</th>
        <th>Numero</th>
        <th>Tel</th>
        <th>Data</th>

        <tr>
        <td>'.$N.'</td>
        <td>'.$E.'</td>
        <td>'.$B.'</td>
        <td>'.$C.'</td>
        <td>'.$NUM.'</td>
        <td>'.$T.'</td>
        <td>'.$D.'</td>

        </tr>'.
        '</table>';
 header("Location: ../pages/exs/ex2.php");


?>