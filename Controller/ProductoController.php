<?php

//require "Model/Dao/ProductoDao.php";

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
        $directorio = "View/upload/img/productos/";
        if (!is_dir($directorio)) {
            mkdir($directorio);
            echo "directorio creado";
        }

        if (isset($_POST['btnGuardar'])) {
            $contador = count($_FILES['imgGaleria']['tmp_name']);
            for ($i = 0; $i < $contador; $i++) {
                $size = getimagesize($_FILES['imgGaleria']['tmp_name'][$i]);
                $ancho = $size[0];
                $alto = $size[1];
                $nuevoAncho = $ancho;
                $nuevoAlto = $alto;

                $rutaGuardarImagen = $directorio . "/" . $_FILES['imgGaleria']['name'][$i];
                $origen = imagecreatefromjpeg($_FILES['imgGaleria']['tmp_name'][$i]);
                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                imagejpeg($origen, $rutaGuardarImagen);
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

    public function Create2() {
//        $Nombre = $_REQUEST['txtNombre'];
//        $Descripcion = $_REQUEST['txtDescripcion'];
//        $Precio = $_REQUEST['txtPrecio'];
//        //$Imagen = $_REQUEST['txtImagen'];
//        $IdCategoria = 1;
        if (isset($_POST['btnGuardar'])) {
            $cont = count($_FILES['imgGaleria']['tmp_name']);
            echo $cont;
            foreach ($_FILES['imgGaleria']['tmp_name'] as $key => $value) {
                
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

    public function Prueba() {
        echo "desde php";
    }

}

//$operacion = $_REQUEST['operacion'];
//if ($operacion == "Create") {
//    $objProductoController = new ProductoController();
//    $objProductoController->Prueba();
//}

