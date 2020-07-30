@extends('adminlte::page')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3>
            <center>INSTRUMENTO 6</center>
        </h3>
        <h3>
            <center>MATRIZ PARA AUMENTAR MINHA PRODUTIVIDADE NAS VENDAS</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 6</center>
                </h3>
                <h3>
                    <center>MATRIZ PARA AUMENTAR MINHA PRODUTIVIDADE NAS VENDAS</center>
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
                    <p class="fonte18">Este instrumento tem um grande valor para aumentar sua Produtividade.</p>
                    <p class="fonte18">O objetivo do deste instrumento é eliminar as perdas e as atividades que não agregam valor, para que você possa alcançar com mais facilidade suas metas de Vendas.</p>
                    <p class="fonte18">A partir do Diagnóstico e implementando as recomendações que serão feitas, você poderá dedicar mais tempo às atividades que efetivamente agregam valor.</p>
                    <p class="fonte18">Os gráficos abaixo ilustram os conceitos de <b>atividades que agregam valor</b>, as <b>atividades que não agregam valor</b> e <b>perdas</b> numa suposta situação atual e a evolução para um nível superior de Produtividade.</p>

                        <center><img src="../posicionamento/public/img/instrumento6/diag6_1.jpg" style="width: 50%;"></center> <!-- ../posicionamento/public/img/instrumento6/diag6_1.png -->

                        <br>
                        <p class="fonte18">
                            <h4>
                                <center>DIAGNÓSTICO</center>
                            </h4>
                        </p>

                        <p class="fonte18">Seu Diagnóstico será feito em duas dimensões:</p>
                        <p class="fonte18">A – O Nível de Produtividade das Atividades que você desenvolve e o Nível de Contribuição dessas atividades para alcançar seus resultados (objetivos).</p>
                        <p class="fonte18">B – A alocação de trabalho e de esforço que você dedica conforme a importância de seus objetivos.</p>
                        
                        <h4 style="color: #35408f">A – Nível de Contribuição de suas Atividades e correspondentes Níveis de Produtividade</h4>

                        <p class="fonte18">Estas são as atividades que você desenvolve para alcançar suas metas de venda e o tempo que você dedica a cada uma delas, em ordem decrescente de tempo de dedicação, conforme as respostas que você deu na primeira parte deste instrumento.</p>

                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                                <tr><th class="center" style="width: 70%;font-weight: bold;">Atividades</th>
                                <th class="center" style="font-weight: bold;">Tempo dedicado (em %)</th></tr>
                            </thead>
                            @foreach($att->sortByDesc('percentualTempo') as $at)
                            <tr>
                                <td>{{$at['atividade']}}</td>
                                <td class="center">{{$at['percentualTempo']}}</td>
                            </tr>
                            @endforeach
                        </table>

                        <br>

                        <p class="fonte18">Primeiro vamos correlacionar a relação que existe entre as atividades que mais contribuem para seu trabalho e o Nível de Produtividade que elas apresentam.</p>
                        <p class="fonte18">Sua situação é a seguinte:</p>

                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr class="center">
                            <th style="font-weight: bold;">Atividades de Alto Volume de Produção (resultados) e Alta Produtividade</th></tr>
                            </thead>
                            @php($cont = 1)
                            @foreach($att as $at)
                            @if($at['subtotal'] >= $mediaVolume && $at['indiceRetorno'] >= $mediaProdutividade)
                            <tr>
                                <td>{{$cont}} - {{$at['atividade']}}</td>
                            </tr>
                            @php($cont++)
                            @endif
                            @endforeach
                        </table>

                        <br>
                        
                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr class="center">
                            <th style="font-weight: bold;">Atividades de Alto Volume de Produção (resultados) e Baixa Produtividade</th></tr>
                            </thead>
                            @php($cont = 1)
                            @foreach($att as $at)
                            @if($at['subtotal'] >= $mediaVolume && $at['indiceRetorno'] < $mediaProdutividade)
                            <tr>
                                <td>{{$cont}} - {{$at['atividade']}}</td>
                            </tr>
                            @php($cont++)
                            @endif
                            @endforeach
                        </table>

                        <br>
                        
                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr class="center">
                            <th style="font-weight: bold;">Atividades de Baixo Volume de Produção (resultados) e Alta Produtividade</th></tr>
                            </thead>
                            @php($cont = 1)
                            @foreach($att as $at)
                            @if($at['subtotal'] < $mediaVolume && $at['indiceRetorno'] >= $mediaProdutividade)
                            <tr>
                                <td>{{$cont}} - {{$at['atividade']}}</td>
                            </tr>
                            @php($cont++)
                            @endif
                            @endforeach
                        </table>

                        <br>
                        
                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr class="center">
                            <th style="font-weight: bold;">Atividade de Baixo Volume de Produção (resultados) e Baixa Produtividade</th></tr>
                            </thead>
                            @php($cont = 1)
                            @foreach($att as $at)
                            @if($at['subtotal'] < $mediaVolume && $at['indiceRetorno'] < $mediaProdutividade)
                            <tr>
                                <td>{{$cont}} - {{$at['atividade']}}</td>
                            </tr>
                            @php($cont++)
                            @endif
                            @endforeach
                        </table>

                        <br>

                        <h4 style="color: #35408f">B – Contribuição das Atividades que você desenvolve em relação à importância de seus objetivos</h4>

                        <p class="fonte18">Muitas vezes dedicamos mais esforço e tempo a atividades que contribuem pouco para alcançar objetivos que não são relevantes para alcançar suas metas de vendas, enquanto dedicamos menos esforço e tempo que o necessário para alcançar objetivos de alto valor e importância.</p>
                        <p class="fonte18">Apresentamos seus maiores desequilíbrios, sejam eles positivos ou negativos, entre a contribuição de todas as atividades que você desenvolve e a importância relativa dos objetivos que devem ser alcançados.</p>
                        <p class="fonte18">Um desequilíbrio positivo significa que você está dando mais dedicação, esforço e trabalho do que o objetivo requer.</p>
                        <p class="fonte18">Um desequilíbrio negativo significa que você não esta dedicando suficiente esforço e trabalho para um objetivo, considerando a importância desse objetivo</p>

                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr><th style="min-width: 45em;font-weight: bold;">Seus Principais Desequilíbrios Positivos</th>
                            <th style="font-weight: bold;">Valor dos Desvios</th></tr>
                            </thead>
                            @foreach($desvios as $desvio)
                            @if($desvio['valor'] > 0)
                            <tr>
                                <td>{{$desvio['objetivo']}}</td>
                                <td>{{number_format($desvio['valor'], 2)}}</td>
                            </tr>
                            @endif
                            @endforeach
                        </table>

                        <br>

                        <table class="table table-hover table-bordered fonte18">
                            <thead class="bg-primary">
                            <tr><th style="min-width: 45em;font-weight: bold;">Seus Principais Desequilíbrios Negativos</th>
                            <th style="font-weight: bold;">Valor dos Desvios</th></tr>
                            </thead>
                            @foreach($desvios as $desvio)
                            @if($desvio['valor'] < 0)
                            <tr>
                                <td>{{$desvio['objetivo']}}</td>
                                <td>{{number_format($desvio['valor'], 2)}}</td>
                            </tr>
                            @endif
                            @endforeach
                        </table>

                        <br>

                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>

                        <p class="fonte18">As recomendações serão feitas para os dois âmbitos do diagnóstico:</p>
                        <p class="fonte18">A –Em relação ao Nível de Contribuição de suas atividades e os correspondentes Níveis de Produtividade e;</p>
                        <p class="fonte18">B – A Contribuição das Atividades que você desenvolve em relação a Importância de seus Objetivos</p>
                        <br>
                        <h4 style="color: #35408f">A – Em relação ao Nível de Contribuição de suas atividades e correspondentes Níveis de Produtividade</h4>

                        <p class="fonte18">Observe os resultados do seu diagnóstico nas atividades e siga as seguintes recomendações:</p>
                        <br>
                        <h4 style="color: #35408f">- Para Atividades de Alto Volume de Produção (de resultados) e Alta Produtividade</h4>
                        <p class="fonte18">Para este grupo de atividades a recomendação é manter sua prática atual. Evidentemente sempre é recomendável aumentar ainda mais sua Produtividade</p>
                        <p class="fonte18">Você aumentará sua produtividade implementando as recomendações que são feitas nos 20 instrumentos desta Metodologia</p>
                        <br>
                        <h4 style="color: #35408f">- Para Atividades de Alto Volume de Produção (de resultados) e Baixa Produtividade</h4>
                        <p class="fonte18">Para as atividades que se encontram neste grupo você deve aumentar a Produtividade</p>
                        <p class="fonte18">Para isto, siga particularmente, as recomendações dos seguintes instrumentos: <b>Instrumentos 19 – Planos de Ação Quantitativos para alcançar as Metas de Vendas e o Instrumento 20 – Relatório de Progresso.</b></p>
                        <p class="fonte18">Você também aumentará sua produtividade implementando as recomendações que são feitas nos outros instrumentos desta Metodologia</p>
                        <br>
                        <h4 style="color: #35408f">- Para Atividades de Baixo Volume de Contribuição (de resultados) e Alta Produtividade</h4>
                        <p class="fonte18">Para as atividades que se encontram neste grupo você deve aumentar sua dedicação de tempo a essas atividades.</p>
                        <p class="fonte18">Não esqueça que todas as atividades que você relacionou neste exercício formam parte de sua rotina profissional, e que devem ser tratadas com as devidas especificidades.</p>
                        <p class="fonte18">Você também aumentará sua produtividade implementando as recomendações que são feitas nos outros instrumentos desta Metodologia</p>
                        <br>
                        <h4 style="color: #35408f">- Para Atividades de Baixo Volume de Contribuição (de resultados) e Baixa Produtividade</h4>
                        <p class="fonte18">A recomendação é eliminar estas atividades e alocar o tempo que você dedicava a elas em atividades de maior valor.</p>
                        <p class="fonte18">Esta é uma forma prática e objetiva de administrar produtivamente seu tempo.</p>
                        <p class="fonte18">Você também aumentará sua produtividade implementando as recomendações que são feitas nos outros instrumentos desta Metodologia</p>
                        <br>
                        <h4 style="color: #35408f">B – A Contribuição das Atividades que você desenvolve em relação a a importância de seus objetivos</h4>
                        <p class="fonte18">No diagnóstico foram apresentados os principais desvios positivos e negativos relacionando o tempo que você dedica às várias atividades e a importância dos objetivos que você deve alcançar.</p>
                        <p class="fonte18">A recomendação é zerar os desequilíbrios, sejam eles positivos ou negativos.</p>
                        <p class="fonte18">Isto significa que você deve aumentar e concentrar seu esforço e dedicação para alcançar os objetivos que apresentam <b>Desvios Negativos</b> e reduzir sua concentração de esforços e dedicação de tempo aos objetivos com <b>Desvios Positivos.</b></p>
                        <p class="fonte18">Consulte seus principais desvios positivos e negativos no seu Diagnóstico e comece o ajuste pelos desvios de maior valor.</p>
                        <p class="fonte18">Estas recomendações são fundamentais para aumentar sua produtividade nas vendas, e para reduzir o Tempo de Ciclo das vendas (ou seja,quanto tempo você necessita para realizar uma venda)</p>
                        <p class="fonte18">Em síntese, a recomendação é fazer um rebalanceamento de todas suas atividades levando em conta a importância dos objetivos.</p>
                        <p class="fonte18">Este instrumento é fundamental para aumentar sua produtividade, otimizar seu tempo e alcançar com mais facilidade suas metas de venda.</p>

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