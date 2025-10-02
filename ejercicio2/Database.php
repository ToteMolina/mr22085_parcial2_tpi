<?php

class Database {
    private $host = "db";
    private $dbname = "estudiante";
    private $username = "root";
    private $password = "rootpass";
    public $conn;
    public function getConnection(){
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:80=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conectado";
        } catch (PDOException $exception) {
            echo "Error en la conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

?>