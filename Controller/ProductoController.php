<?php

require "Model/Dao/ProductoDao.php";
require "Model/Dao/GaleriaDao.php";

class ProductoController {

    public function FindAll() {
        $objProductoDao = new ProductoDao();
        return $objProductoDao->FindAll();
    }

    public function Find() {
        if (isset($_GET["ruta"])) {
            $url = explode("/", $_GET["ruta"]);
            if ($url[0] == "producto") {
                $IdProducto = $url[1];
                $objProducto = new Producto();
                $objProducto->setIdProducto($IdProducto);
                $objProductoDao = new ProductoDao();
                return $objProductoDao->Find($objProducto);
            }
        }
    }

}
