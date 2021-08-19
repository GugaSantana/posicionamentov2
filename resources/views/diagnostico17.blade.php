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
                <h3><center>INSTRUMENTO 17</center></h3>
        <h3><center>TÉCNICAS DE FECHAMENTO DA VENDA</center></h3>
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
                    <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>

                    <p class="fonte18">O Fechamento das Vendas no Paradigma das Vendas Consultivas tem características diferentes do Fechamento de Vendas nas Vendas Transacionais (tradicionais).</p>
                    <p class="fonte18">Por esse motivo, as Vendas Transacionais também são chamadas de “Hard Sell” (vendas duras) e as Vendas Consultivas são chamadas de “Soft Sell” (vendas suaves).</p>
                    <p class="fonte18">O Perfil do Fechamento é completamente diferente nesses dois modelos ou Abordagens de Vendas.</p>
                    <p class="fonte18">A figura seguinte representa os dois Paradigmas de Vendas:</p>

                    <center><img src="../posicionamento/public/img/instrumento17/diag_17_1.jpg" style="width: 70%;"></center><br>

                    <p class="fonte18">Os triângulos invertidos representam o tempo gasto em cada fase das Etapas da Venda, nos paradigmas “Hard Sell e Soft Sell”.</p>

                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>

                    <p class="fonte18">Inicialmente, reproduzimos a escala que foi utilizada para obter suas respostas, como referência para as conclusões diagnósticas.</p>
                    <p class="fonte18">Escala:<br>
                    0- Nunca utilizo esta técnica.<br>
                    1- Raramente utilizo esta técnica.<br>
                    2- Às vezes, de vez em quando utilizo esta técnica.<br>
                    3- Com certa frequência utilizo esta técnica.<br>
                    4- Com muita frequência utilizo esta técnica.</p>
                    <p class="fonte18">As Técnicas de Fechamento de Vendas, que foram apresentadas no questionário que você respondeu, são as seguintes:</p>

                    @php
