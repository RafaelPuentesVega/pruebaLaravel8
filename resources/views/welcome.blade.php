@extends('layout.plantilla')
@section('content')

<br><br><br><br><br><br><br><br><br>
<div class="" style="background-image: url('./img/background.jpg') ">
    <div class="" style="  text-align: center" >

        <a href="{{ url('api/CategoriaHome') }}">
            <button style="margin-right: 10%" class="btn btn-info btn-lg">CATEGORIA</button>
        </a>

        <a href="{{ url('api/CategoriaHome') }}">
            <button class="btn btn-info btn-lg">POST</button>
        </a>
    </div>
</div >
 @endsection
