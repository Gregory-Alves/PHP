<?php 

    class Conexao {

        public static function conectar() {

            try{
                $conn = new PDO("mysql:host=localhost;Port=3306;dbname=teste", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexão realizada com sucesso!";
                return $conn;
            }
            catch(PDOException $erro) {
                echo "Conexão falhou! " . $erro->getMessage();
                return null;
            }
        }   
    }

?>