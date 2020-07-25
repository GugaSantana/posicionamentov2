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
        <h3>
            <center>INSTRUMENTO 12</center>
        </h3>
        <h3>
            <center>PROSPECÇÃO DE CLIENTES</center>
        </h3>
        <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 14%;float: right;margin-top: -10%;">
    </div>
    <div class="card-body">

                    <div class="col-12">
                            <h4>
                                <center>Levantamento de Informações</center>
                            </h4>

                            <p class="fonte18">Depois que você definiu o Perfil do seu Cliente Ideal, você deve fazer a Prospecção de Clientes, para encontrar futuros compradores de seus produtos.</p>
                            <p class="fonte18">Um dos maiores desafios de qualquer vendedor é, de fato, prospectar novos clientes de maneira eficiente, isto porque sem possíveis clientes interessados em seus produtos não haverá fechamento de negócios</p>
                            <p class="fonte18">A Prospecção de clientes é um processo estruturado para buscar novos clientes que comprem seus produtos.</p>
                            <p class="fonte18">A Prospecção é a primeira etapa do Funil de Vendas (Instrumento 18 da metodologia), ferramenta-chave para administrar o processo de Vendas.</p>
                            <p class="fonte18">A Prospecção de clientes é fundamental para canalizar seus esforços para os clientes que tem maior probabilidade de fazer negócios</p>
                            <p class="fonte18">O seguinte questionário permite avaliar como você realiza atualmente a Prospecção de clientes.</p>
                            <p class="fonte18">A partir do diagnóstico que será feito, você receberá recomendações para desenvolver as competências que lhe permitam melhorar seu processo de Prospecção.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->
                        <p class="fonte18">No questionário seguinte responda SIM ou NÃO para expressar sua situação atual em relação as atividades que tecnicamente operacionalizam a Prospecção de clientes.</p>
                        <p class="fonte18">Responda este questionário com atenção, pois suas respostas serão o ponto de partida para a melhoria de seu desempenho na atividade de Prospecção</p>

                    </div>

                    <div></div>

                    @php

                    $questions = [
                        '1 - Você sabe, com 100% de certeza, de onde vêm, ou seja, como se originam os clientes novos? Como eles surgem?',
                        '2 – Você tem um indicador de desempenho para medir os resultados e a eficiência de suas prospecções?',
                        '3 – Você tem um planejamento e um cronograma de ações específicas de prospecção de novos clientes?',
                        '4 – Estes Planos de Ação são executados fielmente?',
                        '5 – O perfil de seu cliente ideal com o qual você quer trabalhar, está claramente definido?',
                        '6 – Você leva em consideração esse perfil definido na hora de prospectar?',
                        '7 – Sua Proposta está claramente definida e é comunicada para atrair novos clientes?',
                        '8 – Você sabe qual é o tempo médio de fechamento entre o primeiro contato com um cliente potencial e o fechamento da venda. (horas, dias, semanas, meses)?',
                        '9 – Você está satisfeito com a velocidade de fechamento das vendas?',
                        '10 – Você sabe qual é o Tempo de Vida Médio (LTV= lifetime value) de um cliente? LTV é o período de tempo (meses, anos) que um cliente que compra de você se mantém ativo',
                        '11 – Você sabe com segurança o valor médio das compras de seus clientes?',
                        '12 – Você tem implementado novas ações para aumentar o valor médio das compras de seus clientes?',
                        '13 – Você sabe quais são as formas de prospecção que atraem o maior número de clientes?',
                        '14 – Você sabe quais são as formas de prospecção que atraem os clientes de maior rentabilidade?',
                        '15 – Você sabe qual é o custo de aquisição de um novo cliente?',
                        '16 – Você está satisfeito com a quantidade e com a qualidade dos novos negócios vindos da sua forma de prospectar?',
                        '17 – Você desenvolve uma atividade para saber os motivos do não fechamento da venda?',
                        '18 – Você age de forma sistemática para melhorar o indicador “percentual de conversão”?'
                        ];
                    @endphp

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/12">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered fonte18">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="font-size: 18px; text-align: center; border: none;"></th>
                                            <th style="font-size: 18px; text-align: center; width: 100px">Sim</th>
                                            <th style="font-size: 18px; text-align: center; width: 100px">Não</th>
                                        </tr>
                                        </thead>
                                        @for($i=0;$i<18;$i++) 
                                            <tr>
                                            <td style="font-size: 18px">{!! $questions[$i] !!}</td>
                                                <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                               
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="questao{{$i}}" id="questaoS{{$i}}" value="s" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="questaoS{{$i}}"></label>
                                            </div>
                                            
                                            
                                            
                                            </td>
                                                <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                               
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="questao{{$i}}" id="questaoN{{$i}}" value="n" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="questaoN{{$i}}"></label>
                                            </div>
                                            
                                            
                                            
                                            </td>
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