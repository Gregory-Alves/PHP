<?php 
require_once(__DIR__ . '/../Model/Usuario.php');

class UsuarioController {

    public function processa($acao) {

        if ($acao == 'C') { // Create (INSERT)
            $novoUsuario = new Usuario();

            $novoUsuario->setNomeUsuario($_POST['nomeUsuario']);
            $novoUsuario->setEstadoCivil($_POST['estadoCivil']);
            $novoUsuario->setDataNascimento($_POST['dataNascimento']);
            $novoUsuario->setEstadoNascimento($_POST['estadoNascimento']);
            $novoUsuario->setCpf($_POST['cpf']);
            $novoUsuario->setProfissao($_POST['profissao']);

            $novoUsuario->cadastrarUsuario();
        }
    }
}
?>
