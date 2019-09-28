<?php
#IMPORTAR LAS VARIABLES DE CONEXION
require_once 'Config.php';

#CLASE PARA LA CONEXION DE BASE DE DATOS
class Conection{

    #VARIABLES DE CONEXION
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $mysqli;

    #CONSTRUCTOR DE LA CLASE
    public function __construct(){
        $this->host = HOST;
        $this->dbname = DBNAME;
        $this->user = USER;
        $this->password = PASSWORD;
    }

    #METODO PARA CONECTAR A LA BASE DE DATOS
    public function db_connect(){

        $this->mysqli = new mysqli($this->host, $this->user, $this->password,$this->dbname);
        if ($this->mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
        }

        return $this->mysqli;
    }

    #METODO PARA CERRAR LA CONEXION DE LA BASE DE DATOS
    public function db_close(){
        mysqli_close($this->mysqli);
    }
}
