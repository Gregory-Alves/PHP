<?php 
require_once(__DIR__ . '/../Model/Usuario.php');

class UsuarioController {

    public function processa($acao) {
        
        if ($acao == 'C') { // Create (INSERT)
            $dataNasc = explode("/", $_POST['dataNascimento']);
            $_POST['dataNascimento'] = $dataNasc[2] . "-" . $dataNasc[1] . "-" . $dataNasc[0];

            $cpfAux = str_replace(".", "", $_POST['cpf']);
            $_POST['cpf'] = str_replace("-", "", $cpfAux);

            $novoUsuario = new Usuario();

            $novoUsuario->setNomeUsuario($_POST['nomeUsuario']);
            $novoUsuario->setEstadoCivil($_POST['estadoCivil']);
            $novoUsuario->setDataNascimento($_POST['dataNascimento']);
            $novoUsuario->setEstadoNascimento($_POST['estadoNascimento']);
            $novoUsuario->setCpf($_POST['cpf']);
            $novoUsuario->setProfissao($_POST['profissao']);

            $novoUsuario->cadastrarUsuario();
        } 
        
        elseif($acao == 'R') { // Read (SELECT)
            $usuario = new Usuario();
            $usuario->listarUsuarios();
        } 
    }
        
        
        public function processaDelete($acao, $id)
        {
        if($acao == "E") //EXCLUIR (DELETE)
        {
            $Usuario = new Usuario();
            $Usuario->ExcluirUsuario($id);

        }
    }
}
?>
