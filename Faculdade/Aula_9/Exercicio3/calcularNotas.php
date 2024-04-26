<?php 

    //como fazer uma validacao para so conseguir acessar a pagina quem fez o login correto na pagina index.php
    session_start();
    if ($_SESSION['usuario'] != "Gregory" || $_SESSION['senha'] != "1234"){
       echo "Acesso indevido!";
    }
   // e caso nao seja feito o login correto, aparecer uma mensagem de acesso indevido
    else{
        echo "Acesso realizado!";
    }

?>