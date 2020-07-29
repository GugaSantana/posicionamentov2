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

    canvas {
        display: block;
        margin: 0 auto;
    }
</style>
<div class="card card-primary">
    <div class="card-header">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3><center>INSTRUMENTO 9</center></h3>
        <h3><center>GERENCIAMENTO DO RELACIONAMENTO UTILIZANDO OS CANAIS NEUROLINGUISTICOS</center></h3>
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
                        <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>
                    <p class="fonte18">Uma comunicação efetiva é a base para desenvolver um bom relacionamento com o cliente e um bom relacionamento com o cliente é o fundamento, é a base para implementar Vendas Consultivas.</p>
                    <p class="fonte18">Para estabelecer uma comunicação eficaz é preciso entender o Modelo Mental do Cliente e interagir conforme sua maneira de ver o mundo.</p>
                    <p class="fonte18">Existem três Modelos Mentais que levam a três perfis diferentes de comunicação, como mostra o exemplo na figura seguinte</p>

                    <center><img src="../posicionamento/public/img/instrumento9/diag_9_3.jpg" style="width: 50%"></center>

                    <p class="fonte18"><font style="color: #35408f">- O MODELO VISUAL:</font> É próprio das pessoas com um quadro mental que leva a entender o mundo por meio de imagens, gráficos, filmes, esquemas e outros recursos visuais.</p>
                    <p class="fonte18">Estas pessoas tendem a se comunicar através de imagens. Desenham enquanto falam, traduzem as idéias em esquemas gráficos e usam palavras com conotação visual.</p>
                    <p class="fonte18"><font style="color: #35408f">- O MODELO AUDITIVO:</font> as pessoas nas quais predomina este modelo gostam de falar, e falam de forma clara e pausada. Seu raciocínio é mais analítico. Querem ouvir e gostam de explicações.</p>
                    <p class="fonte18"><font style="color: #35408f">- O MODELO CINESTESICO:</font> são pessoas que precisam sentir as coisas para compreendê-las. Por exemplo, costumam tocar nos outros quando falam. O sentimento e o tato são muito importantes na sua visão de mundo.</p>
                    <p class="fonte18">Necessitam de sensações, necessitam experimentar para compreender</p>

                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>

                    <p class="fonte18">Cada um dos modelos descritos privilegia um canal de comunicação.</p>
                    <p class="fonte18">Os três canais apresentados são:<br>
                    - O Canal Visual<br>
                    - O Canal Auditivo<br>
                    - O Canal Cinestésico</p>
                    <p class="fonte18">O instrumento que você respondeu permite diagnosticar qual é seu Canal de Comunicação Dominante. Seu diagnóstico está representado no seguinte gráfico</p>


                    <center>
                        <canvas id="meuCanvas2" width="700" height="420">
                        </canvas>
                    </center>

                    <p class="fonte18">No gráfico você pode visualizar e comparar a força de seus Canais Neurolinguisticos.</p>
                    <p class="fonte18">É evidente que os três canais estão presentes no Modelo Mental de todas as pessoas, mas sempre um deles tende a prevalecer, esse será o Canal Neurolinguistico dominante de seu Modelo Mental</p>
                    <p class="fonte18">Você identifica seu canal predominante e mede a força de cada canal neurolinguistico pela proximidade que cada um deles tem da nota 10.</p>
                        
                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>
                        
                        <p class="fonte18">Um vez que agora você conhece se Canal Neurolinguistico Dominante, a primeira e mais importante recomendação é que você identifique o Perfil Neurolinguistico do cliente: Se é um cliente visual, auditivo ou cinestésico.</p>
                        <p class="fonte18">Identificado o Canal Neurolinguistico do cliente, você tem que passar a utilizar o canal preferencial de seu cliente para estabelecer uma comunicação eficaz com ele.</p>
                        <p class="fonte18">Então temos aqui duas etapas: pelo Diagnóstico você já conhece seu canal de comunicação preferencial, agora, você tem que sintonizar seu canal de comunicação com o canal de comunicação do cliente.</p>
                        <p class="fonte18">Você tem que se comunicar com o canal preferencial do cliente porque assim se estabelecerá uma “identificação” com o cliente.</p>
                        <p class="fonte18">O raciocínio inconsciente de identificação do cliente com você, será o seguinte:</p>
                        <p class="fonte18">“Somos iguais, eu sou igual que o vendedor e se somos iguais, posso confiar nele”</p>
                        <p class="fonte18">Então, na pratica, a recomendação é que você aprenda a se comunicar, a argumentar em três “idiomas” diferentes que são os seguintes:</p>
                        <p class="fonte18">- VISUALES<br>
                        - AUDITIVES<br>
                        - CINESTESES</p>
                        <p class="fonte18">Por exemplo, se você está vendendo um carro para um cliente visual, você tem que se comunicar em “VISUALES”: você terá maior poder de persuasão se fala sobre o design do carro, sobre as belas cores disponíveis, a beleza do painel de comando, e assim por diante.</p>
                        <p class="fonte18">Em “AUDITIVES” você argumentará que o carro é silencioso, que não se ouve o motor em funcionamento e outros argumentos nesta linha.</p>
                        <p class="fonte18">Já em “CINESTESES” você dirá ao cliente: experimente, entre no carro, pode sentar, sinta o conforto, a maciez do estofamento, e assim por diante.</p>
                        <p class="fonte18">Observe que você está vendendo o mesmo produto, porem de maneira diferente, porque você está argumentando para diferentes canais lingüísticos.</p>
                        <p class="fonte18">Lembre-se:</p>
                        <p class="fonte18">- Utilizamos os três canais lingüísticos porem você deve descobrir qual canal predomina no cliente e se concentrar nele.</p>
                        <p class="fonte18">- Para que você possa gerenciar esses canais com eficácia os canais de comunicação dos clientes, você deve saber identificá-los no cliente.</p>
                        <p class="fonte18">- Você também tem que aprender a falar em “Visuales, Auditives e Cinesteses”.</p>
                        <p class="fonte18">- E finalmente você deve saber se comunicar nos três canais (“Idiomas”) conforme a situação.</p>
                        <p class="fonte18">Siga estas recomendações e sua capacidade de comunicação e persuasão serão extraordinariamente maiores.</p>

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

