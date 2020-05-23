@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
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
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                <h3 class="mb-0"><center>INSTRUMENTO 15</center></h3>
                <h3 class="mb-0"><center>AVALIAÇÃO DA QUANTIDADE E QUALIDADE DOS MEUS ARGUMENTOS DE VENDAS (FORÇAS PROPULSORAS)</center></h3>
            </div>
            <div class="card-body">
                    <div class="col-12">
                    <h3 class="mb-0"><center>Diagnóstico e Recomendações</center></h3>
                    <br>
                    <p>É obvio que quanto mais argumentos temos para vender nossos produtos mais eficazes seremos para implementar as etapas de APRESENTAÇÃO e NEGOCIAÇÃO das Vendas Consultivas e, em conseqüência, fechar vendas com maior Produtividade e em menor tempo.</p>
                    <p>Os argumentos de Vendas são fundamentais para neutralizar obstáculos e para induzir a decisão do cliente a comprar nossos produtos.</p>
                    <p>Quanto maior número de argumentos de qualidade temos, mais fácil será alcançar nossas metas de venda.</p>
                    <p>A maioria dos vendedores dispõe de poucos argumentos, muitas vezes de pouco valor de convencimento. Isto compromete os resultados.</p>
                    <p>Imagine a seguinte situação real, uma constante na em nossa experiência com esta metodologia.</p>

                    <center><img src="../posicionamento/public/img/diag_15_1.png" style="width: 70%;"></center><br>

                    <p>Desta situação podemos concluir que o vendedor apresenta:<br>
                    - Poucos argumentos<br>
                    - De Baixo Valor<br>
                    - Mal distribuídos entre as Forças Propulsoras, ou seja, as Forças Propulsoras estão desbalanceadas</p>
                    <p>Este quadro é sinônimo de baixa produtividade e certamente cria dificuldades para fechar as vendas e alcançar as metas.</p>
                    <p>Este instrumento é de fundamental importância para conduzir a fase de APRESENTAÇÃO das Vendas Consultivas.</p>

                    <br>
                    <p><h3 class="mb-0"><center>DIAGNÓSTICO</center></h3></p>

                    <p>No questionário deste instrumento que você respondeu, você listou todos os argumentos de que dispõe para vender o produto que você mais conhece na etapa de Negociação das Vendas Consultivas.</p>
                    <p>Os argumentos que você listou e classificou nas Forças Propulsoras são apresentados na Matriz de Forças Propulsoras, gerando o seguinte resultado:</p>
                    <p>Você produziu ___ argumentos.</p>

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
                            <table class="tg">
                                <tr>
                                    <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">FORÇAS PROPULSORAS</th>
                                    <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Frequência dos Argumentos</th>
                                </tr>
                                @php $i=0 @endphp
                                @foreach($forcas as $forca)
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$forca}}</td>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">{{$check[$i]}}</td>
                                    </tr>
                                    @php $i++ @endphp
                                @endforeach
                            </table>
                        </div>
                    </div>

                    <br>
                        <p>A seguir são apresentadas novamente as definições das 17 Forças Propulsoras para sua análise.</p>
                        <p>As Forças Propulsoras, são os argumentos que podemos utilizar para Negociação e Fechamento da venda.</p>
                        <p>A seguir são apresentadas, para sua leitura atenta, as definições das 17 Forças Propulsoras:</p>

                        <p><b>F1- Benefício</b> - Informa aos clientes o que podem lucrar, ou como podem melhorar sua situação, adquirindo o produto/serviço oferecido. Explicita o valor da proposta e induz a percepção desse valor por parte do cliente.</p>
                        <p><b>F2- Nosso Produto</b> - Apresenta aos clientes as características da empresa e do produto/serviço, nos quais se fundamenta os benefícios da posse e o valor percebido da proposta (F1).</p>
                        <p><b>F3- Produto Concorrente</b> - Informa ao cliente as características (atributos) não competitivos dos produtos/serviços concorrentes, porém evitando a difamação. É o fundamento da proposta de valor do concorrente. É o espelho do F2, é o F2 do concorrente</p>
                        <p><b>F4- Prejuízo</b> - Esclarece ao cliente as possíveis desvantagens em adquirir ou utilizar os produtos/serviços concorrentes. Mostra a desvantagem da proposta de valor do concorrente. É o espelho do F1, é o F1 do concorrente.</p>

                        <p><b>F5- Proposta</b> – É a apresentação da Nossa Proposta de Valor, a proposta de valor dos nossos produtos. Esta Força Propulsora também permite ao vendedor:<br>
                        - Fixar o nome do produto/serviço e da empresa;<br>
                        - Apresentar-se como profissional de vendas;<br>
                        - Esclarecer as condições da venda.</p>

                        <p><b>F6- Prestígio</b> - Informa ao cliente sobre o conceito que o produto que estamos oferecendo e a empresa, desfrutam no mercado, devido à boa qualidade e benefícios proporcionados por seus produtos ou serviços. Apóia-se em evidências de realidade. É comprovável, são dados objetivos de mercado e não apenas argumentos do vendedor. São evidências.</p>
                        <p><b>F7- História</b> - Esta força é aplicada quando o cliente tem dificuldades em manter a atenção no discurso do vendedor. Serve para manter o cliente motivado pela proposta.</p>
                        <p><b>F8- Explicação</b> - Permite esclarecer o cliente em relação àquelas informações que não lhe são familiar, principalmente em termos de conteúdos técnicos. Transmite segurança ao cliente.</p>
                        <p><b>F9- Ambiente</b> - A aplicação correta desta Força Propulsora de venda cria um clima favorável para a negociação com o cliente. O valor persuasivo de todas as forças de venda depende do uso correto do F9. São os fatores comportamentais em ação</p>
                        <p><b>F10- Prestígio Pessoal</b> - Eleva o conceito do vendedor junto a seu cliente, mostrando que ele está apto a solucionar problemas e auxiliá-lo, quando necessário. É fundamental quando se trata de Vendas Consultivas. Sem Prestigio Pessoal não se transmite confiança ao cliente.</p>
                        <p><b>F11- Apelo para o Narcisismo</b> - Fortalece o bom ambiente para o processo de vendas através do reconhecimento da dedicação e realizações do cliente.</p>
                        <p><b>F12- Segurança</b> – É a segurança com que o vendedor faz a APRESENTAÇÃO dos produtos. Remove o receio e transmite confiança ao cliente que apresenta um obstáculo. Faz com que o cliente sinta confiança no vendedor. Esta força é fundamental para dar confiabilidade ao cliente nas Vendas Consultivas</p>
                        <p><b>F13- Serviço</b> - Tem por objetivo melhorar o F10 (Prestígio Pessoal do vendedor). Esta força permite ter uma aproximação maior com o cliente, notadamente quando outras Forças Propulsoras falharem. É uma forma de acrescentar valor à proposta.</p>
                        <p><b>F14- Contato</b> - Serve para conquistar uma relação mais pessoal com o cliente, facilitando o processo de venda. O objetivo é estabelecer uma identidade entre o cliente e o vendedor, o que aumenta a confiança (somos iguais).</p>

                        <p><b>F15- Pergunta</b> - Permite ao vendedor obter as informações necessárias para manter o controle da reunião de vendas. Existem 5 tipos de Perguntas com diferentes objetivos específicos, são elas:<br></p>
                        <p style="margin-top: -10px;margin-left: 5%;"><b>A) F15- Investigação</b><br>
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

                        <p><b>F16- Comando</b> - O vendedor utiliza esta força de venda para provocar a decisão de compra em um cliente tímido ou indeciso, através de palavras de comando. É uma Força Propulsora do Fechamento da Venda.</p>
                        <p><b>F17- O Fator Gerenciador (Monitoramento das Forças)</b> - Permite que o vendedor aplique com máxima produtividade e precisão as outras 16 forças descritas.</p>

                        <br>

                        <p>É uma espécie de seletor das forças que devem ser aplicadas no transcurso das etapas de APRESENTAÇÃO e de NEGOCIAÇÃO das Vendas Consultivas.</p>
                        <p>Seus argumentos de venda foram classificados e colocados na Matriz de Forças Propulsoras gerando o resultado apresentado na Matriz abaixo.</p>
                        <p>Observe o forte desbalanceamento dos argumentos quando eles são remetidos as Forças Propulsoras nas quais se classificam.</p>
                        <p>Isto significa que você não apresenta diversidade de argumentos, ou seja, não explora todas as possibilidades disponíveis para convencer o cliente a comprar seu produto.</p>
                        <p>É possível aumentar significativamente a quantidade de argumentos desde que implemente as recomendações que serão apresentadas na próxima seção.</p>
                        
                    
                        <div class="row">
                            <div class="col-12" style="">
                                <table class="tg">
                                    <tr>
                                        <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">FORÇAS PROPULSORAS</th>
                                        <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Total de Argumentos por Força Propulsora</th>
                                        <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Participação Percentual de cada Força Propulsora</th>
                                    </tr>
                                    @php $i=0 @endphp
                                    @foreach($forcas as $forca)
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$forca}}</td>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">{{$check[$i]}}</td>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">{{number_format($check[$i] * 100 / $total, 2)}} %</td>
                                        </tr>
                                        @php $i++ @endphp
                                    @endforeach
                                </table>
                            </div>
                        </div>




                        <br>
                        <p><h3 class="mb-0"><center>RECOMENDAÇÕES</center></h3></p>

<p>As recomendações estão direcionadas para aumentar sua quantidade de argumentos, de modo a cobrir todas as Forças Propulsoras.</p>
<p>Você tem que gerar argumentos para todas as Forças Propulsoras e procurar um maior equilíbrio entre os argumentos de cada Força Propulsora.</p>
<p>Com um maior número de argumentos, você reduzirá o Tempo de Ciclo de suas Vendas, ou seja, necessitará de menos tempo para realizar uma venda.</p>
<p>Então, vendendo mais rápido, você terá mais tempo para abordar outros clientes.</p>
<p>O resultado final será aumentar o numero de vendas, aumentar sua receita e alcançar suas metas com maior facilidade.</p>
<p>Recomendamos que você memorize e fixe as definições das 17 Forças Propulsoras e gere argumentos para cada uma delas. Esta é uma condição obrigatória para implementar esta metodologia.</p>
<p>O domínio das definições deve ser total e absoluto. Você deve transformar as definições em algo inconsciente, assim como um ator memoriza o texto da obra que interpreta, ou como um músico profissional memoriza a partitura. A execução da obra parece ser algo inconsciente, o cérebro do artista opera em nível de hábito. O músico não tem que pensar qual será a nota seguinte daquela que acaba de tocar. Um profissional de vendas tem o mesmo desafio!</p>
<p>Após ter compreendido as 17 Forças Propulsoras, recomendamos que você faça uma nova lista de argumentos para os principais produtos que você comercializa.</p>
<p>- A seguir, classifique os argumentos produzidos, por Forças Propulsoras.</p>
<p>Desta maneira você estará gerando um Banco de Argumentos que lhe dará uma grande versatilidade e aumentará significativamente sua produtividade para as etapas de APRESENTAÇÃO e de NEGOCIAÇÃO das Vendas Consultivas.</p>
<p>- Memorize todos os argumentos gerados para cada produto.</p>
<p>Repita este exercício para outros produtos que você comercializa, de preferência para todos.</p>
<p>Assim você enriquecerá progressivamente seu <b>Banco de Argumentos</b>.</p>
<p>Lembramos que a Força Propulsora 17 monitora o uso de todas as outras Forças Propulsoras.</p>
<p>Esta é a força que gerencia o sistema para que você utilize a Força Propulsora correta, no momento certo!</p>
<p>Imagine a Força Propulsora 17 como sendo uma câmera que filma como você está conduzindo o processo de venda e em tempo real lhe indica, como se fosse um mecanismo de Feedback: que Força Propulsora você deve aplicar neste momento,</p>
<p>Vejamos no exemplo seguinte como você deveria agir mentalmente:</p>
<p>“Agora devo utilizar mais F8, necessito aumentar o número de argumentos relativos a F3 e F4 (sobre os concorrentes), para equilibrar melhor a relação como os F1 e F2. Agora é o momento de utilizar F7 porque o cliente não está prestando muita atenção ou o F6 para mostrar que temos evidências reais e comprovadas dos benefícios do produto que estou vendendo.”</p>
<p>As Forças Propulsoras mais estratégicas são:</p>

