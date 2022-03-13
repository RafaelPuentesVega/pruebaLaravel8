
function CloseModal() {
    $('#md-editarCategoria').modal('hide');
}
function showModal() {

    $('#md-editarCategoria').modal('show'); // abrir
}
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function consultarCategoria(id) {


    $.ajax({
        url: 'consultarCategoria',
        data: {
            id:id
        },
        type: 'POST',
        dataType: 'json',
        success: function (json) {
            if (json.mensaje === "ok") {
                showModal();
                $('#Modalcodigo').val(json.data[0].id);
                $('#Modalnombre').val(json.data[0].nombre);

            }
        },
        error: function (xhr, status) {
            alert('Disculpe, existió un problema en el servidor - Recargue la Pagina');
        },
        complete: function (xhr, status) {
        }
    });

}
function updateCategoria() {

     let id = $("#Modalcodigo").val();
     let nombre = $("#Modalnombre").val();
     if(nombre.length < 1 ){
     toastr["warning"]("<h6> Digitar nombre</h6>", "Error");
     }
     if(id.length < 1 ){
        toastr["ERROR"]("<h6> ERROR</h6>", "Error");
        }

    $.ajax({
        url: 'updateCategoria',
        data: {
            id:id,
            nombre : nombre,
        },
        type: 'POST',
        dataType: 'json',
        success: function (json) {
            if (json.mensaje === "update") {
                CloseModal();
                toastr["success"]("<h6> Se Actualizo correctamente </h6>");
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
