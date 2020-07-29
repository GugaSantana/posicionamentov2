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
                <h3>
            <center>INSTRUMENTO 18</center>
        </h3>
        <h3>
            <center>O FUNIL DE VENDAS, COM OBJETIVOS E MÉTRICAS DE AVANÇO</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
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
                            <center>Levantamento de Informações</center>
                        </h4>

                        <p class="fonte18">Este é o primeiro dos três instrumentos que foram desenvolvidos para que você possa Gerenciar de maneira profissional as etapas das Vendas Consultivas que lhe foram transferidas na etapa anterior da Metodologia.</p>
                        <p class="fonte18">O Funil de Vendas é um modelo e uma técnica que acompanha as fases da jornada do cliente, desde o primeiro contato com ele, até o fechamento da venda.</p>
                        <p class="fonte18">Reconhecidamente, o Funil de Vendas é a técnica mais eficaz para gerenciar o processo de Vendas Consultivas.</p>
                        <p class="fonte18">Ele permite acompanhar e gerenciar por objetivos o processo da venda ao longo das cinco etapas das Vendas Consultivas:</p>
                        <p class="fonte18" style="color: #35408f; font-size: 21px">PROSPECÇÃO – QUALIFICAÇÃO – APRESENTAÇÃO – NEGOCIAÇÃO - FECHAMENTO</p>
                        <p class="fonte18">Para todas estas 5 etapas foram apresentados instrumentos nesta metodologia.</p>
                        <p class="fonte18">O Funil vai se estreitando na medida em que avançamos de uma etapa para a seguinte, até chegar ao Fechamento e, portanto, à realização da venda.</p>

                       
                        <!-- <center><img src="../img/inst5_1.png"></center> -->

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>

                        <p class="fonte18">Você deve responder este instrumento avaliando percentualmente, os índices de avanço atual dos clientes potenciais ao longo das 5 etapas da Venda Consultiva.</p>
                        <p class="fonte18">Chamamos este índice de avanço de Taxa de Conversão.</p>
                        <p class="fonte18">O Instrumento consiste em definir qual é seu nível atual de conversão (Taxa de Conversão), ou seja, o percentual de passagem dos clientes potenciais de uma etapa da venda para outra.</p>
                        <p class="fonte18">A figura seguinte, na qual você registrará suas respostas, apresenta um exemplo que ilustra como se deve proceder para preencher o instrumento.</p>
                        <p class="fonte18">Para isto, defina e registre conforme sua pratica atual, que percentual de clientes potenciais avança de uma etapa para a seguinte do Funil.</p>
                        <p class="fonte18">O exemplo que apresentamos lhe permitirá compreender plenamente como responder.</p>
                        <p class="fonte18">Imaginemos que os índices de conversão de cada etapa sejam os seguintes:</p>
                        <p class="fonte18">- 40% das prospecções se tornam Clientes Potenciais</p>
                        <p class="fonte18">- 30% dos Clientes Potenciais se tornam Clientes Potenciais qualificados</p>
                        <p class="fonte18">- 40% dos Clientes Potenciais qualificados geram propostas</p>
                        <p class="fonte18">- 50% das propostas implicam em fechamento da venda</p>
                        <p class="fonte18">Apresentado este exemplo, registre na coluna à direita do gráfico, seus percentuais de conversão atuais para cada etapa do Funil.</p>
                        <p class="fonte18">Procure estimar esses valores percentuais com a maior precisão possível.</p>

                        <br>
                        <form name="formulario" role="form" method="post" action="instrumento/18">
                            {!! csrf_field() !!}

                            <table class="table table-hover table-bordered fonte18">
                                <thead class="bg-primary">
                                <tr style="text-align: center">
                                    <th style="vertical-align: middle">ETAPAS DO FUNIL</th>
                                    <th style="vertical-align: middle">Exemplo de Índices de Conversão atual de um vendedor (Em %)</th>
                                    <th style="vertical-align: middle">Meus Índices de Conversão atual (Em %)</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td style="color: #ff4700">PROSPECÇÃO</td>
                                    <td>40% das prospecções se tornam Clientes Potenciais</td>
                                    <td><input name="a" size=2 maxlength="3" onkeypress='return SomenteNumeroDez(event, this)' required> Das minhas Prospecções se tornam Clientes Potenciais</td>
                                </tr>
                                <tr>
                                    <td style="color: #ff4700">QUALIFICAÇÃO</td>
                                    <td>30% dos Clientes Potenciais se tornam Clientes Potenciais qualificados</td>
                                    <td><input name="b" size=2 maxlength="3" onkeypress='return SomenteNumeroDez(event, this)' required> Dos meus Clientes Potenciais se tornam Clientes Potenciais qualificados</td>
                                </tr>
                                <tr>
                                    <td style="color: #ff4700">APRESENTAÇÃO/<br>NEGOCIAÇÃO</td>
                                    <td>40% dos Clientes Potenciais qualificados geram propostas</td>
                                    <td><input name="c" size=2 maxlength="3" onkeypress='return SomenteNumeroDez(event, this)' required> Dos meus Clientes Potenciais Qualificados geram propostas</td>
                                </tr>
                                <tr>
                                    <td style="color: #ff4700">FECHAMENTO</td>
                                    <td>50% das propostas implicam em fechamento da venda</td>
                                    <td><input name="d" size=2 maxlength="3" onkeypress='return SomenteNumeroDez(event, this)'> Das minhas propostas implicam em fechamento da venda</td>
                                </tr>
                            </table>

                            <br>
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary fonte18" type="submit">
                                    <span class="btn-inner--icon"><i class="fa fa-paper-plane"></i></span>
                                    <span class="btn-inner--text">Enviar formulário</span>
                                </button>
                            </div>
                            <br><br><br>

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
    <script>window.onload = function(){history.go(+1)};</script>
    @endpush