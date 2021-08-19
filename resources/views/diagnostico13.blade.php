@extends('adminlte::page')

@section('content')
<style>
    #bola{
        background: radial-gradient(circle at center,#f00 0%,#f00 0%,#f00 6px,rgba(0,0,0,0) 8px);
        
    }
    #bolaVerde{
        background: radial-gradient(circle at center,#008000 0%,#008000 0%,#008000 8px,rgba(0,0,0,0) 10px);
    }
    #bolaPreenchida{
        background: radial-gradient(circle at center,#f00 6px,#008000 0%,#008000 8px,rgba(0,0,0,0) 10px);
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
                <h3><center>INSTRUMENTO 13</center></h3>
        <h3><center>QUALIFICAÇÃO DOS CLIENTES POTENCIAIS</center></h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="{{ asset('img/botton_ts.png') }}" style="width: 6em; float:right; margin-right: 1%">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 13</center>
                </h3>
                <h3>
                    <center>QUALIFICAÇÃO DOS CLIENTES POTENCIAIS</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">

                <div class="col-12">
                    <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>

                    <p class="fonte18">Depois de ter feito uma lista de possíveis clientes para entrar em contato, é necessário determinar se eles realmente têm potencial para se beneficiar com os produtos ou soluções oferecidas por você e também se tem condições de compra.</p>
                    <p class="fonte18">A Qualificação é a segunda etapa da Metodologia das Vendas Consultivas.</p>
                    <p class="fonte18">A Qualificação é essencial para excluir possíveis clientes que não tem potencial de conversão para Clientes Reais.</p>
                    <p class="fonte18">O gráfico seguinte mostra como o processo de Qualificação evolui na medida em que obtemos mais informações dos Clientes Potenciais:</p>

                    <center><img src="../posicionamento/public/img/instrumento13/diag_13_1_new.jpg" style="width: 60%;"></center><br>

                    <p class="fonte18">Os potenciais de conversão entre as etapas e as técnicas para aumentar esse potencial, são analisados no INSTRUMENTO 18 da Metodologia: O Funil de Vendas, com Objetivos e Métricas de Avanço.</p>
                    <p class="fonte18">Em síntese, com a Qualificação dos Clientes Potenciais, se busca estabelecer uma relação entre o custo de aquisição de clientes e quanto se poderá ganhar com esses clientes.</p>

                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>

                    <p class="fonte18">O resultado das respostas que você deu ao questionário inicial leva ao seguinte Perfil Diagnóstico:</p>
                    
                    <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr>
                                <td rowspan="2" style="min-width: 27em; text-align: center;vertical-align: middle;"><b>ATIVIDADES DA QUALIFICAÇÃO:<br>SEUS RESULTADOS</b></td>
                                <td colspan="5" style="text-align: center;"><b>Escala</b></td>
                            </tr>
                            <tr style="text-align: center;">
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                            </tr>
                            </thead>
                            @php
                                $questions = [  
                                                '1. O Cliente Potencial tem recursos financeiros para comprar seus produtos?',
                                                '2. Em que medida a pessoa com a qual estou falando tem o poder de decisão para fazer a compra?',
                                                '3. Em que medida o Cliente Potencial realmente necessita dos produtos que lhe estou oferecendo? Ele tem urgência para comprar?',
                                                '4. A decisão de comprar levará muito tempo?',
                                                '5. Posso ter dificuldades no Processo de Vendas para este cliente?',
                                                '6. Em que medida as reais necessidades do cliente podem ser atendidas pelos produtos e soluções que estou oferecendo?'
                                            ]
                            @endphp

                            @for($i=0; $i<6; $i++)
                            <tr>
                                <td>{!! $questions[$i] !!} </td>
                                <td @if($retorno[$i] == 1) id="bola" @endif></td>
                                <td @if($retorno[$i] == 2) id="bola" @endif></td>
                                <td @if($retorno[$i] == 3) id="bola" @endif></td>
                                <td @if($retorno[$i] == 4) id="bola" @endif></td>
                                <td @if($retorno[$i] == 5) id="bolaPreenchida" @endif id="bolaVerde"></td>
                            </tr>
                            @endfor
                        </table>
                    <br>

                    <p class="fonte18">Conclusões</p>

                    <p class="fonte18">1 – Posição absolutamente negativa em relação à questão colocada.<br>
                    2 – Atende com restrições fortes o requerido por esta condição<br>
                    3 – Atende de maneira intermediária.<br>
                    4 – Atende esta condição acima da média.<br>
                    5 – Apresenta a condição ideal em relação à questão colocada.</p>

                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered fonte18">
                                <thead class="bg-primary">
                                <tr>
                                    <th style="font-size: 18px; text-align: center; width: 1000px; vertical-align: middle;">POTENCIAL DE MELHORIA</th>
                                    <th style="font-size: 18px; text-align: center; width: 100px; vertical-align: middle;" >Em Valores Absolutos</th>
                                    <th style="font-size: 18px; text-align: center; width: 100px; vertical-align: middle;">Percentual da distância com o valor ideal</th>
                                </tr>
                                </thead>
                                @for($i = 0; $i < 6; $i++)
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$questions[$i]}}</td>
                                    <td style="font-size: 18px; vertical-align: middle; text-align: center;">{{ 5 - $retorno[$i] }}</td>
                                    <td style="font-size: 18px; vertical-align: middle; text-align: center;">{{ (5 - $retorno[$i]) * 100 / 5 }}%</td>
                                </tr>
                                @endfor
                                
                            </table>
                        </div>
                    </div>
                    <br>
                    
                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>

                        <p class="fonte18">Qualificar é o processo de reunir informações para entender o que seu cliente está buscando, descobrir suas necessidades e avaliar se ele tem valor para seu objetivo de Vendas.</p>
                        <p class="fonte18">Mais de 60% das vendas perdidas é o resultado de clientes que não foram adequadamente qualificados.</p>
                        <p class="fonte18">A primeira Recomendação não é partir da Prospecção e ir diretamente para a apresentação dos produtos.</p>
                        <p class="fonte18">Antes da apresentação dos produtos você tem que saber se o Cliente Potencial quer, pode comprar e precisa da sua solução, para então decidir se é conveniente agendar uma apresentação sobre os produtos que você oferece.</p>
                        <p class="fonte18">Procure obter sistematicamente as informações requeridas pelos 6 Fatores da Metodologia para qualificar Clientes Potenciais, começando pela atividade que apresenta o valor mais baixo em seu Diagnóstico.</p>
                        <p class="fonte18">As informações podem ser obtidas de maneira direta, com o próprio Cliente Potencial ou através de fontes secundárias, por exemplo, com pessoas próximas ao Cliente Potencial.</p>
                        <p class="fonte18">Você pode colocar os Clientes Potenciais em um gráfico de pirâmide como o seguinte, no nível em que se encontram, conforme as informações que você tem deles:</p>

                        <center><img src="../posicionamento/public/img/instrumento13/diag_13_2_new.jpg" style="width: 40%;"></center>
                       <!--  <div class="row">
                            <div class="col-12" style="overflow: auto;">
                                <table class="tg table" style="border: none">
                                    <tr>
                                        <td rowspan="3" style="font-size: 18px; vertical-align: middle; text-align: center; width: 10px; border: none; padding: 0"><img src="../posicionamento/public/img/instrumento13/diag_13_2.jpg"></td>
                                        <td style="font-size: 18px; vertical-align: middle; width: 1000px"><input type="text" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle; width: 1000px"><input type="text" style="width: 100%;"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle; width: 1000px"><input type="text" style="width: 100%;"></td>
                                    </tr>
                                </table>
                            </div>
                        </div> -->
                        <br>

                        <p class="fonte18">Na base (Nível 3) você poderá registrar os Clientes Potenciais sobre os quais você sabe muito pouco em relação a sua Qualificação.</p>
                        <p class="fonte18">O objetivo é movê-los para os níveis seguintes na medida em que você obtém mais informações sobre eles, para efeito de QUALIFICAÇÃO.</p>
                        <p class="fonte18">No nível 2 você poderá registrar os Clientes Potenciais semiqualificados, ou seja, aqueles sobre os quais você ainda não tem todas as informações necessárias para qualificá-los com segurança.</p>
                        <p class="fonte18">Assim, em cada nível ascendente da Pirâmide se situam os Clientes Potenciais mais qualificados.</p>
                        <p class="fonte18">Este Gráfico de Pirâmide é seu ponto de partida. Ele é dinâmico porque na medida em que você obtém mais informações sobre os Clientes Potenciais, eles vão avançando de Nível até que, alcançando o Nível 1, você se sentirá confortável para agendar a primeira reunião de Apresentação.</p>
                        <p class="fonte18">A Matriz seguinte complementa o Gráfico de Pirâmide anterior e serve para que você posicione o resultado da qualificação dos Clientes Potenciais que você fez a fim de identificar os potenciais de compras.</p>
                        <p class="fonte18">Registre na Matriz os clientes que estão sendo Qualificados num dos quatro quadrantes, conforme a combinação dos dois eixos:</p>
                        <p class="fonte18">- Capacidade de Compra<br> 
                        - Intenção de Compra</p>

                        <center><img src="../posicionamento/public/img/instrumento13/diag_13_3_new.jpg" style="width: 50%;"></center><br>

                        <p class="fonte18">- Quanto melhor for feita a Prospecção, maior será a taxa de conversão de Clientes Potenciais para Clientes Potenciais Qualificados, aqueles que têm potencial.</p>
                        <p class="fonte18">- Quanto melhor seja sua QUALIFICAÇÃO DE CLIENTES, maior será sua taxa de conversão para a etapa seguinte, que é a APRESENTAÇÃO DOS PRODUTOS.</p>

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