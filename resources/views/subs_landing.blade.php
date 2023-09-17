@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>Inscrições Landing Page</center>
        </h3>
    </div>
    <div class="card-body">
        
        <div class="col-md-12">

            {{-- <form class="form-inline" action="/user/report">
                <label for="company">Selecione uma empresa: </label>
                <div class="form-group mx-2">
                    <select class="form-control" id="company" name="company_id">
                        <option>Todas</option>
                        @foreach($companies as $comp)
                        <option value="{{$comp->id}}" @if(isset($company) && $comp->id == $company->id) selected @endif>{{$comp->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form> --}}

        </div>

        <br>
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover fonte18">
                <thead class="bg-primary">
                <tr>
                    <th style="vertical-align: middle">Nome</th>
                    <th style="vertical-align: middle">Email</th>
                    <th style="vertical-align: middle">Telefone</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($forms as $form)
                    <tr>
                        <td>{{$form->name}}</td>
                        <td>{{$form->email}}</td>
                        <td>{{$form->phone}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="card-footer clearfix" style="background-color: white">
                {{$forms->render()}}
            </div>

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
@stop

@section('js')
@stop
