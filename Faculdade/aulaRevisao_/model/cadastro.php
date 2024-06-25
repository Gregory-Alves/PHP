<?php 
require_once "./model/conn.php";
class CadastroDao{
    private $id; 
    private $nome;
    private $sobrenome; 
    private $ddd;
    private $telefone;
    private $mensagem;
    private $email;
    private $usuCadastro;

    public function __construct($id="", $nome="", $sobrenome="", $ddd="", $telefone="", $mensagem="", $email="", $usuCadastro=""){
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->ddd = $ddd;
        $this->telefone = $telefone;
        $this->mensagem = $mensagem;
        $this->email = $email;
        $this->usuCadastro = $usuCadastro;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function cadastrar(){
        try {
            $pdo = Conn::getConn();
            /*$sql = $pdo->prepare("INSERT INTO teste.aulaRevisao (nome, sobrenome, ddd, telefone) VALUES (?,?,?,?)");
            $sql->execute([$this->nome, $this->sobrenome, $this->ddd, $this->telefone]);*/
            $sql = $pdo->prepare("INSERT INTO teste.aulaRevisao (nome, sobrenome, ddd, telefone, email, usuarioCadastrado) VALUES ('".$this->nome."', '".$this->sobrenome."', '".$this->ddd."', '".$this->telefone."', '".$this->email."', '1')");
            $sql->execute();

            if($sql->rowCount())
            {  
                header("Location:index.php?page=cadastro");

            }  
        } catch (PDOException $e) {
            die("Erro ao gravar dados ". $e->getMessage());
        }
        
    }

    public function cadastrarFaleConosco(){
        try {
            $pdo = Conn::getConn();
            $sql = $pdo->prepare("INSERT INTO teste.aulaRevisao (nome, sobrenome, ddd, telefone, mensagem, email,usuarioCadastrado) VALUES ('".$this->nome."', '".$this->sobrenome."', '".$this->ddd."', '".$this->telefone."', '".$this->mensagem."', '".$this->email."', '".$this->usuCadastro."')");
            $sql->execute();

            if($sql->rowCount())
            { 
               // header("Location:index.php?page=faleconosco");
            }
 
        } catch (PDOException $e) {
            die("Erro ao gravar dados ". $e->getMessage());
        }
    
    }

    public static function listar(){
        try {
            $pdo = Conn::getConn();
            $sql = $pdo->prepare("SELECT * FROM teste.aulaRevisao");
            $sql->execute();
            $clientes = [];
            while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                $cliente = new CadastroDao();
                $cliente->id = $row["id"];
                $cliente->nome = $row["nome"];
                $cliente->sobrenome = $row["sobrenome"];
                $cliente->ddd = $row["ddd"];
                $cliente->telefone = $row["telefone"];
                $cliente->mensagem = $row["mensagem"];
                $cliente->email = $row["email"];
                $cliente->usuCadastro = $row["usuarioCadastrado"];
                $clientes[] = $cliente;
            }
            return $clientes;

        } catch (PDOException $e) {
            die("Erro ao listar clientes " . $e->getMessage());
        }
    }

    public static function listarFaleConosco(){
        try {
            $pdo = Conn::getConn();
            $sql = $pdo->prepare("SELECT * FROM teste.aulaRevisao where mensagem is not null");
            $sql->execute();
            $clientes = [];
            while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                $cliente = new CadastroDao();
                $cliente->id = $row["id"];
                $cliente->nome = $row["nome"];
                $cliente->sobrenome = $row["sobrenome"];
                $cliente->ddd = $row["ddd"];
                $cliente->telefone = $row["telefone"];
                $cliente->mensagem = $row["mensagem"];
                $cliente->email = $row["email"];
                $cliente->usuCadastro = $row["usuarioCadastrado"];
                $clientes[] = $cliente;
            }
            return $clientes;

        } catch (PDOException $e) {
            die("Erro ao listar clientes " . $e->getMessage());
        }
    }

    public static function buscarPorId($id){
        try {
            $pdo = Conn::getConn();
            $sql = $pdo->prepare("SELECT * FROM teste.aulaRevisao WHERE id=?");
            $sql->execute([$id]);
            if($row = $sql->fetch(PDO::FETCH_ASSOC)){
                $cliente = new CadastroDao();
                $cliente->id = $row["id"];
                $cliente->nome = $row["nome"];
                $cliente->sobrenome = $row["sobrenome"];
                $cliente->ddd = $row["ddd"];
                $cliente->telefone = $row["telefone"];
                $cliente->email = $row["email"];
                return $cliente;
            }
            return null;
        } catch (PDOException $e) {
            die("Erro ao buscar por id ". $e->getMessage());
        }
    }

    public function editar(){
        try {
            $pdo = Conn::getConn();
            $sql = $pdo->prepare("UPDATE teste.aulaRevisao SET nome=?, sobrenome=?, ddd=?, telefone=?, email=? WHERE id=?");
            $sql->execute([$this->nome, $this->sobrenome, $this->ddd, $this->telefone, $this->email, $this->id]);
            if($sql->rowCount() !== 1){
                throw new Exception("Nenhum registro foi encontrado");
            }
        } catch (PDOException $e) {
            die("Erro ao editar ". $e->getMessage());
        }
    }

    public static function excluir(int $id){
        try {
            $pdo = Conn::getConn();
            $sql = $pdo->prepare("DELETE FROM teste.aulaRevisao WHERE id=?");
            $sql->execute([$id]);
        } catch (PDOException $e) {
            die("Erro ao deletar " . $e->getMessage());
        }
    }
}
?>