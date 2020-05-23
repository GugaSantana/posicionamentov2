@extends('adminlte::page')

@section('content')
<style>

</style>
<style type="text/css">

</style>


<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>INSTRUMENTO 1</center>
        </h3>
        <h3>
            <center>MEU NÍVEL DE EMPREENDEDORISMO</center>
        </h3>
    </div>
    <div class="card-body">
        <div class="col-12">
            <p class="fonte18 center"><b>
                    Levantamento de Informações
                </b></p>
            <p class="fonte18">Todas as pessoas têm combinações de VISÃO e de AÇÃO em tudo o que fazem e, naturalmente, esta combinação varia de pessoa para pessoa.</p>
            <p class="fonte18">Empreendedor é alguém que toma a iniciativa e age com uma clara Visão de Futuro.</p>
            <p class="fonte18">Quem tem Visão sabe identificar as oportunidades e transformá-las em atividades lucrativas.</p>
            <p class="fonte18">A Ação é fundamental para implementar a Visão, para levar a Visão à pratica.</p>
            <p class="fonte18">Este instrumento se propõe avaliar as duas dimensões apresentadas de VISÃO e AÇÃO para que você possa desenvolvê-las de maneira estruturada e assim aumentar sua</p>
            <p class="fonte18"><b style="color: #35408f">EFICÁCIA</b> (fazer as coisas certas) = <b style="color: #35408f">VISÃO</b> e sua</p>
            <p class="fonte18"><b style="color: #35408f">EFICIÊNCIA</b> (fazer as coisas da maneira certa) = <b style="color: #35408f">AÇÃO</b>.</p>
        </div>
        <br>
        <div class="col-12">
            <p class="fonte18"><b>INSTRUÇÕES</b></p>
            <p class="fonte18">Este instrumento está constituído de duas partes.</p>
            <p class="fonte18">Na primeira parte são apresentadas 10 questões que você deve responder escolhendo a alternativa que mais se ajusta a você, ou seja, aquela que melhor representa seu comportamento.</p>
            <p class="fonte18">Na segunda parte você deverá posicionar seu resultado em uma escala</p>
            <p class="fonte18">Lembre, não existem respostas certas ou erradas porque não existem personalidades certas ou erradas.</p>
            <h3 style="color: #35408f">Primeira Parte</h3>
        </div>
        <!-- TABELA DE QUESTIONARIO -->
        <div>
            <form name="formulario" role="form" method="post" action="instrumento/1">
                {!! csrf_field() !!}
                <div class="table-responsive">
                    <div>
                        
                        <table class="table table-bordered align-items-center">
                            <thead class="thead-light">
                                <tr class="fonte18">
                                    <th scope="col-8">
                                        Responda <b>sim</b> ou <b>não</b> às seguintes questões:
                                    </th>
                                    <th scope="col-2">
                                        Sim
                                    </th>
                                    <th scope="col-2">
                                        Não
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @php
                                $questions = [
                                '1. Seu desejo de fazer as coisas de maneira diferente para que funcionem melhor lhe motiva muito mais do que mantê-las como hoje são feitas?',
                                '2. Você se entusiasma com o que está fazendo no seu trabalho?. Você tem “brilho nos olhos”?',
                                '3. Você pensa com freqüência em novas idéias para aplicar a seu trabalho em momentos diferentes do dia? Isto é realmente comum?',
                                '4. Você consegue visualizar etapas concretas de ação e fazer uma nova idéia acontecer?',
                                '5. Você enfrenta problemas com sua empresa para fazer coisas que excedem o que se espera de você ?',
                                '6. Você vai em frente mesmo quando algo em seu trabalho parece que não vai dar certo, porque você confia na sua Visão?',
                                '7. Você tem um número muito grande de admiradores e críticos? É comum você provocar reações extremas nas pessoas que o rodeiam?',
                                '8. Você se aborrece facilmente com a incompetência das pessoas para executar trabalhos inovadores?',
                                '9. É comum você “sonhar acordado”, isto é, você gosta de pensar, de imaginar fazer coisas inovadoras e criativas?',
                                '10. Você estaria disposto a abrir mão de uma parte de sua receita em troca da oportunidade de testar suas novas idéias, se as recompensas pelo sucesso fossem significativas?'
                                ];
                                @endphp

                                @for($i=1;$i<=10;$i++) <!-- QUESTÃO 1 -->
                                    <tr>
                                        <td scope="row" class="question">
                                            <div class="fonte18 media align-items-center">
                                                {{$questions[$i-1]}}
                                            </div>
                                        </td>
                                        <td class="yes">
                                            <div class="custom-control custom-radio mb-3">
                                                <input name="radio{{$i}}" value="Y" class="custom-control-input" id="radioY{{$i}}" type="radio">
                                                <label class="custom-control-label" for="radioY{{$i}}"></label>
                                            </div>
                                        </td>
                                        <td class="no">
                                            <div class="custom-control custom-radio mb-3">
                                                <input name="radio{{$i}}" value="N" class="custom-control-input" id="radioN{{$i}}" type="radio">
                                                <label class="custom-control-label" for="radioN{{$i}}"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- FIM QUESTÃO 1 -->
                                    @endfor

                            </tbody>
                        </table>
                    </div>

                </div>
        </div>
        <!-- FIM TABELA DE QUESTIONARIO -->
        <br>
        <h2 style="color: #35408f">Segunda Parte</h2>
        <p class="fonte18">Responda qual é a sua tendência, seu comportamento em relação às questões abaixo colocadas e registre o resultado num ponto da escala, levando em conta as definições da escala:</p>
        <p class="fonte18">Você também pode utilizar os pontos intermediários entre as definições se essa posição intermediária melhor representa seu comportamento.</p>
        <ul class="fonte18">
            <li>1 - Não gosto de ação. Prefiro um trabalho já estruturado e com instruções claras</li>
            <li>4 - Prefiro um nível intermediário de ação. Gosto do trabalho estruturado onde posso eventualmente fazer algumas melhorias.</li>
            <li>7 - Gosto de ação, de estar no campo, agindo sozinho ou com a equipe. Tenho motivação para a ação</li>
            <li>10 - Eu tenho um máximo nível de energia. Muita vitalidade. Definitivamente não gosto de trabalho estruturado. Gosto de imprimir minhas idéias.</li>
        </ul>

        <div class="table-responsive">
            <div>
                <table class="table align-items-center">
                    <thead class="thead-light">
                        <tr class="fonte18">
                            <th scope="col-2">
                                1
                            </th>
                            <th scope="col-2">
                                2
                            </th>
                            <th scope="col-2">
                                3
                            </th>
                            <th scope="col-2">
                                4
                            </th>
                            <th scope="col-2">
                                5
                            </th>
                            <th scope="col-2">
                                6
                            </th>
                            <th scope="col-2">
                                7
                            </th>
                            <th scope="col-2">
                                8
                            </th>
                            <th scope="col-2">
                                9
                            </th>
                            <th scope="col-2">
                                10
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <!-- QUESTÃO 1 -->
                        <tr>
                            @for($i=1; $i<=10; $i++) <td class="1-1">
                                <div class="custom-control custom-radio mb-3">
                                    <input name="radioPt2" value="{{$i}}" class="custom-control-input" id="radio{{$i}}-1" type="radio">
                                    <label class="custom-control-label" for="radio{{$i}}-1"></label>
                                </div>
                                </td>
                                @endfor
                        </tr>
                        <!-- FIM QUESTÃO 1 -->

                    </tbody>
                </table>

            </div>

        </div>

        <br>
        <div class="col-8">
            <button class="btn btn-icon btn-3 btn-primary" type="submit">
                <span class="btn-inner--icon"><i class="fa fa-paper-plane"></i></span>
                <span class="btn-inner--text">Enviar formulário</span>
            </button>
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
@endpush