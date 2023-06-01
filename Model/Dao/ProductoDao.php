<?php

require "Model/ConexionDB/Conexion.php";
require "Model/Entity/Producto.php";

class ProductoDao {

    private static $con;

    function __construct() {
        self::$con = Conexion::saberEstado();
    }

    public function Find(Producto $objProducto) {
        $find = "call SP_FindProduct(?)";
        $idProducto=$objProducto->getIdProducto();
        $stmt = self::$con->getCon()->prepare($find);
        $stmt->bind_param('s', $idProducto);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $objProducto->setIdProducto($row['IdProducto']);
            $objProducto->setNombre($row['Nombre']);
            $objProducto->setDescripcion($row['Descripcion']);
            $objProducto->setPrecio($row['Precio']);
            $objProducto->setImagenPortada($row['ImagenPortada']);
            $objProducto->setIdCategoria($row['IdCategoria']);
        }
        $stmt->close();
        return $objProducto;
    }

    public function FindAll() {
        $SQL_READALL = "call SP_FindAllProduct()";
        $result = self::$con->getCon()->query($SQL_READALL);
        self::$con->cerrarConexion();
        $listaProducto = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $objProducto = new Producto();
            $objProducto->setIdProducto($row['IdProducto']);
            $objProducto->setNombre($row['Nombre']);
            $objProducto->setDescripcion($row['Descripcion']);
            $objProducto->setPrecio($row['Precio']);
            $objProducto->setImagenPortada($row['ImagenPortada']);
            $objProducto->setIdCategoria($row['IdCategoria']);
            $listaProducto[] = $objProducto;
        }

        return $listaProducto;
    }

}
