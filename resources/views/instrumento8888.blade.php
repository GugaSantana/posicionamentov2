@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
<style>
    .card .table td,
    .card .table th {
        white-space: normal;
        background-color: #DCDCDC;
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

    .card .table td,
    .card .table th {
        font-size: 15px
    }
</style>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <h3 class="mb-0">
                        <center>INSTRUMENTO 6</center>
                    </h3>
                    <h3 class="mb-0">
                        <center>MATRIZ PARA AUMENTAR MINHA PRODUTIVIDADE NAS VENDAS</center>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <p><b>
                                <center>Levantamento de Informações</center>
                            </b></p>

                        <p>Com os instrumentos anteriores você teve a oportunidade de avaliar sua Visão e seu Nível de Ação, estabelecer quais são seus problemas prioritários, seu perfil profissional e avaliar em que medida você conhece os produtos que vende e os produtos concorrentes.</p>
                        <p>Nesta primeira etapa da metodologia que denominamos de <b>Precondições para Aumentar as Vendas</b>, se encerra com este instrumento.</p>
                        <p>É um instrumento extremamente importante porque ele lhe permitirá avaliar, de maneira técnica e objetiva, como resultado do processamento que a metodologia dará as suas respostas, seu Nível de Produtividade como Profissional de Vendas.</p>
                        <p>É uma oportunidade única de você obter esta informação e, mais do que isto, de receber as recomendações para aumentar seu nível de produtividade atual.</p>
                        <p>Avaliar a Produtividade é um procedimento técnico, que requer um certo grau de concentração.</p>
                        <p>Este é o instrumento da metodologia que lhe demandará mais dedicação. Podemos afirmar que a contribuição que lhe oferecerá para a melhoria do seu desempenho é significativa.</p>
                        <p>Os resultados deste instrumento contribuirão muito para você melhorar o nível de seu Perfil Profissional, que foi tratado no Instrumento 3 da metodologia.</p>
                        <p>A Produtividade é sempre uma relação entre um INPUT que são recursos que colocamos para obter alguma coisa (dinheiro, tempo, matérias primas) e um OUTPUT , ou seja, um resultado: o que obtemos com o INPUT</p>
                        <p>Quanto maior o OUTPUT e menor o INPUT mais produtivos seremos. Por exemplo: Se com 1 litro de gasolina (Input=insumo) fazemos com o carro 12 kms (Output)=resultado), temos maior produtividade de que se o carro consumir 2 litros para percorrer a mesma distância.</p>
                        <p>No caso dos vendedores OUTPUT são as vendas realizadas e INPUT a quantidade de esforço, basicamente tempo, que é dedicado para obter o OUTPUT planejado.</p>
                        <p>Na área de Vendas pouco se aplica este conceito de produtividade, apesar de seu resultado ser extraordinário.</p>
                        <p>Este instrumento avaliará com precisão e objetividade seu Nível de Produtividade e as recomendações que serão feitas a partir do resultado obtido garantirá de maneira objetiva e mensurável o aumento de sua eficácia e a conquista de suas metas.</p>


                        <!-- <center><img src="../img/inst5_1.png"></center> -->

                    </div>
                    <br>
                    <div class="col-12">
                        <p><b>INSTRUÇÕES</b></p>

                        <p>Você deve preencher a MATRIZ DE PRODUTIVIDADE apresentada neste instrumento, seguindo as seguintes orientações:</p>
                        <p>A – Na primeira coluna registre até 8 objetivos que você deve alcançar para realizar sua meta de vendas. Podem ser menos de 8 objetivos. Exemplo de objetivos: volume de vendas, preço médio, melhorar o mix, obter informações sobre a concorrência</p>
                        <p>Até quatro objetivos podem ser de alta importância para alcançar suas metas. Neste caso, se a cada um dos objetivos importantes você deve atribuir um peso de pelo menos 15%.</p>
                        <p>Registre-os na parte superior da coluna: Alta importância.</p>
                        <p>Agora, se o peso do objetivo for menor de 15%, registre-os na parte inferior da Matriz, denominada Baixa importância.</p>
                        <p>Não esqueça que cada objetivo deve ter um peso em valor percentual</p>
                        <p>B – Na Matriz no campo - Atividades que desenvolvo, você deve registrar as principais atividades que você realiza para alcançar seus objetivos de vendas.</p>
                        <p>Você pode registrar até 8 atividades, porem pode ser menos que 8</p>
                        <p>Na linha abaixo ( Percentual de tempo gasto em cada atividade) você deve registrar quanto tempo, em termos percentuais, você dedica a cada uma das atividades que foram definidas. A soma dos percentuais dedicados as atividades que você registrar deve totalizar 100%.</p>
                        <p>Deslocamentos até os clientes, elaboração de relatórios, reuniões com os clientes, compra de produtos, são exemplos de atividades.</p>
                        <p>Agora você já respondeu as partes A e B e a Matriz esta pronta para você responder a combinação dessas duas partes.</p>
                        <p>Para cada atividade você terá que responder a seguinte pergunta:</p>
                        <p>Em que medida, em uma escala de 1 a 10 esta atividade contribui para alcançar o objetivo 1? Utilize a escala a seguir:</p>

                        <center><img src="../posicionamento/public/img/inst6_1.png"></center>

                        <br>

                        <p>No cruzamento entre essa atividade e o objetivo 1 você coloca o numero que você atribuiu. (verifique a posição no gráfico tutorial abaixo).</p>
                        <p>Na sequencia, você faz a mesma pergunta em relação ao objetivo 2, ao objetivo 3, e assim sucessivamente com todos os objetivos.</p>
                        <p>Verifique se você cruzou todas as atividades com todos os objetivos.</p>
                        <p>Ao passar o mouse sobre os campos da matriz abaixo são exibidas as instruções de preenchimento.</p>

                        <br>
                        <form name="formulario" role="form" method="post" action="instrumento/6">
                            {!! csrf_field() !!}

                            <table border=1 cellpadding="5" cellspacing="0">
                                <tr>
                                    <th colspan="2" rowspan="2">Variáveis de entrada</th>
                                    <th style="text-align: center;" colspan="12">Atividades que desenvolvo</th>
                                </tr>
                                <tr>
                                    @for($i=0;$i<8;$i++) <td><input data-toggle="tooltip" title="ATIVIDADES QUE VOCÊ REALIZA PARA ALCANÇAR SEUS OBJETIVOS DE VENDAS. EX: Prospectar novos clientes, viajar, fazer reunião, preencher relatórios, etc.." type="text" class="form-control" name="atividade{{$i}}" placeholder=""></td>
                                        @endfor
                                </tr>
                                <tr>
                                    <td rowspan="2">Objetivos</td>
                                    <td rowspan="2">Pesos relativos</td>
                                    <td style="text-align: center;" colspan="12">PERCENTUAL DE TEMPO GASTO EM CADA ATIVIDADE (O total deve ser 100%)</td>
                                </tr>
                                <tr>
                                    @for($i=0;$i<8;$i++) <td><input data-toggle="tooltip" title="Tempo gasto em cada atividade. Utilize um intervalo (semana, mês) para facilitar a distribuição do tempo nas atividades. Do 100% do seu tempo de trabalho quanto (%) é gasto na atividade." id="number" type="text" class="form-control" name="percentualTempo{{$i}}" placeholder="" onkeypress='return SomenteNumero(event)'></td>
                                        @endfor
                                </tr>
                                <tr>
                                    <td colspan="2">A - Alta importância (15% ou +)</td>
                                    <td colspan="12"></td>
                                </tr>
                                @for($j=0;$j<4;$j++) <tr>
                                    <td><input data-toggle="tooltip" title="Quais são os objetivos de alta importância para você alcançar suas metas." type="text" class="form-control" name="objetivo{{$j}}" placeholder=""></td>
                                    <td><input data-toggle="tooltip" title="Peso relativo do Objetivo. Ex: 15%, 20%, ..." id="number" type="text" class="form-control" name="pesoobjetivo{{$j}}" placeholder="" onkeypress='return SomenteNumero(event)'></td>
                                    @for($i=0;$i<8;$i++) <td><input data-toggle="tooltip" title="Registre os valores da escala: em que medida cada atividade que você está analisando contribui para alcançar cada objetivo" id="number" type="text" class="form-control" name="percentualTempo{{$j}}-{{$i}}" placeholder="" onkeypress='return SomenteNumero(event)'></td>
                                        @endfor
                                        </tr>
                                        @endfor
                                        <tr>
                                            <td colspan="14"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">B - Baixa importância (15% ou -)</td>
                                            <td colspan="12"></td>
                                        </tr>
                                        @for($j=0;$j<4;$j++) <tr>
                                            <td><input data-toggle="tooltip" title="Registrar os Objetivos de Baixa importância se houver" type="text" class="form-control" name="objetivomedia{{$j}}" placeholder=""></td>
                                            <td><input data-toggle="tooltip" title="Peso relativo do Objetivo. Ex: 15%, 20%, ..." id="number" type="text" class="form-control" name="pesoobjetivomedia{{$j}}" placeholder="" onkeypress='return SomenteNumero(event)'></td>
                                            @for($i=0;$i<8;$i++) <td><input data-toggle="tooltip" title="Registre os valores da escala: em que medida cada atividade que você está analisando contribui para alcançar cada objetivo" id="number" type="text" class="form-control" name="percentualTempomedia{{$j}}-{{$i}}" placeholder="" onkeypress='return SomenteNumero(event)'></td>
                                                @endfor
                                                </tr>
                                                @endfor
                            </table>

                            <br>
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary" type="submit">
                                    <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                                    <span class="btn-inner--text">Enviar formulário</span>
                                </button>
                            </div>
                            <br><br><br>

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
    <script>
        $(document).ready(function() {
            $("#number").keyup(function() {
                $("#number").val(this.value.match(/[0-9]*/));
            });
        });

        function SomenteNumero(e) {
            var tecla = (window.event) ? event.keyCode : e.which;
            if ((tecla > 47 && tecla < 58)) return true;
            else {
                if (tecla == 8 || tecla == 0) return true;
                else return false;
            }
        }
    </script>
    @endpush