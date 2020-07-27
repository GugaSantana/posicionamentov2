@extends('adminlte::page')

@section('content')

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
                <h3><center>INSTRUMENTO 18</center></h3>
        <h3><center>O FUNIL DE VENDAS, COM OBJETIVOS E MÉTRICAS DE AVANÇO</center></h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 18</center>
                </h3>
                <h3>
                    <center>O FUNIL DE VENDAS, COM OBJETIVOS E MÉTRICAS DE AVANÇO</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">

                    <div class="col-12">
                        <h4>
                            <center>Diagnóstico e Recomendações</center>
                        </h4>
                        <br>
                        <p class="fonte18">O Funil de Vendas é uma técnica fundamental para gerenciar o processo de vendas e alcançar sua meta de vendas e de faturamento.</p>
                        <p class="fonte18">O Funil de Vendas é uma representação gráfica da Jornada dos Clientes, que começa na PROSPECÇÃO e se estende até o FECHAMENTO DA VENDA.</p>
                        <p class="fonte18">Todas as etapas das Vendas Consultivas podem ser gerenciadas com o Funil de Vendas, como mostra a figura: </p>

                        <center><img src="../posicionamento/public/img/instrumento18/diag18_1.png" style="width: 50%; padding-bottom: 2%;"></center> <!-- ../posicionamento/public/img/instrumento18/diag6_1.png -->

                        <p class="fonte18">O Funil de Vendas lhe permite ter uma visão sistêmica de como está avançando o processo de vendas com seu cliente.</p>
                        <p class="fonte18">O funil representa e permite gerenciar as 5 etapas sequenciais das Vendas Consultivas.</p>
                        <p class="fonte18">Você deve gerenciar não apenas cada etapa do processo de venda como também a <b>Transição</b> ou <b>Passagem</b> de uma etapa para a seguinte.</p>
                        <p class="fonte18">Como gerenciar essa transição é a principal contribuição deste instrumento da nossa metodologia.</p>

                        <br>
                        <p class="fonte18">
                            <h4>
                                <center>DIAGNÓSTICO</center>
                            </h4>
                        </p>

                        <p class="fonte18">Os resultados de Conversão que você apresentou nas suas respostas foi o seguinte</p>

                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr class="center">
                                <th style="vertical-align: middle">ETAPAS DO FUNIL</th>
                                <th style="vertical-align: middle">Exemplo de Índices de Conversão atual de um vendedor (Em %)</th>
                                <th style="vertical-align: middle">Meus Índices de Conversão atual (Em %)</th>
                            </tr>
                            </thead>
                            <tr>
                                <td style="color: #ff4700">PROSPECÇÃO</td>
                                <td>40% das prospecções se tornam Clientes Potenciais</td>
                                <td><b>{{$instrumento->a}}%</b> Das minhas Prospecções se tornam Clientes Potenciais</td>
                            </tr>
                            <tr>
                                <td style="color: #ff4700">QUALIFICAÇÃO</td>
                                <td>30% dos Clientes Potenciais se tornam Clientes Potenciais qualificados</td>
                                <td><b>{{$instrumento->b}}%</b> Dos meus Clientes Potenciais se tornam Clientes Potenciais qualificados</td>
                            </tr>
                            <tr>
                                <td style="color: #ff4700">APRESENTAÇÃO/<br>NEGOCIAÇÃO</td>
                                <td>40% dos Clientes Potenciais qualificados geram propostas</td>
                                <td><b>{{$instrumento->c}}%</b> Dos meus Clientes Potenciais Qualificados geram propostas</td>
                            </tr>
                            <tr>
                                <td style="color: #ff4700">FECHAMENTO</td>
                                <td>50% das propostas implicam em fechamento da venda</td>
                                <td><b>{{$instrumento->d}}%</b> Das minhas propostas implicam em fechamento da venda</td>
                            </tr>
                        </table>

                        <p class="fonte18">Não existem padrões para estabelecer o percentual de clientes potenciais que devem evoluir de etapa para etapa.</p>
                        <p class="fonte18">Claro que o ideal, embora impossível, é 100%.</p>
                        <p class="fonte18">Certamente, com a aplicação das recomendações dos 20 instrumentos da metodologia você aumentará significativamente seus ÍNDICES DE CONVERSÃO entre as etapas.</p>

                        <br>

                        <p class="fonte18">
                            <h4>
                                <center>RECOMENDAÇÕES</center>
                            </h4>
                        </p>

                        <p class="fonte18">A partir de seus resultados apresentados no Diagnóstico, a primeira recomendação para você gerenciar e melhorar seu desempenho com a implementação do Funil de Vendas, consiste em estabelecer <b>metas de melhoria nos índices de conversão entre todas as etapas.</b></p>
                        <p class="fonte18">Temos quatro Índices de Passagem de uma etapa para outra que você deve monitorar e melhorar.</p>
                        <p class="fonte18">Para aumentar esses Índices de Conversão a orientação é implementar as recomendações que foram feitas nos Instrumentos específicos para cada etapa das Vendas Consultivas que compõem esta metodologia.</p>
                        <p class="fonte18">A seguir você visualiza os Instrumentos específicos de cada etapa das Vendas Consultivas:</p>

                        
                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr class="center">
                                <th>ETAPAS DO FUNIL DE VENDAS</th>
                                <th>INSTRUMENTOS DE CADA ETAPA</th>
                            </tr>
                            </thead>
                            <tr>
                                <td style="color: #ff4700">PROSPECÇÃO</td>
                                <td>11 - 12</td>
                            </tr>
                            <tr>
                                <td style="color: #ff4700">QUALIFICAÇÃO</td>
                                <td>13 - 14</td>
                            </tr>
                            <tr>
                                <td style="color: #ff4700">APRESENTAÇÃO</td>
                                <td>7 - 8 - 9 - 10 - 15</td>
                            </tr>
                            <tr>
                                <td style="color: #ff4700">NEGOCIAÇÃO</td>
                                <td>7 - 8 - 9 - 10 - 16</td>
                            </tr>
                            <tr>
                            <td style="color: #ff4700">FECHAMENTO</td>
                                <td>17</td>
                            </tr>
                        </table>
                        
                        <p class="fonte18">As recomendações específicas para você otimizar os resultados com a utilização do Funil de Vendas são as seguintes:</p>
                        <p class="fonte18">1 – Calcule o faturamento médio com cada cliente. Suponhamos que seja R$1.000,00</p>
                        <p class="fonte18">2 – Defina sua meta de faturamento mensal. Por hipótese, R$ 10.000,00</p>
                        <p class="fonte18">3 – Para alcançar essa meta você necessita vender para 10 clientes por mês, considerando o faturamento médio de R$ 1.000,00.</p>
                        <p class="fonte18">Vamos ver como se administra o Funil de Vendas num exemplo, utilizando os dados apresentados acima. Este deve ser seu raciocínio:</p>
                        <p class="fonte18">- Se 60% das Prospecções se tornam Clientes Potenciais.</p>
                        <p class="fonte18">- Se 50% dos Clientes Potenciais se tornam Clientes Potenciais Qualificados.</p>
                        <p class="fonte18">- Se 35% dos Clientes Potenciais Qualificados geram propostas e se,</p>
                        <p class="fonte18">- 50% das propostas implicam em fechamento da venda,</p>
                        <p class="fonte18">Você deve prospectar 200 clientes para, aplicando essas taxas de conversão, chegar a 10 clientes, que é seu objetivo para alcançar sua meta de faturamento.</p>
                        <p class="fonte18">Agora estabeleça Metas de Conversão entre as etapas tomando como referência ou ponto de partida os Índices de Conversão que você apresentou no diagnóstico.</p>

                        <form name="formulario" role="form" method="post" action="/instrumento/18_2">
                            {!! csrf_field() !!}

                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr>
                                <th style="vertical-align: middle; text-align: center">ETAPAS DO FUNIL</th>
                                <th style="vertical-align: middle; text-align: center">Meus Índices de Conversão atual (Em %)</th>
                                <th style="vertical-align: middle; text-align: center">Metas de Conversão <br>(em %)</th>
                            </tr>
                            </thead>
                            <tr>
                                <td style="color: #ff4700">PROSPECÇÃO</td>
                                <td><b>{{$instrumento->a}}%</b> das prospecções se tornam Clientes Potenciais</td>
                                <td style="text-align: center;">@if(empty($instrumento->a_diag)) <input name="a1" size=2 maxlength="3" onkeypress='return SomenteNumeroDez(event, this)' required> @else {{$instrumento->a_diag}} @endif</td>
                            </tr>
                            <tr>
                                <td style="color: #ff4700">QUALIFICAÇÃO</td>
                                <td><b>{{$instrumento->b}}%</b> dos Clientes Potenciais se tornam Clientes Potenciais qualificados</td>
                                <td style="text-align: center;">@if(empty($instrumento->a_diag)) <input name="b1" size=2 maxlength="3" onkeypress='return SomenteNumeroDez(event, this)' required> @else {{$instrumento->b_diag}} @endif</td>
                            </tr>
                            <tr>
                                <td style="color: #ff4700">APRESENTAÇÃO/<br>NEGOCIAÇÃO</td>
                                <td><b>{{$instrumento->c}}%</b> Dos Clientes Potenciais qualificados geram propostas</td>
                                <td style="text-align: center;">@if(empty($instrumento->a_diag)) <input name="c1" size=2 maxlength="3" onkeypress='return SomenteNumeroDez(event, this)' required> @else {{$instrumento->c_diag}} @endif</td>
                            </tr>
                            <tr>
                                <td style="color: #ff4700">FECHAMENTO</td>
                                <td><b>{{$instrumento->d}}%</b> das propostas implicam em fechamento da venda</td>
                                <td style="text-align: center;">@if(empty($instrumento->a_diag)) <input name="d1" size=2 maxlength="3" onkeypress='return SomenteNumeroDez(event, this)' required> @else {{$instrumento->d_diag}} @endif</td>
                            </tr>
                        </table>

                        @if(empty($instrumento->a_diag))
                        <div class="col-8">
                            <button class="btn btn-icon btn-3 btn-primary fonte18" type="submit">
                                <span class="btn-inner--icon"><i class="fa fa-paper-plane"></i></span>
                                <span class="btn-inner--text">Enviar formulário</span>
                            </button>
                        </div>
                        @endif

                        </form>

                        <br>

                        <p class="fonte18">Como vimos, para melhorar os Índices de Conversão das etapas você utilizará as recomendações de vários instrumentos da metodologia, isto porque o <font style="color: #35408f"><b>Funil de Vendas é o instrumento gerenciador da metodologia.</b></font></p>

                        <p class="fonte18">Estas são as recomendações específicas para melhorar o desempenho de cada etapa do Funil para assim melhorar e viabilizar as Metas de Conversão que você estabeleceu.</p>
                        <br>
                        <h4 style="color: #35408f">PRIMEIRA ETAPA</h4>
                        <p class="fonte18">Intensifique e dedique mais tempo à atividade de PROSPECÇÃO de clientes, e faça uma prospecção profissional. Para isto, siga as recomendações do Instrumento 11 – Definição do Perfil do Cliente Ideal, e do Instrumento 12 – Prospecção de Clientes.</p>
                        <br>
                        <h4 style="color: #35408f">SEGUNDA ETAPA</h4>
                        <p class="fonte18">Melhore a QUALIFICAÇÃO de seus clientes potenciais. Para isto, aplique as recomendações do Instrumento 13 – Qualificação dos Clientes Potenciais e do Instrumento 14 – Matriz para Identificar Clientes Prioritários.</p>
                        <br>
                        <h4 style="color: #35408f">TERCEIRA ETAPA</h4>
                        <p class="fonte18">Para aumentar a Produtividade da etapa de APRESENTAÇÃO, implemente as recomendações do instrumento 15 – Desenvolvimento da Quantidade e da Qualidade dos meus Argumentos de Vendas (Forças Propulsoras) e do Instrumento 16 – Neutralização dos Obstáculos da Venda (Forças Restritivas).</p>
                        <br>
                        <h4 style="color: #35408f">QUARTA ETAPA</h4>
                        <p class="fonte18">Aumente a produtividade da etapa de NEGOCIAÇÃO, aplicando as recomendações do Instrumento 15 – Desenvolvimento da Quantidade e da Qualidade dos meus Argumentos de Vendas (Forças Propulsoras) e do Instrumento 16 – Neutralização dos Obstáculos da Venda (Forças Restritivas).</p>
                        <p class="fonte18">Para gerenciar o Campo Psicológico, aplique as recomendações dos Instrumentos:</p>
                        <p class="fonte18">7 – Gerenciamento do Relacionamento através dos Estados do Ego.</p>
                        <p class="fonte18">8 – Gerenciamento do Relacionamento através da Exposição e do Feddback.</p>
                        <p class="fonte18">9 – Gerenciamento do Relacionamento utilizando os Canais Neurolinguísticos.</p>
                        <p class="fonte18">10 – Gerenciamento do Relacionamento através da Inteligência Emocional.</p>
                        <br>
                        <h4 style="color: #35408f">QUINTA ETAPA</h4>
                        <p class="fonte18">Melhore seu desempenho na etapa de FECHAMENTO, aplicando as recomendações do Instrumento 17 – Técnicas de Fechamento de Vendas.</p>
                        <p class="fonte18">- Estabeleça Metas de Conversão precisas entre as etapas e assuma o compromisso de tornar essas metas progressivamente mais exigentes.</p>
                        <p class="fonte18">Este é o processo denominado de KAIZEN, ou melhoria constante.</p>
                        <p class="fonte18">- Visualize onde, em que etapas os clientes potenciais estão saindo do Funil.</p>
                        <p class="fonte18">Analise as taxas de conversão entre os estágios e identificados os problemas, siga as recomendações do Instrumento 19 – Planos de Ação Quantitativos Para Alcançar as Metas.</p>
                        <p class="fonte18">Como pode se apreciar, o do Funil de Vendas tem um alto valor de integração desta metodologia de Vendas Consultivas, pois é a técnica chave para você gerenciar o processo de vendas e aumentar sua eficácia e profissionalismo para alcançar suas metas de vendas.</p>
                        <!-- <p class="fonte18">Até aqui, temos considerado como definir e aumentar a Taxa de Conversão</p>
                        <p class="fonte18">A segunda recomendação se refere ao GERENCIAMENTO DA VELOCIDADE DO FUNIL.</p>
                        <p class="fonte18">A Velocidade do Funil é a VELOCIDADE com que você avança nas etapas que compõem o FUNIL.</p>
                        <p class="fonte18">O primeiro passo para gerenciar a Velocidade do Funil é saber qual é a velocidade atual de avanço.</p>
                        <p class="fonte18">Existe uma fórmula para isto, que é a seguinte:</p>
                        <center>
                        <table border=1 cellpadding="5" cellspacing="0">
                        <tr style="text-align-last: center;"><td>
                        <p class="fonte18">Numero de Oportunidades no FUNIL DE VENDAS<br>
                        X<br>
                        Ganho Real = Lucro (percentual de ganho sobre o faturamento)<br>
                        X<br>
                        Valor médio das Vendas<br>
                        X<br>
                        Duração do Ciclo de Vendas</p>
                        </td></tr>
                        </table>
                        </center>