<script>
                                var visual = (10)-({{$visual}});
                                var auditivo = ({{$auditivo}})-(1);
                                var cinestesico = ({{$cinestesico}})-(1);

                                var sizeMenos = -100;
                                var sizeMais = 100;
                                var sizeDist = 8;
                                var distvert = 8;
                                if(visual == 0) distvert = 0;
                                
                                var margem = 50;

                                                             
                              //Canvas 2

                             
                                var canvas2 = document.getElementById('meuCanvas2');
                                pincel = canvas2.getContext('2d');


                                pincel.beginPath();
                                //PINTAR AREA
                                //ponto vertical
                                pincel.moveTo(300+margem,(visual*(30-sizeDist))+margem-distvert);
                                //ponto diagonal esquerda
                                pincel.lineTo((270+margem+10)-((30-10)*auditivo),(310+margem+sizeMenos)+(10*auditivo));
                                //ponto diagonal direita
                                pincel.lineTo((330+margem-10)+((30-10)*cinestesico),(310+margem+sizeMenos)+(10*cinestesico));
                                pincel.fillStyle = "red";
                                pincel.fill();
                            
                                pincel.beginPath();
                                //lados
                                pincel.moveTo(margem+300,0+margem);
                                pincel.lineTo(0+margem+sizeMais,400+margem+sizeMenos);
                                
                                pincel.moveTo(300+margem,0+margem);
                                pincel.lineTo(600+margem+sizeMenos,400+margem+sizeMenos);
                                
                                pincel.moveTo(0+margem+sizeMais,400+margem+sizeMenos);
                                pincel.lineTo(600+margem+sizeMenos,400+margem+sizeMenos);
                                
                                //Meios
                                pincel.moveTo(300+margem, 0+margem);
                                pincel.lineTo(300+margem, 300+margem+sizeMenos);
                                
                                pincel.moveTo(300+margem, 300+margem+sizeMenos);
                                pincel.lineTo(0+margem+sizeMais,400+margem+sizeMenos);
                                
                                pincel.moveTo(300+margem, 300+margem+sizeMenos);
                                pincel.lineTo(600+margem+sizeMenos,400+margem+sizeMenos);

                                //Riscos da vertical central
                                cont = 30-sizeDist;
                                for (let i = 0; i < 9; i++) {
                                    pincel.moveTo(300+margem,cont-sizeDist+margem);
                                    pincel.lineTo(305+margem,cont-sizeDist+margem);
                                    cont += 30-sizeDist;    
                                }

                                //Riscos da diagonal esquerda
                                x = 270+margem+10;
                                y = 310+margem+sizeMenos;
                                for (let i = 0; i < 9; i++) {
                                    pincel.moveTo(x,y);
                                    pincel.lineTo(x+3,y+6);
                                    x-=30-10;
                                    y+=10;
                                }

                                //Riscos da diagonal direita
                                x = 330+margem-10;
                                y = 310+margem+sizeMenos;
                                for (let i = 0; i < 9; i++) {
                                    pincel.moveTo(x,y);
                                    pincel.lineTo(x-3,y+6);
                                    x+=30-10;
                                    y+=10;
                                }

                                //texto da vertical central
                                number = 09
                                cont = 34+margem-10;
                                
                                //texto principal
                                pincel.textAlign = "center";
                                pincel.font = (16) + "px Arial";
                                pincel.fillStyle="red";
                                pincel.fillText('CANAL VISUAL',margem+300,margem - 20);

                                //10
                                pincel.font = (14) + "px Arial";
                                pincel.fillStyle="black";
                                pincel.fillText(10, 290+margem, margem);                                

                                for (let i = 0; i < 9; i++) {
                                    pincel.fillText(number--, 294+margem, cont);
                                    cont += 30-9;    
                                }
                                    

                                //texto da diagonal esquerda
                                number = 1
                                x = 278+margem;
                                y = 306+margem+sizeMenos;

                                for (let i = 0; i < 9; i++) {
                                    pincel.fillText(number++, x, y);
                                    x-=30-10;
                                    y+=10;    
                                }
                                //10
                                pincel.fillText(10, x-10, y+10);

                                //Texto Principal
                                pincel.textAlign = "center";
                                pincel.font = (16) + "px Arial";
                                pincel.fillStyle="red";
                                pincel.fillText('CANAL AUDITIVO',x,y+30);

                                pincel.font = (14) + "px Arial";
                                pincel.fillStyle="black";

                                //texto da diagonal direita
                                number = 1
                                x = 322+margem;
                                y = 306+margem+sizeMenos;

                                for (let i = 0; i < 9; i++) {
                                    pincel.fillText(number++, x, y);
                                    x+=30-10;
                                    y+=10;    
                                }
                                //10
                                pincel.fillText(10, x+10, y+10);

                                //Texto Principal
                                pincel.textAlign = "center";
                                pincel.font = (16) + "px Arial";
                                pincel.fillStyle="red";
                                pincel.fillText('CANAL CINESTÉSICO',x,y+30);

                                pincel.font = (14) + "px Arial";
                                pincel.fillStyle="black";

                                

                                pincel.stroke();
                            </script>

@endpush