<?php
require 'Controller/ProductoController.php';


    $objProductoController = new ProductoController();
    $objProductoController->Create();

?>

<div class="container">
    <form class="row g-3" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="txtNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="txtNombre" id="txtNombre">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Precio</label>
            <input type="text" class="form-control" name="txtPrecio" id="txtPrecio">
        </div>
        <div class="col-12">
            <label for="txtDescripcion" class="form-label">Descripcion</label>
            <textarea type="textarea" class="form-control" name="txtDescripcion" id="txtDescripcion" placeholder=""></textarea>
        </div>
        <div class="col-md-6">
            <label for="formFileMultiple" class="form-label">Imagen Portada</label>
            <input class="form-control" type="file" name="imgPortada">
        </div>
        <div class="col-md-6">
            <label for="formFileMultiple" class="form-label">Galeria</label>
            <input class="form-control" type="file" name="imgGaleria[]" multiple>
        </div>

        <div class="col-12">
            <button type="submit" name="btnGuardar" class="btn btn-primary">Ingresar</button>
        </div>
    </form>
</div>