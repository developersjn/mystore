<?php

//require "../Model/ConexionDB/Conexion.php";
require "Model/Entity/Galeria.php";

class GaleriaDao {

    //put your code here
    private static $con;

    function __construct() {
        self::$con = Conexion::saberEstado();
    }


}


