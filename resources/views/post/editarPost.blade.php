@extends('layout.plantilla')
@section('content')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.css" rel="stylesheet" media="all">
<title>Categoria</title>
@endsection
    <div class="content">


        <div class="main-panel">

            <div class="content">


                <div class="container-fluid">

                    <div class="row ">
                        <div class="col-md-15">


                            <div class="card ">


                                <div class="card ">
                                    <div class="header" style="background-color: #06419f">

                                        <h3 class="title text-center pull-left"
                                            style="color: #ffffff ; padding-bottom :8px;"><strong>POST</strong></h3>

                                    </div>
                                </div>

                                <div class="content">
                                    <br>
                                    <form action="{{ route('api/PostSave') }}" method="POST">
                                        @csrf
                                        <div class="row" required>


                                            <div class="col-md-3" style="margin-left: 2%">
                                                <div class="form-group">
                                                    <label>Titulo</label>
                                                    <input type="text" class="form-control" name="post_titulo"
                                                        id="categoria_nombre" placeholder="Titulo post" required
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>contenido</label>
                                                    <input type="text" class="form-control" name="post_contenido"
                                                        id="categoria_nombre" placeholder="contenido post" required
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Categoria</label>
                                                    <select class="js-example-basic js-states form-control" required name="post_categoria" id="post_categoria" >
                                                        <option value="">Seleccionar..</option>
                                                        @foreach ($categoria as $item)
                                                        <option value="{{ $item->id }}">{{$item->nombre}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="margin-left: 3%">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <br>
                                                        <button title="GUARDAR" style="text-align: center" type="submit"
                                                            class="btn btn-success btn-fill  btn-round pull-right "
                                                            id="btnSavePost">Guardar
                                                        </button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="table-responsive-xl">
                    <table id="clients" class="table table-striped table-hover" style="webkit-font-smoothing: antialiased;
                            font-family: Roboto,Helvetica Neue,Arial,sans-serif;">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-center" style="color:#16172C"><strong>Titulo</strong></th>
                                <th scope="col" class="text-center" style="color:#16172C"><strong>Contenido</strong></th>
                                <th scope="col" class="text-center" style="color:#16172C"><strong>Categoria</strong>
                                    <th scope="col" class="text-center" style="color:#16172C"><strong></strong>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($postArray as $itemPostArray)
                                <tr style="font-size: 12px;height: 50px">


                                    <td width="10%" class="text-center"><strong>{{ $itemPostArray['titulo'] }}</strong></td>
                                    <td width="60%" class="text-center"><strong>{{ $itemPostArray['contenido'] }}</strong></td>
                                    <td width="20%" class="text-center"><strong>{{ $itemPostArray['nombre'] }}</strong>
                                    </td>
                                    <td width="10%">

                                        <button style="border: none; outline:none; text-decoration: none; margin: 0%"
                                            type="submit" title="Editar" data-toggle="tooltip" data-placement="left"
                                            class="btn btn-info btn-fill  pull-right " id="editCategoria"
                                            onclick="consultarCategoria()">
                                            <i style="color: #ffffff; font-size: 20px; margin: -5px"
                                                class="bi bi-pencil box-info pull-left"></i>
                                        </button>

                                        <form action="" method="POST"
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
    <script src="../js/categoria.js"></script>
@endsection
@endsection
