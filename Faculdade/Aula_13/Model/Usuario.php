<?php 

require_once(__DIR__ . '/Conexao.php');

class Usuario {

    private $idUsuario;
    private $nomeUsuario;
    private $estadoCivil;
    private $dataNascimento;
    private $estadoNascimento;
    private $cpf;
    private $profissao;

    public function cadastrarUsuario() {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("INSERT INTO usuarios (nomeUsuario, estadoCivil, dataNascimento, estadoNascimento, cpf, profissao) VALUES (:nomeUsuario, :estadoCivil, :dataNascimento, :estadoNascimento, :cpf, :profissao)");

            $sql->bindParam(':nomeUsuario', $this->nomeUsuario);
            $sql->bindParam(':estadoCivil', $this->estadoCivil);
            $sql->bindParam(':dataNascimento', $this->dataNascimento);
            $sql->bindParam(':estadoNascimento', $this->estadoNascimento);
            $sql->bindParam(':cpf', $this->cpf);
            $sql->bindParam(':profissao', $this->profissao);

            $sql->execute();
            echo "Usuário cadastrado com sucesso!";
        } catch (PDOException $erro) {
            echo "Erro ao cadastrar usuário! " . $erro->getMessage();
        }
    }

    public function listarUsuarios(){
        $conn = Conexao::conectar();

        $sql = $conn->prepare("SELECT id, nomeUsuario, estadoCivil, DATE_FORMAT(dataNascimento, '%d/%m/%Y') as dataNascimento, estadoNascimento, cpf, profissao FROM usuarios");

        $sql->execute();

        $result = $sql->fetchAll();

        require_once(__DIR__ . '/../View/Listar.php');
    }

    public function ExcluirUsuario($id)
        {
            $conn = Conexao::conectar();

            $sql = $conn->prepare("SELECT id, nomeUsuario, estadoCivil, DATE_FORMAT(dataNascimento, '%d/%m/%Y') as dataNascimento, estadoNascimento, cpf, profissao FROM teste.usuarios");

            $sql->execute();
            $result = $sql->fetchAll();

            if(!empty($id))
            {
                $sqlDelete = $conn->prepare("DELETE FROM teste.usuarios WHERE id=$id");
                $sqlDelete->execute();
            }
           
            require_once('./View/excluir.php');
            

        }

    // Getters e Setters
    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    public function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    public function getEstadoCivil() {
        return $this->estadoCivil;
    }

    public function setEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getEstadoNascimento() {
        return $this->estadoNascimento;
    }

    public function setEstadoNascimento($estadoNascimento) {
        $this->estadoNascimento = $estadoNascimento;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getProfissao() {
        return $this->profissao;
    }

    public function setProfissao($profissao) {
        $this->profissao = $profissao;
    }
}
?>
