@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>CRIAÇÃO DE PERFIL</center>
        </h3>
    </div>
    <div class="card-body">
        
    <form name="formulario" role="form" method="post" action="/role/create">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Nome do Perfil</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descrição">
        </div>
        <label>Instrumentos</label>
        <div class="form-group">
            @for($i = 1; $i <= 20; $i++)
            <div class="form-check form-check-inline">
                <input class="form-check-input" style="cursor: pointer; width: 20px; height: 20px" type="checkbox" value="{{$i}}" id="instrumento" name="instrumentos[]">
                <label style="font-size: 18px; margin-left: 1%;" class="form-check-label" for="instrumento">{{$i}}</label>
            </div>
            @endfor
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>    
    
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <!-- <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>
        <!-- /.card-body --

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form> -->
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
