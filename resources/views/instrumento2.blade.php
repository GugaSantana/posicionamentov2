@extends('adminlte::page')

@section('content')

<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<style type="text/css">
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        font-family: Arial, sans-serif;
        font-size: 14px;
        padding: 10px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: black;
    }

    .tg th {
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        padding: 10px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: black;
    }

    .tg .tg-baqh {
        text-align: center;
        vertical-align: top
    }

    .tg .tg-0pky {
        border-color: inherit;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-0lax {
        text-align: left;
        vertical-align: top
    }
</style>

<div class="card card-primary">
    <div class="card-header">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3>
            <center>INSTRUMENTO 2</center>
        </h3>
        <h3>
            <center>PROBLEMAS PRIORITÁRIOS PARA AUMENTAR AS VENDAS</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 2</center>
                </h3>
                <h3>
                    <center>PROBLEMAS PRIORITÁRIOS PARA AUMENTAR AS VENDAS</center>
                </h3>
            </div>
        </div>
    </div>
    <div class="card-body">

        <div class="col-12">
            <h4>
                <center>Levantamento de Informações</center>
            </h4>

            <p class="fonte18">No Instrumento anterior, você recebeu orientações para desenvolver sua Visão e sua Ação, dois fatores fundamentais para ter sucesso profissional.</p>
            <p class="fonte18">“Visão e Ação formam a moldura do quadro que vamos pintar”.</p>
            <p class="fonte18">Com este segundo Instrumento, começamos a tratar das questões específicas de Vendas, para melhorar seu desempenho profissional.</p>
            <p class="fonte18">Este Instrumento trata do ponto de partida racional para aumentar as Vendas, o que consiste em identificar os problemas prioritários, que lhe dificultam alcançar sua meta de Vendas.</p>
            <p class="fonte18">Nossa Metodologia para implementar as Vendas Consultivas começa pela identificação dos problemas prioritários.</p>
            <p class="fonte18">Até o final do Programa, os problemas que você registrar neste Instrumento estarão equacionados e poderão ser resolvidos de maneira objetiva e mensurável, implementando os Planos de Ação dos outros Instrumentos.</p>

        </div>
        <br>
        <div class="col-12">
            <p class="fonte18"><b>INSTRUÇÕES</b></p>
            <h4 style="color: #35408f">PRIMEIRA PARTE</h4>
            <p class="fonte18">Relacione em ordem decrescente de prioridade os 5 principais problemas que você tem e que estão dificultando que você alcance sua meta de Vendas.</p>
            <p class="fonte18">O problema número 1 será o mais sério, o mais grave e o número 5 o menos preocupante de todos eles.</p>

        </div>
        <div class="col-12">
            <br>
            <h4>SEUS 5 MAIORES PROBLEMAS POR ORDEM DE IMPORTÂNCIA</h4>
            <!-- TABELA DE QUESTIONARIO -->
            <form name="formulario" role="form" method="post" action="instrumento/2">
                {!! csrf_field() !!}
                <br>
                @for($i=1; $i<=5;$i++) <label>PROBLEMA {{$i}}:</label>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="problema{{$i}}" class="form-control" id="problema{{$i}}" onkeyup="preenchimento({{$i}});" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    @endfor
                    <!-- FIM TABELA DE QUESTIONARIO -->
                    <br>
                    <div class="col-12">
                        <h4 style="color: #35408f">SEGUNDA PARTE</h4>
                        <p class="fonte18">Na primeira coluna da Matriz de Análise de Problemas estão relacionados os 5 problemas que você identificou em ordem decrescente de importância.</p>
                        <p class="fonte18">A seguir, para cada problema relacionado, estabeleça os níveis de Gravidade, de Urgência e de Tendência de cada um deles, em escala de 1 a 5, conforme as definições apresentadas na Matriz.</p>
                        <p class="fonte18">Para cada Problema, você terá que estabelecer um valor para seu nível de Gravidade (G), de Urgência (U) e de Tendência (T).</p>
                    </div>
                    <br>
                    <h4><center>MATRIZ DE ANÁLISE DE PROBLEMAS</center></h4>
                    <center><img src="../posicionamento/public/img/instrumento2/inst2_1.png"></center>
                    <br>
                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered fonte18">
                                <thead class="bg-primary">
                                <tr class="center">
                                    <th>PROBLEMAS</th>
                                    <th style="width: 100px">G</th>
                                    <th style="width: 100px">U</th>
                                    <th style="width: 100px">T</th>
                                </tr>
                                </thead>
                                @for($i=1;$i<=5;$i++) <tr>
                                    <td id="problemaTexto{{$i}}"></td>
                                    <div class="form-group">
                                        <td style="text-align: -webkit-center;"><input class="form-control" type="text" maxlength="1" name="matriz{{$i}}[]" style="width: 3em; text-align: center;" onkeypress='return SomenteNumero(event)' required></td>
                                        <td style="text-align: -webkit-center;"><input class="form-control" type="text" maxlength="1" name="matriz{{$i}}[]" style="width: 3em; text-align: center;" onkeypress='return SomenteNumero(event)' required></td>
                                        <td style="text-align: -webkit-center;"><input class="form-control" type="text" maxlength="1" name="matriz{{$i}}[]" style="width: 3em; text-align: center;" onkeypress='return SomenteNumero(event)' required></td>
                                    </div>
                                    </tr>
                                    @endfor

                            </table>
                        </div>

                    </div>
                    <br>
                    <div class="col-8">
                        <button class="btn btn-icon btn-3 btn-primary fonte18" type="submit">
                            <span class="btn-inner--icon"><i class="fa fa-paper-plane"></i></span>
                            <span class="btn-inner--text">Enviar formulário</span>
                        </button>
                    </div>
        </div>
        </form>
    </div>
</div>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    function preenchimento(i) {
        digitado = document.getElementById("problema" + i).value;
        document.getElementById("problemaTexto" + i).innerHTML = digitado;
    }

    $(document).ready(function() {
        $("#number").keyup(function() {
            $("#number").val(this.value.match(/[0-9]*/));
        });
    });

    function SomenteNumero(e) {
        var tecla = (window.event) ? event.keyCode : e.which;
        if ((tecla > 48 && tecla < 54)) return true;
        else {
            if (tecla == 8 || tecla == 0) return true;
            else return false;
        }
    }
</script>

<script>window.onload = function(){history.go(+1)};</script>

@endpush