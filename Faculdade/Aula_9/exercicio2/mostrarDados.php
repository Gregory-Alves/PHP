<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($_POST['nome']) || !isset($_POST['sobrenome']) || !isset($_POST['estadoCivil']) || !isset($_POST['formacao'])) {
            echo "Preencha todos os campos!";
            return;
        } else {
            session_start();
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['sobrenome'] = $_POST['sobrenome'];
            $_SESSION['estadoCivil'] = $_POST['estadoCivil'];
            $_SESSION['formacao'] = $_POST['formacao'];

            echo "Nome: {$_SESSION['nome']}<br>" . "Sobrenome: {$_SESSION['sobrenome']}<br> Estado Civil: {$_SESSION['estadoCivil']}<br>" . "Formação: {$_SESSION['formacao']}<br>";
        }
    }
?>
