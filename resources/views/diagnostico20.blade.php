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
                <h3><center>INSTRUMENTO 20</center></h3>
        <h3><center>RELATÓRIO DO PROGRESSO</center></h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 20</center>
                </h3>
                <h3>
                    <center>RELATÓRIO DO PROGRESSO</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">

                <div class="col-12">
                    <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>
                    <p class="fonte18">O Relatório do Progresso é o Instrumento que permite acompanhar a evolução (o progresso) do <b>Instrumento 19 – Plano de Ação Quantitativo para Alcançar suas Metas de Venda.</b></p>
                    <p class="fonte18">A importância deste Instrumento é muito grande porque permite que seus Planos de Ação não saiam de controle.</p>

                    <center><img src="../posicionamento/public/img/instrumento20/diag_20_1_new.jpg" style="width: 60%;"></center><br>

                    <p class="fonte18">Esta figura ilustra a diferença entre um Plano de Ação gerenciado e um Plano de Ação não-gerenciado.</p>
                    <p class="fonte18">Quando um Plano de Ação é gerenciado, as possibilidades de alcançar o objetivo desejado são infinitamente maiores.</p>
                    <p class="fonte18">O Plano de Ação define os limites do que deve ser feito e o Relatório de Progresso garante que esses limites sejam respeitados.</p>
                    <p class="fonte18">Este Instrumento é fundamental para você alcançar suas Metas de Venda.</p>

                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>

                    <p class="fonte18">Os resultados que você atribuiu a cada atividade do Relatório de Progresso conforme a escala abaixo apresentada, foram os seguintes:</p>
                    
                    @php
                        $questions = [
                            '<b>1 – Planejado:</b> Em que medida eu levo em conta o que foi planejado como ponto de partida para medir o progresso do meu trabalho? (o que foi planejado corresponde a atividade 1 do instrumento 19)',
                            '<b>2 – Executado:</b> Avalio com objetividade o que já foi executado do Plano de Ação apresentado no Instrumento 19?',
                            '<b>3 – Resultados:</b> Posso apresentar os resultados até agora alcançados de maneira objetiva e fundamentada?',
                            '<b>4 – Pontos Problemáticos:</b> Tenho conhecimento de quais são os problemas (desvios de causa desconhecida) que hoje apresenta meu Plano de Ação?',
                            '<b>5 – Proposição:</b> Tenho propostas claras e fundamentadas para resolver os pontos problemáticos?'
                            ]
                    @endphp

                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover table-bordered" style="width: 100%">
                                <thead class="bg-primary">
                                <tr>
                                    <th style="font-size: 18px; vertical-align: middle;text-align: center">AS ATIVIDADES DO RELATÓRIO DE PROGRESSO</th>
                                    @for($i=1; $i<=5; $i++)
                                        <th style="font-size: 18px; vertical-align: middle;text-align: center">{{$i}}</th>
                                    @endfor
                                </tr>
                                </thead>
                                @php $n=0 @endphp
                                @foreach($questions as $quest)
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle;">{!! $quest !!}</td>
                                        <td @if($retorno[$n] == 1) id="bola" @endif></td>
                                        <td @if($retorno[$n] == 2) id="bola" @endif></td>
                                        <td @if($retorno[$n] == 3) id="bola" @endif></td>
                                        <td @if($retorno[$n] == 4) id="bola" @endif></td>
                                        <td @if($retorno[$n] == 5) id="bola" @endif></td>
                                    </tr>
                                    @php $n++ @endphp
                                @endforeach
                            </table>
                        </div>

                    </div>

                    <br>

                    <p class="fonte18">A seguir, repetimos a escala utilizada nas suas respostas.</p>

                    <p class="fonte18" style="margin-left: 2%">- <b>1:</b> Eu não levo em consideração esta atividade. Reconheço que não sei ou não interessa fazer.</p>

                    <p class="fonte18" style="margin-left: 2%">- <b>3:</b> Faço esta atividade de maneira intuitiva e me apoio na minha experiência, não me preparei especificamente para realizá-la.</p>

                    <p class="fonte18" style="margin-left: 2%">- <b>5:</b> Levo em conta com máximo cuidado e atenção para desenvolver esta atividade. Me preparei para realizá-la.</p>

                    <br>

                    <p class="fonte18">O valor médio de suas respostas é de <b>{{array_sum($retorno) / 5}}</b> na escala de 1 a 5 apresentada.</p>

                    <p class="fonte18">Isto significa que você tem um potencial de melhoria de <b>{{5 - (array_sum($retorno) / 5 )}}</b> pontos neste Instrumento. Você pode melhorar em <b>{{(5 - (array_sum($retorno) / 5 )) * 100 / 5}}%</b> sua eficácia para realizar de maneira profissional o Relatório de Progresso.</p>

                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>

                        <p class="fonte18">Você deve começar dedicando seu esforço na atividade na qual obteve o menor valor, depois a de segundo menor valor e assim sucessivamente.</p>
                        <p class="fonte18">Claro que você também pode melhorar mais de uma atividade simultaneamente.</p>
                        <p class="fonte18">As Recomendações para melhorar seu desempenho nas 5 etapas do Relatório do Progresso são as seguintes:</p>
                        <br>
                        <p class="fonte18">1 – PLANEJADO</p>
                        <p class="fonte18">Esta atividade corresponde ao “O QUE” (What), a primeira atividade do <b>Instrumento 19 – Plano de Ação Quantitativo para Alcançar as Metas de Venda.</b></p>
                        <p class="fonte18">É evidente que esta atividade deve estar claramente definida no seu Plano de Ação, porque é o ponto de partida para formular o Relatório de Progresso.</p>
                        <p class="fonte18">Recomendamos que o que foi planejado seja efetivamente o Foco do Relatório de Progresso. Não se disperse, medindo outras variáveis a não ser “O QUE” DEVE SER REALIZADO.</p>
                        <br>
                        <p class="fonte18">2 – EXECUTADO</p>
                        <p class="fonte18">Em relação à atividade “COMO” (How) do Plano de Ação (Instrumento 19) recomendamos estabelecer Metas, para visualizar quanto você realizou das metas estabelecidas.</p>
                        <p class="fonte18">O objetivo é definir “O QUE” e “QUANTO” foi executado e assim mostrar se você está cumprindo o cronograma (When) do Plano de Ação.</p>
                        <p class="fonte18">Recomendamos estabelecer valores percentuais ao trabalho realizado, assim saberemos quanto da atividade foi realizada para atender o prazo estabelecido no “QUANDO” (When).</p>
                        <br>
                        <p class="fonte18">3 - RESULTADOS</p>
                        <p class="fonte18">Recomendamos que os Resultados sejam apresentados em base quantitativa.</p>
                        <p class="fonte18">Se você atende a recomendação da atividade anterior, utilizando indicadores de desempenho, você conseguirá apresentar os resultados alcançados de maneira objetiva, quantitativa e fundamentada.</p>
                        <p class="fonte18">Uma definição clara dos resultados que devem ser alcançados é a base para poder identificar os pontos problemáticos, ou seja, para identificar os problemas que não estão permitindo alcançar os resultados.</p>
                        <br>
                        <p class="fonte18">4 – PROBLEMAS</p>
                        <p class="fonte18">É o que está impedindo alcançar o objetivo e impactando negativamente no cronograma (QUANDO = When).</p>
                        <p class="fonte18">Definimos problema como sendo um desvio de causa desconhecida. Desvio do que deveria ser, desvio do Indicador.</p>
                        <p class="fonte18">Certamente, os pontos problemáticos surgem na atividade “COMO” (How), ou seja, do que estamos fazendo para alcançar o que foi Planejado (QUE = What). Se estamos fazendo as coisas corretamente, com método.</p>
                        <p class="fonte18">Os pontos problemáticos surgem porque não estamos fazendo bem as coisas.</p>
                        <p class="fonte18">Os Problemas certamente atrasam o trabalho, impactando negativamente o cronograma (QUANDO = When) e aumentando os custos (How Much).</p>
                        <p class="fonte18">A Recomendação é se concentrar nos desvios e procurar encontrar as causas desses desvios.</p>
                        <p class="fonte18">A causa dos Problemas são decisões erradas que tomamos no passado.</p>
                        <p class="fonte18">Neste caso, a Recomendação é estudar técnicas de tomada de decisões, porque decisões erradas se transformam em problemas.</p>
                        <br>
                        <p class="fonte18">5 - PROPOSIÇÃO</p>
                        <p class="fonte18">Finalmente, ajustes devem ser feitos para resolver os problemas, após descobrir as causas desses problemas, como vimos no item anterior.</p>
                    

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