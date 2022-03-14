function updatePost() {
    let contenido = $("#post_contenido").val();
    if(contenido.length < 1 ){
    toastr["warning"]("<h6> Digitar contenido Post</h6>", "Error");
    }


   $.ajax({
       url: '../UpdatePost',
       data: {
           idPost:idPost,
           contenido : contenido,
       },
       type: 'POST',
       dataType: 'json',
       success: function (json) {
           if (json.mensaje === "update") {
               toastr["info"]("<h6> Se Actualizo Correctamente </h6>");
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
