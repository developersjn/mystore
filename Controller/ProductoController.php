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

    public function CreateSinAjax() {
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

    public function CreateAjax() {
        
        $objProductoDao=new ProductoDao();
                

        $nombreProducto = $_POST["txtNombreProducto"];
        $precioProducto = $_POST["txtPrecioProducto"];
        $descripcionProducto = $_POST["txtDescripcionProducto"];
        $idCategoria=1;

        $tmp_name_img_principal = $_FILES['file']['tmp_name'];
        $type_img_principal = $_FILES['file']['type'];
        $name_img_principal = $_FILES['file']['name'];
        $directorio = "../View/upload/img/productos";
        $rutaImgPrinciapl = $this->EscribirImagenDirectorio($tmp_name_img_principal, $type_img_principal, $name_img_principal, $directorio);
        $objProducto=new Producto();
        $objProducto->setNombre($nombreProducto);
        $objProducto->setDescripcion($descripcionProducto);
        $objProducto->setPrecio($precioProducto);
        $objProducto->setIdCategoria($idCategoria);
        $objProducto->setImagenPortada($rutaImgPrinciapl);        
        $objProductoDao->Create($objProducto);
        
        
        $tmp_name_sec = $_FILES['image_extra']['tmp_name'];
        for ($i = 0; $i < count($tmp_name_sec); $i++) {
            $tmp_name = $_FILES['image_extra']['tmp_name'][$i];
            $type = $_FILES['image_extra']['type'][$i];
            $name = $_FILES['image_extra']['name'][$i];
            $rutaImgGaleria=$this->EscribirImagenDirectorio($tmp_name, $type, $name, $directorio);
        
            
            
        }
        
    }

    public function EscribirImagenDirectorio($tmp_name, $type, $name, $directorio) {
        $size = getimagesize($tmp_name);
        $ancho = $size[0];
        $alto = $size[1];
        $nuevoAncho = $ancho;
        $nuevoAlto = $alto;

        if ($type == "image/jpeg") {
            $rutaImagenGuardada = $directorio . "/" . $name;
            $origen = imagecreatefromjpeg($tmp_name);
            $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
            imagejpeg($destino, $rutaImagenGuardada);
        } else if ($type == "image/png") {
            $rutaImagenGuardada = $directorio . "/" . $name;
            $origen = imagecreatefrompng($tmp_name);
            $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
            imagealphablending($destino, FALSE);
            imagesavealpha($destino, TRUE);
            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
            imagepng($destino, $rutaImagenGuardada);
        } else {
            echo "no se permite este tipo de imagen";
            return;
        }
        return $rutaImagenGuardada;
    }

    public function EscribirMultiImagenesDirectorio($tmp_name, $type, $name, $directorio) {

        $contador = count($tmp_name);
        for ($i = 0; $i < $contador; $i++) {
            $size = getimagesize($tmp_name[$i]);
            $ancho = $size[0];
            $alto = $size[1];
            $nuevoAncho = $ancho;
            $nuevoAlto = $alto;

            if ($type[$i] == "image/jpeg") {
                $rutaImagenGuardada = $directorio . "/" . $name[$i];
                $origen = imagecreatefromjpeg($tmp_name[$i]);
                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                imagejpeg($destino, $rutaImagenGuardada);
            } else if ($type[$i] == "image/png") {
                $rutaImagenGuardada = $directorio . "/" . $name[$i];
                $origen = imagecreatefrompng($tmp_name[$i]);
                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                imagealphablending($destino, FALSE);
                imagesavealpha($destino, TRUE);
                imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                imagepng($destino, $rutaImagenGuardada);
            } else {
                echo "no se permite este tipo de imagen";
                return;
            }
        }
    }

}

$operacion = $_POST["operacion"];
if ($operacion == "Create") {
    $objProductoController = new ProductoController();
    $objProductoController->Prueba();
}



