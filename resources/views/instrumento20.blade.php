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
    <div class="card-header">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3>
            <center>INSTRUMENTO 20</center>
        </h3>
        <h3>
            <center>RELATÓRIO DO PROGRESSO</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="{{ asset('img/botton_ts.png') }}" style="width: 6em; float:right; margin-right: 1%">
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
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                            <p class="fonte18">Com este Instrumento chegamos ao final da Metodologia.</p>
                            <p class="fonte18">É o terceiro Instrumento da série para você fazer a Gestão de Vendas Consultivas.</p>
                            <p class="fonte18">Ele complementa o Instrumento anterior (Planos de Ação Quantitativos) e representa o mecanismo para garantir que seus Planos de Ação efetivamente se realizem.</p>
                            <p class="fonte18">Partimos do princípio de que “o que não se pode medir não se pode gerenciar”.</p>
                            <p class="fonte18">Este é o princípio básico e fundamental para uma Gestão Profissional da Atividade de Vendas.</p>
                            <p class="fonte18">O Relatório do Progresso é o Instrumento desenvolvido para atender este princípio.</p>
                            <p class="fonte18">Este Instrumento constitui o sistema de controle e ajuste, para que você acompanhe o andamento do Plano de Ação do Instrumento 19 e é fundamental para alcançar suas Metas de Vendas.</p>
                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->

                        <p class="fonte18">Para saber como hoje você lida com as cinco atividades do Relatório do Progresso, responda em que medida você realiza cada uma das atividades desse Instrumento.</p>
                        <p class="fonte18">O Relatório do Progresso foi desenvolvido para avaliar o progresso de seu Plano de Ação (Instrumento 19 da Metodologia).</p>
                        <p class="fonte18">Na escala seguinte, são definidos três pontos e partindo de suas definições, coloque um (X) no intervalo da escala que melhor representa como você trabalha cada uma das 5 atividades do Relatório do Progresso.</p>

                        <p class="fonte18">ESCALA:</p>

                        <p class="fonte18" style="margin-left: 2%">- <b>1:</b> Eu não levo em consideração esta atividade</p>

                        <p class="fonte18" style="margin-left: 2%">- <b>3:</b> No máximo, faço esta atividade de maneira intuitiva, sem maiores referências técnicas.</p>

                        <p class="fonte18" style="margin-left: 2%">- <b>5:</b> Levo em conta o máximo cuidado e atenção para desenvolver esta atividade.</p>

                        @php
                            $questions = [
                                '<b>1 – Planejado:</b> Em que medida eu levo em conta o que foi planejado como ponto de partida para medir o progresso do meu trabalho (o que foi planejado corresponde a atividade 1 do Instrumento 19)?',
                                '<b>2 – Executado:</b> Avalio com objetividade o que já foi executado do Plano de Ação apresentado no Instrumento 19?',
                                '<b>3 – Resultados:</b> Posso apresentar os resultados até agora alcançados de maneira objetiva e fundamentada?',
                                '<b>4 – Pontos Problemáticos:</b> Tenho conhecimento de quais são os problemas (desvios de causa desconhecida) que hoje apresenta meu Plano de Ação?',
                                '<b>5 – Proposição:</b> Tenho propostas claras e fundamentadas para resolver os pontos problemáticos?'
                                ]
                        @endphp

                    </div>

                   

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/20">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12">
                                <table class="table table-hover table-bordered fonte18" style="width: 100%">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="font-size: 18px; vertical-align: middle;text-align: center">AS ATIVIDADES</th>
                                            @for($i=1; $i<=5; $i++)
                                                <th style="font-size: 18px; vertical-align: middle;text-align: center">{{$i}}</th>
                                            @endfor
                                        </tr>
                                        </thead>
                                        @php $n=0 @endphp
                                        @foreach($questions as $quest)
                                            <tr>
                                                <td style="font-size: 18px; vertical-align: middle;">{!! $quest !!}</td>
                                                @for($i=1; $i<=5; $i++)
                                                <td>

                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="radio{{$n}}" id="radio{{$i}}{{$n}}" value="{{$i}}" required>
                                                    <label style="cursor: pointer" class="custom-control-label" for="radio{{$i}}{{$n}}"></label>
                                                </div>

                                                </td>
                                                @endfor
                                            </tr>
                                            @php $n++ @endphp
                                        @endforeach
                                    </table>
                                </div>

                            </div>

                            <br>
                            
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary fonte18" type="submit">
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
</script>
<script>window.onload = function(){history.go(+1)};</script>
@endpush