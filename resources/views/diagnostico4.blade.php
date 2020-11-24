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

    #bola{
            background: radial-gradient(circle at center,#f00 0%,#f00 0%,#f00 6px,rgba(0,0,0,0) 8px);
        }
        

</style>

<div class="card card-primary">
    <div class="card-header">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3>
            <center>INSTRUMENTO 4</center>
        </h3>
        <h3>
            <center>MEU CONHECIMENTO DA LINHA DE PRODUTOS QUE VENDO</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 4</center>
                </h3>
                <h3>
                    <center>MEU CONHECIMENTO DA LINHA DE PRODUTOS QUE VENDO</center>
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
                        <p class="fonte18">O conhecimento da linha de produtos que você vende é fundamental para seu sucesso em Vendas.</p>
                        <p class="fonte18">As técnicas de Vendas somente vão fazer sentido e contribuirão para seu trabalho se puderem se apoiar num sólido conhecimento dos produtos que você vende.</p>
                        <p class="fonte18">Para se ter sucesso em Vendas, temos que dominar duas coisas: O QUE VENDEMOS, ou seja, o conhecimento dos produtos que vendemos e COMO VENDEMOS, ou seja, as técnicas de Vendas.</p>
                        <p class="fonte18">Esta Metodologia fornece Diagnósticos e Recomendações para estas duas dimensões da Venda.</p>
                        <p class="fonte18">Este Instrumento aborda um desses dois conteúdos: O QUE VENDO.</p>
                        <p class="fonte18">A figura seguinte ilustra como você tem que avançar, desde uma posição de mínimo conhecimento de seus produtos (Grau 1), até uma posição de máximo conhecimento deles (Grau 10).</p>
                        <p class="fonte18">O Diagnóstico lhe mostrará em que posição você está neste intervalo de conhecimento dos produtos que você vende.</p>
                        <p class="fonte18">As Recomendações lhe orientarão para chegar de maneira estruturada à posição ideal.</p>

                        <center><img src="../posicionamento/public/img/instrumento4/diag4_1.jpg" style="width: 50%"></center>

                        <br>
                        <p class="fonte18">
                            <h4>
                                <center>DIAGNÓSTICO</center>
                            </h4>
                        </p>

                        <p class="fonte18">Conforme as respostas que você deu na primeira parte deste Instrumento, seu Diagnóstico em relação ao conhecimento de seus 10 principais produtos é <b>{{$media}}</b> no intervalo da escala de 1 a 10 que foi utilizada.</p>
                        <p class="fonte18">Meu conhecimento dos meus produtos é:</p>

                        <div class="row">
                            <div class="col-12" style="">
                                <table class="table table-hover table-bordered center fonte18">
                                    <thead class="bg-primary">
                                    <tr>
                                    @for($i=1; $i <= 10; $i++)
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center; border-bottom: none;margin:0%;padding:0%;">{{$i}}</td>
                                    @endfor
                                    </tr>
                                    </thead>
                                    <tr>
                                    @for($i=1; $i <= 10; $i++)
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center; border-top:none;margin:0%;" @if($i == $media) id="bola" @endif></td>
                                    @endfor
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <br>

                        <p class="fonte18">Este é o <b>Conhecimento Médio</b> de seus 10 principais produtos, a resultante do conhecimento que você tem dos produtos mais importantes que você vende.</p>
                        <p class="fonte18">Na planilha seguinte é apresentado o nível de conhecimento que você atribuiu a cada um dos seus principais produtos:</p>

                        <div class="row">
                            <div class="col-12" style="">
                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr>
                                <td rowspan="2" style="text-align: center;vertical-align: middle;"><b>Os Produtos de Meu Portifólio</b></td>
                                <td colspan="10" style="text-align: center;"><b>Nível de Conhecimento de cada Produto</b></td>
                            </tr>
                            <tr style="text-align: center;">
                                <td style="width: 3%">1</td>
                                <td style="width: 3%">2</td>
                                <td style="width: 3%">3</td>
                                <td style="width: 3%">4</td>
                                <td style="width: 3%">5</td>
                                <td style="width: 3%">6</td>
                                <td style="width: 3%">7</td>
                                <td style="width: 3%">8</td>
                                <td style="width: 3%">9</td>
                                <td style="width: 3%">10</td>
                            </tr>
                            </thead>

                            @for($i=0; $i<10; $i++) <tr>
                                <td>{!! $retorno[$i]['produto'] !!}</td>
                                <td @if($retorno[$i]['valor']==1) id="bola" @endif ></td>
                                <td @if($retorno[$i]['valor']==2) id="bola" @endif ></td>
                                <td @if($retorno[$i]['valor']==3) id="bola" @endif ></td>
                                <td @if($retorno[$i]['valor']==4) id="bola" @endif ></td>
                                <td @if($retorno[$i]['valor']==5) id="bola" @endif ></td>
                                <td @if($retorno[$i]['valor']==6) id="bola" @endif ></td>
                                <td @if($retorno[$i]['valor']==7) id="bola" @endif ></td>
                                <td @if($retorno[$i]['valor']==8) id="bola" @endif ></td>
                                <td @if($retorno[$i]['valor']==9) id="bola" @endif ></td>
                                <td @if($retorno[$i]['valor']==10) id="bola" @endif ></td>
                                </tr>
                                @endfor
                        </table>
                        </div>
                        </div>
                        <br>

                        <p class="fonte18">Na tabela abaixo, é apresentado o Nível de Conhecimento dos seus produtos por intervalos da escala:</p>

                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr>
                                <th colspan="3" style="text-align: center;"><b>NÍVEL DE CONHECIMENTO DOS SEUS PRODUTOS POR INTERVALOS DE ESCALA</b></th>
                            </tr>
                            </thead>
                            <tr>
                                <td rowspan="2" style="min-width: 27em; text-align: center;vertical-align: middle;"><b>Intervalos da Escala</b></td>
                                <td colspan="2" style="text-align: center;"><b>Quantidade de produtos por:</b></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Intervalos</td>
                                <td style="text-align: center;">Em percentual</td>
                            </tr>
                            <tr>
                                <td>1-2 – Conhecimento insuficiente e crítico, com forte comprometimento da produtividade em Vendas.</td>
                                <td style="text-align: center;">{{$intervalos['1']}}</td>
                                <td style="text-align: center;">{{$intervalos['1']*10}}%</td>
                            </tr>
                            <tr>
                                <td>3-4-5 – Conhecimento precário dos produtos, nível muito preocupante de Produtividade.</td>
                                <td style="text-align: center;">{{$intervalos['2']}}</td>
                                <td style="text-align: center;">{{$intervalos['2']*10}}%</td>
                            </tr>
                            <tr>
                                <td>6-7-8 – Conhecimento razoável dos seus produtos. Acima da média.</td>
                                <td style="text-align: center;">{{$intervalos['3']}}</td>
                                <td style="text-align: center;">{{$intervalos['3']*10}}%</td>
                            </tr>
                            <tr>
                                <td>9-10 – Conhecimento superior. Excelente conhecimento dos produtos que você vende.</td>
                                <td style="text-align: center;">{{$intervalos['4']}}</td>
                                <td style="text-align: center;">{{$intervalos['4']*10}}%</td>
                            </tr>
                            <tr>
                                <td style="color: #35408f; text-align: center;">Total de Produtos pesquisados no questionário</td>
                                <td style="color: #35408f; text-align: center;">10</td>
                                <td style="color: #35408f; text-align: center;">100%</td>
                            </tr>
                        </table>
                        
                        <br>

                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>
                        
                        <p class="fonte18">As Recomendações são dadas em função dos 4 intervalos da escala acima.</p>
                        <p class="fonte18">Identifique os produtos que estão em cada intervalo e siga as Recomendações específicas conforme a posição que cada produto ocupa.</p>

                        <h4 style="color: #35408f">1. Posição 1 e 2</h4>

                        <p class="fonte18">Recomenda-se iniciar imediatamente um treinamento intensivo e sistemático para aumentar o conhecimento dos produtos que você comercializa e que se situam neste intervalo da escala.</p>
                        <p class="fonte18">Procure suporte da empresa e se for possível, solicite ações de treinamento personalizadas.</p>
                        <p class="fonte18">As posições 1 e 2 da escala são críticas, altamente preocupantes e seu desempenho profissional está comprometido, impactando diretamente no cumprimento de suas metas.</p>
                        <p class="fonte18">Procure desenvolver mais argumentos e fique atento à qualidade desses novos argumentos, conforme as orientações dadas pelo Instrumento 15 – Avaliação de Qualidade e Quantidade dos Argumentos de Vendas (Forças Propulsoras).</p>
                        <p class="fonte18">Você pode melhorar sistematicamente o aumento do conhecimento dos seus produtos implementando as recomendações do Instrumento 19 – Plano de Ação Quantitativo para Alcançar as Metas de Vendas.</p>

                        <br>

                        <h4 style="color: #35408f">2. Posição 3 a 5</h4>

                        <p class="fonte18">Estas posições da escala não são confortáveis e o potencial de aumento de suas Vendas é grande se você iniciar um processo sistemático para aumentar o conhecimento dos produtos que você vende e que estão neste intervalo.</p>
                        <p class="fonte18">Procure suporte da empresa e se for possível, solicite ações de treinamento personalizadas.</p>
                        <p class="fonte18">Procure desenvolver mais argumentos e fique atento à qualidade desses novos argumentos, conforme as orientações dadas pelo Instrumento 15 – Avaliação de Qualidade e Quantidade dos Argumentos de Vendas (Forças Propulsoras).</p>

                        <br>

                        <h4 style="color: #35408f">3. Posição 6 a 8</h4>

                        <p class="fonte18">Recomenda-se aprofundar o conhecimento dos produtos que você comercializa.</p>
                        <p class="fonte18">Aumente o conhecimento dos seus produtos, aprendendo mais sobre aspectos específicos deles em termos de benefícios de seu uso e de seus atributos. Fazendo isto, você terá um domínio maior sobre os diferenciais competitivos de seus produtos, da qualidade da matéria prima utilizada em sua fabricação, do processo de produção, da tecnologia utilizada, etc.</p>
                        <p class="fonte18">Você deve desenvolver um processo de melhoria contínua (Kaizen), porém com certo nível de conforto, porque está partindo de uma base boa de conhecimento de seus produtos.</p>
                        <p class="fonte18">Procure desenvolver mais argumentos e fique atento à qualidade desses novos argumentos, conforme as orientações dadas pelo Instrumento 15 – Avaliação de Qualidade e Quantidade dos Argumentos de Vendas (Forças Propulsoras).</p>

                        <br>

                        <h4 style="color: #35408f">4. Posição 9 e 10</h4>

                        <p class="fonte18">Você deve sustentar este nível de conhecimento de seus produtos. Fique atento a novos desenvolvimentos em relação aos produtos, como novas tecnologias aplicadas, novos atributos que foram incorporados aos produtos, etc. Sua estratégia será de manutenção.</p>
                        <p class="fonte18">Procure desenvolver mais argumentos e fique atento à qualidade desses novos argumentos, conforme as orientações dadas pelo Instrumento 15 – Avaliação de Qualidade e Quantidade dos Argumentos de Vendas (Forças Propulsoras).</p>


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

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush