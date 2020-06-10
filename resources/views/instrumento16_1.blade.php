@extends('adminlte::page')

@section('content')
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

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>INSTRUMENTO 16</center>
        </h3>
        <h3>
            <center>NEUTRALIZAÇÃO DOS OBSTÁCULOS DA VENDA (FORÇAS RESTRITIVAS)</center>
        </h3>
    </div>
    <div class="card-body">

                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                        <p class="fonte18">O Instrumento 15 que já foi aplicado tem por objetivo avaliar e desenvolver as Forças Propulsoras das Vendas, como parte da etapa de APRESENTAÇÃO das Vendas Consultivas.</p>
                        <p class="fonte18">Este instrumento operacionaliza a etapa seguinte das Vendas Consultivas, que é a etapa da NEGOCIAÇÃO.</p>
                        <p class="fonte18">Na etapa da NEGOCIAÇÃO da metodologia de Vendas Consultivas, naturalmente, o cliente pode apresentar obstáculos à venda. Chamamos os obstáculos de Forças Restritivas.</p>
                        <p class="fonte18">A negociação na verdade é uma interação entre as Forças Propulsoras e as Forças Restritivas, gerando o que chamamos de <b>Campo de Forças</b>.</p>
                        <p class="fonte18">Se as Forças Propulsoras prevalecem sobre as Forças Restritivas, a venda é realizada.</p>
                        <p class="fonte18">Assim como no instrumento 15 foram abordadas as Forças Propulsoras, este instrumento tratará das Forças Restritivas, com o objetivo que você possa GERENCIAR o Campo de Força das Vendas.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->

                        <p class="fonte18">Você responderá este instrumento preenchendo a Matriz dos Obstáculos abaixo através dos seguintes passos:</p>

                        <p class="fonte18" style="color: blue">1 – Registre os Obstáculos que geralmente aparecem</p>
                        <p class="fonte18">Considere suas ultimas 10 negociações feitas.</p>
                        <p class="fonte18">Na primeira coluna da Matriz abaixo relacione como itens, os obstáculos mais freqüentes que se apresentaram durante a fase de <b>NEGOCIAÇÃO</b> da Venda nessas 10 negociações.</p>
                        <p class="fonte18"><u>Atenção:</u> Numa negociação poderá se apresentar vários obstáculos: Relacione todos eles.</p>

                        <p class="fonte18" style="color: blue">2 – A Frequência dos Obstáculos</p>
                        <p class="fonte18">Na segunda coluna da Matriz, registre a freqüência com que os obstáculos que você relacionou apareceram nas negociações.</p>
                        <p class="fonte18">Por exemplo: Se o <u>preço</u> foi um obstáculo apresentado em 3 das 10 negociações teríamos:</p>
                        <p class="fonte18">Obstáculo = Preço | Frequência = 3</p>

                    </div>

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/16_1">
                            {!! csrf_field() !!}
                            
                            <p class="fonte18 center"><b>MATRIZ DOS OBSTÁCULOS:</b></p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered fonte18">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">OBSTÁCULOS</th>
                                                <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">Frequência dos Obstáculos</th>
                                            </tr>
                                        </thead>
                                        @for($i = 1; $i <= 10; $i++)
                                            <tr>
                                                <td style="font-size: 18px; vertical-align: middle; width: 90%; padding-left: 1%;">{{$i}} - <input style="width: 95%" name="obstaculos[]" type="text" @if($i == 1) required @endif></td>
                                                <td style="text-align:center; font-size: 18px; vertical-align: middle; width: 10%;"><input name="frequencia[]" type="text" size="3%" style="text-align: center;" onkeypress="return SomenteNumeroDez(event, this)" @if($i == 1) required @endif></td>
                                            </tr>
                                        @endfor
                                    </table>
                                </div>
                            </div>

                            <br>
                            <p class="fonte18">Após registrar todos os obstáculos que se apresentaram em suas negociações passaremos para a Parte 2 deste levantamento.</p>

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

    function SomenteNumeroDez(e, element) {
            var num;
            var tecla = (window.event) ? event.keyCode : e.which;
            switch (tecla) {
                case 48:
                    num = 0;
                    break;
                    case 49:
                    num = 1;
                    break;
                    case 50:
                    num = 2;
                    break;
                    case 51:
                    num = 3;
                    break;
                    case 52:
                    num = 4;
                    break;
                    case 53:
                    num = 5;
                    break;
                    case 54:
                    num = 6;
                    break;
                    case 55:
                    num = 7;
                    break;
                    case 56:
                    num = 8;
                    break;
                    case 57:
                    num = 9;
                    break;
            }

            var numcampo = element.value;
            var total = ''+numcampo+num;
            total = parseInt(total);

            if(num == 0 && numcampo != 1) return false;

            if(total > 10){
                alert("Digite valores de 1 a 10");
                return false;
            }

            if ((tecla > 47 && tecla < 58)) return true;
            else {
                if (tecla == 8 || tecla == 0) return true;
                else return false;
            }
        }
</script>

@endpush