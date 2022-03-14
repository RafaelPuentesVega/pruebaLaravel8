@extends('layout.plantilla')
@section('content')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.css" rel="stylesheet" media="all">
    <title>Categoria</title>
@endsection
<div class="content">


    <div class="main-panel">

        <div class="content">
            <div class="card ">
                <div class="header" style="background-color: #06419f">

                    <h3 class="title text-center pull-left" style="color: #ffffff ; padding-bottom :8px;"><strong>POST N°
                            {{ $postEdit->id }}</strong></h3>

                </div>
            </div>
            <a href="{{ url('/') }}">
                <button class="btn btn-dark btn-fill btn-sm">VOLVER</button>
            </a>

            <div class="row ">
                <div class="col-md-15">


                    <div class="card ">


                        <div class="content">
                            <br>
                            <div class="row" required>


                                <div class="col-md-3" style="margin-left: 2%">
                                    <div class="form-group">
                                        <label>Titulo</label>
                                        <input disabled value="{{ $postEdit->titulo }}" type="text"
                                            class="form-control" name="post_titulo" id="categoria_nombre" required
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>contenido</label>
                                        <input value="{{ $postEdit->contenido }}" type="text" class="form-control"
                                            name="post_contenido" id="post_contenido" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Categoria</label>
                                        <input disabled value="{{ $postEdit->nombre }}" type="text"
                                            class="form-control" name="post_categoria" id="post_categoria" required
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-1" style="margin-left: 3%">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <br>
                                            <button title="GUARDAR" style="text-align: center" type="submit"
                                                class="btn btn-info btn-fill  btn-round pull-right " onclick="updatePost()"
                                                id="btnSavePost">Editar
                                            </button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <br>

            <h3 style="text-align: center">COMENTARIOS</h3>
            <div class="content">
                <br>
                <div class="row" required>


                    <div class="col-md-9" style="margin-left: 2%">
                        <div class="form-group">
                            <label>CONTENIDO</label>
                            <input type="text" class="form-control" name="comentario_contenido"
                                id="comentario_contenido" placeholder="Comentario" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-2" style="margin-left: 3%">
                        <div class="col-md-2">
                            <div class="form-group">
                                <br>
                                <button title="GUARDAR" style="text-align: center" type="submit"
                                    class="btn btn-success btn-fill  btn-round pull-right "
                                    id="btnSaveComentario" onclick="saveComentario()">Guardar
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive-xl">
                <table id="clients" class="table table-striped table-hover" style="webkit-font-smoothing: antialiased;
                            font-family: Roboto,Helvetica Neue,Arial,sans-serif;">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="text-center" style="color:#16172C"><strong>Contenido</strong></th>
                            <th scope="col" class="text-center" style="color:#16172C"><strong>Fecha</strong></th>
                            <th scope="col" class="text-center" style="color:#16172C"><strong></strong>
                            </th>

                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($comentario as $comentarios)
                        <tr style="font-size: 12px;height: 50px">


                            <td width="50%" class="text-center"><strong>{{ $comentarios['contenido'] }}</strong></td>
                            <td width="50%" class="text-center"><strong>{{ $comentarios['created_at'] }}</strong></td>

                            <td width="10%">


                                <form action="{{ route('api/deleteComentario', $comentarios['id'] ) }}" method="POST"
                                    class="pull-left">
                                    @csrf
                                    <button style="border: none; outline:none; text-decoration: none; margin: 0%"
                                        type="submit" title="Eliminar" data-toggle="tooltip" data-placement="left"
                                        class="btn btn-danger btn-fill  pull-right " id="deleteCategoria">
                                        <i style="color: #ffffff; font-size: 20px; margin: -5px"
                                            class="bi bi-trash-fill box-info pull-left"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach




                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"></script>
    <script src="../../js/post.js"></script>
    <script src="../../js/comentario.js"></script>
    <script>
         idPost = "<?= json_encode($postEdit->id ) ?>";
         idPost = parseInt(idPost);

    </script>
@endsection
@endsection
