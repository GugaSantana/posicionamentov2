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
            <center>INSTRUMENTO 17</center>
        </h3>
        <h3>
            <center>TÉCNICAS DE FECHAMENTO DA VENDA</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="{{ asset('img/botton_ts.png') }}" style="width: 6em; float:right; margin-right: 1%">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 17</center>
                </h3>
                <h3>
                    <center>TÉCNICAS DE FECHAMENTO DA VENDA</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">

                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                        <p class="fonte18">As etapas anteriores que já foram instrumentalizadas são: a etapa da <b>Prospecção</b> (Instrumentos 11 e 12), a etapa de <b>Qualificação</b> (Instrumentos 13 e 14), a etapa de <b>Apresentação</b> (Instrumento 15) e a etapa de <b>Negociação</b> (Instrumento 16).</p>
                        <p class="fonte18">A Venda Consultiva é um Processo de Vendas diferente do processo de venda tradicional, em que o vendedor se preocupa apenas em vender, em “empurrar” seu produto.</p>
                        <p class="fonte18">Em uma Venda Consultiva, você atua como consultor compreendendo as necessidades do cliente e juntos definem a melhor solução ou alternativa para atender suas necessidades, com os produtos por você oferecidos.</p>
                        <p class="fonte18">Com a atividade consultiva, o Processo da Venda acontece de uma forma suave (“Soft Sell”).</p>
                        <p class="fonte18">Por este motivo, o Fechamento da Venda é mais natural que nas técnicas de vendas tradicionais, chamadas de vendas “Hard Sell”, cujos fechamentos são mais impositivos.</p>
                        <p class="fonte18">O FECHAMENTO DA VENDA é a última etapa da Venda Consultiva.</p>
                        <p class="fonte18">Neste Instrumento são apresentadas 12 técnicas para conduzir o Fechamento de uma Venda.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->


                        <p class="fonte18">Este Instrumento lhe permitirá levar à prática a última etapa das Vendas Consultivas.</p>
                        <p class="fonte18">Utilizando uma escala de 0 a 4 que propomos, responda com que frequência você utiliza cada uma dessas técnicas de Fechamento da Venda.</p>

                        <p class="fonte18"><font style="color:blue">Escala:</font><br>
                        0- Nunca utilizo esta técnica.<br>
                        1- Raramente utilizo esta técnica.<br>
                        2- Às vezes, de vez em quando utilizo esta técnica.<br>
                        3- Com certa frequência utilizo esta técnica.<br>
                        4- Com muita frequência utilizo esta técnica.<br>
                        </p>
                    </div>

                    @php
