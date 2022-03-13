<!-- Modal editar -->

<div class="modal fade " id="md-editarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="card "  >
                <div class="header" style="background-color: #06419f">
                    <h3 class="title text-center" style="font-size: 20px; color: #ffffff ; padding-bottom :8px;"><strong>EDITAR CATEGORIA</strong></h3>
                </div>
            </div>
            <div class="modal-body">

                <div class="card">
                    <div class="row">

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>&nbsp; Codigo</label>
                                <input disabled type="text"  class="form-control" name="Modalcodigo" id="Modalcodigo"  required autocomplete="off" style="text-transform: uppercase">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>&nbsp; Nombre</label>
                                <input type="text"  class="form-control" name="Modalnombre" id="Modalnombre"  required autocomplete="off" style="text-transform: uppercase">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <button style="float: right ; margin-top: 27%" type="button" class="btn btn-success btn-fill" onclick="updateCategoria()" >Editar</button>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <button style="float: right; margin-top: 27%" class="btn btn-danger btn-fill " onclick="CloseModal()">Cancelar</button>
                            </div>
                        </div>

                    </div>


                </div>


                </div>
            </div>


        </div>
    </div>
</div>
