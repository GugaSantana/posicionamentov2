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
        <h3>
            <center>INSTRUMENTO 19</center>
        </h3>
        <h3>
            <center>PLANOS DE AÇÃO QUANTITATIVOS PARA ALCANÇAR AS METAS DE VENDAS</center>
        </h3>
    </div>
    <div class="card-body">

                    <div class="col-12">
                            <h4>
                                <center>Levantamento de Informações</center>
                            </h4>

                            <p class="fonte18">Este é o segundo instrumento para você fazer a Gestão das Vendas Consultivas.</p>
                            <p class="fonte18">O primeiro instrumento foi o Funil de Vendas. Agora vamos tratar dos planos de ação que você desenvolverá para alcançar suas metas.</p>
                            <p class="fonte18">É uma técnica simples, prática e poderosa que lhe permitirá ganhar tempo e precisão para alcançar seus objetivos de vendas.</p>
                            <p class="fonte18">Com esta ferramenta você alcançará de maneira clara e estruturada suas metas de venda, seguindo conforme as recomendações objetivas que lhe serão apresentadas, depois de feita a avaliação diagnóstica.</p>
                            <p class="fonte18">Este questionário analisa como você se posiciona em relação às 7 atividades que devem ser consideradas para fazer um Plano de Ação profissional para alcançar suas metas de venda</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->


                        <p class="fonte18">Responda em que medida você implementa as sete atividades seguintes quando desenvolve Planos de Ação para alcançar seus objetivos de vendas.</p>
                        <p class="fonte18">Na escala seguinte de 10 graus são definidas as posições extremas 1 e 10, onde:</p>

                        <p class="fonte18">1 : (Eu não levo em consideração esta atividade) e;<br>
                        10 : (Eu defino e implemento corretamente esta atividade quando desenvolvo um Plano de Ação).</p>
                        <p class="fonte18">Leve em consideração essas duas definições extremas e coloque um (X) no intervalo da escala que melhor representa como você age em relação a cada uma das 7 atividades quando elabora um Plano de Ação na área de Vendas</p>

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

                    </div>

                   

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/19">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-hover table-bordered fonte18" style="width: 100%">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="font-size: 18px; vertical-align: middle;text-align: center">ATIVIDADES QUE DEVEM SER CONSIDERADAS PARA FAZER UM PLANO DE AÇÃO</th>
                                            @for($i=1; $i<=10; $i++)
                                                <th style="font-size: 18px; vertical-align: middle;text-align: center">{{$i}}</th>
                                            @endfor
                                        </tr>
                                        </thead>
                                        @php $n=0 @endphp
                                        @foreach($questions as $quest)
                                            <tr>
                                                <td style="font-size: 18px; vertical-align: middle;">{!! $quest !!}</td>
                                                @for($i=1; $i<=10; $i++)
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