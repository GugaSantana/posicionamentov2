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
                <h3><center>INSTRUMENTO 14</center></h3>
        <h3><center>MATRIZ PARA IDENTIFICAR CLIENTES PRIORITÁRIOS</center></h3> 
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 14</center>
                </h3>
                <h3>
                    <center>MATRIZ PARA IDENTIFICAR CLIENTES PRIORITÁRIOS</center>
                </h3>
            </div>
        </div>
    </div>
    <div class="card-body">

                <div class="col-12">
                    <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>
                    <p class="fonte18">Estabelecer corretamente quais são seus clientes prioritários é uma questão fundamental para ter foco, para economizar tempo, para aumentar suas vendas e alcançar seus objetivos.</p>
                    <p class="fonte18">É importante classificar seus clientes segundo critérios técnicos e posicioná-los numa das seguintes categorias de importância, ou de <b>valor:</b></p>

                    <center><img src="../posicionamento/public/img/instrumento14/diag_14_1_new.jpg" style="width: 60%;"></center><br>

                    <p class="fonte18">É um grave erro agir como se todos os clientes tem o mesmo valor.</p>
                    <p class="fonte18">Errar na prioridade ou importância que você atribui a cada cliente reduz sua produtividade e certamente comprometerá seus resultados .</p>

                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>

                    <p class="fonte18">A relação de clientes prioritários por ordem decrescente de importância, conforme seu critério inicial, antes de aplicar a metodologia utilizada neste instrumento era a seguinte:</p>
                    
                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered fonte18">
                                @php $i = 1 @endphp
                                @foreach($clientes as $cliente)
                                    @if(!empty($cliente))
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$i}} - {!! $cliente !!}</td>
                                    </tr>
                                    @php $i++ @endphp
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>

                    <br>

                    <p class="fonte18">Agora são apresentados os 12 fatores que você utilizou para estabelecer, com metodologia, a ordem de importância ou prioridade de seus clientes atuais.</p>

                    @php
                        $titles = ['Faturamento', 'Crescimento', 'Adaptação dos produtos', 'Rentabilidade', 'Capacidade Financeira', 'Concorrência', 'Receptividade do Cliente', 'Conhecimento', 'Dificuldade', 'Recompensas', 'Investimento Pessoal', 'Tempo'];
                    @endphp

                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr>
                                <td colspan="2" style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">FATORES DE AVALIAÇÃO UTILIZADOS</td>
                            </tr>
                            </thead>
                                @for($i=0; $i<6; $i++)
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$i+1}} - {!! $titles[$i] !!}</td>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$i+7}} - {!! $titles[$i+6] !!}</td>
                                    </tr>
                                @endfor
                            </table>
                        </div>
                    </div>

                    <br>

                    <p class="fonte18">Interpretados seus resultados através de critérios técnicos e considerando essas 12 dimensões, a prioridade que você deve dar a seus clientes é esta:</p>
                    
                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered fonte18">
                                @php $i = 1 @endphp
                                @foreach($cliRes as $cli => $val)
                                    @if(!empty($cli))
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$i}} - {!! $cli !!}</td>
                                    </tr>
                                    @php
                                    $res[$i-1] = $cli
                                    @endphp
                                    
                                    @php $i++ @endphp
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>

                    <br>
                    
                    <p class="fonte18">A seguir comparamos a posição inicial de importância de seus clientes e a posição recomendada de prioridades.</p>
                    <p class="fonte18">Seu diagnóstico apresenta os seguintes desvios entre as duas posições.</p>
                    
                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered fonte18">
                                <thead class="bg-primary">
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle; width: 45%; text-align: center">POSIÇÃO INICIAL</td>
                                    <td style="font-size: 18px; vertical-align: middle; width: 45%; text-align: center">POSIÇÃO RECOMENDADA</td>
                                    <td style="font-size: 18px; vertical-align: middle; width: 10%; text-align: center">DESVIOS</td>
                                </tr>
                                </thead>
                                @php($i = 1)
                                @foreach($clientes as $cliente)
                                    @if(!empty($cliente))
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px; background-image: linear-gradient(to right, white 90%, {{$returnCores[$cliente]}} 10%);">{{$i}} - {{$cliente}}</td>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px; background-image: linear-gradient(to right, white 90%, {{$returnCores[isset($res[$i-1]) ? $res[$i-1] : '']}} 10%);">{{$i}} - {{isset($res[$i-1]) ? $res[$i-1] : ''}}</td>
                                        @php($j = 1)
                                        @foreach($clientes as $cli)
                                            @if($cli == $res[$i-1])
                                                <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">{{abs($i - $j)}}</td>
                                            @endif
                                            @php($j++)
                                        @endforeach
                                    </tr>
                                    @endif
                                    @php($i++)
                                @endforeach
                            </table>
                        </div>
                    </div>


                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>

                        <p class="fonte18">O valor dos desvios apresentados no seu diagnóstico com sua posição inicial com a posição recomendada pela metodologia, mostra em que medida você deve aumentar ou diminuir a prioridade que você está dando a cada um de seus clientes e, em consequência, como você deve alterar seu nível de esforço e de dedicação a cada um deles.</p>
                        <p class="fonte18">Lembre conforme foi definido no INSTRUMENTO 4 – MATRIZ PARA AUMENTAR MINHA PRODUTIVIDADE NAS VENDAS, que produtividade é uma relação de:</p>
                        <p class="fonte18">Insumo e Produto, (Input e Output) ou seja:</p>
                        <p class="fonte18">PRODUTIVIDADE = PRODUTO / INSUMO</p>
                        <p class="fonte18">No caso dos profissionais de vendas, o principal insumo é seu tempo: o tempo que dedicam a cada cliente</p>
                        <p class="fonte18">Então a expressão da Produtividade para os profissionais de vendas é a relação entre vendas realizadas e tempo dedicado.</p>
                        <p class="fonte18">PRODUTIVIDADE = VENDAS / TEMPO , ou seja, Quantas Vendas / Em Quanto Tempo</p>
                        <p class="fonte18">A recomendação deste instrumento é concentrar sua atenção, suas ações e seu tempo na nova relação de Clientes Prioritários.</p>
                        <p class="fonte18">É claro que se você concentra seu tempo nos clientes que efetivamente tem MAIOR VALOR e MAIOR POTENCIAL, você terá melhores resultados, ou seja, maior faturamento e você alcançará suas metas com maior facilidade, isto é: você será mais produtivo.</p>
                        <p class="fonte18">A maior contribuição deste instrumento é ajudá-lo a MUDAR SEU FOCO em relação a seus clientes para que você seja mais produtivo.</p>
                        <p class="fonte18">Atue nos clientes prioritários e aplique neles as recomendações feitas em todos os Instrumentos desta metodologia para aumentar sua eficácia junto a esses clientes prioritários.</p>

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