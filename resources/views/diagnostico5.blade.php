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
        <h3>
            <center>INSTRUMENTO 5</center>
        </h3>
        <h3>
            <center>MEU CONHECIMENTO DOS PRODUTOS CONCORRENTES</center>
        </h3>
        <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 14%;float: right;margin-top: -10%;">
    </div>
    <div class="card-body">
                    <div class="col-12">
                        <h4>
                            <center>Diagnóstico e Recomendações</center>
                        </h4>
                        <br>
                        <p class="fonte18">O conhecimento dos produtos concorrentes é tão importante quanto o conhecimento dos produtos que você vende.</p>
                        <p class="fonte18">Muitas vezes os clientes conhecem mais dos produtos concorrentes que o vendedor.</p>
                        <p class="fonte18">Em consequência, determinadas perguntas do cliente, que tem uma base melhor de conhecimento sobre os produtos concorrentes, pode deixar o vendedor em uma posição frágil e vulnerável, provocando desgastes e perda de confiança frente ao cliente.</p>
                        <p class="fonte18">Conhecer os produtos concorrentes é algo estratégico para fechar vendas.</p>
                        <p class="fonte18">Veja a figura seguinte:</p>

                        <center><img src="../posicionamento/public/img/instrumento5/diag5_1.jpg"></center>

                        <p class="fonte18">Você tem que conhecer os produtos concorrentes para reduzir o quanto possível a <b>área vermelha</b> no gráfico.</p>
                        <p class="fonte18">Essa área representa que os produtos concorrentes atendem necessidades do cliente que seus produtos não atendem. Como você vê, é uma área de exclusividade entre o</p>
                        <p class="fonte18">produto concorrente e as necessidades do cliente.</p>
                        <p class="fonte18">Você tem que conhecer os produtos concorrentes para poder argumentar e neutralizar essas vantagens competitivas dos produtos concorrentes, levando esses benefícios para a <b>área A</b> da figura. Deste modo você estará neutralizando vantagens competitivas dos concorrentes.</p>
                        


                        <br>
                        <p class="fonte18">
                            <h4>
                                <center>DIAGNÓSTICO</center>
                            </h4>
                        </p>

                        <p class="fonte18">Conforme as respostas que você deu na primeira parte deste instrumento, seu diagnóstico em relação ao conhecimento dos 10 mais importantes produtos concorrentes é <b>{{$media}}</b> no intervalo da escala de 1 a 10 que foi utilizada.</p>
                        <p class="fonte18">Meu conhecimento dos produtos concorrentes é:</p>

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

                        <p class="fonte18">Este é o <b>Conhecimento Médio</b> dos 10 principais produtos concorrentes, a resultante do conhecimento que você tem desses produtos.</p>
                        <p class="fonte18">Na planilha seguinte é apresentado o nível de conhecimento que você atribuiu a cada um dos seus principais produtos concorrentes.</p>

                        <div class="row">
                            <div class="col-12" style="">
                            <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr>
                                <td rowspan="2" style="text-align: center;vertical-align: middle;"><b>Os Produtos Concorrentes</b></td>
                                <td colspan="10" style="text-align: center;"><b>Nível de Conhecimento de cada Produto</b></td>
                            </tr>
                            <tr style="text-align: center;">
                                <td style="font-size: 16px; width: 3%">1</td>
                                <td style="font-size: 16px; width: 3%">2</td>
                                <td style="font-size: 16px; width: 3%">3</td>
                                <td style="font-size: 16px; width: 3%">4</td>
                                <td style="font-size: 16px; width: 3%">5</td>
                                <td style="font-size: 16px; width: 3%">6</td>
                                <td style="font-size: 16px; width: 3%">7</td>
                                <td style="font-size: 16px; width: 3%">8</td>
                                <td style="font-size: 16px; width: 3%">9</td>
                                <td style="font-size: 16px; width: 3%">10</td>
                            </tr>
                            </thead>
                            @for($i=0; $i<10; $i++) <tr>
                                <td>{!! $retorno[$i]['produto'] !!}</td>
                                <td @if($retorno[$i]['valor']==1) id="bola" @endif></td>
                                <td @if($retorno[$i]['valor']==2) id="bola" @endif></td>
                                <td @if($retorno[$i]['valor']==3) id="bola" @endif></td>
                                <td @if($retorno[$i]['valor']==4) id="bola" @endif></td>
                                <td @if($retorno[$i]['valor']==5) id="bola" @endif></td>
                                <td @if($retorno[$i]['valor']==6) id="bola" @endif></td>
                                <td @if($retorno[$i]['valor']==7) id="bola" @endif></td>
                                <td @if($retorno[$i]['valor']==8) id="bola" @endif></td>
                                <td @if($retorno[$i]['valor']==9) id="bola" @endif></td>
                                <td @if($retorno[$i]['valor']==10) id="bola" @endif></td>
                                </tr>
                                @endfor
                        </table>
                        </div>
                        </div>
                        <br>

                        <p class="fonte18">Na tabela abaixo é apresentado o Nível de Conhecimento dos seus produtos concorrentes por intervalos da escala:</p>
                        

                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr>
                                <th colspan="3" style="text-align: center;"><b>NÍVEL DE CONHECIMENTO DOS PRODUTOS CONCORRENTES POR INTERVALOS DA ESCALA</b></th>
                            </tr>
                            </thead>
                            <tr>
                                <td rowspan="2" style="min-width: 27em; text-align: center;vertical-align: middle;"><b>Intervalo da Escala</b></td>
                                <td colspan="2" style="text-align: center;"><b>Quantidade de produtos por</b></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Intervalo</td>
                                <td style="text-align: center;">Em percentual</td>
                            </tr>
                            <tr>
                                <td>1-2 – Conhecimento Insuficiente e crítico, com forte comprometimento da produtividade em vendas</td>
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
                                <td style="color: #35408f; text-align: center;">Total de Produtos Concorrentes pesquisados no questionário</td>
                                <td style="color: #35408f; text-align: center;">10</td>
                                <td style="color: #35408f; text-align: center;">100%</td>
                            </tr>
                        </table>
                        
                        <br>

                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>
                        
                        <p class="fonte18">As recomendações são dadas em função dos 4 intervalos da escala acima.</p>
                        <p class="fonte18">Identifique os produtos que estão em cada intervalo e siga as recomendações específicas conforme a posição que cada produto ocupa.</p>

                        <h4 style="color: #35408f">1. Posição 1 e 2</h4>

                        <p class="fonte18">Recomenda-se iniciar imediatamente um treinamento intensivo e sistemático para aumentar o conhecimento dos produtos concorrentes e que se situam neste intervalo da escala.</p>
                        <p class="fonte18">Procure suporte da empresa e se for possível solicite ações de treinamento personalizadas.</p>
                        <p class="fonte18">As posições 1 e 2. da escala são críticas, altamente preocupantes e seu desempenho profissional está comprometido, impactando diretamente no cumprimento de suas metas.</p>
                        <p class="fonte18">Procure desenvolver mais argumentos e fique atento à qualidade desses novos argumentos, conforme as orientações dadas pelo Instrumento 15 – Avaliação de Qualidade e Quantidade dos Argumentos de Vendas (Forças Propulsoras).</p>

                        <br>

                        <h4 style="color: #35408f">2. Posição 3 a 5</h4>

                        <p class="fonte18">Estas posições da escala não são confortáveis e o potencial de aumento de suas vendas é grande se você iniciar um processo sistemático para aumentar o conhecimento dos produtos concorrentes que você vende e que estão neste intervalo.</p>
                        <p class="fonte18">Procure suporte da empresa e se for possível solicite ações de treinamento personalizadas.</p>
                        <p class="fonte18">Procure desenvolver mais argumentos e fique atento à qualidade desses novos argumentos, conforme as orientações dadas pelo Instrumento 15 – Avaliação de Qualidade e Quantidade dos Argumentos de Vendas (Forças Propulsoras).</p>

                        <br>

                        <h4 style="color: #35408f">3. Posição 6 a 8</h4>

                        <p class="fonte18">Recomenda-se aprofundar o conhecimento dos seus produtos concorrentes.</p>
                        <p class="fonte18">Aumente o conhecimento dos seus produtos concorrentes aprendendo mais sobre aspectos específicos deles em termos de benefícios de seu uso e de atributos, ou seja, de características que sejam diferenciais competitivos desses produtos, qualidade da matéria prima utilizada, processo de produção, tecnologia utilizada, etc.</p>
                        <p class="fonte18">Você deve desenvolver um processo de melhoria contínua (Kaizen) com certo nível de conforto, porque está partindo de uma base boa de conhecimento de seus produtos concorrentes.</p>
                        <p class="fonte18">Procure desenvolver mais argumentos e fique atento à qualidade desses novos argumentos, conforme as orientações dadas pelo Instrumento 15 – Avaliação de Qualidade e Quantidade dos Argumentos de Vendas (Forças Propulsoras).</p>
                        
                        <br>

                        <h4 style="color: #35408f">4. Posição 9 e 10</h4>

                        <p class="fonte18">Você deve sustentar este nível de conhecimento de seus produtos concorrentes, fique atento a novos desenvolvimentos em relação a esses produtos, como novas tecnologias aplicadas, novos atributos que foram incorporados aos produtos. É uma estratégia de manutenção.</p>
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