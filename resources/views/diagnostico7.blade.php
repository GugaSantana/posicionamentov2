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
        <h3><center>INSTRUMENTO 7</center></h3>
        <h3><center>GERENCIAMENTO DO RELACIONAMENTO ATRAVÉS DOS ESTADOS DO EGO</center></h3>
    </div>
    <div class="card-body">
        
                    <div class="col-12">
                    <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>
                    <p class="fonte18">Conforme o modelo que utilizamos na metodologia, nossa personalidade está constituída por três subsistemas:</p>
                    <p class="fonte18">- O Pai<br>
                    - O Adulto<br>
                    - A Criança
                    </p>

                    <center><img src="../posicionamento/public/img/diag_7_1.jpg" style="width: 50%;"></center>
                    <br>

                    <p class="fonte18">Antes de apresentar seu Diagnóstico e as Recomendações vamos considerar os conceitos básicos da metodologia para ter uma melhor compreensão da contribuição deste Instrumento.</p>
                    
                    <p class="fonte18"><h4>O SUBSISTEMA PAI</h4></p>
                    
                    <p class="fonte18">O Pai é o subsistema da personalidade que inclui padrões de sentimentos, gestos, idéias e comportamentos aprendidos cedo na vida pela observação e imitação dos pais, ou qualquer pessoa numa posição de autoridade sobre a criança.</p>
                    <p class="fonte18">Durante o crescimento, as crianças observam os padrões comportamentais dos pais e copiam muitos deles, os quais se tornam parte de seu subsistema Pai.</p>
                    <p class="fonte18">Este processo de assimilação não é consciente.</p>
                    <p class="fonte18">No subsistema Pai estão contidos “imperativos”, como: “faça isso”, “não faça aquilo”; considerações éticas e morais, como o certo e o errado, o bom e o mau; preconceitos para si próprio e para os outros; normas, regras e restrições; atitudes e opiniões várias.</p>
                    <p class="fonte18">Este subsistema é também um repositório de sentimentos que encorajam o indivíduo a assumir autoridade, ou a exercer controle provocando as vezes, sentimentos de culpa no próprio e nos outros</p>

                    <p class="fonte18"><h4>O SUBSISTEMA ADULTO</h4></p>

                    <p class="fonte18">É o subsistema do indivíduo que processa as informações de modo lógico, racional e sistemático.</p>
                    <p class="fonte18">Neste sentido, o Adulto pode se comparar a um computador. O Adulto é não-emotivo, frio, calculista, orientado para os fatos. É objetivo.</p>
                    <p class="fonte18">O seu comportamento apega-se fundamentalmente à realidade.</p>
                    <p class="fonte18">O Adulto atua de forma probabilística, com dados e sempre procura atualizar dados baseado em sua capacidade e em suas experiências passadas.</p>

                    <p class="fonte18"><h4>O SUBSISTEMA CRIANÇA</h4></p>

                    <p class="fonte18">A Criança é o subsistema ativador dos sentimentos, atitudes e comportamentos que são características da infância do indivíduo.</p>
                    <p class="fonte18">A criança tende a se expressar de duas formas: ora adaptada ora natural e espontânea.</p>
                    <p class="fonte18">Atuando sob a influência do Pai, a Criança adaptada tende a mudar seus padrões comportamentais de tal modo que eles expressem obediência.</p>
                    <p class="fonte18">Já a Criança natural é espontânea e criativa.</p>
                    <p class="fonte18">A capacidade de ter curiosidade espontânea sobre as coisas e pessoas também é parte do Estado de Ego Criança.</p>
                    <p class="fonte18">As práticas e sentimentos da criança são desejáveis e promovem vitalidade, intuição e felicidade.</p>
                    <p class="fonte18">No gráfico seguinte é mostrada a forma de representar os três estados do ego, bem como suas características e conteúdos principais:</p>

                    <center><img src="../posicionamento/public/img/diag_7_2.jpg" style="width: 80%;"></center>
                    <br>

                    <p class="fonte18">Os três estados do ego têm diferentes graus de predominância. Os três existem em todas as pessoas e se expressam, mas aquele dos três subsistemas que prevalece, define a Personalidade.</p>

                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>

                    <p class="fonte18">Interpretados os resultados de suas respostas à primeira parte deste instrumento, aplicando a metodologia, é apresentado graficamente seu Perfil de Personalidade na figura seguinte. Os pesos representados pelos tamanhos dos círculos se traduzem nas influencias dos três estados do ego na sua personalidade.</p>


                    <center>
                            <canvas id="meuCanvas" width="400" height="850">

                                <script>
                                    var pai = {{$retPai}};
                                    var adulto = {{$retAdulto}};
                                    var crianca = {{$retCrianca}};

                                    var size = 2;
                                    var canvas = document.getElementById('meuCanvas');
                                    var pincel = canvas.getContext('2d');
                                    var margem = 20;

                                    //pintar Circulos
                                    pincel.beginPath();
                                    pincel.arc(200, 100*size, pai * size, 0, 2 * Math.PI);
                                    pincel.fillStyle = 'blue';
                                    pincel.fill();

                                    pincel.beginPath();
                                    pincel.arc(200, 210*size, adulto * size, 0, 2 * Math.PI);
                                    pincel.fillStyle = 'yellow';
                                    pincel.fill();

                                    pincel.beginPath();
                                    pincel.arc(200, 320*size, crianca * size, 0, 2 * Math.PI);
                                    pincel.fillStyle = 'green';
                                    pincel.fill();


                                    //3 Circulos
                                    pincel.textAlign = "center";
                                    pincel.font = (size*7)+"px Arial";
                                    pincel.fillStyle = "red";

                                    for (let i = 1; i < 10; i++) {
                                        pincel.beginPath();
                                        pincel.arc(200, 100*size, i * 10 * size, 0, 2 * Math.PI);
                                        pincel.fillText((i*10), 200 + (i * 10 * size), 100*size);
                                        pincel.stroke();
                                    }

                                    for (let i = 1; i < 10; i++) {
                                        pincel.beginPath();
                                        pincel.arc(200, 210*size, i * 10 * size, 0, 2 * Math.PI);
                                        pincel.fillText((i*10), 200 + (i * 10 * size), 210*size);
                                        pincel.stroke();
                                    }
                            
                                    for (let i = 1; i < 10; i++) {
                                        pincel.beginPath();
                                        pincel.arc(200, 320*size, i * 10 * size, 0, 2 * Math.PI);
                                        pincel.fillText((i*10), 200 + (i * 10 * size), 320*size);
                                        pincel.stroke();
                                    }

                                    pincel.font = (size*10)+"px Arial";
                                    pincel.fillStyle = "black";
                                    pincel.fillText("P", 200, 102*size);
                                    pincel.fillText("A", 200, 212*size);
                                    pincel.fillText("C", 200, 322*size);

