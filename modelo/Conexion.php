<?php

class Conexion {

// Definicion de atributos
    private $host;
    private $user;
    private $password;
    private $database;
    private $conn;

    public function __construct() {
//Constructor
        require_once "Configuracion.php";
        $this->host = HOST;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->database = DATABASE;
    }

    public function CreateConnection() {
// Metodo que crea y retorna la conexion a la BD.
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->conn->connect_errno) {
            die("Error al conectarse a MySQL: (" . $this->conn->connect_errno . ") " . $this->conn->connect_error);
        }
    }

    public function CloseConnection() {
//Metodo que cierra la conexion a la BD
        $this->conn->close();
    }

    public function ExecuteQuery($sql) {
        /* Metodo que ejecuta un query sql
          Retorna un resultado si es un SELECT */
        $result = $this->conn->query($sql);
        return $result;
    }

    public function GetCountAffectedRows() {
        /* Metodo que retorna la cantidad de filas
          afectadas con el ultimo query realizado. */
        return $this->conn->affected_rows;
    }

    public function GetRows($result) {
        /* Metodo que retorna la ultima fila
          de un resultado en forma de arreglo. */
        return $result->fetch_row();
    }

    public function SetFreeResult($result) {
//Metodo que libera el resultado del query.
        $result->free_result();
    }

    public function ConsultaUsuario($tabla, $condition) {
        $conex = new Conexion();
        $conex->CreateConnection();
        $query = "SELECT * FROM " . $tabla . " WHERE " . $condition;
        $result = $conex->ExecuteQuery($query);        
        if ($result->num_rows > 0) { //si la variable tiene al menos 1 fila entonces seguimos con el codigo
           $res=$result->fetch_assoc();
           $conex->CloseConnection();
           return $res;
        }         
        $conex->CloseConnection();
    }

    public function Insert($tabla, $campos, $valores) {
        $conex = new Conexion();
        $conex->CreateConnection();
        $query = "INSERT INTO " . $tabla . "(" . $campos . ") VALUES (" . $valores . ");";
        /* @var $result type */
        $resultado = $conex->ExecuteQuery($query);
        $conex->CloseConnection();
        return $resultado;
    }

}

?>
