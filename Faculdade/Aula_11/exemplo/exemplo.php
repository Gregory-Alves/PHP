<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=exemplo', 'root', 'fakuda');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $erro){
        echo 'Erro: ' . $erro->getMessage();
    }
    ?>