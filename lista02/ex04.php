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
            <form class="form-group display-4"action="result04.php" method="POST">
            Insira o valor em metros
              <br><input type="number" name="n1" class="form-group">
              <br><input type="submit" class="form-group"> 
               <?php if(isset($_SESSION['cm']))
                    {
                        echo "Resultado :".$_SESSION['cm']."<br/>";
                        unset( $_SESSION['cm']);              
                    }
                    ?>
          </form>
        
        </div>
    </div>
</body>
</html>