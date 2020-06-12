@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>LISTA DE PERFIS</center>
        </h3>
    </div>
    <div class="card-body">
        
        <div class="table-responsive p-0">
            <table class="table table-head-fixed fonte18">
                <thead class="center">
                <tr>
                    <th>ID</th>
                    <th>Nome Perfil</th>
                    <th>Instrumentos</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td class="center">{{$role->id}}</td>
                        <td class="center">{{$role->name}}</td>
                        <td class="center">{{str_replace(['[',']','"'], '', json_encode($role->instrumentos))}}</td>
                        <td class="center">

                            <div class="btn-group" role="group" aria-label="Basic example">
                            <form method="post" action="/role/edit">
                                {!! csrf_field() !!}
                                <input hidden name="role_id" value="{{$role->id}}">
                                <button type="submit" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i> Editar</button>
                            </form>
                            <form method="post" action="/role/remove">
                                {!! csrf_field() !!}
                                <input hidden name="role_id" value="{{$role->id}}">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Remover</button>
                            </form>
                            </div>
                           
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="card-footer clearfix">
                {{$roles->render()}}
            </div>

        </div>
    
        <a href="/role/create" class="btn btn-primary fonte18">Criar novo perfil</a>
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
