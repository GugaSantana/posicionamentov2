@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>ACOMPANHAMENTO DE AUTOGESTAO RESPONDIDOS</center>
        </h3>
    </div>
    <div class="card-body">
        
        <div class="col-md-12">

            <form class="form-inline" action="/user/autogestao">
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
            </form>

        </div>

        @if(!empty($company))
        <br>
        <h3 style="color: #35408f;text-align: center;">{{$company->name}}</h3>
        @endif

        <br>
        
        <div class="table-responsive">
            <table class="table table-head-fixed table-bordered table-hover fonte18">
                <thead class="center">
                <tr>
                    <th style="vertical-align: middle">ID</th>
                    <th style="vertical-align: middle">Nome</th>
                    <th style="vertical-align: middle">Instrumento</th>
                    <th style="vertical-align: middle">O que</th>
                    <th style="vertical-align: middle">Como</th>
                    <th style="vertical-align: middle">Quando</th>                   
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        @foreach($user->autoGestao as $autogestao)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$autogestao->instrumento}}</td>
                            <td>{!!$autogestao->oque!!}</td>
                            <td>{!!$autogestao->como!!}</td>
                            <td>{!!$autogestao->quando!!}</td>
                        </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>

            <div class="card-footer clearfix" style="background-color: white">
                {{$users->render()}}
            </div>

        </div>

        <br>
        
        <div class="table-responsive" style="width: 30%;">
            <table class="table table-head-fixed table-bordered table-hover fonte18">
                <thead class="center">
                <tr>
                    <th style="vertical-align: middle">Legenda</th>
                    <th style="vertical-align: middle"></th>
                </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>Não respondido</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Respondido</td>
                        <td style="background-color: green"></td>
                    </tr>
                    <tr>
                        <td>Bloqueado</td>
                        <td style="background-color: orange"></td>
                    </tr>
                    
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
@stop

@section('js')
@stop
