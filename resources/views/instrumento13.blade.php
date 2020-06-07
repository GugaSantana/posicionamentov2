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
            <center>INSTRUMENTO 13</center>
        </h3>
        <h3>
            <center>QUALIFICAÇÃO DOS CLIENTES POTENCIAIS</center>
        </h3>
    </div>
    <div class="card-body">

                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                            <p class="fonte18">Como vimos no instrumento anterior, a primeira etapa das Vendas Consultivas é a Prospecção de Clientes.</p>
                            <p class="fonte18">Dois instrumentos foram aplicados para melhorar a eficácia da PROSPECÇÃO: o instrumento 11 – Definição do perfil do cliente ideal e o instrumento 12 – Matriz de Prospecção de Clientes.</p>
                            <p class="fonte18">Este é o primeiro dos dois instrumentos da metodologia para aumentar a produtividade da segunda etapa das Vendas Consultivas, que é a etapa da QUALIFICAÇÃO dos Clientes.</p>
                            <p class="fonte18">A Qualificação serve para decidir se vale a pena dedicar tempo e esforço para conquistar um cliente que foi prospectado.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->

                        <p class="fonte18">Responda em que medida, conforme a escala a seguir, você está aplicando atualmente os seguintes seis critérios para Qualificar seus Clientes Potenciais?
                        <p class="fonte18">ESCALA<br>
                        1 – Não tenho condições de responder esta pergunta
                        <br>2 – Realmente me esforço por atender esta condição, porem faço com fortes restrições o requerido por esta questão
                        <br>3 – Regularmente respondo esta questão de maneira não sistemática, só baseado na minha experiência e intuição.
                        <br>4 – Trato desta questão para a maioria de meus clientes potenciais, porem sem metodologia bem definida
                        <br>5 – Sim, trato desta questão regularmente e de maneira sistemática e com método.</p>

                    </div>

                    <div></div>

                    @php

                    $questions = [
                        '1 Eu avalio se o cliente potencial tem recursos financeiros para comprar meus produtos?',
                        '2 Eu levo em consideração em que medida a pessoa com a qual estou falando tem o poder de decisão para fazer a compra?',
                        '3 Em que medida sei se o cliente potencial realmente necessita dos produtos que lhe estou oferecendo? Sei se ele tem urgência para comprar?',
                        '4 Posso saber se a decisão de comprar do cliente potencial levará muito tempo?',
                        '5 Eu posso prever dificuldades no processo de vendas para este cliente?',
                        '6 Em que medida sei se as reais necessidades do cliente podem ser atendidas pelos produtos e soluções que estou oferecendo?'
                        ];
                    @endphp

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/13">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered fonte18">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th rowspan="2" style="font-size: 18px; text-align: center; vertical-align: middle;">FATORES DE AVALIAÇÃO</th>
                                            <th colspan="5" style="font-size: 18px; text-align: center; width: 100px">ESCALA</th>
                                        </tr>
                                        <tr>
                                            @for($i=0;$i<5;$i++) 
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">{{$i+1}}</td>
                                            @endfor
                                        </tr>
                                    </thead>
                                        @for($i=0;$i<6;$i++) 
                                            <tr>
                                            <td style="font-size: 18px">{!! $questions[$i] !!}</td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="questao{{$i}}" id="questao1{{$i}}" value="1" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="questao1{{$i}}"></label>
                                            </div>
                                            
                                        
                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="questao{{$i}}" id="questao2{{$i}}" value="2" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="questao2{{$i}}"></label>
                                            </div>
                                            
                                        
                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="questao{{$i}}" id="questao3{{$i}}" value="3" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="questao3{{$i}}"></label>
                                            </div>
                                            
                                        
                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="questao{{$i}}" id="questao4{{$i}}" value="4" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="questao4{{$i}}"></label>
                                            </div>
                                            
                                        
                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="questao{{$i}}" id="questao5{{$i}}" value="5" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="questao5{{$i}}"></label>
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