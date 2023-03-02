jQuery(document).ready(function ($) {
    alert("se inicio");
});
var multiple = {
    init: function () {
        Dropzone.prototype.defaultOptions.dictDefaultMessage = "Arrastra los archivos aquí para subirlos";
        Dropzone.prototype.defaultOptions.dictFallbackMessage = "Su navegador no admite archivos subidos arrastrandolos al elemento.";
        Dropzone.prototype.defaultOptions.dictFallbackText = "Por favor, utilice el formulario de reserva de abajo para cargar sus archivos como en los viejos tiempos.";
        Dropzone.prototype.defaultOptions.dictFileTooBig = "El archivo es demasiado grande ({{filesize}} MiB). Tamaño máximo del archivo: {{maxFilesize}} MiB.";
        Dropzone.prototype.defaultOptions.dictInvalidFileType = "No puede cargar archivos de este tipo.";
        Dropzone.prototype.defaultOptions.dictResponseError = "El servidor respondió con el código {{statusCode}}.";
        Dropzone.prototype.defaultOptions.dictCancelUpload = "Cancelar subida";
        Dropzone.prototype.defaultOptions.dictCancelUploadConfirmation = "¿Seguro que quieres cancelar esta subida?";
        Dropzone.prototype.defaultOptions.dictRemoveFile = "Remover archivo";
        Dropzone.prototype.defaultOptions.dictMaxFilesExceeded = "No puedes subir más archivos.";

        Dropzone.options.myDropzone = {
            url: url + 'puntosatencion/upload',
            autoProcessQueue: false,
            addRemoveLinks: true,
            uploadMultiple: true,
            parallelUploads: 50,
            init: function () {
                var submitButton = document.querySelector("#submit-all")
                myDropzone = this;
                submitButton.addEventListener("click", function () {

                    myDropzone.processQueue();
                });

                var cancelButton = document.querySelector("#btnCancelar")
                myDropzone = this;


                cancelButton.addEventListener("click", function () {

                    myDropzone.removeAllFiles(true);
                });

                this.on("complete", function (data, response) {
                    alert("Se subio ");

                    if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                        var _this = this;
                        _this.removeAllFiles();
                    }
                });

                this.on("addedfile", function (file) {
                    $(".dz-preview input").remove();
                    $(".dz-preview").append("<input type='text' name='txtDescripcion[]' name='txtUrl[]' placeholder='Descripcion' required/>");
                });

                this.on("completemultiple", function () {
                    alert("todo se subio completamente");
                });

            }
        };

    }
}