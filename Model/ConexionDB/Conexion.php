<?php

require 'Parametros.php';
class Conexion{
    private static $objConexion = null;
    private $con;

    private function __construct() {
        $this->con = mysqli_connect(HOST, USER, PASS, DB) or die("Error en la cadena Conexion" . mysql_error());
        if ($this->con->connect_errno) {
            print'Error al Conectar con la BD' . $this->con->connect_errno;
        } else {
            // print 'Conexion Exitosa...';
        }
        return $this->con;
    }

    public static function saberEstado() {
        if (self::$objConexion == null) {
            self::$objConexion = new Conexion();
        }
        return self::$objConexion;
    }

    public function getCon() {
        return $this->con;
    }

    public function cerrarConexion() {
        self::$objConexion = null;
    }
}
