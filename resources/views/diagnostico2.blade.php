@extends('adminlte::page')

@section('content')

<style>
    .card .table td,
    .card .table th {
        white-space: normal;
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
            <center>INSTRUMENTO 2</center>
        </h3>
        <h3>
            <center>MEUS PROBLEMAS PRIORITÁRIOS PARA AUMENTAR AS VENDAS</center>
        </h3>
    </div>
    <div class="card-body">
        <div class="col-12">
            <h4>
                <center>Diagnóstico e Recomendações</center>
            </h4>
            <br>
            <p class="fonte18">As situações ou problemas nos quais estamos envolvidos a maioria das vezes supera nossa disponibilidade de tempo e até nossa capacidade ou competência para resolvê-los.</p>
            <p class="fonte18">O diagnóstico (identificação) de seus problemas lhe permitirá estabelecer as prioridades com que você deve intervir em cada um deles. Isto lhe ajudará a estabelecer foco, minimizar perdas e aumentar a produtividade do seu trabalho.</p>
            <p class="fonte18">Sabemos que temos um problema quando surge um desvio entre o que foi planejado e a realidade.</p>
            <p class="fonte18">Temos freqüentes desvios em nossas atividades.</p>

            <center><img src="../posicionamento/public/img/diag2_1.jpg" style="width: 60%;"></center>
            <br>
            <p class="fonte18">Um problema surge quando se apresenta um desvio e não sabemos qual é a causa desse desvio.</p>
            <p class="fonte18">Se soubermos qual é a causa do desvio, não temos um problema.</p>
            <p class="fonte18">Quando conhecemos a causa do desvio, temos que tomar uma decisão para corrigir-lo.</p>
            <p class="fonte18">A seguir são feitas recomendações para você agir com método, com técnica, para estabelecer as prioridades de seus problemas, primeira etapa antes de se concentrar em resolvê-los.</p>

            <br>
            <p class="fonte18">
                <h4>
                    <center>DIAGNÓSTICO</center>
                </h4>
            </p>

            <p class="fonte18">O diagnóstico que apresenta este instrumento permite estabelecer de maneira técnica e precisa a prioridade que esses problemas têm, para depois concentrar sua ação e resolvê-los.</p>
            <p class="fonte18">Seus resultados foram analisados e avaliados combinando três fatores para estabelecer as prioridades de seus problemas:</p>
            <ul>
                <li>
                    <p class="fonte18"><b>GRAVIDADE</b> - Definida como dano ou prejuízo que pode decorrer e uma situação definida como problema.</p>
                </li>
                <li>
                    <p class="fonte18"><b>URGÊNCIA</b> - Refere-se à velocidade que você sente ser necessária para tomar uma ação em relação ao problema</p>
                </li>
                <li>
                    <p class="fonte18"><b>TENDÊNCIA</b> - É a tendência que o problema tem para se agravar ou se minimizar ou mesmo se resolver com o passar do tempo, se nada for feito.</p>
                </li>
            </ul>
            <p class="fonte18">Considerando suas respostas quando lhe foi solicitado apresentar seus maiores problemas para aumentar as vendas, após aplicar esta metodologia, a ordem técnica de prioridades é a seguinte:</p>

            <!-- Primeira tabela ordem de prioridade-->
            <table class="table table-hover table-bordered">
                <thead class="bg-primary">
                    <tr class="fonte18 center">
                        <th style="min-width: 45em;font-weight: bold;">PROBLEMAS POR ORDEM DECRESCENTE DE PRIORIDADE</th>
                        <th style="text-align: center"><b>PRIORIDADE</b></th>
                    </tr>
                </thead>
                @php($i = 1)
                @foreach($retorno as $key => $value)
                <tr class="fonte18">
                    <td>
                        {{$key}}
                    </td>
                    <td class="center">
                        {{$i++}}
                    </td>
                </tr>
                @endforeach
            </table>

            <br>
            <p class="fonte18">No gráfico seguinte é apresentada a comparação de prioridades entre sua avaliação inicial e o resultado da aplicação da nossa metodologia.</p>

            <table class="table table-hover table-bordered fonte18">
                <thead class="bg-primary">
                    <tr>
                        <th colspan="3">
                            <center><b>ALTERAÇÃO DAS PRIORIDADES DOS MEUS PROBLEMAS</b></center>
                        </th>
                    </tr>
                </thead>
                <tr>
                    <th><b>Problemas por Ordem Descrescente de Prioridade conforme sua Avaliação Inicial</b></th>
                    <th><b>Problemas por Ordem Descrescente de Prioridade de acordo com a Metodologia</b></th>
                </tr>

                @php($i = 0)
                @foreach($retorno as $key => $value)
                <tr>
                    <td style="background-image: linear-gradient(to right, white 90%, {{$cores[$retornoOld[$i]]}} 10%);">{{$retornoOld[$i]}}</td>
                    <td style="background-image: linear-gradient(to right, white 90%, {{$cores[$key]}} 10%);">{{$key}}</td>
                </tr>
                @php($i++)
                @endforeach
            </table>

            <br>
            <p class="fonte18">
                <h4>
                    <center>RECOMENDAÇÕES</center>
                </h4>
            </p>

            <p class="fonte18">A primeira recomendação é concentrar sua atenção nos seus principais problemas conforme a metodologia aplicada.</p>
            <p class="fonte18">As prioridades técnicas dos seus problemas foi apresentada na planilha acima: Alteração das Prioridades dos Meus Problemas.</p>
            <p class="fonte18">Considerando que um problema, conforme definido, é um desvio de causa desconhecida a segunda recomendação é identificar as causas desses desvios.</p>
            <p class="fonte18">Para remover as causas recomenda-se implementar o Instrumento 19 – Plano de Ação Quantitativo utilizando o formulário nele proposto.</p>
            <p class="fonte18">O efetivo avanço na solução desses problemas você gerenciará implementando com as recomendações do Instrumento 20 – O Relatório de Progresso</p>

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

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush