@extends('adminlte::page')

@section('content')

<style>
    #bola {
        background: radial-gradient(ellipse at center, #f00 0%, #f00 0%, #f00 30%, rgba(0, 0, 0, 0) 40%);
    }

    .border03 {
        height: 2px;
        background-image: linear-gradient(90deg, transparent, transparent 50%, #fff 50%, #fff 100%), linear-gradient(90deg, #f00, #f00);
        background-size: 10px 3px, 100% 3px;
        border: none;
    }

    #bola {
        background: radial-gradient(circle at center, #f00 0%, #f00 0%, #f00 6px, rgba(0, 0, 0, 0) 8px);
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

    canvas {
        display: block;
        margin: 0 auto;
    }
</style>
<div class="card card-primary">
    <div class="card-header">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3>
            <center>INSTRUMENTO 1</center>
        </h3>
        <h3>
            <center>MEU NÍVEL DE EMPREENDEDORISMO</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 1</center>
                </h3>
                <h3>
                    <center>MEU NÍVEL DE EMPREENDEDORISMO</center>
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
            <p class="fonte18">O empreendedorismo somente é possível se tivermos clara e bem definida uma Visão de Futuro e agirmos para que ela se realize alinhando todos nossos comportamentos e decisões.</p>
            <p class="fonte18">Ilustramos graficamente estes conceitos:</p>
            <center><img src="../posicionamento/public/img/instrumento1/diag1_1.jpg" style="width: 45%"></center>
            <br>
            <p class="fonte18">
                <h4>
                    <center>DIAGNÓSTICO</center>
                </h4>
            </p>
            <p class="fonte18">O diagnóstico se apóia na avaliação de duas dimensões: a VISÃO e a AÇÃO.</p>
            <p class="fonte18">O diagnóstico é fundamentado na correlação que suas respostas apresentam nestes dois eixos.</p>
            <p class="fonte18">Vamos caracterizar os dois eixos do Diagnóstico.</p>
            <p class="fonte18">
                <h4>VISÃO</h4>
            </p>
            <p class="fonte18">Visão é o propósito que você tem para sua profissão e para sua vida. Visão é como você vê o futuro, é o que você quer ser no futuro, aonde você quer chegar no futuro, é a Missão da sua vida.</p>
            <p class="fonte18">Visão é trabalhar com brilho nos olhos, porque seu trabalho está associado com algo maior, com algo mais transcendente que você quer alcançar.</p>
            <p class="fonte18">A Visão auxilia na condução do processo decisório. A Visão estimula a criatividade, é a capacidade de pensar em soluções com os olhos voltados para uma nova realidade e a habilidade para propor soluções inovadoras.</p>
            <p class="fonte18">Ter Visão de Futuro é fundamental para dar coerência às decisões presentes. </p>
            <p class="fonte18">Lembrando o filosofo Sêneca: “Se você não sabe para onde ir, qualquer vento serve”</p>
            <p class="fonte18">
                <h4>AÇÃO</H4>
            </p>
            <p class="fonte18">Ação é sinônimo de tomar decisões e implementá-las</p>
            <p class="fonte18">Ação é atividade, é trabalho sobre a realidade para alcançar objetivos.</p>
            <p class="fonte18">A ação se contrapõe à contemplação, à passividade. É a capacidade de agir, de transformar, de fazer esforços para alcançar um objetivo.</p>
            <p class="fonte18">A figura seguinte mostra a correlação entre a Visão e a Ação e todas as combinações possíveis de valores</p>
            <center><img src="../posicionamento/public/img/instrumento1/diag1_2.png" style="width: 50%"></center>
            <br>
            <p class="fonte18">A seguir apresentamos sua posição diagnóstica considerando suas respostas ao questionário.</p>

            <div class="row">
                <div class="col-12" style="">
                    <table class="table table-bordered fonte18">
                        <tr>
                            <td rowspan=2 style="font-size: 18px; vertical-align: middle; width: 20%; text-align: center; border: none;margin:0%;padding:0%;">Nível de Visão</td>
                            @for($i=1; $i <= 10; $i++) <td class="bg-primary" style="font-size: 18px; vertical-align: middle; text-align: center; border-bottom: none;margin:0%;padding:0%;">{{$i}}</td>
                                @endfor
                        </tr>
                        <tr>
                            @for($i=1; $i <= 10; $i++) <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center; border-top:none;margin:0%;" @if($i==$visao) id="bola" @endif>
                                </td>
                                @endfor
                        </tr>
                    </table>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-12" style="">
                <table class="table table-bordered fonte18">
                        <tr>
                            <td rowspan=2 style="font-size: 18px; vertical-align: middle; width: 20%; text-align: center; border: none;margin:0%;padding:0%;">Nível de Ação</td>
                            @for($i=1; $i <= 10; $i++) <td class="bg-primary" style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center; border-bottom: none;margin:0%;padding:0%;">{{$i}}</td>
                                @endfor
                        </tr>
                        <tr>
                            @for($i=1; $i <= 10; $i++) <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center; border-top:none;margin:0%;" @if($i==$acao) id="bola" @endif>
                                </td>
                                @endfor
                        </tr>
                    </table>
                </div>
            </div>

            <br>

            <p class="fonte18">Projetando estes resultados no gráfico de correlação VISÃO/AÇÃO acima apresentado , seu diagnóstico é o seguinte</p>

        </div>
    </div>

        <canvas id="grafico" width="400" height="400">

            <script>
                var visao = {{$visao}};
                var acao = {{$acao}};

                var size = 30;
                var canvas = document.getElementById('grafico');
                var pincel = canvas.getContext('2d');
                var margem = 20;
                pincel.beginPath();
                for (let i = 1; i <= 11; i++) {
                    for (let j = 1; j <= 11; j++) {
                        pincel.rect((size * i) + margem, size * j, size, size);
                    }
                }

                pincel.stroke();

                pincel.beginPath();
                pincel.clearRect(size + margem + 1, size + 1, (size * 4) - 2, (size * 3) - 2);

                pincel.beginPath();
                pincel.clearRect(size + margem + 1, (size * 4) + 1, (size * 4) - 2, (size * 5) - 2);

                pincel.beginPath();
                pincel.clearRect(size + margem + 1, (size * 9) + 1, (size * 4) - 2, (size * 3) - 2);


                pincel.beginPath();
                pincel.clearRect((size * 5) + margem + 1, size + 1, (size * 4) - 2, (size * 3) - 2);

                pincel.beginPath();
                pincel.clearRect((size * 5) + margem + 1, (size * 4) + 1, (size * 4) - 2, (size * 5) - 2);

                pincel.beginPath();
                pincel.clearRect((size * 5) + margem + 1, (size * 9) + 1, (size * 4) - 2, (size * 3) - 2);


                pincel.beginPath();
                pincel.clearRect((size * 9) + margem + 1, size + 1, (size * 3) - 2, (size * 3) - 2);

                pincel.beginPath();
                pincel.clearRect((size * 9) + margem + 1, (size * 4) + 1, (size * 3) - 2, (size * 5) - 2);

                pincel.beginPath();
                pincel.clearRect((size * 9) + margem + 1, (size * 9) + 1, (size * 3) - 2, (size * 3) - 2);

                //Bolinha
                pincel.beginPath();
                pincel.arc(size + (size / 2) + (size * acao) + margem, (size * (11 - visao)) + (size / 2), size / 4, 0, 2 * Math.PI);
                pincel.fillStyle = "red";
                pincel.fill();

                //Linha até a bolinha
                pincel.beginPath();
                pincel.moveTo(size + (size / 2) + (size * acao) + margem, (size * (11 - visao)) + (size / 2));
                pincel.lineTo(size + margem, (size * (11 - visao)) + (size / 2));
                pincel.strokeStyle = "red";
                pincel.stroke();

                //Linha até a bolinha
                pincel.beginPath();
                pincel.moveTo(size + (size / 2) + (size * acao) + margem, (size * (11 - visao)) + (size / 2));
                pincel.lineTo(size + (size / 2) + (size * acao) + margem, size * 12);
                pincel.strokeStyle = "red";
                pincel.stroke();

                //Textos
                pincel.beginPath();
                pincel.font = (size / 2.25) + "px Arial";
                pincel.fillStyle = "black";

                for (let i = 0; i < 11; i++) {
                    pincel.fillText(i, size + (size / 3) + (size * i) + margem, size * 12.5);
                }

                let j = 10;
                for (let i = 0; i < 11; i++) {
                    pincel.fillText(i, size - (size / 1.5) + margem, size + (size / 1.5) + size * j);
                    j--;
                }


                pincel.textAlign = "center";
                pincel.fillText('VISÃO ALTA', (size * 3) + margem, size * 2.2);
                pincel.fillText('AÇÃO BAIXA', (size * 3) + margem, size * 2.8);

                pincel.fillText('VISÃO ALTA', (size * 7) + margem, size * 2.2);
                pincel.fillText('AÇÃO MEDIA', (size * 7) + margem, size * 2.8);

                pincel.fillText('VISÃO ALTA', (size * 10.5) + margem, size * 2.2);
                pincel.fillText('AÇÃO ALTA', (size * 10.5) + margem, size * 2.8);

                pincel.fillText('VISÃO MÉDIA', (size * 3) + margem, size * 6.2);
                pincel.fillText('AÇÃO BAIXA', (size * 3) + margem, size * 6.8);

                pincel.fillText('VISÃO MÉDIA', (size * 7) + margem, size * 6.2);
                pincel.fillText('AÇÃO MÉDIA', (size * 7) + margem, size * 6.8);

                pincel.fillText('VISÃO MÉDIA', (size * 10.5) + margem, size * 6.2);
                pincel.fillText('AÇÃO ALTA', (size * 10.5) + margem, size * 6.8);

                pincel.fillText('VISÃO BAIXA', (size * 3) + margem, size * 10.2);
                pincel.fillText('AÇÃO BAIXA', (size * 3) + margem, size * 10.8);

                pincel.fillText('VISÃO BAIXA', (size * 7) + margem, size * 10.2);
                pincel.fillText('AÇÃO MÉDIA', (size * 7) + margem, size * 10.8);

                pincel.fillText('VISÃO BAIXA', (size * 10.5) + margem, size * 10.2);
                pincel.fillText('AÇÃO ALTA', (size * 10.5) + margem, size * 10.8);

                pincel.beginPath();
                pincel.moveTo(15, size - 5);
                pincel.lineTo(15, size * 10);
                pincel.lineTo(15, (size - 5) + 1);
                pincel.lineTo(15, (size * 10) + 1);
                pincel.lineTo(15, (size - 5) + 2);
                pincel.lineTo(15, (size * 10) + 2);
                pincel.lineTo(15, (size - 5) + 1);
                //setas
                pincel.lineTo(5, (size - 5) + 12);
                pincel.moveTo(15, (size - 5) + 1);
                pincel.lineTo(25, (size - 5) + 12);
                pincel.strokeStyle = "black";
                pincel.stroke();

                pincel.beginPath();
                pincel.rotate(-Math.PI / 2);
                pincel.textAlign = "center";
                pincel.font = (size / 1.8) + "px Arial";
                pincel.fillText("Visão", -330, size - 12);

                pincel.textAlign = "start";
                pincel.rotate(Math.PI / 2);

                pincel.beginPath();
                pincel.moveTo(110, size * 13);
                pincel.lineTo(size * 12.6, size * 13);
                //setas
                pincel.lineTo((size * 12.6) - 10, (size * 13) + 10);
                pincel.moveTo(size * 12.6, size * 13);
                pincel.lineTo((size * 12.6) - 10, (size * 13) - 10);
                pincel.stroke();

                //texto
                pincel.fillText("Ação", 60, size * 13.1);

                pincel.strokeStyle = "black";
                pincel.stroke();
            </script>

        </canvas>


    <div class="card-body">
        <div class="col-12">

            <p class="fonte18">De acordo com sua posição no gráfico, seu diagnóstico é:</p>

            <!-- RESPOSTA DE ACORDO COM REQUISIÇÃO -->
            <table border=1>
                <tr>
                    <td>
                        <h4 style="color:red">{{$retorno['titulo']}}</h4>
                    </td>
                </tr>
            </table>
            <p class="fonte18">{!!$retorno['diagnostico']!!}</p>

            <br>

            <p class="fonte18">
                <h4>
                    <center>RECOMENDAÇÕES</center>
                </h4>
            </p>

            <p class="fonte18">Conforme seu diagnóstico, as recomendações são as seguintes:</p>
            <p class="fonte18">Num sentido amplo e estratégico você deve desenvolver sua Visão e sua Ação passando do seu atual Nível de Visão <b>{{$visao}}</b> para o Nível de Visão 10 e passando do seu atual Nível de Ação <b>{{$acao}}</b> para o Nível de Ação 10.</p>
            <p class="fonte18">No seu caso a recomendação é:</p>

            <table border=1>
                <tr>
                    <td>
                        <h4 style="color:red">{{$retorno['titulo']}}</h4>
                    </td>
                </tr>
            </table>

            <p class="fonte18">{!! $retorno['recomendacao'] !!}</p>
            <br>
            <center><a href="/autogestao" class="fonte18"><span class="fa fa-arrow-circle-right" style="color:red; font-size: 22px"></span> Ir para Planilha de Autogestão</a></center>

        </div>
    </div>
</div>

@endsection