$questions = [
['1- FECHAMENTO DIRETO',
'Faço uma pergunta direta quando há sinais de concordância.'
],[
'2- FECHAMENTO POR ALTERNATIVAS',
'Eu faço uma pergunta com duas alternativas direcionadas para a conclusão do negócio.
<br>
Utilizo esta técnica quando tenho um mínimo de segurança que o cliente fechará a compra.'
],[
'3- FECHAMENTO PELA OPORTUNIDADE',
'É o fechamento pelo medo da perda. Eu crio "senso de urgência" no cliente, do tipo agora ou nunca, porque o ser humano é muito motivado pelo medo de perder.
<br>
Eu mostro os prejuízos que podem acontecer ao cliente se ele não fechar a compra agora.'
],[
'4- FECHAMENTO PELOS PRÓXIMOS PASSOS',
'Eu parto do principio que o cliente já fechou a compra e faço uma pergunta em relação ao que vem depois.'
],[
'5- FECHAMENTO PELA BALANÇA',
'Eu fecho o negócio, provocando uma comparação entre os benefícios e os prejuízos de comprar o produto.'
],[
'6- FECHAMENTO PELA EXPERIMENTAÇÃO',
'Eu faço com que o cliente sinta, que experimente o produto, porque isto cria um sentimento inconsciente de pertencimento.'
],[
'7- FECHAMENTO PELO VALOR',
'Eu mostro ao cliente todos os benefícios de modo que o produto pareça barato. Eu não falo em preço, falo em valor e então passo para o fechamento direto (técnica número 1).'
],[
'8- FECHAMENTO EXPERIMENTAL',
'Para fechar, apresento primeiro o produto mais caro, depois um produto cujo preço é meu objetivo da venda e se houver resistência, finalmente apresento uma opção mais barata, para que a compra aconteça.'
],[
'9- FECHAMENTO INDUZIDO',
'Quando não há objeções e o cliente está decidido a comprar, eu concluo minha apresentação e pergunto quando posso entregar o produto.'
],[
'10- FECHAMENTO POR PERGUNTA',
'Eu posso fechar a venda em forma de pergunta.'
],[
'11- FECHAMENTO POR SINAIS DE LINGUAGEM CORPORAL',
'Para fechar a venda, eu escuto ativamente e observo sinais e gestos para perceber se o cliente está realmente interessado em comprar o produto que lhe estou oferecendo.'
],[
'12- FECHAMENTO NATURAL',
'Eu conduzo a reunião focado nas técnicas de Vendas Consultivas e o fechamento é tão natural que parece que “eu não vendo” e sim que o “cliente compra”.'
]]
    @endphp

                    <div class="row">
                        <div class="col-12">
                        <table class="table table-hover table-bordered fonte18" style="width: 100%">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="font-size: 18px; text-align: center; vertical-align: middle;">TÉCNICAS DE FECHAMENTO DA VENDA</th>
                                        </tr>
                                        </thead>
                                        @php $i=0 @endphp
                                        @foreach($questions as $quest) 
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">
                                            <p class="fonte18"><font style="color: blue">{!! $quest[0] !!}</font><br>
                                            {!! $quest[1] !!}</p>
                                            </td>
                                        </tr>
                                        @php $i++ @endphp
                                        @endforeach
                                    </table>
                        </div>

                    </div>

                    <br>

                        <p class="fonte18">As primeiras 11 técnicas estão muito mais relacionadas com a abordagem “Hard Sell” de vendas, enquanto a 12ª Técnica de Fechamento é específica do modelo “Soft Sell”.</p>
                        <p class="fonte18" style="color: red"><b>Hard Sell</b> - Seu resultado aponta o valor <b>{{$hard}}</b> com que você utiliza as Técnicas de Hard Sell na escala de 0 a 4 que você respondeu.</p>
                        <p class="fonte18" style="color: red"><b>Soft Sell</b> - Seu resultado aponta o valor <b>{{$soft}}</b> com que você utiliza a Técnica de Soft Sell na escala de 0 a 4 que você respondeu (12ª – Fechamento Natural).</p>
                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>

                        <p class="fonte18">Conforme os conceitos apresentados, você deve desenvolver e tratar de migrar do Fechamento de Vendas do paradigma Hard Sell para o Fechamento de Vendas do paradigma Soft Sell.</p>
                        <p class="fonte18">Todavia, você não deve abandonar as Técnicas de Fechamento próprias do modelo Hard Sell, isto porque a Recomendação mais estratégica deste Instrumento é que você tenha um amplo repertório de técnicas de fechamento e as utilize conforme sua SENSIBILIDADE SITUACIONAL.</p>
                        <p class="fonte18">A Sensibilidade Situacional para utilizar uma ou outra técnica de fechamento será dada pelas conclusões que você chegar sobre o perfil de seu cliente e as características do Campo Psicológico no momento do fechamento.</p>
                        <p class="fonte18">A Recomendação mais estratégica é desenvolver a técnica de FECHAMENTO NATURAL, de modo que essa técnica alcance o nível 4 da escala, e que seja utilizada com a maior frequência possível.</p>
                        <p class="fonte18">Ao mesmo tempo, aumente seu repertório de técnicas de fechamento convencionais e desenvolva-as começando pelas técnicas que apresentam os valores mais baixos.</p>

                        <p class="fonte18">Como foi demonstrado, isto lhe permitirá ter versatilidade no fechamento. Todavia, estabeleça como principal objetivo migrar suas técnicas de fechamento para a técnica: Fechamento Natural e monitore esta evolução.</p>
                        <p class="fonte18">Somente aplicando as Recomendações dos outros 19 Instrumentos da Metodologia você terá condições de aplicar a Técnica de Fechamento Natural.</p>
                        <p class="fonte18">Em última instância, a Recomendação Estratégica é a seguinte:</p>
                        <p class="fonte18">“Não venda conforme as premissas da Venda Transacional” (técnicas de fechamento de 1 a 11), conduza o Processo de Venda para que o cliente compre utilizando a Técnica de Fechamento Natural (Soft Sell).</p>
                        <p class="fonte18">Em síntese, o objetivo das Recomendações é que você tenha um Banco de Técnicas de Fechamento que poderá auxiliá-lo conforme as situações.</p>
                        <p class="fonte18">Sua sensibilidade para utilizar as técnicas de fechamento corretas será determinada por suas competências comportamentais desenvolvidas com a implementação das Recomendações dos seguintes Instrumentos</p>

                        <p class="fonte18">- Instrumento 7 – Gerenciamento de relacionamento através dos Estados do Ego.<br>
                        - Instrumento 8 – Gerenciamento de relacionamento através da Exposição e do Feedback.<br>
                        - Instrumento 9 – Gerenciamento de relacionamento usando os Canais Neurolinguísticos.<br>
                        - Instrumento 10 – Gerenciamento de relacionamento através da Inteligência Emocional.</p>

                        <p class="fonte18">Você também poderá se beneficiar do monitoramento do Processo de Venda para escolher a técnica de fechamento mais adequada. Para este fim, utilize o F17, Força Propulsora apresentada no Instrumento 15 – Desenvolvimento da Quantidade e da Qualidade dos meus Argumentos de Vendas (Forças Propulsoras).</p>

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

</div>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush