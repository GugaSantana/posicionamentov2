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
                <h3 class="mb-0"><center>INSTRUMENTO 16</center></h3>
                <h3 class="mb-0"><center>NEUTRALIZAÇÃO DOS OBSTÁCULOS DA VENDA (FORÇAS RESTRITIVAS)</center></h3>
            </div>
            <div class="card-body">
                    <div class="col-12">
                    <h3 class="mb-0"><center>Diagnóstico e Recomendações</center></h3>
                    <br>
                    <p>Os obstáculos ou Forças Restritivas devem ser gerenciados para que o Campo de Forças formado pelas Forças Propulsoras e as Forças Restritivas, tenha maior intensidade a favor das Forças Propulsoras, como mostra a figura seguinte</p>

                    <center><img src="../posicionamento/public/img/diag_16_1.png" style="width: 60%;"></center><br>

<p>Assim funciona o Campo de Forças.</p>
<p>Esta é a Base Conceitual deste Instrumento. Você pode correlacionar este instrumento com o anterior das Forças Propulsoras.</p>
<p>Implementando as recomendações deste instrumento e do instrumento anterior, você poderá gerenciar o <b>Campo de Forças das Vendas.</b></p>

                    <br>
                    <p><h3 class="mb-0"><center>DIAGNÓSTICO</center></h3></p>

                    <p>No questionário de respostas deste instrumento você listou os obstáculos que aparecem com maior freqüência na etapa de NEGOCIAÇÃO das Vendas Consultivas.</p>
                    <p>As Forças Restritivas (obstáculos) mais freqüentes que você listou foram classificadas e colocadas na Matriz de Forças Restritivas (R’s), gerando o seguinte resultado:</p>

                    @php
                        $forcas = [ 
                                'R1- Hábito',
                                'R2- Receio',
                                'R3- Preço',
                                'R4- Reclamação',
                                'R5- Detalhe',
                                'R6- Ignorância',
                                'R7- Concorrência',
                                'R8- Concorrência de Amizade',
                                'R9- Personalidade Difícil',
                                'R10- Tempo',
                                'R11- Corte do Vínculo',
                                'R12- Decisão Dividida',
                                'R13- Ambiente Negativo',
                                'R14- Atitudes Impróprias'
                                ]
                    @endphp

                    <div class="row">
                        <div class="col-12" style="">
                            <table class="tg">
                                <tr>
                                    <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">OBSTÁCULOS MAIS COMUNS FORÇAS RESTRITIVAS</th>
                                    <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Frequência dos Obstáculos por Força Restritiva</th>
                                    <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Em Valor Percentual</th>
                                </tr>
                                @php $i=0 @endphp
                                @foreach($forcas as $forca)
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$forca}}</td>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">{{$freq[$i]}}</td>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">{{number_format($freq[$i] * 100 / 14, 2)}}%</td>
                                    </tr>
                                    @php $i++ @endphp
                                @endforeach
                            </table>
                        </div>
                    </div>

                    <br>

                    <p>A seguir são apresentadas novamente as definições das 14 Forças Restritivas para sua análise.</p>
                    <p>As Forças Restritivas da Venda, também denominadas obstáculos, são todos os argumentos e atitudes do cliente que podem prejudicar nosso objetivo de vender.</p>
                    <p>A seguir são identificadas e definidas as 14 Forças Restritivas da Venda</p>
                    <p><b>R1- Hábito</b></p>
                    <p>Representa a dificuldade do cliente em aderir à nossa proposta por ela representar algo novo ou diferente do que ele conhece. Apresenta-se com máxima intensidade quando são oferecidos produtos/serviços inovadores.</p>
                    <p><b>R2- Receio</b></p>
                    <p>Decorre do instinto de proteção e faz com que o cliente não aceite nossa proposta, temendo ter prejuízos.</p>
                    <p><b>R3- Preço</b></p>
                    <p>Tendência natural em querer pagar menos, ou obter maior prazo de pagamento do que o estabelecido.</p>
                    <p><b>R4- Reclamação</b></p>
                    <p>Este obstáculo se apresenta quando o cliente não está percebendo os benefícios que espera do produto ou serviço oferecido ou por qualquer outra razão que o incomode.</p>
                    <p><b>R5- Detalhe</b></p>
                    <p>Representa a dificuldade do cliente para compreender a nossa proposta ou parte dela. Aprofunda-se um aspecto do produto/serviço oferecido, ou das condições da proposta e perde-se a visão do conjunto. Pode traduzir insegurança e desconfiança.</p>
                    <p><b>R6- Ignorância</b></p>
                    <p>Expressa falta de conhecimentos específicos em relação a nossa proposta o que impede que o cliente possa avaliá-la corretamente.</p>
                    <p><b>R7- Concorrência</b></p>
                    <p>É a manifestação de desinteresse do cliente em relação a nossa proposta, em função de sua preferência por uma proposta ou produto/serviço concorrente.</p>
                    <p><b>R8- Concorrência de Amizade</b></p>
                    <p>É o desinteresse do cliente na nossa proposta, em função de seu relacionamento pessoal com um vendedor concorrente.</p>
                    <p><b>R9- Personalidade Difícil</b></p>
                    <p>Quando o cliente manifesta agressivamente qualquer opinião contrária à nossa proposta. O cliente faz comentários que tendem a desqualificar o vendedor e o provoca consciente ou inconscientemente. Este obstáculo está vinculado a características de personalidade do cliente.</p>
                    <p><b>R10- Tempo</b></p>
                    <p>Consiste na argumentação do cliente de que não dispõe de tempo para realizar a reunião de vendas ou de que não é o momento apropriado para comprar.</p>
                    <p><b>R11- Corte do Vínculo</b></p>
                    <p>É caracterizado por atitudes do cliente que mostram seu interesse por finalizar a reunião de vendas, mesmo que o vendedor não tenha concluído sua apresentação.</p>
                    <p><b>R12- Decisão Dividida</b></p>
                    <p>Manifesta-se pelo adiamento da decisão porque o comprador afirma que não tem autoridade para decidir sozinho.</p>
                    <p><b>R13- Ambiente Negativo</b></p>
                    <p>Qualquer atitude do cliente ou do vendedor, que possa comprometer o campo psicológico e o diálogo de vendas.</p>
                    <p><b>R14- Atitudes Impróprias</b></p>
                    <p>Refere-se a palavras ou atitudes inconvenientes do cliente que prejudicam o progresso da venda. Muitas vezes este obstáculo decorre de falhas na comunicação e a precária inteligência emocional do vendedor.</p>
                   

                        <br>
                        <p><h3 class="mb-0"><center>RECOMENDAÇÕES</center></h3></p>

                        <p>Abaixo se apresenta a relação das Forças Restritivas (obstáculos) em ordem decrescente de freqüência, conforme suas respostas à primeira parte deste instrumento.</p>

                        <div class="row">
                            <div class="col-12" style="">
                                <table class="tg">
                                    <tr>
                                        <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">OBSTÁCULOS MAIS COMUNS FORÇAS RESTRITIVAS</th>
                                        <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Frequência dos Obstáculos por Força Restritiva</th>
                                        <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Em Valor Percentual</th>
                                    </tr>
                                    @php $i=0 @endphp
                                    @foreach($ordenado as $key => $value)
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$forcas[$key]}}</td>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">{{$value}}</td>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">{{number_format($value * 100 / 14, 2)}}%</td>
                                        </tr>
                                        @php $i++ @endphp
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <br>

                        <p>A primeira recomendação é que você memorize as definições dos obstáculos, de modo que você possa identificá-los assim que apareçam, apoiado na sua memória hábito.</p>
                        <p>É a mesma recomendação que fizemos com relação às Forças Propulsoras.</p>
                        <p>Apenas lembrando: memória hábito é aquela memória que lhe permite fazer uma ação de maneira inconsciente.</p>
                        <p>Por exemplo, não pensamos como se faz para caminhar quando caminhamos.</p>
                        <p>Em termos profissionais, os bons músicos de música clássica não lêem a partitura quando interpretam uma obra. Os atores de teatro ou de telenovelas representam a</p>
                        <p>obra sem ler o texto, eles podem ser espontâneos e naturais na interpretação porque o texto está decorado “no inconsciente”.</p>
                        <p>Os vendedores, enquanto verdadeiros profissionais de vendas, devem fazer a mesma coisa. Não é impossível: isto deve fazer parte da Profissão de Vendedor.</p>
                        <p>A segunda recomendação é encontrar as Forças Propulsoras mais adequadas para neutralizar cada obstáculo ou Força Restritiva.</p>
                        <p>A seguir apresentamos uma Matriz Indicativa de Forças Propulsoras para neutralizar as Forças Restritivas.</p>
                        
                        <br>

                        <h2 style="text-align: center;">MATRIZ INDICATIVA PARA NEUTRALIZAR AS FORÇAS RESTRITIVAS</h2>
                        
                        @php
                            $combinacao = [
                                '(F1, F2, F3, F4) F5, F6, F7',
                                '(F1, F2, F6) F12',
                                '(F1, F2, F3, F4) F1 Ampliados',
                                '(I), F8, F11, F13, F10',
                                'F8, F1 Ampliados, F13',
                                '(F1, F2, F3, F4)',
                                '(F1, F2, F3, F4) F6',
                                'F14, F13, F10, F14',
                                '(I), F11, F14, F17',
                                '(I), F13',
                                '(F1, F2, F6) F17',
                                '(F1, F2, F3, F4) F6',
                                '(I), F17',
                                'Reciclar todas as forças'
                                ]
                        @endphp

                        <div class="row">
                            <div class="col-12" style="">
                                <table class="tg">
                                    <tr>
                                        <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">Forças Restritivas (Obstáculos)</th>
                                        <th style="font-size: 18px; vertical-align: middle; width: 300px; text-align: center;">Combinação de Forças Propulsoras para neutralizar cada obstáculo (Esgrima)</th>
                                    </tr>
                                    @php $i=0 @endphp
                                    @foreach($forcas as $forca)
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px">{{$forca}}</td>
                                            <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center">{{$combinacao[$i]}}</td>
                                        </tr>
                                        @php $i++ @endphp
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <br>

                        <p>Lembre que quem vai gerenciar o CAMPO DE FORÇAS entre as Forças Propulsoras e as Forças Restritivas é a <b>Força Propulsora 17.</b></p>
                        <p><b>A Força Propulsora 17</b> monitora em tempo real como você está conduzindo o processo de vendas.</p>
                        <p><b>A Força Propulsora 17</b> nos indica as Forças Propulsoras que devem ser usadas, tanto na etapa de <b>Exposição</b> do produto como na etapa da <b>Negociação</b>, para neutralizar os obstáculos.</p>
                        <p>Especificamente fazemos referência ao Instrumento 5 – Meu Conhecimento da Linha de produtos que vendo e ao Instrumento 6 – Meu Conhecimento dos produtos concorrentes.</p>
                        <p>Procure montar sua própria estratégia de Forças Propulsoras para neutralizar os obstáculos.</p>
                        <p>Treine, dedique tempo para implementar as recomendações deste instrumento!</p>
                        <p>Um musico profissional de musica erudita treina 10 horas por dia, para que sua apresentação seja perfeita.</p>


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