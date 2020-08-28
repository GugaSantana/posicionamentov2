@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>RELATÓRIO DE INSTRUMENTOS</center>
        </h3>
    </div>
    <div class="card-body">
        
        <div class="col-md-12">

            <form target="_blank" type="get" action="/report/generate">

                <div class="row">
                    <label class="control-label col-md-3" for="company">Selecione uma empresa: </label>
                    <div class="form-group col-md-4">
                        <select class="form-control" id="company" name="company_id">
                            <option value="0">Todas</option>
                            @foreach($companies as $comp)
                            <option value="{{$comp->id}}" @if(isset($company) && $comp->id == $company->id) selected @endif>{{$comp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <label class="control-label col-md-3" for="instrumento">Selecione um instrumento: </label>
                    <div class="form-group col-md-4">
                        <select class="form-control" id="instrumento" name="instrumento">
                            @for($i=1; $i<=20; $i++)
                            <option value="{{$i}}">Instrumento {{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Gerar relatório</button>
            </form>

        </div>

        @if(!empty($company))
        <br>
        <h3 style="color: #35408f;text-align: center;">{{$company->name}}</h3>
        @endif
    
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
