<?php 

    session_start();
   // $_SESSION['usuario'] = "Professor";


       
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    
    $_SESSION['aula'] = "Linguagem PHP";
    $_SESSION['data'] = date('d/m/Y');
    $_SESSION['hora'] = time();

    echo '<br><a href="mostrarDados.php">Apresentacao de dados</a>';
   ?>
</body>
</html>