$questions = [
['1- FECHAMENTO DIRETO',
'Faço uma pergunta direta quando há sinais de concordância.
<br>
Exemplo: “você confirma a compra?”'
],[
'2- FECHAMENTO POR ALTERNATIVAS',
'Eu faço uma pergunta com duas alternativas direcionadas para a conclusão do negócio.
<br>
Utilizo esta técnica quando tenho um mínimo de segurança de que o cliente fechará a compra.
<br>
Exemplo: "você pagará em dinheiro ou com cartão?”, "o cadastro será em seu nome ou no nome de outra pessoa?”'
],[
'3- FECHAMENTO PELA OPORTUNIDADE',
'É o fechamento pelo medo da perda.
<br>
Eu crio "senso de urgência" no cliente, do tipo agora ou nunca, porque o ser humano é muito motivado pelo medo de perder.
<br>
Eu mostro os prejuízos que podem acontecer ao cliente se ele não fechar a compra agora.
<br>
Exemplo: “o estoque está acabando e você não poderá se beneficiar da utilização do produto.”'
],[
'4- FECHAMENTO PELOS PRÓXIMOS PASSOS',
'Eu parto do princípio que o cliente já fechou a compra e faço uma pergunta em relação ao que vem depois.
<br>
Exemplo: "posso entregar na segunda-feira?"'
],[
'5- FECHAMENTO PELA BALANÇA',
'Eu fecho a negociação provocando uma comparação entre os benefícios e os prejuízos de comprar o produto.
<br>
Exemplo: "pego uma folha de papel, faço duas colunas e listo os prós e os contras do produto que estou lhe vendendo” (listo uns 10 benefícios e os contras são colocados na segunda coluna pelo cliente).'
],[
'6- FECHAMENTO PELA EXPERIMENTAÇÃO',
'Eu faço que o cliente sinta, que experimente o produto, porque isto cria um sentimento inconsciente de pertencimento.
<br>
Exemplo: "vamos experimentar o produto, nada mais prático para decidir!"'
],[
'7- FECHAMENTO PELO VALOR',
'Eu mostro todos os benefícios, de modo que o produto pareça barato. Eu não falo em preço, falo em valor e então passo para o fechamento direto (técnica número 1).
<br>
Exemplo: "valor é benefício menos custo e não tenho dúvidas que os benefícios que você terá supera em muito o preço que você pagará!"'
],[
'8- FECHAMENTO EXPERIMENTAL',
'Para fechar, apresento primeiro o produto mais caro e depois um produto cujo preço é meu objetivo da venda e se houver resistência, finalmente apresento uma opção mais barata para que a compra aconteça.
<br>
Exemplo: "você fez a melhor opção e ficará muito satisfeito com a compra!"'
],[
'9- FECHAMENTO INDUZIDO',
'Quando não há objeções e o cliente está decidido a comprar, eu concluo minha apresentação e pergunto quando posso entregar o produto.
<br>
Exemplo: "sendo assim, quando posso lhe entregar o produto?"'
],[
'10- FECHAMENTO POR PERGUNTA',
'Eu posso fechar a venda em forma de pergunta.
<br>
Exemplo: "você tem alguma dúvida que meu produto não resolveria sua necessidade?"'
],[
'11- FECHAMENTO POR SINAIS DE LINGUAGEM CORPORAL',
'Para fechar a venda eu escuto ativamente e observo sinais e gestos para perceber se o cliente está realmente interessado em comprar o produto que estou oferecendo.
<br>
Exemplo: "utilizando as técnicas do <b>Gerenciamento de Campo Psicológico</b>, observo o comportamento do cliente e então, no momento oportuno, passo a utilizar algumas das outras 11 técnicas apresentadas.'
],[
'12- FECHAMENTO NATURAL',
'Eu conduzo a reunião focado nas técnicas de Vendas Consultivas e o fechamento é tão natural que parece que “eu não vendo” e sim que o “cliente compra”.'
]]
    @endphp

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/17">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-hover table-bordered fonte18" style="width: 100%">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="font-size: 18px; text-align: center; vertical-align: middle;">TÉCNICAS DE FECHAMENTO DA VENDA</th>
                                            <th colspan="5" style="font-size: 18px; text-align: center; width: 100px">ESCALA</th>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;"></td>
                                            <td style="font-size: 18px; text-align: center;">0</td>
                                            <td style="font-size: 18px; text-align: center;">1</td>
                                            <td style="font-size: 18px; text-align: center;">2</td>
                                            <td style="font-size: 18px; text-align: center;">3</td>
                                            <td style="font-size: 18px; text-align: center;">4</td>
                                        </tr>
                                        </thead>
                                        @php $i=0 @endphp
                                        @foreach($questions as $quest) 
                                        <tr>
                                            <td style="color: blue; font-size: 18px; vertical-align: middle;">{!! $quest[0] !!}</td>
                                            <td>
                                                
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="radio{{$i}}" id="radio1{{$i}}" value="0" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="radio1{{$i}}"></label>
                                            </div>
                                        
                                        
                                        </td>
                                            <td>
                                                
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="radio{{$i}}" id="radio2{{$i}}" value="1" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="radio2{{$i}}"></label>
                                            </div>
                                        
                                        
                                        </td>
                                            <td>
                                                
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="radio{{$i}}" id="radio3{{$i}}" value="2" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="radio3{{$i}}"></label>
                                            </div>
                                        
                                        
                                        </td>
                                            <td>
                                                
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="radio{{$i}}" id="radio4{{$i}}" value="3" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="radio4{{$i}}"></label>
                                            </div>
                                        
                                        
                                        </td>
                                            <td>
                                                
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" name="radio{{$i}}" id="radio5{{$i}}" value="4" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="radio5{{$i}}"></label>
                                            </div>
                                        
                                        
                                        </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">{!! $quest[1] !!}</td>
                                            <td colspan="5"></td>
                                        </tr>
                                        @php $i++ @endphp
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