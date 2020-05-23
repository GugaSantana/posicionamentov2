@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')

<style>

</style>
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .verticalTableHeader {
    text-align:center;
    white-space:nowrap;
    g-origin:50% 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    
}
.verticalTableHeader p {
    margin:0 -999px;
    display:inline-block;
}
.verticalTableHeader p:before{
    content:'';
    width:0;
    padding-top:110%;/* takes width as reference, + 10% for faking some extra padding */
    display:inline-block;
    vertical-align:middle;
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

    /* The container must be positioned relative: */
/* The container must be positioned relative: */
.select-custom {
    position: relative;
    font-family: Arial;
    height: 2em;
    vertical-align: middle;
    border-radius: .375rem;
    background-color: white;
    text-align-last: center;
}




</style>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <h3 class="mb-0">
                        <center>INSTRUMENTO 16</center>
                    </h3>
                    <h3 class="mb-0">
                        <center>NEUTRALIZAÇÃO DOS OBSTÁCULOS DA VENDA (FORÇAS RESTRITIVAS)</center>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <p><b>
                                <center>Levantamento de Informações - Parte 1</center>
                            </b></p>

                        <p>O Instrumento 15 que já foi aplicado tem por objetivo avaliar e desenvolver as Forças Propulsoras das Vendas, como parte da etapa de APRESENTAÇÃO das Vendas Consultivas.</p>
                        <p>Este instrumento operacionaliza a etapa seguinte das Vendas Consultivas, que é a etapa da NEGOCIAÇÃO.</p>
                        <p>Na etapa da NEGOCIAÇÃO da metodologia de Vendas Consultivas, naturalmente, o cliente pode apresentar obstáculos à venda. Chamamos os obstáculos de Forças Restritivas.</p>
                        <p>A negociação na verdade é uma interação entre as Forças Propulsoras e as Forças Restritivas, gerando o que chamamos de <b>Campo de Forças</b>.</p>
                        <p>Se as Forças Propulsoras prevalecem sobre as Forças Restritivas, a venda é realizada.</p>
                        <p>Assim como no instrumento 15 foram abordadas as Forças Propulsoras, este instrumento tratará das Forças Restritivas, com o objetivo que você possa GERENCIAR o Campo de Força das Vendas.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->

                        <p>Você responderá este instrumento preenchendo a Matriz dos Obstáculos abaixo através dos seguintes passos:</p>

                        <p style="color: blue">1 – Registre os Obstáculos que geralmente aparecem</p>
                        <p>Considere suas ultimas 10 negociações feitas.</p>
                        <p>Na primeira coluna da Matriz abaixo relacione como itens, os obstáculos mais freqüentes que se apresentaram durante a fase de <b>NEGOCIAÇÃO</b> da Venda nessas 10 negociações.</p>
                        <p><u>Atenção:</u> Numa negociação poderá se apresentar vários obstáculos: Relacione todos eles.</p>

                        <p style="color: blue">2 – A Frequência dos Obstáculos</p>
                        <p>Na segunda coluna da Matriz, registre a freqüência com que os obstáculos que você relacionou apareceram nas negociações.</p>
                        <p>Por exemplo: Se o <u>preço</u> foi um obstáculo apresentado em 3 das 10 negociações teríamos:</p>
                        <p>Obstáculo = Preço | Frequência = 3</p>

                    </div>

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/16_1">
                            {!! csrf_field() !!}
                            
                            <p><b><center>MATRIZ DOS OBSTÁCULOS:</center></b></p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="tg">
                                        <tr>
                                        <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">OBSTÁCULOS</th>
                                            <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">Frequência dos Obstáculos</th>
                                        </tr>    
                                        @for($i = 1; $i <= 10; $i++)
                                            <tr>
                                                <td style="font-size: 18px; vertical-align: middle; width: 90%; padding-left: 1%;">{{$i}} - <input style="width: 95%" name="obstaculos[]" type="text"></td>
                                                <td style="text-align:center; font-size: 18px; vertical-align: middle; width: 10%;"><input name="frequencia[]" type="text" size="3%" style="text-align: center;" onkeypress="return SomenteNumero(event)"></td>
                                            </tr>
                                        @endfor
                                    </table>
                                </div>
                            </div>

                            <br>
                            <p>Após registrar todos os obstáculos que se apresentaram em suas negociações passaremos para a Parte 2 deste levantamento.</p>

                            <br>
                            
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary" type="submit">
                                    <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                                    <span class="btn-inner--text">Enviar formulário</span>
                                </button>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
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

@endpush