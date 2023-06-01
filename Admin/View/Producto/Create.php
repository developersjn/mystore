<?php
//require 'Controller/ProductoController.php';
//$objProductoController = new ProductoController();
//$objProductoController->Create();
?>
<div class="col-md-12">
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                        <img src="images/logo-full.png" alt="">
                    </div>
                    <h4 class="text-center mb-4">Registrar Producto</h4>
                    <form class="row g-3" method="post" enctype="multipart/form-data" id="my_dropzone">
                        <div class="col-md-6">
                            <label for="txtNombre" class="form-label mb-1">Nombre</label>
                            <input type="text" class="form-control" name="txtNombre" id="txtNombre">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label mb-1">Precio</label>
                            <input type="number" class="form-control" name="txtPrecio" id="txtPrecio">
                        </div>
                        <div class="col-12">
                            <label for="txtDescripcion" class="form-label mb-1">Descripcion</label>
                            <textarea type="textarea" class="form-control" name="txtDescripcion" id="txtDescripcion" placeholder=""></textarea>
                        </div>
                        <div class="col-md-6 custom-input-file">
                            <label for="formFileMultiple" class="form-label mb-1">Imagen Portada</label>
                            <input class="form-control input-file" type="file" name="imgPortada" id="imgPortada" acept="image/*">
                        </div>
                        <div class="col-md-6 custom-input-file">
                            <label for="formFileMultiple" class="form-label mb-1">Galeria</label>
                            <input class="form-control input-file" type="file" name="imgGaleria[]" id="imgGaleria" multiple acept="image/*">
                        </div>


                        <div class="text-center col-md-12">
                            <br>
                            <button type="button" id="" onclick="javascript:SubirImagen();" name="btnGuardar" class="btn btn-primary">Guardar</button>
                            <button type="button" id="" onclick="" name="btnGuardar" class="btn btn-primary">Cancelar</button>
                            <button type="button" id="" onclick="" name="btnGuardar" class="btn btn-primary">Limpiar</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>                    
    </div>                
</div>            



<script>
    function SubirImagen() {
        var leng = document.getElementById("imgGaleria").files.length;
        var nombreProducto = $('#txtNombre').val();
        var precioProducto = $('#txtPrecio').val();
        var DescripcionProducto = $('#txtDescripcion').val();
        var imgPortada = $("#imgPortada")[0].files[0];
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
        listaImg.append("file", imgPortada);
        console.log(imgPortada);
        var url = "Controller/ProductoController.php";
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