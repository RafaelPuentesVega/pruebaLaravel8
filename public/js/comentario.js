function saveComentario() {
    let contenido = $("#comentario_contenido").val();
    if(contenido.length < 1 ){
    toastr["warning"]("<h6> Digitar contenido</h6>", "Error");
    }


   $.ajax({
       url: '../ComentarioSave',
       data: {
           idPost:idPost,
           contenido : contenido,
       },
       type: 'POST',
       dataType: 'json',
       success: function (json) {
           if (json.mensaje === "save") {
               toastr["success"]("<h6> Se Registro Correctamente </h6>");
               setTimeout(function(){
            }, 2000);
               location.reload();
           }
       },
       error: function (xhr, status) {
           alert('Disculpe, existió un problema en el servidor - Recargue la Pagina');
       },
       complete: function (xhr, status) {
       }
   });

}
