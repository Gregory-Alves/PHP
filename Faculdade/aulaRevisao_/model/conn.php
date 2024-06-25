<?php
class Conn {
    private static $conn;
    private static $host = "localhost";
    private static $dbname = "teste";
    private static $usuario = "root";
    private static $senha = "fukuda";

    public static function getConn(){
        try {
            if(!isset(self::$conn)){
                self::$conn = new PDO("mysql:host=". Conn::$host . ";dbname=". Conn::$dbname, Conn::$usuario, Conn::$senha);
            }
            return self::$conn;
        } catch (PDOException $e) {
            die("Erro ao conectar no banco de dados: " . $e->getMessage());
        }
    }
}
?>