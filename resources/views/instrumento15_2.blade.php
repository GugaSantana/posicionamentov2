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
            <center>INSTRUMENTO 15</center>
        </h3>
        <h3>
            <center>AVALIAÇÃO DA QUANTIDADE E QUALIDADE DOS MEUS ARGUMENTOS DE VENDAS (FORÇAS PROPULSORAS)</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 15</center>
                </h3>
                <h3>
                    <center>AVALIAÇÃO DA QUANTIDADE E QUALIDADE DOS MEUS ARGUMENTOS DE VENDAS (FORÇAS PROPULSORAS)</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">

                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                            <p class="fonte18">Nesta etapa você esta recebendo os argumentos que você formulou assim como as Definições das 17 Forças Propulsoras das vendas.</p>
                    </div>
                    
                    
                    <div class="col-12">
                        <p class="fonte18" style="color: blue;"><b>A – SEUS ARGUMENTOS</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->

                        <div class="row">
                            <div class="col-12" style="overflow: auto;">
                                <table class="table table-hover table-bordered fonte18">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">SEUS ARGUMENTOS</th>
                                        </tr>    
                                    </thead>
                                    @php $i=1 @endphp
                                    @foreach(array_filter($data['argumentos']) as $arg)
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$i}} - {{$arg}}</td>
                                        </tr>
                                        @php $i++ @endphp
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <br><br>

                        <p class="fonte18" style="color: blue;"><b>B – FORÇAS PROPULSORAS – DEFINIÇÕES</b></p>
                        
                        <br>
                     
                        <p class="fonte18"><b>F1- Benefício</b> - Informa aos clientes o que podem lucrar, ou como podem melhorar sua situação, adquirindo o produto/serviço oferecido. Explicita o valor da proposta e induz a percepção desse valor por parte do cliente.</p>
                        <p class="fonte18"><b>F2- Nosso Produto</b> - Apresenta aos clientes as características da empresa e do produto/serviço, nos quais se fundamenta os benefícios da posse e o valor percebido da proposta (F1).</p>
                        <p class="fonte18"><b>F3- Produto Concorrente</b> - Informa ao cliente as características (atributos) não competitivos dos produtos/serviços concorrentes, porém evitando a difamação. É o fundamento da proposta de valor do concorrente. É o espelho do F2, é o F2 do concorrente</p>
                        <p class="fonte18"><b>F4- Prejuízo</b> - Esclarece ao cliente as possíveis desvantagens em adquirir ou utilizar os produtos/serviços concorrentes. Mostra a desvantagem da proposta de valor do concorrente. É o espelho do F1, é o F1 do concorrente.</p>

                        <p class="fonte18"><b>F5- Proposta</b> – É a apresentação da Nossa Proposta de Valor, a proposta de valor dos nossos produtos. Esta Força Propulsora também permite ao vendedor:<br>
                        - Fixar o nome do produto/serviço e da empresa;<br>
                        - Apresentar-se como profissional de vendas;<br>
                        - Esclarecer as condições da venda.</p>

                        <p class="fonte18"><b>F6- Prestígio</b> - Informa ao cliente sobre o conceito que o produto que estamos oferecendo e a empresa, desfrutam no mercado, devido à boa qualidade e benefícios proporcionados por seus produtos ou serviços. Apóia-se em evidências de realidade. É comprovável, são dados objetivos de mercado e não apenas argumentos do vendedor. São evidências.</p>
                        <p class="fonte18"><b>F7- História</b> - Esta força é aplicada quando o cliente tem dificuldades em manter a atenção no discurso do vendedor. Serve para manter o cliente motivado pela proposta.</p>
                        <p class="fonte18"><b>F8- Explicação</b> - Permite esclarecer o cliente em relação àquelas informações que não lhe são familiar, principalmente em termos de conteúdos técnicos. Transmite segurança ao cliente.</p>
                        <p class="fonte18"><b>F9- Ambiente</b> - A aplicação correta desta Força Propulsora de venda cria um clima favorável para a negociação com o cliente. O valor persuasivo de todas as forças de venda depende do uso correto do F9. São os fatores comportamentais em ação</p>
                        <p class="fonte18"><b>F10- Prestígio Pessoal</b> - Eleva o conceito do vendedor junto a seu cliente, mostrando que ele está apto a solucionar problemas e auxiliá-lo, quando necessário. É fundamental quando se trata de Vendas Consultivas. Sem Prestigio Pessoal não se transmite confiança ao cliente.</p>
                        <p class="fonte18"><b>F11- Apelo para o Narcisismo</b> - Fortalece o bom ambiente para o processo de vendas através do reconhecimento da dedicação e realizações do cliente.</p>
                        <p class="fonte18"><b>F12- Segurança</b> – É a segurança com que o vendedor faz a APRESENTAÇÃO dos produtos. Remove o receio e transmite confiança ao cliente que apresenta um obstáculo. Faz com que o cliente sinta confiança no vendedor. Esta força é fundamental para dar confiabilidade ao cliente nas Vendas Consultivas</p>
                        <p class="fonte18"><b>F13- Serviço</b> - Tem por objetivo melhorar o F10 (Prestígio Pessoal do vendedor). Esta força permite ter uma aproximação maior com o cliente, notadamente quando outras Forças Propulsoras falharem. É uma forma de acrescentar valor à proposta.</p>
                        <p class="fonte18"><b>F14- Contato</b> - Serve para conquistar uma relação mais pessoal com o cliente, facilitando o processo de venda. O objetivo é estabelecer uma identidade entre o cliente e o vendedor, o que aumenta a confiança (somos iguais).</p>

                        <p class="fonte18"><b>F15- Pergunta</b> - Permite ao vendedor obter as informações necessárias para manter o controle da reunião de vendas. Existem 5 tipos de Perguntas com diferentes objetivos específicos, são elas:<br></p>
                        <p class="fonte18" style="margin-top: -10px;margin-left: 5%;"><b>A) F15- Investigação</b><br>
                        A pergunta na forma de investigação permite ao vendedor obter informações para direcionar seu trabalho junto ao cliente. Este tipo de pergunta é fundamental em Vendas Consultivas para poder assessorar o cliente com precisão.<br>
                        <b>B) F15- Sondagem do Progresso</b><br>
                        A pergunta na forma de sondagem permite que o vendedor avalie quanto ele progrediu em direção à decisão do cliente.<br>
                        <b>C) F15- Sugestão</b><br>
                        A pergunta na forma de sugestão é uma maneira de envolver diplomaticamente o cliente na formulação de argumentos necessários para promover a venda. (“você concorda que....”)<br>
                        <b>D) F15- Decisão</b><br>
                        Esta forma de pergunta é utilizada para provocar a decisão positiva de compra por parte do cliente em relação ao produto/serviço oferecido. É uma Força Propulsora específica do Fechamento da Venda<br>
                        <b>E) F15- Esgrima</b><br>
                        Acalma o cliente que apresenta um obstáculo. Para o vendedor representa um ganho de tempo importante para se recuperar e reestruturar seu raciocínio quando surge um obstáculo difícil.
                        </p>

                        <p class="fonte18"><b>F16- Comando</b> - O vendedor utiliza esta força de venda para provocar a decisão de compra em um cliente tímido ou indeciso, através de palavras de comando. É uma Força Propulsora do Fechamento da Venda.</p>
                        <p class="fonte18"><b>F17- O Fator Gerenciador (Monitoramento das Forças)</b> - Permite que o vendedor aplique com máxima produtividade e precisão as outras 16 forças descritas.</p>

                        <p class="fonte18">É uma espécie de seletor das forças que devem ser aplicadas no transcurso das etapas de APRESENTAÇÃO e de NEGOCIAÇÃO das Vendas Consultivas.</p>

                        <br><br>

                        <p class="fonte18" style="color: blue;"><b>C – ALOQUE SEUS ARGUMENTOS ÀS FORÇAS PROPULSORAS CONFORME SUAS DEFINIÇÕES.</b></p>

                        <br>

                        <p class="fonte18">Na tabela abaixo, após leitura atenta das definições das Forças Propulsoras, classifique cada argumento que você registrou em uma única Força Propulsora.</p>
                        <p class="fonte18">Se o argumento não coincide exatamente como uma Força Propulsora, classifique por aproximação naquela Força Propulsora que melhor o representa</p>
                        <p class="fonte18">Todos seus argumentos devem ser classificados.</p>
                        <p class="fonte18">Lembre que você só pode alocar cada argumento a uma única Força Propulsora.</p>

                    </div>

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form id="formulario" name="formulario" role="form" method="post" action="15_2">
                            {!! csrf_field() !!}

                            @php $i=1 @endphp
                            @foreach(array_filter($data['argumentos']) as $arg)
                                <input name="argumentos[]" value="{{$i}} - {{$arg}}" hidden>
                                @php $i++ @endphp
                            @endforeach
                            
                            @php
                                $forcas = [ 'F1- Benefício',
                                            'F2- Nosso Produto',
                                            'F3- Produto Concorrente',
                                            'F4- Prejuízo',
                                            'F5- Proposta',
                                            'F6- Prestígio',
                                            'F7- História',
                                            'F8- Explicação',
                                            'F9- Ambiente',
                                            'F10- Prestígio Pessoal',
                                            'F11- Apelo para o Narcisismo',
                                            'F12- Segurança',
                                            'F13- Serviço - T',
                                            'F14- Contato',
                                            'F15- Pergunta',
                                            'F16- Comando',
                                            'F17- O Fator Gerenciador']
                            @endphp

                            <div class="row">
                                <div class="col-12" style="">
                                    <table class="table table-hover table-bordered fonte18">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">FORÇAS PROPULSORAS</th>
                                                <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Contagem dos Argumentos por Força Propulsora</th>
                                                <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Frequencia Total por Força Propulsora</th>
                                            </tr>
                                        </thead>
                                        @php $i=0 @endphp
                                        @foreach($forcas as $forca)
                                            <tr>
                                                <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$forca}}</td>
                                                <td style="font-size: 18px; vertical-align: middle; width: 600px">
                                                    <table>
                                                    <tr>
                                                    @for($n=1; $n<=count(array_filter($data['argumentos'])); $n++)
                                                    
                                                    <td style="border: none">{{$n}}</td> <td style="border: none; padding-right: 2%;"><input onclick="calcFreq({{$i}}, this)" style="vertical-align: sub; width: 25px; height: 25px; cursor: pointer" name="check{{$i}}[]" id="check{{$i}}-{{$n}}" type="checkbox" value="true"></td>
                                                    @if($n%5 == 0)  
                                                    </tr><tr>
                                                    @endif
                                                    @endfor
                                                    </tr>
                                                    </table>
                                                </td>
                                                <td style="text-align: center; font-size: 18px; vertical-align: middle; width: 600px" id="freqTotal{{$i}}">0</td>
                                            </tr>
                                            @php $i++ @endphp
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary fonte18" type="button" onclick="submitForm()">
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

    function calcFreq(id, element){
        freq = document.getElementById("freqTotal"+id).innerHTML;
        if(element.checked){
            freq++;
            total++;
            if(total > total_aceito){
                alert('Você excedeu o limite de escolhas');
                element.checked = false;
                total--;
                freq--;
            }
        }
        else{
            freq--;
            total--;
        }
        document.getElementById("freqTotal"+id).innerHTML = freq;
    }

    var total_aceito = {{ count(array_filter($data['argumentos'])) }};
    var total = 0;
    function limit(){
        alert(total+" " +total_aceito);
    }

    function submitForm(){
        if(total_aceito == total){
            $("#formulario").submit();
        }
        else{
            if(total_aceito-total == 1){
                alert("Selecione mais " + (total_aceito-total) + " opção!");
            }
            else{
                alert("Selecione mais " + (total_aceito-total) + " opções!");
            }
        }
    }

</script>
<script>window.onload = function(){history.go(+1)};</script>

@endpush