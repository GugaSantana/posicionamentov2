@extends('adminlte::page')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3>
                <center>LISTA DE USUÁRIOS</center>
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
                        <input type="text" name="periodo" class="form-control mr-2" value="{{ $request->periodo }}" />
                        <input type="submit" class="btn btn-primary" value="Filtrar" />
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-head-fixed fonte18">
                    <thead class="center">
                        <tr>
                            <th style="vertical-align: middle">ID</th>
                            <th style="vertical-align: middle">Nome</th>
                            <th style="vertical-align: middle">Email</th>
                            <th style="vertical-align: middle">Data Cadastro</th>
                            <th style="vertical-align: middle">Nível de acesso</th>
                            <th style="vertical-align: middle">Ativo</th>
                            <th style="vertical-align: middle">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ date_format($user->created_at, 'd/m/Y') }}</td>
                                <td>
                                    <form method="post" action="/user/changeRole">
                                        {!! csrf_field() !!}
                                        <input hidden name="user_id" value="{{ $user->id }}">
                                        <div style="display: flex;">
                                            <select class="custom-select" name="role_id">
                                                <option selected>--</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}" @if (isset($user->role) && $user->role->id == $role->id) selected @endif>{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            <div style="margin-left: 5%;"></div>
                                            <button class="btn btn-success btn-sm" href="#">
                                                <i class="fas fa-sync"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                                <td>{{ $user->enable == 1 ? 'Sim' : 'Não' }}</td>
                                <td>
                                    @if ($user->enable == 0)
                                        <form method="post" action="/user/enable">
                                            {!! csrf_field() !!}
                                            <input hidden name="user_id" value="{{ $user->id }}">
                                            <button class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-check">
                                                </i>
                                                Ativar
                                            </button>
                                        </form>
                                    @else
                                        <form method="post" action="/user/disable">
                                            {!! csrf_field() !!}
                                            <input hidden name="user_id" value="{{ $user->id }}">
                                            <button class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Desativar
                                            </button>
                                        </form>
                                    @endif
                                    <form method="post" action="/user/clear">
                                        {!! csrf_field() !!}
                                        <input hidden name="user_id" value="{{ $user->id }}">
                                        <button class="btn btn-warning btn-sm" href="#">
                                            <i class="fa fa-eraser">
                                            </i>
                                            Limpar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="card-footer clearfix">
                    {{ $users->appends($request->all())->links() }}
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
