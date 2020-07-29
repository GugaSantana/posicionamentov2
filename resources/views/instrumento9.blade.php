@extends('adminlte::page')

@section('content')

<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
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
                <h3>
            <center>INSTRUMENTO 9</center>
        </h3>
        <h3>
            <center>GERENCIAMENTO DO RELACIONAMENTO UTILIZANDO OS CANAIS NEUROLINGUISTICOS</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 9</center>
                </h3>
                <h3>
                    <center>GERENCIAMENTO DO RELACIONAMENTO UTILIZANDO OS CANAIS NEUROLINGUISTICOS</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">

                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                        <p class="fonte18">Este instrumento é uma continuação do anterior e seu objetivo também é “gerenciar” o relacionamento com o cliente, porem, desde outra perspectiva, desde a perspectiva específica do “Gerenciamento da Comunicação”.</p>
                        <p class="fonte18">Você terá acesso a um modelo poderoso de comunicação que traz resultados muito práticos para melhorar o relacionamento com o cliente.</p>
                        <p class="fonte18">Um bom relacionamento é fundamental para desenvolver empatia e se identificar com o perfil psicológico do cliente.</p>
                        <p class="fonte18">O relacionamento interpessoal é gerenciável e o Modelo Neurolinguistico na qual se apóia este instrumento é uma alternativa valiosa para isto.</p>
                        <p class="fonte18">Este instrumento é o ponto de partida para que você aprenda a se comunicar com seu cliente, conforme o canal neurolinguistico preferencial do Modelo Mental dele, e isto de uma maneira muito simples, objetiva e prática</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->
                        <p class="fonte18">A seguir são apresentados três grupos de questões para você responder. Para cada uma das questões responda SIM ou NÃO, conforme seria seu comportamento, sua reação, a cada uma destas questões.</p>
                        <p class="fonte18">Responda rapidamente como você sente. A resposta não deve ser racional, deve ser o mais espontânea possível</p>
                        <p class="fonte18">As respostas perdem valor se você ficar pensando durante algum tempo antes de responder.</p>
                        <p class="fonte18">Para cada afirmação, registre na coluna AVALIAÇÂO, sua preferência por SIM ou NÃO. Procure ser o mais objetivo e espontâneo possível.</p>
                    </div>

                    <div></div>

                    @php

                    $grupoA = [
                        '1. Escrevo listas do que tenho a fazer',
                        '2. Consigo realizar coisas, desde que as instruções sejam bem detalhadas',
                        '3. Gosto de fazer palavras cruzadas e jogos no meu celular',
                        '4. Gosto de exposições e museus',
                        '5. Posso localizar cidades com facilidade, se eu tiver um mapa',
                        '6. Gosto de assistir Filmes e Vídeos',
                        '7. Tenho uma boa impressão de alguém se estiver bem vestido',
                        '8. Gosto de observar as pessoas',
                        '9. Acho que flores, realmente embelezam a casa e o ambiente de trabalho',
                        '10. Sempre mando consertar os arranhões do meu carro o mais rápido possível'
                        ];

                    $grupoB = [
                        '1. Gosto de longas conversas',
                        '2. Gosto de programas de entrevistas no rádio, na TV e nas Mídias Sociais',
                        '3. Sou bom ouvinte',
                        '4. Prefiro informar-me através dos noticiários de rádio e TV a ler jornais e revistas',
                        '5. Sinto-me mal quando meu carro faz algum barulho estranho',
                        '6. Quando ouço música, presto atenção à letra',
                        '7. Posso dizer muito sobre alguém somente pelo seu tom de voz',
                        '8. Prefiro fazer uma palestra a escrever sobre o assunto',
                        '9. As pessoas dizem que, às vezes, falo demais',
                        '10. Costumo conversar comigo mesmo'
                        ];

                    $grupoC = [
                        '1. Quando ouço música não consigo deixar de batucar com os pés e as mãos',
                        '2. Gosto muito de estar ao ar livre',
                        '3. Tenho boa coordenação motora',
                        '4. Gosto de sentir o cheiro das flores',
                        '5. Gosto de criar animais de estimação',
                        '6. Toco as pessoas quando falo',
                        '7. Gosto mais de praticar esportes do que de assistir a eles',
                        '8. Adoro banho, piscina e/ou sauna',
                        '9. Gosto de espreguiçar-me com freqüência quando levanto',
                        '10. Posso dizer muito sobre uma pessoa simplesmente pelo seu aperto de mão'
                        ];
                    @endphp

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/9">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th rowspan="2" style="font-size: 18px; text-align: center; vertical-align: middle;">GRUPO A</th>
                                            <th colspan="2" style="font-size: 18px; text-align: center; width: 100px">A validação</th>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center;">SIM</td>
                                            <td style="font-size: 18px; text-align: center;">NÃO</td>
                                        </tr>
                                        </thead>
                                        @for($i=0;$i<10;$i++)
                                            <tr>
                                            <td style="font-size: 18px">{!! $grupoA[$i] !!}</td>
                                            <td style="font-size: 18px; text-align: center;">
                                            
                                            <div class="custom-control custom-radio mb-3">
                                                <input class="custom-control-input" type="radio" id="grupoASim{{$i}}" name="grupoA{{$i}}" value="s" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="grupoASim{{$i}}"></label>
                                            </div>
                                            </td>
                                            <td style="font-size: 18px; text-align: center;">
                                            <div class="custom-control custom-radio mb-3">
                                                <input class="custom-control-input" type="radio" id="grupoANao{{$i}}" name="grupoA{{$i}}" value="n" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="grupoANao{{$i}}"></label>
                                            </div>
                                            </td>
                                            </tr>
                                        @endfor

                                    </table>
                                </div>

                            </div>
                            <br>
                            <br>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th rowspan="2" style="font-size: 18px; text-align: center; vertical-align: middle;">GRUPO B</th>
                                            <th colspan="2" style="font-size: 18px; text-align: center; width: 100px">A validação</th>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center;">SIM</td>
                                            <td style="font-size: 18px; text-align: center;">NÃO</td>
                                        </tr>
                                        </thead>
                                        @for($i=0;$i<10;$i++)
                                            <tr>
                                            <td style="font-size: 18px">{!! $grupoB[$i] !!}</td>
                                            <td style="font-size: 18px; text-align: center;">
                                            
                                            
                                        
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" name="grupoB{{$i}}" id="grupoBSim{{$i}}" value="s" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="grupoBSim{{$i}}"></label>
                                            </div>

                                            </td>
                                            
                                            <td style="font-size: 18px; text-align: center;">
                                            
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" name="grupoB{{$i}}" id="grupoBNao{{$i}}" value="n" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="grupoBNao{{$i}}"></label>
                                            </div>                                           
                                        
                                            </td>
                                            </tr>
                                        @endfor

                                    </table>
                                </div>

                            </div>
                            <br>
                            <br>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th rowspan="2" style="font-size: 18px; text-align: center; vertical-align: middle;">GRUPO C</th>
                                            <th colspan="2" style="font-size: 18px; text-align: center; width: 100px">A validação</th>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center;">SIM</td>
                                            <td style="font-size: 18px; text-align: center;">NÃO</td>
                                        </tr>
                                        </thead>
                                        @for($i=0;$i<10;$i++)
                                            <tr>
                                            <td style="font-size: 18px">{!! $grupoC[$i] !!}</td>
                                            <td style="font-size: 18px; text-align: center;">
                                            
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" name="grupoC{{$i}}" id="grupoCSim{{$i}}" value="s" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="grupoCSim{{$i}}"></label>
                                            </div>

                                            </td>
                                            
                                            <td style="font-size: 18px; text-align: center;">
                                            
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" name="grupoC{{$i}}" id="grupoCNao{{$i}}" value="n" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="grupoCNao{{$i}}"></label>
                                            </div>
                                            </td>
                                            </tr>
                                        @endfor

                                    </table>
                                </div>

                            </div>

                            <br>
                            
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary fonte18" type="submit">
                                    <span class="btn-inner--icon"><i class="fa fa-paper-plane"></i></span>
                                    <span class="btn-inner--text">Enviar formulário</span>
                                </button>
                            </div>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    function preenchimento(i) {
        digitado = document.getElementById("problema" + i).value;
        document.getElementById("problemaTexto" + i).innerHTML = digitado;
    }

    $(document).ready(function() {
        $("#number").keyup(function() {
            $("#number").val(this.value.match(/[0-9]*/));
        });
    });

    function SomenteNumero(e) {
        var tecla = (window.event) ? event.keyCode : e.which;
        if ((tecla > 48 && tecla < 54)) return true;
        else {
            if (tecla == 8 || tecla == 0) return true;
            else return false;
        }
    }
</script>
<script>window.onload = function(){history.go(+1)};</script>
@endpush