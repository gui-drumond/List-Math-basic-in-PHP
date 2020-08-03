<?php
session_start();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="_js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="border:none;"></button>
                <div class="collapse navbar-collapse" id="navbarResponsive"></div>
            </div>
        </nav>
    </header>

    <div class="caption text-center ">
        <h1 class="display-2 text-dark">Bem-Vind@ aos Exercicios Salesianos</h1>
        <h4>Exercicios propostos pelo prof Daniel</h4>
    </div>
    <div class="container">
        <?php 
        if(isset($_SESSION['resposta']))
        {
            echo $_SESSION['resposta']."<br/>";    
            unset( $_SESSION['resposta']);                   
        }
        ?>
    </div>
    <div class="container landing">
        <div class="home-wrap">
            <form class="form-group display-4"action="../../calcs/calc_2.php" method="POST"> 
                    Nome:
                    <input class="input form-control" name="nome" type="text">
                    Endereco:
                    <input class="input form-control" name="end" type="text">
                    Cep:
                    <input class="input form-control" name="cep" type="text">
                    Numero:
                    <input class="input form-control" name="num" type="text">
                    Bairro:
                    <input class="input form-control" name="bairro" type="text">
                    Telefone:
                    <input class="input form-control" name="tel" type="text">
                    Data:
                    <input class="input form-control" name="data" type="date">
                    <input class="btn btn-success"type="submit" value="Calcular! ">
            </form>
        </div>
    </div>

    <script type="text/JavaScript" src="js/bootstrap.bundle.min.js"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>