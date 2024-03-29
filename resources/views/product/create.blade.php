@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>CRIAÇÃO DE PRODUTO</center>
        </h3>
    </div>
    <div class="card-body">
        
    <form name="formulario" role="form" method="post" action="/product/create">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name">Nome do Produto</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="voucher">Voucher</label>
            <input type="text" class="form-control" id="voucher" name="voucher" aria-describedby="Voucher" placeholder="Voucher">
        </div>
        <div class="form-group">
            <label for="price">Preço</label>
            <input type="text" class="form-control" id="price" name="price" aria-describedby="Price" placeholder="Preço">
        </div>
        <div class="form-group">
            <label for="installment">Quantidade de Parcelas</label>
            <input type="text" class="form-control" id="installment" name="installment" aria-describedby="Installment" placeholder="Quantidade de Parcelas">
        </div>
        <div class="form-group">
            <label for="installment_free">Quantidade de Parcelas Sem Juros <font color="red">(0 - Com juros | A partir de 2, sem juros para o cliente)</font></label>
            <input type="text" class="form-control" id="installment_free" name="installment_free" aria-describedby="InstallmentFree" placeholder="Parcelas sem Juros">
        </div>
        <div class="form-group">
            <label for="limit">Limite de Voucher (Estoque)</label>
            <input type="text" class="form-control" id="limit" name="limit" aria-describedby="Voucher" placeholder="Limite">
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
