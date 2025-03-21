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
    <div class="card-header" style="min-height: 8em;">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3>
            <center>INSTRUMENTO 16</center>
        </h3>
        <h3>
            <center>NEUTRALIZAÇÃO DOS OBSTÁCULOS DA VENDA<br>(FORÇAS RESTRITIVAS)</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="{{ asset('img/botton_ts.png') }}" style="width: 6em; float:right; margin-right: 1%">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 16</center>
                </h3>
                <h3>
                    <center>NEUTRALIZAÇÃO DOS OBSTÁCULOS DA VENDA (FORÇAS RESTRITIVAS)</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">
                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                            <p class="fonte18">Nesta etapa você está recebendo as definições das 14 Forças Restritivas, assim como os obstáculos que você formulou.</p>
                    </div>
                    
                    
                    <div class="col-12">
                        <p class="fonte18" style="color: blue"><b>A – SEUS OBSTÁCULOS e FREQUÊNCIA</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->

                        <div class="row">
                            <div class="col-12" style="overflow: auto;">
                                <table class="table table-hover table-bordered fonte18">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th style="font-size: 18px; vertical-align: middle; width: 90%; text-align: center;">SEUS OBSTÁCULOS</th>
                                            <th style="font-size: 18px; vertical-align: middle; width: 10%; text-align: center;">FREQUÊNCIA</th>
                                        </tr>    
                                    </thead>
                                    @php $i=1 @endphp
                                    @foreach($data['obstaculos'] as $obs)
                                    @if(!empty($obs))
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$i}} - {{$obs}}</td>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$data['frequencia'][$i-1]}}</td>
                                        </tr>
                                    @endif
                                        @php $i++ @endphp
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <br><br>

                        <p class="fonte18" style="color: blue"><b>B – FORÇAS RESTRITIVAS – DEFINIÇÕES</b></p>
                        
                        <br>
                     
                        <p class="fonte18"><b>R1- Hábito</b></p>
                        <p class="fonte18">Representa a dificuldade do cliente em aderir à nossa proposta, por ela representar algo novo ou diferente do que ele conhece. Apresenta-se com máxima intensidade, quando são oferecidos produtos/serviços inovadores.</p>

                        <p class="fonte18"><b>R2- Receio</b></p>
                        <p class="fonte18">Decorre do instinto de proteção e faz com que o cliente não aceite nossa proposta, temendo ter prejuízos.</p>

                        <p class="fonte18"><b>R3- Preço</b></p>
                        <p class="fonte18">Tendência natural em querer pagar menos ou obter maior prazo de pagamento do que o estabelecido.</p>

                        <p class="fonte18"><b>R4- Reclamação</b></p>
                        <p class="fonte18">Este obstáculo se apresenta quando o cliente não está percebendo os benefícios que espera do produto ou serviço oferecido ou por qualquer outra razão que o incomode.</p>

                        <p class="fonte18"><b>R5- Detalhe</b></p>
                        <p class="fonte18">Representa a dificuldade do cliente para compreender a nossa proposta ou parte dela. Aprofunda-se num aspecto do produto/serviço oferecido ou das condições da proposta e perde-se a visão do conjunto. Pode traduzir insegurança e desconfiança.</p>

                        <p class="fonte18"><b>R6- Ignorância</b></p>
                        <p class="fonte18">Expressa falta de conhecimentos específicos em relação à nossa proposta, o que impede que o cliente possa avaliá-la corretamente.</p>

                        <p class="fonte18"><b>R7- Concorrência</b></p>
                        <p class="fonte18">É a manifestação de desinteresse do cliente em relação à nossa proposta, em função de sua preferência por uma proposta ou produto/serviço concorrente.</p>

                        <p class="fonte18"><b>R8- Concorrência de Amizade</b></p>
                        <p class="fonte18">É o desinteresse do cliente na nossa proposta, em função de seu relacionamento pessoal com um vendedor concorrente.</p>

                        <p class="fonte18"><b>R9- Personalidade Difícil</b></p>
                        <p class="fonte18">Quando o cliente manifesta agressivamente qualquer opinião contrária à nossa proposta. O cliente faz comentários que tendem a desqualificar o vendedor e o provoca consciente ou inconscientemente. Este obstáculo está vinculado às características de personalidade do cliente.</p>

                        <p class="fonte18"><b>R10- Tempo</b></p>
                        <p class="fonte18">Consiste na argumentação do cliente de que não dispõe de tempo para realizar a Reunião de Vendas ou de que não é o momento apropriado para comprar.</p>

                        <p class="fonte18"><b>R11- Corte do Vínculo</b></p>
                        <p class="fonte18">É caracterizado por atitudes do cliente que mostram seu interesse por finalizar a Reunião de Vendas, mesmo que o vendedor não tenha concluído sua apresentação.</p>

                        <p class="fonte18"><b>R12- Decisão Dividida</b></p>
                        <p class="fonte18">Manifesta-se pelo adiamento da decisão porque o comprador afirma que não tem autoridade para decidir sozinho.</p>

                        <p class="fonte18"><b>R13- Ambiente Negativo</b></p>
                        <p class="fonte18">Qualquer atitude do cliente ou do vendedor que possa comprometer o Campo Psicológico e o Diálogo de Vendas.</p>

                        <p class="fonte18"><b>R14- Atitudes Impróprias</b></p>
                        <p class="fonte18">Referem-se às palavras ou atitudes inconvenientes do cliente que prejudicam o Progresso da Venda. Muitas vezes, este obstáculo decorre de falhas na comunicação e a precária Inteligência Emocional do vendedor.</p>

                        <br><br>

                        <p class="fonte18" style="color: blue"><b>C – ALOQUE SEUS OBSTÁCULOS ÀS FORÇAS RESTRITIVAS CONFORME SUAS DEFINIÇÕES.</b></p>

                        <br>

                        <p class="fonte18">Na tabela abaixo, após lidas atentamente as definições das Forças Restritivas, classifique cada um dos obstáculos que você registrou em uma única Força Restritiva e na segunda coluna repita o número de vezes (frequência) que este obstáculo apareceu na Parte 1.</p>
                        <p class="fonte18">Se o argumento não coincide exatamente com uma Força Restritiva, classifique-o por aproximação naquela Força Restritiva que melhor o representa.</p>
                        <p class="fonte18">Leia atentamente as definições e aloque cada obstáculo a uma Força Restritiva.</p>
                        <p class="fonte18">Cada obstáculo só pode ser classificado numa só Força Restritiva.</p>

                    </div>

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form id="formulario" name="formulario" role="form" method="post" action="16_2">
                            {!! csrf_field() !!}
                            
                            @php
                                $forcas = [ 
                                            'R1- Hábito',
                                            'R2- Receio',
                                            'R3- Preço',
                                            'R4- Reclamação',
                                            'R5- Detalhe',
                                            'R6- Ignorância',
                                            'R7- Concorrência',
                                            'R8- Concorrência de Amizade',
                                            'R9- Personalidade Difícil',
                                            'R10- Tempo',
                                            'R11- Corte do Vínculo',
                                            'R12- Decisão Dividida',
                                            'R13- Ambiente Negativo',
                                            'R14- Atitudes Impróprias'
                                        ]
                            @endphp

                            <div class="row">
                                <div class="col-12" style="">
                                    <table class="table table-hover table-bordered fonte18">
                                        <thead class="bg-primary">    
                                            <tr>
                                                <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">FORÇAS RESTRITIVAS</th>
                                                <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Frequência dos Obstáculos</th>
                                            </tr>
                                        </thead>
                                        @php $i=0 @endphp
                                        @foreach($forcas as $forca)
                                            <tr>
                                                <td style="font-size: 18px; vertical-align: middle; width: 90%">{{$forca}}</td>
                                                <td style="text-align: center; font-size: 18px; vertical-align: middle; width: 10%"><input id="freq{{$i}}" name="freq[]" type="text" size="3%" onkeypress="return SomenteNumeroDez(event, this)" onblur="atualizaTotal(this)"></td>
                                            </tr>
                                            @php $i++ @endphp
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary fonte18" type="button" onclick="submitForm()">
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

    var total_aceito = {{ array_sum($data['frequencia']) }};
    var total_digitado = 0;

    function limit(){
        alert(total_digitado+" " +total_aceito);
    }

    function atualizaTotal(){
        total_digitado = 0
        for (let i = 0; i < 14; i++) {
            total_digitado += document.getElementById("freq"+i).value|0;
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

            if(total + total_digitado > total_aceito){
                alert("Só restam " + (total_aceito-total_digitado) + " para preencher");
                return false;
            }

            if ((tecla > 47 && tecla < 58)){
                return true;
            } 
            else {
                if (tecla == 8 || tecla == 0){
                    return true;
                }
                else{
                    return false;
                } 
            }
        }

        function submitForm(){
            if(total_aceito == total_digitado){
                $("#formulario").submit();
            }
            else{
                if(total_aceito-total_digitado == 1){
                    alert("Selecione mais " + (total_aceito-total_digitado) + " frequência!");
                }
                else{
                    alert("Selecione mais " + (total_aceito-total_digitado) + " frequências!");
                }
            }
        }

</script>
<script>window.onload = function(){history.go(+1)};</script>

@endpush