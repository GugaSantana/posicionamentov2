@extends('adminlte::page')

@section('content')

<style type="text/css">
    #bola{
        background: radial-gradient(circle at center,#f00 0%,#f00 0%,#f00 6px,rgba(0,0,0,0) 8px);    
    }
    #bolaVerde{
        background: radial-gradient(circle at center,#008000 0%,#008000 0%,#008000 8px,rgba(0,0,0,0) 10px);
    }
    #bolaPreenchida{
        background: radial-gradient(circle at center,#f00 6px,#008000 0%,#008000 8px,rgba(0,0,0,0) 10px);
    }

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
                <h3><center>INSTRUMENTO 11dasdas</center></h3>
        <h3><center>DEFINIÇÃO DO PERFIL DO CLIENTE IDEAL</center></h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="/../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 11</center>
                </h3>
                <h3>
                    <center>DEFINIÇÃO DO PERFIL DO CLIENTE IDEAL</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">

                <div class="col-12">
                    <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>
                    <p class="fonte18">Definir o Perfil de Cliente Ideal é uma maneira de Segmentação Estratégica.</p>
                    <p class="fonte18">Segmentação é a seleção do público-alvo para desenvolver o trabalho, dentre todos os públicos que constituem o Mercado, e serve para dar Foco a seu trabalho e facilitar o alcance de suas Metas de Faturamento.</p>
                    <p class="fonte18">Vamos fazer uma analogia para entender o significado de Cliente Ideal. Imagine que os clientes sejam frutas. A melhor estratégia para vender (e vender rápido) é pegar em primeiro lugar as frutas que estão nos galhos mais baixos.</p>
                    <center><img src="/../posicionamento/public/img/instrumento11/diag_11_1_new.jpg" style="width: 50%;"></center>
                    <br>
                    <p class="fonte18">Se você tem um objetivo de quantidade de frutas para pegar (Metas de Venda), você pegará as que exigem menos esforço para colher, pois elas são as que darão maior retorno. Como analogia, esses serão seus Clientes Ideais.</p>
                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>
                    
                    <p class="fonte18">O resultado das suas respostas para os 8 fatores avaliados é o seguinte:</p>

                    <!-- Tabela 1  -->
                    <table class="table table-hover table-bordered fonte18">
                        <thead class="bg-primary">
                        <!-- <tr>
                            <td rowspan="2" style="min-width: 27em; text-align: center;vertical-align: middle;"><b>ATIVIDADES DA QUALIFICAÇÃO:<br>SEUS RESULTADOS</b></td>
                            <td colspan="5" style="text-align: center;"><b>Escala</b></td>
                        </tr> -->
                        <tr style="text-align: center;">
                            <td>FATORES</td>
                            @for($i=1; $i<=10; $i++)
                                <td>{{$i}}</td>
                            @endfor
                        </tr>
                        </thead>
                        @php
                            $questions = [  
                                '1 – Segmentação',
                                '2 – Volume de Vendas conforme meus objetivos e expectativas nestes clientes',
                                '3 – Facilidade para vender',
                                '4 – Potencial para aumentar o faturamento',
                                '5 – Lucratividade',
                                '6 – Concorrência',
                                '7 – Tempo para fechar as Vendas',
                                '8 – Frequência de Compra'
                                        ]
                        @endphp
                        
                        @php
                            $fatores = [
                                    '',
                                    $data->data['segmento'],
                                    $data->data['volume'],
                                    $data->data['facilidade'],
                                    $data->data['potencial'],
                                    $data->data['lucratividade'],
                                    $data->data['concorrencia'],
                                    $data->data['tempo'],
                                    $data->data['frequencia']
                                ];
                        @endphp

                        @for($i=0; $i<8; $i++)
                        <tr>
                            <td>{!! $questions[$i] !!} </td>
                            @for($j=1; $j<=10; $j++)
                                <td @if($fatores[$i+1] == $j) id="bola" @endif></td>
                            @endfor
                        </tr>
                        @endfor
                    </table>

                    <p class="fonte18">Isto representa sua Situação Atual, não necessariamente a Situação Ideal.</p>
                    <p class="fonte18">Nas Recomendações serão apresentadas orientações para migrar à Situação Ideal.</p>

                    <br>
                    <p class="fonte18"><h4><center>RECOMENDAÇÃO</center></h4></p>
                    
                    <p class="fonte18">O Diagnóstico apresentou sua Situação atual em relação aos 8 fatores que são utilizados para definir seu Cliente Ideal.</p>
                    <p class="fonte18">A partir da situação atual (<b>Real</b> – apresentada no Diagnóstico) defina o que você considera que seja a posição <b>Ideal</b>para situar os seus Clientes Ideais em cada um dos 8 fatores.</p>
                    <p class="fonte18">- Pesquise, veja como estão posicionados os clientes de seus colegas em relação a esses 8 fatores e analise o posicionamento de mercado de seus concorrentes.</p>
                    <p class="fonte18">- Pergunte aos colegas que apresentam os maiores faturamentos como eles posicionam seus clientes em relação a esses fatores.</p>
                    <p class="fonte18">- Feito este levantamento, analise as informações, reflita e de acordo com suas conclusões, mude seu posicionamento nas categorias que considere necessárias para aumentar seu faturamento.</p>
                    <p class="fonte18">Utilize o formulário seguinte para definir em que medida os 8 fatores de avaliação devem estar presentes para ter um CLIENTE IDEAL.</p>
                
                    <br>

                    <!-- Tabela 2 Formulario  -->
                    <form name="formulario" role="form" method="post" action="/instrumento/11_2/pj">
                    {!! csrf_field() !!}
                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <!-- <tr>
                                <td rowspan="2" style="min-width: 27em; text-align: center;vertical-align: middle;"><b>ATIVIDADES DA QUALIFICAÇÃO:<br>SEUS RESULTADOS</b></td>
                                <td colspan="5" style="text-align: center;"><b>Escala</b></td>
                            </tr> -->
                            <tr style="text-align: center;">
                                <td>FATORES</td>
                                @for($i=1; $i<=10; $i++)
                                    <td>{{$i}}</td>
                                @endfor
                            </tr>
                            </thead>
                            @php
                                $questions = [  
                                    '1 – Segmentação',
                                    '2 – Volume de Vendas conforme meus objetivos e expectativas nestes clientes',
                                    '3 – Facilidade para vender',
                                    '4 – Potencial para aumentar o faturamento',
                                    '5 – Lucratividade',
                                    '6 – Concorrência',
                                    '7 – Tempo para fechar as Vendas',
                                    '8 – Frequência de Compra'
                                            ]
                            @endphp
                            
                            @php
                                $fatores = [
                                        '',
                                        $data->data['segmento'],
                                        $data->data['volume'],
                                        $data->data['facilidade'],
                                        $data->data['potencial'],
                                        $data->data['lucratividade'],
                                        $data->data['concorrencia'],
                                        $data->data['tempo'],
                                        $data->data['frequencia']
                                    ];
                                
                                $nameFator = [
                                        '',
                                        'segmento',
                                        'volume',
                                        'facilidade',
                                        'potencial',
                                        'lucratividade',
                                        'concorrencia',
                                        'tempo',
                                        'frequencia'
                                    ];

                                $fatoresDiag = [
                                    '',
                                    $data->data_diag['segmento'],
                                    $data->data_diag['volume'],
                                    $data->data_diag['facilidade'],
                                    $data->data_diag['potencial'],
                                    $data->data_diag['lucratividade'],
                                    $data->data_diag['concorrencia'],
                                    $data->data_diag['tempo'],
                                    $data->data_diag['frequencia']
                                ];
                            @endphp

                            @for($i=0;$i<8;$i++) 
                                <tr>
                                    <td style="font-size: 18px">{!! $questions[$i] !!}</td>
                                    @for($j=1; $j<=10; $j++)
                                        <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" name="{{$nameFator[$i+1]}}" id="{{$nameFator[$i+1]}}{{$j}}" value="{{$j}}" required @if(!empty($data->data_diag)) disabled @endif @if($fatoresDiag[$i+1] == $j) checked @endif>
                                                <label style="cursor: pointer" class="custom-control-label" for="{{$nameFator[$i+1]}}{{$j}}"></label>
                                            </div>
                                        </td>
                                    @endfor
                                </tr>
                                @endfor
                        </table>

                        @if(empty($data->data_diag))
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary fonte18" type="submit">
                                    <span class="btn-inner--icon"><i class="fa fa-paper-plane"></i></span>
                                    <span class="btn-inner--text">Enviar formulário</span>
                                </button>
                            </div>
                        @endif
                    </form>

                    <br>
                    
                    <p class="fonte18"><b>IMPORTANTE:</b></p>

                    <p class="fonte18">- Feito isto, a Recomendação é começar a Prospectar Clientes com o perfil que você acaba de definir e registrou na tabela acima.</p>
                    <p class="fonte18">Como Prospectar Clientes tecnicamente é o objetivo do Instrumento seguinte (Instrumento 12 – Prospecção de Clientes).</p>

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

<script>
    function fillForm(element, text){
        document.getElementById(element).innerHTML = text;
    }
</script>

@endpush