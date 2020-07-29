@extends('adminlte::page')

@section('content')

<style>
    .card .table td,
    .card .table th {
        white-space: normal;
    }

    #bola{
        background: radial-gradient(circle at center,#f00 0%,#f00 0%,#f00 6px,rgba(0,0,0,0) 8px);
        
    }
    #bolaVerde{
        background: radial-gradient(circle at center,#008000 0%,#008000 0%,#008000 8px,rgba(0,0,0,0) 10px);
    }
    #bolaRed{
        background: radial-gradient(circle at center,#f00 0%,#f00 0%,#f00 8px,rgba(0,0,0,0) 10px);
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
        font-size: 16px;
        padding: 10px 5px;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        word-break: normal;
        border-color: black;
    }

    .tg th {
        font-family: Arial, sans-serif;
        font-size: 16px;
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
                <h3><center>INSTRUMENTO 3</center></h3>
        <h3><center>MEU PERFIL COMO PROFISSIONAL DE VENDAS</center></h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 3</center>
                </h3>
                <h3>
                    <center>MEU PERFIL COMO PROFISSIONAL DE VENDAS</center>
                </h3>
            </div>
        </div>
    </div>
    <div class="card-body">

                    <div class="col-12">
                        <h4><center>Diagnóstico e Recomendações</center></h4>
                        <br>
                    <p class="fonte18">Para ser bem-sucedido, o profissional de vendas deve ter um conjunto de competências relevantes e específicas. No questionário deste instrumento que você respondeu, foram apresentadas 19 competências de vendas.</p>
                    <p class="fonte18">Foi feito seu diagnóstico em relação ao domínio que você tem delas, assim como recomendações para melhorá-las.</p>
                    <p class="fonte18">Melhorar uma competência é resolver desvios, conceito apresentado no Instrumento anterior.</p>
                    <p class="fonte18">O desvio que deve ser resolvido é o hiato, isto é, a distância que existe entre o domínio ideal da competência e a medida em que essa competência está presente no exercício cotidiano de sua atividade profissional.</p>
                    <p class="fonte18">Este conceito de distância entre o domínio pleno das competências e o domínio atual dessas competências está ilustrado na figura seguinte:</p>
                   
                    <center><img src="../posicionamento/public/img/instrumento3/diag3_1_new.jpg" style="width: 60%;"></center>
                   
                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>

                    <p class="fonte18">Como diagnóstico, a seguir são apresentadas as competências para vendas que você apresenta conforme as respostas que você deu ao questionário deste instrumento.</p>

                    <!-- Primeira tabela ordem de prioridade-->
                        
                        <table class="table table-hover table-bordered">
                            <tr class="bg-primary">
                                <th colspan="11"><center><b>HIATO DAS COMPETÊNCIAS</b></center></th>
                            </tr>
                            <tr>
                                <td rowspan="2" style="min-width: 27em; text-align: center;vertical-align: middle;"><b>Competências</b></td>
                                <td colspan="10" style="text-align: center;"><b>Alteração de Prioridades</b></td>
                            </tr>
                            <tr style="text-align: center;">
                                <td style="width: 3%">1</td>
                                <td style="width: 3%">2</td>
                                <td style="width: 3%">3</td>
                                <td style="width: 3%">4</td>
                                <td style="width: 3%">5</td>
                                <td style="width: 3%">6</td>
                                <td style="width: 3%">7</td>
                                <td style="width: 3%">8</td>
                                <td style="width: 3%">9</td>
                                <td style="width: 3%">10</td>
                            </tr>
                            @php
                                $questions = [  '<b>1. Conhecimento do Produto. </b>',
                                                '<b>2. Conhecimento dos Negócios do cliente. </b>',
                                                '<b>3. Conhecimento do Mercado. </b>',
                                                '<b>4. Informações sobre a concorrência. </b>',
                                                '<b>5. Inteligência Emocional. </b>',
                                                '<b>6. Habilidade para ouvir. </b>',
                                                '<b>7. Perguntar, Sondar, Estimular. </b>',
                                                '<b>8. Sensibilidade. </b>',
                                                '<b>9. Cooperação. </b>',
                                                '<b>10. Persuasão. </b>',
                                                '<b>11. Capacidade de Análise. </b>',
                                                '<b>12. Desenvolvimento de Estratégia e Planejamento. </b>',
                                                '<b>13. Identificação de Oportunidades. </b>',
                                                '<b>14. Organização Pessoal e Administração do Tempo. </b>',
                                                '<b>15. Criatividade na Solução de Problemas. </b>',
                                                '<b>16. Persistência no Seguimento. </b>',
                                                '<b>17. Serviço como Fator Diferencial. </b>',
                                                '<b>18. Ajuste das Propostas. </b>',
                                                '<b>19. Confiança Pessoal. </b>']
                                @endphp

                                @php
                            $table1 = 
                            [
                            "Como você classificaria seu nível de conhecimento dos serviços/produtos que você vende?",
                            "Em que medida você conhece os processos de negócios, a organização, os negócios e as tendências dos negócios da empresa?",
                            "Qual é seu conhecimento das necessidades e exigências do mercado em que você atua?",
                            "Quão informado você está sobre os produtos e serviços concorrentes?",
                            "Em que medida você é consciente da importância do relacionamento humano para realizar uma venda?",
                            "Você sabe ouvir com atenção o que outra pessoa está dizendo em termos de conteúdo e emoções envolvidas?",
                            "Quão hábil você é para estimular as outras pessoas a expor, com profundidade, seus pensamentos e pontos de vista?",
                            "Em que grau você é sensível aos sentimentos e as necessidades de outras pessoas?",
                            "Quão eficiente você é para estabelecer relações nas quais ambas as partes sintam liberdade para oferecer e pedir ajuda?",
                            "Em que medida você se sente preparado para apresentar pontos de vista e argumentos de uma maneira convincente?",
                            "Qual é seu grau de capacidade analítica para tratar das necessidades do cliente?",
                            "Qual sua capacidade para desenvolver planos e idéias interessantes para o longo prazo?",
                            "Em que medida você está atento para a identificação de novas oportunidades de negócios?",
                            "Você é pontual, bem organizado nas apresentações e está sempre disposto para solucionar os problemas do cliente?",
                            "Qual é sua capacidade para desenvolver propostas criativas e soluções alternativas inovadoras para os problemas e necessidades do cliente?",
                            "Você é persistente, segue um plano e mantém o compromisso até os resultados serem atingidos?",
                            "Você procura desenvolver atividades que poderiam ser consideradas como um diferencial em relação à concorrência?",
                            "Em que medida suas propostas atendem as verdadeiras necessidades de seus clientes?",
                            "Acredita que você transmite confiança?"
                            ];
                        @endphp

                            @for($i=0; $i<19; $i++)
                            <tr>
                                <td>{!! $questions[$i] !!}{!!$table1[$i]!!} </td>
                                <td @if($retorno[$i] == 1) id="bola" @endif></td>
                                <td @if($retorno[$i] == 2) id="bola" @endif></td>
                                <td @if($retorno[$i] == 3) id="bola" @endif></td>
                                <td @if($retorno[$i] == 4) id="bola" @endif></td>
                                <td @if($retorno[$i] == 5) id="bola" @endif></td>
                                <td @if($retorno[$i] == 6) id="bola" @endif></td>
                                <td @if($retorno[$i] == 7) id="bola" @endif></td>
                                <td @if($retorno[$i] == 8) id="bola" @endif></td>
                                <td @if($retorno[$i] == 9) id="bola" @endif></td>
                                <td @if($retorno[$i] == 10) id="bolaPreenchida" @endif
                                id="bolaVerde"></td>
                            </tr>
                            @endfor
                        </table>

                        <br>
                        <div class="row">
                        <div class="col-9">
                        </div>
                        <div class="col-3">
                        <p style="margin-left:30%">
                        <font id="bolaVerde" style="padding: 10%"></font><font color="#008000">Situação Ideal</font><br>
                        <font id="bolaRed" style="padding: 10%"></font><font color="#F00">Situação Atual</font>
                        </p>
                        </div>
                        </div>
                        
                        
                        
                        <br>

                        <p class="fonte18">Este é seu nível de prioridades para desenvolver as 19 competências estratégicas, fundamentais para ter um excelente desempenho em vendas</p>
                        
                        <table class="table table-hover table-bordered">
                            <thead class="bg-primary center">    
                                <tr>
                                    <th style="vertical-align: middle;">COMPETÊNCIAS</th>
                                    <th style="vertical-align: middle;">Distância com o nível ideal</th>
                                    <th style="vertical-align: middle;">Grau de Prioridade para <br> desenvolvê-las</th>
                                </tr>
                            </thead>
                            @php
                            $n=1;
                                $questions = [  '1. Conhecimento do Produto',
                                                '2. Conhecimento dos Negócios do cliente',
                                                '3. Conhecimento do Mercado',
                                                '4. Informações sobre a concorrência',
                                                '5. Inteligência Emocional',
                                                '6. Habilidade para ouvir',
                                                '7. Perguntar, Sondar, Estimular',
                                                '8. Sensibilidade',
                                                '9. Cooperação',
                                                '10. Persuasão',
                                                '11. Capacidade de Análise',
                                                '12. Desenvolvimento de Estratégia e Planejamento',
                                                '13. Identificação de Oportunidades',
                                                '14. Organização Pessoal e Administração do Tempo',
                                                '15. Criatividade na Solução de Problemas',
                                                '16. Persistência no Seguimento',
                                                '17. Serviço como Fator Diferencial',
                                                '18. Ajuste das Propostas',
                                                '19. Confiança Pessoal'];
                            @endphp
                            
                            @foreach($diferenca as $dif)
                            <tr>
                                <td>{!! $questions[$dif['questionario']] !!}</td>
                                <td style="text-align: center;">{!! $dif['diferenca'] !!}</td>
                                <td style="text-align: center">{!! $n++ !!}</td>
                            </tr>
                            @endforeach
                        </table>
                        
                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>
                        
                        <p class="fonte18">Você deve priorizar o desenvolvimento de suas competências começando pelas mais críticas que foram apontadas no diagnóstico.</p>
                        <p class="fonte18">A partir das definições das competências, você buscará a melhoria delas solicitando orientações aos colegas que você reconhece como excelentes nas competências que você necessita desenvolver, através de pesquisas e estudos pela Internet, palestras, cursos direcionados às diferentes competências e consultando a área de Recursos Humanos da empresa para receber orientações.</p>
                        <p class="fonte18">As 19 competências poderão ser desenvolvidas e seu desempenho melhorado levando em consideração as recomendações apresentadas em outros instrumentos desta metodologia.</p>
                        <p class="fonte18">Melhore suas competências seguindo as recomendações dos seguintes Instrumentos para cada competência.</p>
                        
                        @php
                            $table2_1 = [
                                '1. Conhecimento do Produto',
                                '2. Conhecimento dos Negócios do Cliente',
                                '3. Conhecimento do Mercado',
                                '4. Informações sobre a Concorrência',
                                '5. Inteligência Emocional',
                                '6. Habilidade para Ouvir',
                                '7. Perguntar, Sondar, Estimular',
                                '8. Sensibilidade',
                                '9. Cooperação',
                                '10. Persuasão',
                                '11. Capacidade de Análise',
                                '12. Desenvolvimento de Estratégia e Planejamento',
                                '13. Identificação de Oportunidades',
                                '14. Organização Pessoal e Administração do Tempo',
                                '15. Criatividade na Solução de Problemas',
                                '16. Persistência no Seguimento',
                                '17. Serviço como Fator Diferencial',
                                '18. Ajuste das Propostas',
                                '19. Confiança Pessoal'
                                ];
                        @endphp
                        @php
                            $table2_2 = [
                                'Instrumento 5',
                                'Instrumentos 6 e 11',
                                'Instrumentos 6 e 11',
                                'Instrumento 6',
                                'Instrumento 10',
                                'Instrumentos 7,8 e 9',
                                'Instrumentos 7, 8 e 10',
                                'Instrumentos 7 e 10',
                                'Instrumentos 8 e 10',
                                'Instrumentos 15 e 16',
                                'Instrumentos 7,8,9,10,13 e 14',
                                'Instrumentos 18, 19 e 20',
                                'Instrumentos 11,12 e 14',
                                'Instrumentos 4 e 15',
                                'Instrumentos 10 e 15',
                                'Instrumento 19',
                                'Instrumentos 5,7,8,9,10 e 11',
                                'Instrumentos 5,7,8,9,10,11 e 13',
                                'Instrumentos 7,8,9 e 10'
                                ];
                        @endphp
                        <table class="table table-hover table-bordered">
                        <thead class="bg-primary center">    
                            <tr>
                                <th><b>COMPETÊNCIAS</b></th>
                                <th><b>Instrumentos da Metodologia relacionados com essa competência</b></th>
                            </tr>
                        </thead>
                            @for($i=0; $i<19; $i++)
                            <tr>
                                <td>
                                    {!! $table2_1[$i] !!}
                                </td>
                                <td>
                                    {!! $table2_2[$i] !!}
                                </td>
                            </tr>
                            @endfor
                        </table>

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