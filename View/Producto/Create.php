<?php
//require 'Controller/ProductoController.php';
//$objProductoController = new ProductoController();
//$objProductoController->Create();
?>

<div class="container">
    <form class="row g-3" method="post" enctype="multipart/form-data" id="my_dropzone">
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
            <input class="form-control" type="file" name="imgPortada" id="imgPortada">
        </div>
        <div class="col-md-6">
            <label for="formFileMultiple" class="form-label">Galeria</label>
            <input class="form-control" type="file" name="imgGaleria[]" id="imgGaleria" multiple acept="image/*">
        </div>
        <output id="miniatura"></output>

        <div class="col-12">
            <button type="button" id="" onclick="javascript:SubirImagen();" name="btnGuardar" class="btn btn-primary">Ingresar</button>
        </div>
    </form>
</div>
<script>
    function SubirImagen() {
        var leng = document.getElementById("imgGaleria").files.length;
        var nombreProducto = $('#txtNombre').val();
        var precioProducto = $('#txtPrecio').val();
        var DescripcionProducto = $('#txtDescripcion').val();
        var imgPortada=$("#imgPortada")[0].files[0];
        listaImg = new FormData();

        for (i = 0; i < leng; i++) {
            img = document.getElementById("imgGaleria").files[i];
            if (!!img.type.match(/image.*/)) {
                if (window.FileReader) {
                    img_leida = new FileReader();
                    //img_leida=readAsDataURL(img);
                }
                listaImg.append("image_extra[]", img);
            }
        }
        listaImg.append("txtNombreProducto", nombreProducto);
        listaImg.append("txtPrecioProducto", precioProducto);
        listaImg.append("txtDescripcionProducto", DescripcionProducto);
        listaImg.append("operacion", "Create");
        listaImg.append("file",imgPortada );
        console.log(imgPortada);
         var url="Controller/ProductoController.php";
         //var url2="Controller/PruebaImgAjax.php";

        $.ajax({
            url: url,
            type: "POST",
            data: listaImg,
            cache: false,
            contentType: false,
            processData: false,
            success: function (e) {
                alert("exito" + e);
            },
            error: function () {
                alert("error");
            }
        });
    }
</script>