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
       <img class="img-fluid mx-auto d-block col-4" src=" <?php 
        if(isset($_SESSION['img']))
        {
            echo $_SESSION['img'];    
            unset( $_SESSION['img']);                   
        }
        ?>" alt="">
    </div>
    <div class="container landing ">
        <div class="home-wrap ">
            <form class="form-group" action="../../calcs/calc_3.php" method="POST">
                    <select name="img" class="form-group form-control">
                    <option class="input mh-50 form-control" value="1"> Imagens 1 </option>
                    <option class="input mh-50 form-control" value="2"> Imagens 2 </option>
                    <option class="input mh-50 form-control" value="3"> Imagens 3 </option>                    
                    </select>
                    <input class="btn btn-success mx-auto d-block col-12"type="submit" value="Calcular! ">
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