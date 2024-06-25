<?php
require_once("./model/cadastro.php");
class CadastroController {


    public static function cadastrar(){
        try {

            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $empty_input = false;
            $dados = array_map('trim', $dados);

            if (in_array("", $dados)) {
                $empty_input = true;

               // echo "<p style='color: red;'>Existem campos em branco!</><br>";
                //echo "<script>alert('Existem campos em branco!');</script>";

                echo "<script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Cadastro',
                                text: 'Existem campos em branco!',
                            });
                      </script>";
            }
            elseif(strlen($dados["ddd"]) < 3)
            {
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Quantidade incorreta de números',
                            text: 'O DDD é composto de 3 dígitos!',
                        });
                  </script>";
            }
            elseif(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL))
            {
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'E-mail',
                            text: 'A estrutura do e-mail informado é inválida!',
                        });
                  </script>";
            }

            if ($empty_input == false && strlen($dados["ddd"]) == 3 && filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) 
            {

                /*echo "<script>
                            Swal.fire({
                                title: 'Bom trabalho!',
                                text: 'Dados cadastrados com sucesso!',
                                icon: 'success'
                            });
                      </script>";*/

                $cadastro = new CadastroDao(nome:$dados["nome"], sobrenome:$dados["sobrenome"], ddd:$dados["ddd"], telefone:$dados["telefone"], email:$dados['email']);
                $cadastro->cadastrar();
            }
        } catch (Exception $e) {
            die("Erro ao validar o cadastro " . $e->getMessage());
        }
        
        
    }

    public static function cadastrarFaleConosco(){
        try {

            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $empty_input = false;
            $dados = array_map('trim', $dados);

            if (in_array("", $dados)) {
                $empty_input = true;

               // echo "<p style='color: red;'>Existem campos em branco!</><br>";
                //echo "<script>alert('Existem campos em branco!');</script>";

                echo "<script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Cadastro',
                                text: 'Existem campos em branco!',
                            });
                      </script>";
            }
            elseif(strlen($dados["ddd"]) < 3)
            {
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Quantidade incorreta de números',
                            text: 'O DDD é composto de 3 dígitos!',
                        });
                  </script>";
            }
            elseif(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL))
            {
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'E-mail',
                            text: 'A estrutura do e-mail informado é inválida!',
                        });
                  </script>";
            }

            if ($empty_input == false && strlen($dados["ddd"]) == 3 && filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) 
            {

                echo "<script>
                            Swal.fire({
                                title: 'Bom trabalho!',
                                text: 'Dados cadastrados com sucesso!',
                                icon: 'success'
                            });
                      </script>";

                $cadastro = new CadastroDao(nome:$dados["nome"], sobrenome:$dados["sobrenome"], ddd:$dados["ddd"], telefone:$dados["telefone"], mensagem:$dados["mensagem"], email:$dados['email'], usuCadastro:$dados['usuarioCadastrado']);
                $cadastro->cadastrarFaleConosco();
            }
        } catch (Exception $e) {
            die("Erro ao validar o cadastro " . $e->getMessage());
        }
        
        
    }

    public static function listar(){
        $clientes = CadastroDao::listar();
        require_once "./view/listar.php";
    }

    public static function listarFaleConosco(){
        $clientes = CadastroDao::listarFaleConosco();
        require_once "./view/listarFaleConosco.php";
    }

    public static function exbirEditar(){
        $cliente = CadastroDao::buscarPorId($_GET["id"]);
        require_once("./view/editar.php");
    }

    public static function editar(){
        try {
            $cliente = CadastroDao::buscarPorId($_GET["id"]);
            $cliente->nome = $_POST["nome"];
            $cliente->sobrenome = $_POST["sobrenome"];
            $cliente->ddd = $_POST["ddd"];
            $cliente->telefone = $_POST["telefone"];
            $cliente->email = $_POST["email"];
            $cliente->editar();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        header("Location:index.php?page=cadastro");
    }

    public static function excluir(){
        try {
            CadastroDao::excluir((int)$_GET["id"]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        header("Location:index.php?page=cadastro");
    }
    
}
?>