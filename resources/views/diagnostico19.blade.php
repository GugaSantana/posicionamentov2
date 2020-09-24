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
    <div class="card-header" style="min-height: 8em;">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3><center>INSTRUMENTO 19</center></h3>
        <h3><center>PLANO DE AÇÃO QUANTITATIVO PARA ALCANÇAR AS METAS<br>DE VENDAS</center></h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 19</center>
                </h3>
                <h3>
                    <center>PLANO DE AÇÃO QUANTITATIVO PARA ALCANÇAR AS METAS DE VENDAS</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">

                <div class="col-12">
                    <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>
                    <p class="fonte18">Vamos tratar de seus resultados e das recomendações específicas para você utilizar um importante e valioso instrumento que lhe permitirá aumentar significativamente a produtividade do seu trabalho e alcançar as metas de vendas com maior facilidade.</p>
                    <p class="fonte18">Estamos chegando aos últimos instrumentos da metodologia, que são os integradores de toda a lógica apresentada nos primeiros 18 instrumentos.</p>
                    <p class="fonte18">No instrumento anterior foi operacionalizado o FUNIL DE VENDAS.</p>
                    <p class="fonte18">Neste instrumento é apresentada a metodologia para desenvolver os Planos de Ação que permitam alcançar os objetivos que você se propõe alcançar.</p>
                    <p class="fonte18">O processo de administração profissional consiste basicamente em Tomar Decisões e Implementar essas decisões tomadas. Este instrumento serve para implementar as decisões que você tomou para alcançar suas metas.</p>

                    <center><img src="../posicionamento/public/img/instrumento19/diag_19_1.jpg" style="width: 50%;"></center><br>

                    <p class="fonte18">Trata-se de um Plano de Ação estruturado que permitirá o deslocamento da Etapa A - Decisão tomada, porém não implementada até a Etapa C - quando a Decisão tomada já foi implementada e os resultados são alcançados.</p>
                    <p class="fonte18">As atividades que devem ser gerenciadas pelo Plano de Ação proposto nesta metodologia são os seguintes:</p>
                    <p class="fonte18">1 – O que será feito (What)<br>
                    2 – Quando será feito (When)<br>
                    3 – Quem fará (Who)<br>
                    4 – Porque de ser feito (Why)<br>
                    5 – Onde será feito (Where)<br>
                    6 – Como será feito (How)<br>
                    7 – Quanto custará fazer (How Much)</p>
                    <p class="fonte18">Denominamos este instrumento de 5W+2H, que é a sigla formada pelas iniciais em inglês das 7 atividades que devem ser desenvolvidas para implementar uma decisão tomada e sobre as quais você respondeu na primeira parte deste instrumento.</p>
                    

                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>

                    <p class="fonte18">Levando em conta as definições acima para cada uma das 7 atividades, os resultados apresentados por suas respostas são os seguintes:</p>
                    
                    @php
                        $questions = [
                            '<b>1 – </b>Em que medida você define <b>O Que</b> deve ser feito para alcançar os objetivos propostos?',
                            '<b>2 – </b>Em que medida você estabelece <b>Quando</b> (em que data) a atividade anterior deve ser concluída?',
                            '<b>3 – </b>Você estabelece <b>Quem</b> será o responsável em cada etapa do plano (pode ser outra pessoa e não você) pela realização do que deve ser feito?',
                            '<b>4 – </b>Você tem clara a razão, o <b>Porquê</b> a atividade descrita no item 1 deve ser realizada?',
                            '<b>5 – </b>Você define <b>Onde</b>, em que local, o trabalho deve ser realizado?',
                            '<b>6 – </b>Você presta atenção, você se preocupa em relação a <b>Como</b> (com que metodologia) o trabalho deve ser realizado para alcançar os objetivos?',
                            '<b>7 – </b>Você define <b>Quanto</b> custa implementar o Plano de Ação para alcançar o que você definiu que deve ser feito, na etapa 1?'
                            ]
                    @endphp

                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover table-bordered" style="width: 100%">
                                <thead class="bg-primary">
                                <tr>
                                    <th style="font-size: 18px; vertical-align: middle;text-align: center">ATIVIDADES QUE DEVEM SER CONSIDERADAS PARA FAZER UM PLANO DE AÇÃO</th>
                                    @for($i=1; $i<=10; $i++)
                                        <th style="font-size: 18px; vertical-align: middle;text-align: center">{{$i}}</th>
                                    @endfor
                                </tr>
                                </thead>
                                @php $i=0 @endphp
                                @foreach($questions as $quest)
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle;">{!! $quest !!}</td>
                                        <td @if($retorno[$i] == 1) id="bola" @endif></td>
                                        <td @if($retorno[$i] == 2) id="bola" @endif></td>
                                        <td @if($retorno[$i] == 3) id="bola" @endif></td>
                                        <td @if($retorno[$i] == 4) id="bola" @endif></td>
                                        <td @if($retorno[$i] == 5) id="bola" @endif></td>
                                        <td @if($retorno[$i] == 6) id="bola" @endif></td>
                                        <td @if($retorno[$i] == 7) id="bola" @endif></td>
                                        <td @if($retorno[$i] == 8) id="bola" @endif></td>
                                        <td @if($retorno[$i] == 9) id="bola" @endif></td>
                                        <td @if($retorno[$i] == 10) id="bolaPreenchida" @endif id="bolaVerde"></td>
                                    </tr>
                                    @php $i++ @endphp
                                @endforeach
                            </table>
                        </div>

                    </div>

                    <br>

                    <p class="fonte18">Este é seu perfil de resultados, ou seja, seu nível de competência para formular um Plano de Ação metodologicamente consistente.</p>
                    <p class="fonte18">No quadro seguinte são apresentadas as defasagens que você registrou em cada atividade para desenvolvê-la com excelência, indo desde as atividades mais críticas às menos críticas.</p>

                    
                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr class="center">
                                <th style="font-size: 18px; vertical-align: middle; width: 600px">Atividades em ordem decrescente de prioridade de ajuste</th>
                                <th style="font-size: 18px; vertical-align: middle; width: 600px">Grau de Defasagem com a Posição Ideal de domínio pleno da atividade</th>
                            </tr>
                            </thead>
                            @foreach($ordem as $key => $value)
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle; width: 80%">{!! $questions[$key] !!}</td>
                                    <td style="font-size: 18px; vertical-align: middle; width: 20%; text-align: center;">{{10 - $value}}</td>
                                </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                    <br>
                    <p class="fonte18">As atividades mais críticas, portanto, são aquelas as quais você atribuiu os valores mais baixos.</p>

                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>

                        <p class="fonte18">A recomendação para este instrumento é ler atentamente as definições das sete atividades do Plano de Ação e a seguir as respectivas orientações para melhorar seu desempenho em cada uma das atividades que compõem um Plano de Ação 5W +2H</p>

                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered fonte18">
                            <tr>
                                <td style="vertical-align: top; width: 15%">1 – QUE – <br>(WHAT)</td>
                                <td style="padding-left: 2%;">
                                <p class="fonte18">Você tem que definir com precisão o que você deve fazer para alcançar seu objetivo.<br>
                                São as atividades que terão que ser realizadas.<br>
                                Você não deve utilizar expressões genéricas para definir o que deve ser feito.<br>
                                As atividades têm de ser definidas de maneira que possam ser alcançadas, isto é, devem ser especificas e administráveis. Por tanto às vezes será necessário quebrar uma atividade muito ampla em atividades de menor abrangência.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 10%">2 – QUANDO – <br>(WHEN)</td>
                                <td style="padding-left: 2%;">
                                <p class="fonte18">Todas as atividades devem ter um prazo para serem concluídas.<br>
                                Sem um prazo definido para concluir cada etapa, você não pode gerenciar o Plano de Ação de modo a alcançar o objetivo que você se propõe dentro do prazo que você necessita.<br>
                                O prazo que você estabelecer tem que ser realista, levando em conta os recursos e o tempo de que você dispõe.<br>
                                Naturalmente, se aumenta o investimento a ser feito para desenvolver o Plano de Ação (How Much), você pode reduzir os prazos.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 10%">3 – QUEM – <br>(WHO)</td>
                                <td style="padding-left: 2%;">
                                <p class="fonte18">Esta etapa consiste em registrar quem é responsável para a realização da atividade 1 (WHAT) . Provavelmente seja você mesmo, mas é possível que você delegue algumas etapas ou atividades em outra pessoa.<br>
                                Sempre temos que ter alguém responsável pela etapa. Isto é obrigatório. Se não definirmos quem será responsável pela realização da etapa, não poderemos cobrar resultados.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 10%">4 – PORQUE – <br>(WHY)</td>
                                <td style="padding-left: 2%;">
                                <p class="fonte18">Esta etapa é importante porque apresenta a razão, o motivo pelo qual a etapa 1 ( WHAT) deve ser realizada.<br>
                                Se não existe uma causa, uma razão clara e necessária, você pode eliminar a atividade que registrou na etapa 1, a etapa que define o QUE fazer.<br>
                                Tudo “QUE” fazer tem que ter um “PORQUE” FAZER.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 10%">5 – ONDE – <br>(WHERE)</td>
                                <td style="padding-left: 2%;">
                                <p class="fonte18">É claro que as atividades devem ser desenvolvidas em algum lugar.<br>
                                Às vezes em outro lugar que não onde você está, neste caso se impõe uma logística. Identifique claramente o local onde deve ser realizada cada tarefa, para que você possa tomar as providências necessárias. Esta atividade não pode comprometer o prazo que você estabeleceu para finalizar esta atividade (atividade 3 – When)</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 10%">6 – COMO – <br>(HOW)</td>
                                <td style="padding-left: 2%;">
                                <p class="fonte18">Nesta atividade você tem que estabelecer como será realizada cada etapa do Plano de Ação. Refere-se ao método que você vai utilizar.<br>
                                Você tem que programar esta atividade, porque não se pode improvisar na realização das etapas para não comprometer o cronograma (atividade 2 – QUANDO). Pode ser necessário que você tenha que se preparar, que estudar ou buscar ajuda de outras pessoas.<br>
                                Realizar corretamente o “COMO” significa evitar erros e aumentar a produtividade na realização do Plano de Ação, garantindo o cumprimento dos prazos (WHEN).</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 10%">7 – QUANTO CUSTARA – <br>(HOW MUCH)</td>
                                <td style="padding-left: 2%;">
                                <p class="fonte18">Toda atividade tem um custo e nesta etapa deve ser definido que investimento é necessário para realizar cada etapa.<br>
                                Observe que tempo é dinheiro. Se você não tem que comprar nada para realizar uma atividade, você no mínimo dedicará tempo para realizá-la e seu tempo também é dinheiro. Estime o custo do tempo que você dedicar a cada atividade.</p>
                                </td>
                            </tr>
                            
                            </table>
                        </div>
                    </div>

                    <br>

                    <p class="fonte18">Aplique estas recomendações para aumentar sua capacidade de desenvolver um Plano de Ação Profissional e metodologicamente consistente.</p>
                    <p class="fonte18">Procure medir seu progresso no domínio deste instrumento, até alcançar o ponto 10 da escala, para cada atividade, que é a posição ideal.</p>
                    <p class="fonte18">Parta dos resultados que você obteve em seu Diagnóstico.</p>
                    <p class="fonte18">Este instrumento é um valioso suporte para os outros instrumentos desta metodologia, e ele forma parte das recomendações para implementar vários instrumentos já apresentados.</p>
                    <p class="fonte18">Utilize o formulário abaixo: Plano de Ação 5W + 2H, cada vez que você tiver que elaborar um de plano de ação</p>
                    
                    <br>
                    
                    <p class="fonte18"><h4><center>PLANO DE AÇÃO</center></h4></p>
                    
                    OBJETIVO: _________________________________________________________
                    <br><br>
                    
                    @php
                    $cabecalho = [
                        'O Que fazer<br>(What)', 
                        'Quando será feito<br>(When)', 
                        'Quem fará<br>(Who)',
                        'Porque isto será feito<br>(Why)',
                        'Onde será feito<br>(Where)',
                        'Como será feito<br>(How)',
                        'Quanto custará fazer<br>(How Much)'
                        ]
                    @endphp
                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr>
                            @foreach($cabecalho as $title)
                                <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">{!! $title !!}</th>
                            @endforeach
                            </tr>
                            </thead>
                            @for($i=1; $i <= 4; $i++)
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$i}} - </td>
                                    <td style="font-size: 18px; vertical-align: middle;"></td>
                                    <td style="font-size: 18px; vertical-align: middle;"></td>
                                    <td style="font-size: 18px; vertical-align: middle;"></td>
                                    <td style="font-size: 18px; vertical-align: middle;"></td>
                                    <td style="font-size: 18px; vertical-align: middle;"></td>
                                    <td style="font-size: 18px; vertical-align: middle;"></td>
                                </tr>
                            @endfor
                            </table>
                        </div>
                    </div>

                    <br>

                    <p class="fonte18">Este instrumento também poderá ser utilizado para complementar e detalhar mais o Plano de Ação para implementar as Recomendações , instrumento apresentado na Autogestão da Metodologia, que reproduzimos a seguir:</p>

                    <center><img src="../posicionamento/public/img/instrumento19/diag_19_2.png" style="width: 70%;"></center><br>

                    <p class="fonte18">Se você utilizar os Planos de Ação 5W +2H para implementar as recomendações feitas, você estará implementando o Kaizen.</p>
                    <p class="fonte18">Kaizen é uma técnica japonesa de Melhoria Continua das atividades. Consiste em aplicar cada vez mais metodologia no trabalho para obter melhores resultados com o passar do tempo, com pode ser representado na figura seguinte:</p>

                    <center><img src="../posicionamento/public/img/instrumento19/diag_19_3.jpg" style="width: 70%;"></center><br>
                    
                    <p class="fonte18">O Kaizen acaba sendo uma filosofia de trabalho, caracterizada por fazer cada vez melhor as mesmas coisas aumentando assim a eficácia e melhorando sistematicamente os resultados.</p>
                    
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