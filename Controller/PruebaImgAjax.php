<?php

//$directorio = "../View/upload/img/productos/";
//foreach ($_FILES['image_extra']['name'] as $key => $value) {
//    
//    $ext= explode(".", $_FILES['image_extra']['name'][$key]);
//    $renombrar= sha1($_FILES['image_extra']['name'][$key]).time();
//    $nombre_final=$renombrar.".".$ext[1];
//    move_uploaded_file($_FILES['image_extra']['tmp_name'][$key], $directorio.$nombre_final);
//    
//}

$directorio = "../View/upload/img/productos/";

$nombreProducto=$_POST["txtNombreProducto"];
$precioProducto=$_POST["txtPrecioProducto"];
$descripcionProducto=$_POST["txtDescripcionProducto"];
$operacion=$_POST["operacion"];

echo $nombreProducto." - ".$precioProducto." - ".$descripcionProducto." - ".$operacion;
$contador = count($_FILES['image_extra']['tmp_name']);
for ($i = 0; $i < $contador; $i++) {
    $size = getimagesize($_FILES['image_extra']['tmp_name'][$i]);
    $ancho = $size[0];
    $alto = $size[1];
    $nuevoAncho = $ancho;
    $nuevoAlto = $alto;

    $rutaGuardarImagen = $directorio . "/" . $_FILES['image_extra']['name'][$i];
    $origen = imagecreatefromjpeg($_FILES['image_extra']['tmp_name'][$i]);
    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
    imagejpeg($origen, $rutaGuardarImagen,80);
}


