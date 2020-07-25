@extends('adminlte::page')

@section('content')

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

    #bola{
            background: radial-gradient(circle at center,#f00 0%,#f00 0%,#f00 6px,rgba(0,0,0,0) 8px);
        }

    canvas {
        display: block;
        margin: 0 auto;
    }

</style>

<div class="card card-primary">
    <div class="card-header">
        <h3><center>INSTRUMENTO 12</center></h3>
        <h3><center>PROSPECÇÃO DE CLIENTES</center></h3>
        <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 14%;float: right;margin-top: -10%;">
    </div>
    <div class="card-body">

                    <div class="col-12">
                    <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>
                    <p class="fonte18">Sabemos que as conseqüências de uma Prospecção feita incorretamente fragilizam o processo de vendas porque traz os seguintes resultados negativos:</p>
                    <p class="fonte18">A – Poucos clientes novos entrando e baixa oxigenação na carteira.</p>
                    <p class="fonte18">B – A Carteira de clientes começa a diminuir / encolher com o processo de perda natural.</p>
                    <p class="fonte18">C – Menos clientes potenciais conhecem sua empresa.</p>
                    <p class="fonte18">D – Menor probabilidade de vendas para potenciais clientes que você contatou tempos atrás e voltam meses depois.</p>
                    <p class="fonte18">E – Quantidade menor de indicações e recomendações.</p>
                    <p class="fonte18">F – Perda de participação de mercado.</p>
                    <p class="fonte18">G – Estagnação e retrocesso</p>
                    <p class="fonte18">Determinadas atividades devem ser desenvolvidas para garantir uma prospecção de qualidade, com o objetivo de gerar uma ampla base de clientes potenciais. </p>

                    <center><img src="../posicionamento/public/img/instrumento12/diag_12_1.jpg" style="width: 50%; "></center>
                    <br>
                    
                    <p class="fonte18">A prospecção é a primeira Etapa do Funil de Vendas, uma técnica fundamental para a Gestão das Vendas Consultivas. O Funil de Vendas será apresentado no Instrumento 18 – O Funil de Vendas com objetivos e métricas de avanço.</p>
                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>

                    {!! $texto !!}

                    <br>

                    <!-- CANVAS -->
                    <!-- <center>
                    <canvas id="grafico" width="520" height="150">

                        <script>

                            var size = 40;
                            var canvas = document.getElementById('grafico');
                            var pincel = canvas.getContext('2d');
                            var margem = 10;
                            pincel.textAlign = "center";
                            pincel.font = 20 + "px Arial";

                            pincel.beginPath();
                            for (let i = 1; i <= 10; i++) {
                                pincel.rect((size * i) + margem, 10, size, size);
                                pincel.fillText(i, (size * i) + margem + 20, 36);
                                if(i == {{$numEscala}}){
                                    pincel.stroke();
                                    pincel.beginPath();
                                    pincel.strokeStyle = 'red';
                                    pincel.arc((size*i) + margem + 20, 30, 15, 0, 2 * Math.PI);   
                                    pincel.stroke();
                                    pincel.beginPath();
                                    pincel.strokeStyle = 'black';
                                }
                            }
                            
                            pincel.font = 16 + "px Arial";
                            
                            pincel.fillText('Baixa', margem + 60, 70);
                            pincel.fillText('qualidade da', margem + 60, 70+20);
                            pincel.fillText('Prospecção', margem + 60, 70+40);
                            
                            pincel.fillText('Alta', margem + 420, 70);
                            pincel.fillText('qualidade da', margem + 420, 70+20);
                            pincel.fillText('Prospecção', margem + 420, 70+40);
                            
                            pincel.stroke();

                        </script>

                    </canvas>
                </center> -->

                    <p class="fonte18">As respostas que levaram a este diagnóstico, e que você deu na primeira parte deste instrumento são as seguintes: </p>

                    @php

                    $questions = [
                        '1 - Você sabe, com 100% de certeza, de onde vêm, ou seja como se originam os clientes novos? Como eles surgem?',
                        '2 – Você tem um indicador de desempenho para medir os resultados e a eficiência de suas prospecções?',
                        '3 – Você tem um planejamento e um cronograma de ações específicas de prospecção de novos clientes?',
                        '4 – Estes Planos de Ação são executados fielmente?',
                        '5 – O perfil de seu cliente ideal com o qual você quer trabalhar, está claramente definido?',
                        '6 – Você leva em consideração esse perfil definido na hora de prospectar?',
                        '7 – Sua Proposta está claramente definida e é comunicada para atrair novos clientes?',
                        '8 – Você sabe qual é o ciclo médio de fechamento entre o primeiro contato com um cliente potencial e o fechamento da venda. (horas, dias, semanas, meses)?',
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

                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered fonte18">
                                <thead class="bg-primary">
                                <tr>
                                    <th style="font-size: 18px; text-align: center; width: 1000px"></th>
                                    <th style="font-size: 18px; text-align: center; width: 100px">SIM</th>
                                    <th style="font-size: 18px; text-align: center; width: 100px">NÃO</th>
                                </tr>
                                </thead>
                                @for($i = 0; $i < 18; $i++)
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$questions[$i]}}</td>
                                    <td @if($resposta[$i] == 's') id="bola" @endif></td>
                                    <td @if($resposta[$i] == 'n') id="bola" @endif></td>
                                </tr>
                                @endfor
                                
                            </table>
                        </div>
                    </div>
                    <br>
                    <p class="fonte18" style="color:red;"><b>Você teve {{number_format($percentNao, 2)}}% de respostas NÃO em relação a como deve ser feita uma Prospecção profissional</b></p>
                    @if($s >= 15)
                        <p class="fonte18">Excelente!!  você tem um desempenho muito profissional e eficaz na maneira que desenvolve a atividade de Prospecção.</p>
                        <p class="fonte18">Mantenha este nível para sustentar seu sucesso profissional.</p>
                    @endif
                    
                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>

                        @if($s <= 10)
                            <p class="fonte18">Você tem que desenvolver de maneira sistemática os conteúdos das atividades da Prospecção profissional que são apresentados a seguir.</p>
                            <p class="fonte18">Recomendamos se concentrar, trabalhar e desenvolver suas competências nas 18 atividades propostas para implementar uma Prospecção de Clientes eficaz.</p>
                            <p class="fonte18">Comece pelas atividades mais críticas, ou seja, aquelas que receberam NÃO como resposta, destacadas na relação em vermelho. </p>
                            <p class="fonte18">Procure complementar seu desenvolvimento buscando informações e estudando outros conteúdos complementares sobre estas atividades disponíveis na internet. </p>
                        @elseif($s <= 14)
                            <p class="fonte18">Você tem que desenvolver de maneira sistemática os conteúdos das atividades da Prospecção profissional que são apresentados a seguir.</p>
                            <p class="fonte18">Recomendamos se concentrar, trabalhar e desenvolver suas competências nas 18 atividades propostas para implementar uma Prospecção de Clientes eficaz.</p>
                            <p class="fonte18">Comece pelas atividades mais críticas, ou seja, aquelas que receberam NÃO como resposta, destacadas na relação em vermelho. </p>
                            <p class="fonte18">Procure complementar seu desenvolvimento buscando informações e estudando outros conteúdos complementares sobre estas atividades disponíveis na internet. </p>
                        @else 
                            <P class="fonte18">Você já pratica uma Prospecção de Clientes consistente e eficaz.</p>
                            <P class="fonte18">Todavia, sempre há espaço e possibilidade de melhoria.</p>
                            <P class="fonte18">Você tem que desenvolver de maneira sistemática os conteúdos das atividades da Prospecção profissional que são apresentados a seguir.</p>
                            <P class="fonte18">Recomendamos se concentrar, trabalhar e desenvolver suas competências nas 18 atividades propostas para implementar uma Prospecção de Clientes eficaz.</p>
                            <P class="fonte18">Comece pelas atividades críticas, se houver, ou seja, aquelas que receberam NÃO como resposta, destacadas na relação em vermelho. </p>
                            <P class="fonte18">Procure complementar seu desenvolvimento buscando informações e estudando outros conteúdos complementares sobre estas atividades disponíveis na internet. </p>
                        @endif

                        <div class="row">
                            <div class="col-12" style="overflow: auto;">
                                <table class="table table-hover table-bordered fonte18">
                                    @for($i = 0; $i < 18; $i++)
                                    <tr @if($resposta[$i] == 'n') style="background-color: red;" @endif>
                                        <td style="font-size: 18px; vertical-align: middle;">{{$questions[$i]}}</td>
                                    </tr>
                                    @endfor
                                </table>
                            </div>
                        </div>

                        <br>
                        <p class="fonte18">Para melhorar o desempenho de algumas atividades sugerimos consultar as recomendações dos seguintes instrumentos da metodologia:</p>

                        @php
                        $atividades = [
                            ['ATIVIDADE 3',	'Instrumento 19 – Planos de Ação quantitativos para alcançar as metas'],
                            ['ATIVIDADE 5',	'Instrumento 11 – Definição do perfil do cliente ideal'],
                            ['ATIVIDADE 6',	'Instrumento 11 – Definição do perfil do cliente ideal'],
                            ['ATIVIDADE 8',	'Instrumento 18 – O Funil de Vendas como objetivos e metas de avanço'],
                            ['ATIVIDADE 9',	'Instrumento 15 - Avaliação da quantidade e da qualidade dos meus argumentos de vendas. (Forças Propulsoras)<br>Instrumento 16 – Neutralização de obstáculos. (Forças Restritivas)'],
                            ['ATIVIDADE 12',	'Instrumento 19 – Planos de Ação quantitativos para alcançar as metas'],
                            ['ATIVIDADE 17',	'Instrumento 15 - Avaliação da quantidade e da qualidade dos meus argumentos de vendas. (Forças Propulsoras)'],
                            ['ATIVIDADE 18',	'Instrumento 18 – O Funil de Vendas como objetivos e metas de avanço']
                            ];
                        @endphp

                        <div class="row">
                            <div class="col-12" style="overflow: auto;">
                                <table class="table table-hover table-bordered fonte18">
                                    @for($i = 0; $i < 8; $i++)
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle; width: 100px">{!! $atividades[$i][0] !!}</td>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px">{!! $atividades[$i][1] !!}</td>
                                    </tr>
                                    @endfor
                                </table>
                            </div>
                        </div>
                        <br>

                        <!-- RESPOSTA DE ACORDO COM REQUISIÇÃO -->
                        <!-- <p class="fonte18"><h4>Diagnóstico - $retorno['titulo']</h4></p>
                        <p class="fonte18">$retorno['diagnostico']</p>
                        <p class="fonte18"><h4>Recomendação - $retorno['titulo']</h4></p>
                        <p class="fonte18">$retorno['recomendacao']</p> -->
                        <br>
                        <center><a href="/autogestao" class="fonte18"><span class="fa fa-arrow-circle-right" style="color:red; font-size: 22px"></span> Ir para Planilha de Autogestão</a></center>
                        
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
@endpush