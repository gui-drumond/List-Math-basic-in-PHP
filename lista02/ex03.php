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
    <title>ex3</title>
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
            <form class="form-group display-4"action="result03.php" method="POST">
            primeira nota
              <br><input type="number" name="av1" class="form-group" placeholder="Insira a nota"><br>
            segunda nota
              <br><input type="number" name="av2" class="form-group" placeholder="Insira a nota"><br>
              terceira nota
              <br><input type="number" name="av3" class="form-group" placeholder="Insira a nota"><br>
              <br><input type="submit">
              <?php if(isset($_SESSION['media']))
                    {
                        echo "Resultado :".$_SESSION['media']."<br/>";
                        unset( $_SESSION['media']);              
                    }
                    ?>
            </form>
        </div> 
     </div>
</body>
</html>