<br>
                        <p class="fonte18">Vamos aplicar a fórmula com um exemplo:</p>
                        
                        <center>
                        <table border=1 cellpadding="5" cellspacing="0">
                        <tr style="text-align-last: center;"><td>
                        <p class="fonte18">Número de Oportunidades do Funil de Vendas – 40<br>
                        Margem de Lucro – 30%<br>
                        Valor médio das Vendas – R$ 800,00<br>
                        Tempo de Ciclo (desde o primeiro contato até o fechamento) – 7 dias</p>
                        </td></tr>
                        </table>
                        </center>
                        <br>
                        <p class="fonte18">A Velocidade do Funil de Vendas neste exemplo é: (40 x 0,30 x 800) / 7 = R$ 1.371,00</p>
                        <p class="fonte18">Isto significa que todos os dias R $ 1.371,00 passam pelo Funil de Vendas.</p>
                        <p class="fonte18">Imaginemos que você aplicou esta fórmula ao seu FUNIL DE VENDAS.</p>
                        <p class="fonte18">Você aumentará a Velocidade do FUNIL DE VENDAS, intervindo nos quatro pontos ou componentes da Fórmula apresentada.</p>
                        <p class="fonte18">Intervir nos fatores da fórmula significa estabelecer novos objetivos para cada fator.</p>
                        <p class="fonte18">Para viabilizar, ou seja, para tornar realidade os novos objetivos dos quatro fatores da fórmula, a recomendação é implementar as recomendações apresentadas nos instrumentos da metodologia.</p>
 -->
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
    <script>
        $(document).ready(function() {
            $("#number").keyup(function() {
                $("#number").val(this.value.match(/[0-9]*/));
            });
        });

        function SomenteNumeroDez(e, element) {
            var num;
            var tecla = (window.event) ? event.keyCode : e.which;
            switch (tecla) {
                case 48:
                    num = 0;
                    break;
                    case 49:
                    num = 1;
                    break;
                    case 50:
                    num = 2;
                    break;
                    case 51:
                    num = 3;
                    break;
                    case 52:
                    num = 4;
                    break;
                    case 53:
                    num = 5;
                    break;
                    case 54:
                    num = 6;
                    break;
                    case 55:
                    num = 7;
                    break;
                    case 56:
                    num = 8;
                    break;
                    case 57:
                    num = 9;
                    break;
            }

            var numcampo = element.value;
            var total = ''+numcampo+num;
            total = parseInt(total);

            if(total > 100){
                alert("Digite valores de 1 a 100");
                return false;
            }

            if ((tecla > 47 && tecla < 58)) return true;
            else {
                if (tecla == 8 || tecla == 0) return true;
                else return false;
            }
        }
    </script>
    @endpush