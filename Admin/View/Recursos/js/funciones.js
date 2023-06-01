function AbrirUrl(url,contenedor,IdProducto){     
    $.get(url,{IdProducto:IdProducto},function(data){
        $("#"+contenedor).html(data);
    });
     
}