/*
                                    pincel.beginPath();
                                    for (let i = 1; i < 11; i++) {
                                        for (let j = 1; j < 11; j++) {
                                            pincel.rect((size * i) + margem, (size * j) + margem, size, size);
                                        }
                                    }
                                    pincel.stroke();

                                    //Textos
                                    pincel.beginPath();
                                    pincel.font = (size / 2.25) + "px Arial";
                                    pincel.fillStyle = "black";
                                    pincel.textAlign = "center";

                                    let cont = 10;
                                    for (let i = 0; i < 10; i++) {
                                        pincel.fillText(cont, size * 2 + (size * i) + margem, size - (size / 6) + margem);
                                        cont += 10;
                                    }

                                    cont = 0;
                                    for (let i = 0; i < 11; i++) {
                                        pincel.fillText(cont, size - (size / 2) + margem, size + (size / 10) + size * i + margem);
                                        cont += 10;
                                    }

                                    // Seta lateral
                                    pincel.beginPath();
                                    pincel.moveTo(15, (size - 5) + margem);
                                    pincel.lineTo(15, (size * 2.8) + margem);
                                    pincel.lineTo(15, (size - 5) + 1 + margem);
                                    pincel.lineTo(15, (size * 2.8) + 1 + margem);
                                    pincel.lineTo(15, (size - 5) + 2 + margem);
                                    pincel.lineTo(15, (size * 2.8) + 2 + margem);
                                    pincel.lineTo(15, (size - 5) + 1 + margem);
                                    //setas
                                    /*pincel.lineTo(5, (size-5)+12);
                                    pincel.moveTo(15, (size-5)+1);
                                    pincel.lineTo(25, (size-5)+12);*/

                                    /*
                                    pincel.strokeStyle = "black";
                                    pincel.stroke();

                                    pincel.textAlign = "center";
                                    pincel.font = (size / 1.8) + "px Arial";
                                    pincel.fillStyle = "red";

                                    esp = 3.5;
                                    pincel.fillText("E", 15, (size * esp) + margem);
                                    esp += 0.7;
                                    pincel.fillText("X", 15, (size * esp) + margem);
                                    esp += 0.7;
                                    pincel.fillText("P", 15, (size * esp) + margem);
                                    esp += 0.7;
                                    pincel.fillText("O", 15, (size * esp) + margem);
                                    esp += 0.7;
                                    pincel.fillText("S", 15, (size * esp) + margem);
                                    esp += 0.7;
                                    pincel.fillText("I", 15, (size * esp) + margem);
                                    esp += 0.7;
                                    pincel.fillText("Ç", 15, (size * esp) + margem);
                                    esp += 0.7;
                                    pincel.fillText("Ã", 15, (size * esp) + margem);
                                    esp += 0.7;
                                    pincel.fillText("O", 15, (size * esp) + margem);
                                    esp += 0.2;

                                    pincel.beginPath();
                                    pincel.moveTo(15, (size * esp) + margem);
                                    pincel.lineTo(15, (size * 11) + margem);
                                    pincel.lineTo(15, (size * esp) + margem);
                                    pincel.lineTo(15, (size * 11) + margem);
                                    pincel.lineTo(15, (size * esp) + margem);
                                    pincel.lineTo(15, (size * 11) + margem);
                                    pincel.lineTo(15, (size * esp) + margem);
                                    //setas
                                    pincel.moveTo(15, (size * 11) + margem);
                                    pincel.lineTo(5, (size * 11) - 12 + margem);
                                    pincel.moveTo(15, (size * 11) + margem);
                                    pincel.lineTo(25, (size * 11) - 12 + margem);
                                    pincel.strokeStyle = "black";
                                    pincel.stroke();

                                    // Seta Top
                                    pincel.beginPath();
                                    pincel.moveTo(size * 1.5, (size * 0.6));
                                    pincel.lineTo(size * 4, (size * 0.6));

                                    pincel.strokeStyle = "black";
                                    pincel.stroke();

                                    pincel.textAlign = "center";
                                    pincel.font = (size / 1.8) + "px Arial";
                                    pincel.fillStyle = "red";

                                    esp = 4.5;
                                    pincel.fillText("F", size * esp, (size * 0.8));
                                    esp += 0.5;
                                    pincel.fillText("E", size * esp, (size * 0.8));
                                    esp += 0.5;
                                    pincel.fillText("E", size * esp, (size * 0.8));
                                    esp += 0.5;
                                    pincel.fillText("D", size * esp, (size * 0.8));
                                    esp += 0.5;
                                    pincel.fillText("B", size * esp, (size * 0.8));
                                    esp += 0.5;
                                    pincel.fillText("A", size * esp, (size * 0.8));
                                    esp += 0.5;
                                    pincel.fillText("C", size * esp, (size * 0.8));
                                    esp += 0.5;
                                    pincel.fillText("K", size * esp, (size * 0.8));
                                    esp += 0.4;

                                    pincel.beginPath();
                                    pincel.moveTo(size * esp, (size * 0.6));
                                    pincel.lineTo(size * 11.5, (size * 0.6));
                                    //setas
                                    pincel.moveTo(size * 11.5, (size * 0.6));
                                    pincel.lineTo((size * 11.5) - 12, (size * 0.6) + 10);
                                    pincel.moveTo(size * 11.5, (size * 0.6));
                                    pincel.lineTo((size * 11.5) - 12, (size * 0.6) - 10);
                                    pincel.strokeStyle = "black";
                                    pincel.stroke();*/
                                </script>

                            </canvas>
                        </center>



                    <p class="fonte18">Fica assim representada sua estrutura de personalidade.</p>
                    <p class="fonte18">A partir desta estrutura, seus estados do ego se expressam e determinam seu modo de relacionar-se e de comunicar-se.</p>
                    <p class="fonte18">Observe que seu cliente também tem seus estados do ego e sua forma de se expressar.</p>
                    <p class="fonte18">Nas recomendações serão sugeridos comportamentos que devem ser adotados para você se adaptar aos estados do ego do seu cliente visando ter uma relação equilibrada e harmoniosa e evitar conflitos que possam comprometer a venda.</p>

           
                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÃO</center></h4></p>
                        
                        <p class="fonte18">Todos nós temos os três estados do ego, porém, em proporções diferentes. Portanto, devemos tomar algumas ações em relação aos três estados de ego da Personalidade, conforme o resultado do diagnóstico.</p>
                        <p class="fonte18">A primeira recomendação é estabelecer um equilíbrio entre as forças ou intensidades dos três estados do ego. Para isto podem ser seguidas 2 estratégias que não se opõem, ao contrário se complementam para alcançar o recomendado equilíbrio.</p>
                        <p class="fonte18">A primeira estratégia é focar o estado do ego com menor valor no seu diagnóstico para ser desenvolvido. A seguir, desenvolveremos o estado do ego que apresenta o segundo valor mais baixo.</p>
                        <p class="fonte18">Serão feitas recomendações para os três estados do ego e você seguirá as prioridades conforme o resultado do seu diagnóstico.</p>
                        <p class="fonte18">A segunda estratégia é inibir o estado de ego que apresenta uma desproporcional força em relação à intensidade dos outros dois estados do ego. Estas duas recomendações valem para os três estados do ego.</p>
                        <br>
                        <p class="fonte18"><h4>A. ESTADO DO EGO PAI</h4></p>
                        
                        <p class="fonte18">Quando o estado do ego Pai apresenta valores baixos, ele deve ser desenvolvido.</p>
                        <p class="fonte18">Você deve assumir um comportamento mais diretivo e desenvolver a autocrítica.</p>
                        <p class="fonte18">Você também deve desenvolver sua sensibilidade para ser mais protetor e também para ser mais rigoroso com as pessoas, quando as situações impõem um destes comportamentos.</p>
                        <p class="fonte18">O estado do ego Pai fraco se expressa em comportamentos de submissão e dependência.</p>
                        <p class="fonte18">Frente a um vendedor com um estado do ego PAI de pouca expressão, o cliente pode assumir o controle do Campo Psicológico que se estabelece entre ele e o vendedor, dificultando que se alcance os objetivos da venda.</p>
                        <br>
                        <p class="fonte18"><h4>B. ESTADO DO EGO ADULTO</h4></p>
                        
                        <p class="fonte18">Este estado do ego faz com que a pessoa tenha um comportamento mais racional e menos intuitivo. Pessoas nas quais prevalece o estado do ego adulto trabalham com método e administram com menos envolvimento sócio-emocional.</p>
                        <p class="fonte18">Para desenvolver o estado do ego adulto, a pessoa deve se interessar mais por dados, fatos, números. Mais razão e menos emoção.</p>
                        <p class="fonte18">Nas relações de trabalho o estado do ego adulto deve ser o mais ativo dos três, ele é o subsistema adequado para tomar as melhores decisões, resolver da melhor maneira possível conflitos e solucionar problemas. Tente processar as informações, seguindo padrões objetivos, impessoais e lógicos.</p>
                        <p class="fonte18">Para desenvolver este estado do ego, não se deixe levar por sentimentos, seja menos preconceituoso e procure ser racional.</p>
                        <br>
                        <p class="fonte18"><h4>C. ESTADO DO EGO CRIANÇA</h4></p>

                        <p class="fonte18">Este estado do ego é desenvolvido estimulando a criatividade e valorizando a intuição e a espontaneidade.</p>
                        <p class="fonte18">Procure desenvolver e expressar suas emoções. Pratique atividades desinibidoras, como fazer teatro, dança e outras expressões de arte.</p>
                        <p class="fonte18">Escreva poesias e não fique preso a preconceitos e à repressão de suas emoções, não sinta vergonha, fale em público.</p>
                        <p class="fonte18">Pense como age uma criança e utilize o comportamento delas como modelo, procure agir seguindo esses padrões.</p>
                        <p class="fonte18">O objetivo das recomendações, portanto, não é a exclusão de qualquer dos subsistemas, mas desenvolver um equilíbrio saudável entre os três, de modo que o sistema total seja capaz de uma interação e de um relacionamento mais empático e produtivo com os clientes.</p>
                        <p class="fonte18">A implementação desta metodologia tem 3 etapas.</p>
                        <p class="fonte18">A – Desenvolver o equilíbrio dos seus três estados do ego.</p>
                        <p class="fonte18">B – Identificar o estado ou os estados do ego predominantes no seu cliente.</p>
                        <p class="fonte18">C – Buscar a complementação ou sintonia entre seus estados do ego e os estados de ego de seu cliente para evitar conflitos.</p>

                        <ul class="fonte18">
                        <li>Adulto se complementa com Adulto</li>
                        <li>Pai se complementa com Criança</li>
                        <li>Criança se complementa com o Pai</li>
                        <li>Criança se complementa com Criança</li>
                        <li>Pai com Pai tem potencial de conflitos, procure evitar interação entre estes estados de ego.</li>
                        </ul>

                        <p class="fonte18">Lembre-se que as Vendas Consultivas têm como principal alicerce o bom relacionamento com seu cliente.</p>
                        <p class="fonte18">Siga e aplique as recomendações feitas. Este instrumento é de fundamental importância para efetivamente desenvolver e colocar em prática a principal base das Vendas Consultivas.</p>




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