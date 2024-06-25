<?php

function exibirMenu(){
    echo '
    <a href="./index.php?page=home">Home</a> | 
    <a href="./index.php?page=cadastro">Cadastro</a> | 
    <a href="./index.php?page=faleconosco">Fale conosco</a> |';
    
}


function loadingTitulo($page){
    switch ($page) {
        case 'home':
            echo "Página Home";
        break;
        case 'cadastro':
            echo "Página de Cadastro";
        break;
        case 'faleconosco':
            echo "Fale conosco";
        break;
        default:
            echo "erro 404";
        break;
    }
}


function loadingPage($page){
    switch ($page) {
        case 'home':
            echo "home";
            require_once "./view/home.php";
        break;
        case 'cadastro':
             echo 'Cadastro';
            require_once "./view/cadastro.php";
        break;
        case 'faleconosco':
             echo 'Fale conosco';
            require_once "./view/faleconosco.php";
        break;
        case 'editar':
            CadastroController::exbirEditar();
        break;
        case 'atualizar':
            CadastroController::editar();
        break;
        case 'excluir':
            CadastroController::excluir();
        break;
        default:
            echo "erro 404";
        break;
    }
}
