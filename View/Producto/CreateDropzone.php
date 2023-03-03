<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<form action="/" class="">
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
    <br>
    <div class="col-md-12 multimediaFisica dropzone needsclick dz-clickable ">
        <div class="dz-message needsclick">
            Arrastrar imagenes
        </div>           
    </div>

    <div class="col-12">
        <button type="button" id="submit-all" name="btnGuardar" class="btn btn-primary">Ingresar</button>
    </div>
</form>

<script src="View/js/jquery.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script src="View/js/multiple_1.js"></script>