<p>F1 – que aponta para os benefícios para o cliente do produto que você está comercializando. (Proposta Única de Valor)<br>
F2 – que fundamenta os benefícios (F1) a partir de seus atributos. É recomendável utilizar pelo menos 6 F1 para cada F2<br>
F3 – Se refere aos atributos que explicam os benefícios (F4) dos produtos concorrentes.<br>
F4 – São os benefícios dos produtos concorrentes (que devem ser neutralizados com F1 e F2</p>

<p>Se a balança se inclina para F1/F2 fecharemos a venda.</p>
<p>O domínio desta metodologia é fundamental para neutralizar os obstáculos que o cliente pode apresentar.</p>
<p>A questão dos obstáculos será abordada no INSTRUMENTO 17 – NEUTRALIZAÇÃO DOS OBSTÁCULOS DA VENDA (FORÇAS RESTRITIVAS)</p>



<!-- RESPOSTA DE ACORDO COM REQUISIÇÃO -->
                        <!-- <p><h3 class="mb-0">Diagnóstico - $retorno['titulo']</H3></p>
                        <p>$retorno['diagnostico']</p>
                        <p><h3 class="mb-0">Recomendação - $retorno['titulo']</H3></p>
                        <p>$retorno['recomendacao']</p> -->
                        <br>
                        <center><a href="/autogestao"><span class="oi oi-arrow-circle-right" style="color:red; font-size: 22px"></span> Ir para Planilha de Autogestão</a></center>
                        
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