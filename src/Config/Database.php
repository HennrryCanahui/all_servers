<?php
namespace App\Config;

use PDO;
use PDOException;

class Database {
    public $conn;

    public function getConnection() {
        $this->conn = null;

        // Intentamos leer las variables de Railway, si no existen, usamos las locales
        $host     = getenv('DB_HOST') ?: "localhost";
        $db_name  = getenv('DB_DATABASE') ?: "investigacion_servidores";
        $username = getenv('DB_USERNAME') ?: "root";
        $password = getenv('DB_PASSWORD') ?: "Enty";
        $port     = getenv('DB_PORT') ?: "3306";

        try {
            // Añadimos el puerto a la cadena DSN, ya que Railway usa puertos dinámicos
            $dsn = "mysql:host=" . $host . ";port=" . $port . ";dbname=" . $db_name;
            
            $this->conn = new PDO($dsn, $username, $password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch(PDOException $exception) {
            // En producción es mejor no mostrar detalles del error, pero para tu proyecto está bien
            echo "Error de conexión: " . $exception->getMessage();
        }
        
        return $this->conn;
    }
}