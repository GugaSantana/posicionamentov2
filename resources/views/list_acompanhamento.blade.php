@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>ACOMPANHAMENTO DE INSTRUMENTOS RESPONDIDOS</center>
        </h3>
    </div>
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-head-fixed table-bordered table-hover fonte18">
                <thead class="center">
                <tr>
                    <th style="vertical-align: middle">ID</th>
                    <th style="vertical-align: middle">Nome</th>
                    <th style="vertical-align: middle">1</th>
                    <th style="vertical-align: middle">2</th>
                    <th style="vertical-align: middle">3</th>
                    <th style="vertical-align: middle">4</th>
                    <th style="vertical-align: middle">5</th>
                    <th style="vertical-align: middle">6</th>
                    <th style="vertical-align: middle">7</th>
                    <th style="vertical-align: middle">8</th>
                    <th style="vertical-align: middle">9</th>
                    <th style="vertical-align: middle">10</th>
                    <th style="vertical-align: middle">11</th>
                    <th style="vertical-align: middle">12</th>
                    <th style="vertical-align: middle">13</th>
                    <th style="vertical-align: middle">14</th>
                    <th style="vertical-align: middle">15</th>
                    <th style="vertical-align: middle">16</th>
                    <th style="vertical-align: middle">17</th>
                    <th style="vertical-align: middle">18</th>
                    <th style="vertical-align: middle">19</th>
                    <th style="vertical-align: middle">20</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td @if( isset($user->role->instrumentos) && array_search(1, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 1)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(2, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 2)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(3, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 3)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(4, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 4)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(5, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 5)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(6, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 6)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(7, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 7)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(8, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 8)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(9, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 9)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(10, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 10)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(11, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 11)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(12, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 12)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(13, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 13)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(14, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 14)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(15, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 15)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(16, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 16)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(17, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 17)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(18, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 18)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(19, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 19)->first()) ) style="background-color:green" @endif></td>
                        <td @if( isset($user->role->instrumentos) && array_search(20, $user->role->instrumentos) === false) style="background-color: orange" @endif @if(!empty($user->instrumentos->where('instrumento', 20)->first()) ) style="background-color:green" @endif></td>

                    </tr>
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
