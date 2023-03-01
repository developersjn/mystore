<?php

require "Model/Dao/ProductoDao.php";

class ProductoController {

    public function FindAll() {
        $objProductoDao = new ProductoDao();
        return $objProductoDao->FindAll();
    }

    public function Find() {
        $IdProducto = $_REQUEST['txtIdProducto'];
        $objProducto = new Producto();
        $objProducto->setIdProducto($IdProducto);
        $objProductoDao = new ProductoDao();
        return $objProductoDao->Find($objProducto);
    }

    public function Create() {
//        $Nombre = $_REQUEST['txtNombre'];
//        $Descripcion = $_REQUEST['txtDescripcion'];
//        $Precio = $_REQUEST['txtPrecio'];
//        //$Imagen = $_REQUEST['txtImagen'];
//        $IdCategoria = 1;
        if (isset($_POST['btnGuardar'])) {
            foreach ($_FILES['imgGaleria']['tmp_name'] as $key => $value) {
                echo $_FILES['imgGaleria']['type'][$key];
            }
        }

        //var_dump($_FILES['imgGaleria']['tmp_name']);
//        $objProducto = new Producto();
//        $objProducto->setNombre($Nombre);
//        $objProducto->setDescripcion($Descripcion);
//        $objProducto->setPrecio($Precio);
//        $objProducto->setImagen($Imagen);
//        $objProducto->setIdCategoria($IdCategoria);
//
//        $objProductoDao = new ProductoDao();
//        return $objProductoDao->Create($objProducto);
    }

    public function Update() {
        $IdProducto = $_REQUEST['txtIdProducto'];
        $Nombre = $_REQUEST['txtNombre'];
        $Descripcion = $_REQUEST['txtDescripcion'];
        $Precio = $_REQUEST['txtPrecio'];
        $Imagen = $_REQUEST['txtImagen'];
        $IdCategoria = $_REQUEST['txtIdCategoria'];

        $objProducto = new Producto();
        $objProducto->setIdProducto($IdProducto);
        $objProducto->setNombre($Nombre);
        $objProducto->setDescripcion($Descripcion);
        $objProducto->setPrecio($Precio);
        $objProducto->setImagen($Imagen);
        $objProducto->setIdCategoria($IdCategoria);

        $objProductoDao = new ProductoDao();
        return $objProductoDao->Update($objProducto);
    }

    public function Delete() {
        $IdProducto = $_REQUEST['txtIdProducto'];
        $objProducto = new Producto();
        $objProducto->setIdProducto($IdProducto);
        $objProductoDao = new ProductoDao();
        return $objProductoDao->Delete($objProducto);
    }

}
