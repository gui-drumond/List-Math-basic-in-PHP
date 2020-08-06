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
    <title>ex2</title>
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
    <div class="container landing">
        <div class="home-wrap">
            <form class="form-group display-4"action="result02.php" method="POST">
            Digite o numero1
                    <input class="input form-control" name="n1" type="text">
            Digite o numero2  
                    <input class="input form-control" name="n2" type="text">
                    <?php if(isset($_SESSION['soma']))
                    {
                        echo "Resultado :".$_SESSION['soma']."<br/>";
                        unset( $_SESSION['soma']);              
                    }
                    ?>
                    <input class="btn btn-success"type="submit" value="Calcular! ">
            </form>
        </div>
    </div>
</body>
</html>