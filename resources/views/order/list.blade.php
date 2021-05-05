@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>LISTA DE PEDIDOS</center>
        </h3>
    </div>
    <div class="card-body">

        <div class="row mb-4 inline">
            <div class="col-12">
                <form class="form-inline">
                    <select name="empresa" id="empresa" class="form-control mr-2">
                        <option value="0">Selecione uma Empresa</option>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}" @if($request->empresa == $company->id) selected @endif>{{ $company->name }}</option>
                        @endforeach
                    </select>
                    <select name="status_payment" id="status_payment" class="form-control mr-2">
                        <option value="0">Selecione um Status do Pagamento</option>
                        @foreach ($status_payments as $status_payment)
                            <option value="{{ $status_payment->status }}" @if($request->status_payment == $status_payment->status) selected @endif>{{ $status_payment->status }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="periodo" class="form-control mr-2" value="{{ $request->periodo }}" />
                    <input type="submit" class="btn btn-primary" value="Filtrar" />
                </form>
            </div>
        </div>
        
        <div class="table-responsive p-0">
            <table class="table table-head-fixed fonte18">
                <thead class="center">
                <tr>
                    <th style="vertical-align: middle;">ID</th>
                    <th style="vertical-align: middle;">Data</th>
                    <th style="vertical-align: middle;">Empresa</th>
                    <th style="vertical-align: middle;">Usuário</th>
                    <th style="vertical-align: middle;">Produto</th>
                    <th style="vertical-align: middle;">Preço</th>
                    <th style="vertical-align: middle;">Parcelas</th>
                    <th style="vertical-align: middle;">Valor das Parcelas</th>
                    <th style="vertical-align: middle;">Status</th>
                    {{-- <th style="vertical-align: middle;">Ações</th> --}}
                </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td class="center">{{$order->id}}</td>
                        <td class="center">{{date('d/m/y H:i:s', strtotime($order->created_at))}}</td>
                        <td class="center">{{$order->user->company->name ?? ''}}</td>
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
                {{ $orders->appends($request->all())->render() }}
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
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<script>

$('input[name="periodo"]').daterangepicker({
    ranges: {
           'Hoje': [moment(), moment()],
           'Ontem': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Últimos 7 dias': [moment().subtract(6, 'days'), moment()],
           'Últimos 30 dias': [moment().subtract(29, 'days'), moment()],
           'Esse Mês': [moment().startOf('month'), moment().endOf('month')],
           'Último Mês': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
           'Tudo' : [moment().subtract(3, 'year').startOf('year'), moment()],
        },
  "locale": {
    "format": "DD/MM/YYYY",
    "separator": " - ",
    "applyLabel": "Aplicar",
    "cancelLabel": "Cancelar",
    "daysOfWeek": [
      "Dom",
      "Seg",
      "Ter",
      "Qua",
      "Qui",
      "Sex",
      "Sab"
    ],
    "monthNames": [
      "Janeiro",	
      "Fevereiro",
      "Março",
      "Abril",
      "Maio",
      "Junho",
      "Julho",
      "Agosto",
      "Setembro",
      "Outubro",
      "Novembro",
      "Dezembro"
    ],
    "firstDay": 1,
    "customRangeLabel": "Selecione uma data",
    "rangeTodayLabel": "hoje"
  }
});
</script>
@stop
