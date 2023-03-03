
var arrayFile=[];
$(".multimediaFisica").dropzone({
    url: '/',
    autoProcessQueue: false,
    addRemoveLinks: true,
    aceeptedFile:"image/jpeg, image/png",
    maxFilesize:2,
    maxFiles:3,
    uploadMultiple: true,
    parallelUploads: 50,
    init: function(){
        //funcion para subir imagenes
        this.on("addedFile",function(file){
            arrayFile.push(file);
            console.log("Array: ",arrayFile);
        });
         this.on("removedFile",function(file){
            var index=arrayFile.indexOf(file);
            arrayFile.splice(index,1);
            console.log("Array: ",arrayFile);
            
        });
        
            
        
    }
});