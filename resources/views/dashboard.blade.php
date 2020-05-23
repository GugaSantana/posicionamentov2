@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <style>
        .card .table td, .card .table th {
            white-space: normal;
            background-color: #DCDCDC;
        }
    </style>
        <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
.card .table td, .card .table th{font-size:15px}
</style>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <h3 class="mb-0"><center>MEU NÍVEL DE EMPREENDEDORISMO</center></h3>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <p>Todas as pessoas têm combinações de Visão e Ação em tudo o que fazem e, naturalmente, esta combinação varia de pessoa para pessoa.</p>
                            <p>Empreendedor é alguém que toma a iniciativa e age com uma clara visão de futuro.</p>
                            <p>Quem tem visão sabe identificar as oportunidades e transformá-las em atividades lucrativas.</p>
                            <p>A Ação é fundamental para implementar a Visão, para levar a Visão a pratica.</p>
                            <p>Este instrumento se propõe avaliar as duas dimensões apresentadas de Visão e Ação para que você possa desenvolvê-las de maneira estruturada e assim aumentar sua </p>
                            <p><b>EFICÁCIA</b> (fazer as coisas certas) = <b>VISÃO</b>      e sua</p>
                            <p><b>EFICIÊNCIA</b> (fazer as coisas da maneira certa) = <b>AÇÃO</b>.</p>
                        </div>
                        <br>
                        <div class="col-8">
                            <p><b>INSTRUÇÕES</b></p>
                            <p>Este instrumento está constituído de duas partes</p>
                            <p>Na primeira parte do instrumento são apresentadas 10 questões que você deve responder escolhendo a alternativa que mais se ajusta a você que melhor representa seu comportamento.</p>
                            <p>Na segunda parte você deverá posicionar seu resultado em uma escala
                            <p>Lembre, não existem respostas certas ou erradas porque não existem personalidades certas ou erradas.</p>
                            <h2>Primeira Parte</h2>
                        </div>
                        <!-- TABELA DE QUESTIONARIO -->
                        <div>
                        <form name="formulario" role="form" method="post" action="instrumento/1">
                        {!! csrf_field() !!}
                            <div class="table-responsive">
                                <div>
                                <table class="table align-items-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col-8">
                                                Responda <b>sim</b> ou <b>não</b> às seguintes questões:
                                            </th>
                                            <th scope="col-2">
                                                Sim
                                            </th>
                                            <th scope="col-2">
                                                Não
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @php
                                            $questions = [
                                                            '1. Seu desejo de fazer as coisas funcionarem melhor lhe motiva tanto quanto mantê-las como são?',
                                                            '2. Você se entusiasma com o que está fazendo no trabalho?',
                                                            '3. Você pensa a respeito de novas idéias para aplicar a seu trabalho quando está indo para o trabalho ou tomando banho?',
                                                            '4. Você pode visualizar etapas concretas de ação, quando considera maneiras para fazer uma nova idéia acontecer?',
                                                            '5. Você enfrenta problemas com sua empresa para fazer coisas que  excedem o que se espera de você ?',
                                                            '6. Você já avançou com sucesso em tempos incertos, quando algo em Seu trabalho parecia que não ia dar certo?',
                                                            '7. Você tem um número acima do normal de admiradores e críticos?',
                                                            '8. Você se aborrece facilmente com a incompetência dos outros para executar partes de suas idéias?',
                                                            '9. Você tenta vencer uma tendência perfeccionista de fazer tudo você mesmo e não dividir com outras pessoas a responsabilidade sobre idéias que você teve?',
                                                            '10. Você estaria disposto a abrir mão de uma parte de receita em troca da oportunidade de testar suas idéias, se as recompensas pelo sucesso fossem adequadas?'
                                            ];
                                        @endphp
                                        
                                        @for($i=1;$i<=10;$i++)
                                        <!-- QUESTÃO 1 -->
                                        <tr>
                                            <th scope="row" class="question">
                                                <div class="media align-items-center">
                                                    {{$questions[$i-1]}}
                                                </div>
                                            </th>
                                            <td class="yes">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" value="Y" class="custom-control-input" id="radioY{{$i}}" type="radio">
                                                    <label class="custom-control-label" for="radioY{{$i}}"></label>
                                                </div>                                                
                                            </td>
                                            <td class="no">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" value="N" class="custom-control-input" id="radioN{{$i}}" type="radio">
                                                    <label class="custom-control-label" for="radioN{{$i}}"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- FIM QUESTÃO 1 -->
                                        @endfor
                                        
                                    </tbody>
                                </table>
                            </div>

                            </div>
                        </div>
                        <!-- FIM TABELA DE QUESTIONARIO -->
                        <br>
                        <h2>Segunda Parte</h2>
                        <p>Responda qual é a sua tendência, seu comportamento em relação às questões abaixo colocadas e registre o resultado num ponto da escala, levando em conta as definições da escala:</ṕ>
                        <p>Você também pode utilizar os pontos intermediários entre as definições se essa posição intermediária melhor representa seu comportamento.</p>
                        <ul>
                            <li>1 - Não gosto de ação. Prefiro um trabalho já  estruturado e com instruções claras</li>
                            <li>4 - Prefiro um nível intermediário de ação. Gosto do trabalho estruturado onde posso eventualmente fazer algumas melhorias.</li>
                            <li>7 - Gosto de ação, de estar no campo, agindo sozinho ou com a equipe. Tenho motivação para a ação</li>
                            <li>10 - Eu tenho um máximo nível de energia. Muita vitalidade. Definitivamente não gosto de trabalho estruturado. Gosto de imprimir minhas idéias.</li>
                        </ul>

                        <div class="table-responsive">
                                <div>
                                <table class="table align-items-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col-2">
                                                1
                                            </th>
                                            <th scope="col-2">
                                                2
                                            </th>
                                            <th scope="col-2">
                                                3
                                            </th>
                                            <th scope="col-2">
                                                4
                                            </th>
                                            <th scope="col-2">
                                                5
                                            </th>
                                            <th scope="col-2">
                                                6
                                            </th>
                                            <th scope="col-2">
                                                7
                                            </th>
                                            <th scope="col-2">
                                                8
                                            </th>
                                            <th scope="col-2">
                                                9
                                            </th>
                                            <th scope="col-2">
                                                10
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <!-- QUESTÃO 1 -->
                                        <tr>
                                            @for($i=1; $i<=10; $i++)
                                            <td class="1-1">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radioPt2" value="{{$i}}" class="custom-control-input" id="radio{{$i}}-1" type="radio">
                                                    <label class="custom-control-label" for="radio{{$i}}-1"></label>
                                                </div>                                                
                                            </td>
                                            @endfor
                                        </tr>
                                        <!-- FIM QUESTÃO 1 -->
                                        
                                    </tbody>
                                </table>
                                
                            </div>

                            </div>

                        <br>
                        <div class="col-8">
                            <button class="btn btn-icon btn-3 btn-primary" type="submit">
                                <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                                <span class="btn-inner--text">Enviar formulário</span>
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush