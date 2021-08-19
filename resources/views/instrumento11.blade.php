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
            <center>INSTRUMENTO 11</center>
        </h3>
        <h3>
            <center>DEFINIÇÃO DO PERFIL DO CLIENTE IDEAL (IDEAL CUSTOMER PROFILE)</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="{{ asset('img/botton_ts.png') }}" style="width: 6em; float:right; margin-right: 1%">
            </div>
        </div>
    </div>
    <div class="card-body">

                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>
                        <p class="fonte18">Nos últimos quatro Instrumentos, nos preparamos para “Gerenciar o Campo Psicológico” que se estabelece entre você e seu cliente quando interagem.</p>
                        <p class="fonte18">Com este Instrumento, iniciamos uma nova série da Metodologia. Começaremos a trabalhar as ETAPAS ESPECÍFICAS das Vendas Consultivas. São cinco etapas e a primeira se refere à Prospecção de Clientes, que começa com a definição do Cliente Ideal.</p>
                        <p class="fonte18">Definir o Perfil de Cliente Ideal é o primeiro passo para uma estratégia de Vendas de sucesso.</p>
                        <p class="fonte18">As preferências dos clientes estão se tornando mais amplas e mais opções estão disponíveis.</p>
                        <p class="fonte18">Para encontrar seu público-alvo você deve segmentar o Mercado, para identificar que tipo de cliente prefere seu produto.</p>
                        <p class="fonte18">Então, o Cliente Ideal é aquele que tem o perfil de quem realmente precisa comprar de você.</p>
                        <p class="fonte18">A segmentação do Mercado serve para dar Foco a seu trabalho: segmentar é selecionar o público-alvo, definir onde você irá buscar seus clientes.</p>
                        <p class="fonte18">A segmentação facilita seu trabalho e o alcance de suas Metas de Faturamento.</p>
                        <p class="fonte18">Em síntese, você deve definir as características que um cliente deve ter para que você consiga vender para ele com maior facilidade.</p>
                        <p class="fonte18">Este Instrumento tem por objetivo ajudar você a identificar o Perfil de seu Cliente Ideal de maneira estruturada.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->

                        <p class="fonte18">Para definir o Perfil do Cliente Ideal responda à seguinte questão:</p>
                        <p class="fonte18">Seu cliente é uma pessoa física ou uma pessoa jurídica?</p>

                        <a href="/instrumento11/pf" class="btn btn-primary">Pessoa Física</a>
                        <a href="/instrumento11/pj" class="btn btn-primary">Pessoa Jurídica</a>
                        
                    </div>

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
<script>window.onload = function(){history.go(+1)};</script>
@endpush