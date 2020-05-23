@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Lista de Usuários</h3>
    </div>
    <div class="card-body">
        
    <div class="table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data Cadastro</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-check">
                            </i>
                            Autorizar
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Bloquear
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    
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
    <style>
        p {
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
        }
        </style>
@stop

@section('js')
@stop
