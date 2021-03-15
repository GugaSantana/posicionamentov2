@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>LISTA DE PEDIDOS</center>
        </h3>
    </div>
    <div class="card-body">
        
        <div class="table-responsive p-0">
            <table class="table table-head-fixed fonte18">
                <thead class="center">
                <tr>
                    <th style="vertical-align: middle;">ID</th>
                    <th style="vertical-align: middle;">Usuário</th>
                    <th style="vertical-align: middle;">Produto</th>
                    <th style="vertical-align: middle;">Preço</th>
                    <th style="vertical-align: middle;">Parcelas</th>
                    <th style="vertical-align: middle;">Valor das Parcelas</th>
                    <th style="vertical-align: middle;">Status</th>
                    <th style="vertical-align: middle;">Ações</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td class="center">{{$order->id}}</td>
                        <td class="center">{{$order->user->name}}</td>
                        <td class="center">{{$order->product->name}}</td>
                        <td class="center">{{$order->price}}</td>
                        <td class="center">{{$order->installment}}</td>
                        <td class="center">{{$order->installment_value}}</td>
                        <td class="center">{{$order->status}}</td>
                        
                        {{-- <td class="center">

                            <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                            <form method="post" action="/order/edit">
                                {!! csrf_field() !!}
                                <input hidden name="order_id" value="{{$order->id}}">
                                <button type="submit" class="btn btn-info"><i class="fa fa-edit" aria-hidden="true"></i> Editar</button>
                            </form>
                            
                            <!-- @if($order->enable == 0)
                                <form method="post" action="/order/enable">
                                {!! csrf_field() !!}
                                <input hidden name="order_id" value="{{$order->id}}">
                                <button class="btn btn-success" href="#">
                                    <i class="fas fa-check">
                                    </i>
                                    Ativar
                                </button>
                                </form>
                            @else
                                <form method="post" action="/order/disable">
                                {!! csrf_field() !!}
                                <input hidden name="order_id" value="{{$order->id}}">
                                <button class="btn btn-danger" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Desativar
                                </button>
                                </form>
                            @endif -->
                            
                           
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="card-footer clearfix">
                {{$orders->render()}}
            </div>

        </div>
    
        {{-- <a href="/order/create" class="btn btn-primary fonte18">Adicionar novo produto</a> --}}
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
