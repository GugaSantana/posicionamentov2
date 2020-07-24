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
        <h3>
            <center>INSTRUMENTO 8</center>
        </h3>
        <h3>
            <center>GERENCIAMENTO DO RELACIONAMENTO ATRAVÉS DA EXPOSIÇÃO E DO FEEDBACK</center>
        </h3>
    </div>
    <div class="card-body">
                    <div class="col-12">
                        <h4>
                            <center>Diagnóstico e Recomendações</center>
                        </h4>
                        <br>
                        <p class="fonte18">As Vendas Consultivas estão apoiadas e são possíveis de levar à prática se existe um excelente nível de relacionamento e empatia entre o vendedor e o cliente.</p>
                        <p class="fonte18">Esta metodologia apresenta uma das mais poderosas técnicas para criar esta condição, apoiada em dois fatores fundamentais para garantir um relacionamento motivador e produtivo entre vendedor e cliente: o FEEDBACK e a EXPOSIÇÃO.</p>
                        <p class="fonte18">Cruzando estas duas variáveis se geram 4 quadrantes que devem ser administrados pelo vendedor para <b>“gerenciar”</b> o Campo Psicológico com o cliente e viabilizar as vendas de maneira mais produtiva.</p>
                        <p class="fonte18">A figura seguinte mostra graficamente a interação destas duas variáveis nas quais se fundamentam seu diagnóstico e as recomendações que serão feitas.</p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_1.jpg" style="width: 40%;"></center>
                        <br>

                        <p class="fonte18">Você respondeu um questionário que é a base para seu diagnóstico e para as recomendações com o objetivo de que você possa gerenciar os processos de <b>EXPOSIÇÃO</b> e de <b>FEEDBACK</b> para melhorar de maneira técnica, o relacionamento com seus clientes.</p>
                        <p class="fonte18">Para facilitar a compreensão do diagnóstico e das recomendações, começaremos caracterizando o que representa cada uma dessas quatro áreas ou quadrantes do modelo.</p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_2.jpg" style="width: 40%;"></center>
                        <br>

                        <p class="fonte18"><b>Quadrante 1:</b> O EU ABERTO, representa as facetas da personalidade conhecidas pela própria pessoa e que está disposta a abrir aos outros. Nesta área tanto a pessoa como os outros tem a percepção e acesso a seus conteúdos, os seja, os outros vêem a pessoa exatamente como ela se vê.</p>
                        <p class="fonte18"><b>Quadrante 2:</b> O EU CEGO, traduz a área cega da personalidade da pessoa, aquela que inconscientemente esconde de si mesma, mas que faz parte do comportamento que comunica aos outros.</p>
                        <p class="fonte18">São os aspectos que a pessoa não consegue perceber em si mesma, embora sejam percebidos pelos outros. Por exemplo, uma pessoa pode não admitir que é ansiosa, porem os outros a vêem como tal.</p>
                        <p class="fonte18"><b>Quadrante 3:</b> O EU SECRETO, representa os aspectos da personalidade que a pessoa conhece, mas que consciente e deliberadamente tenta esconder dos outros.</p>
                        <p class="fonte18">É a área secreta que a pessoa procura ocultar para proteger-se. Por exemplo, a pessoa sente-se insegura, mas tenta mostrar uma aparência de muita segurança pessoal.</p>
                        <p class="fonte18"><b>Quadrante 4:</b> O EU DESCONHECIDO, compreende os aspectos da personalidade que nem ela nem os outros conhecem ou percebem. Incluem-se no eu desconhecido certos sentimentos ou impulsos reprimidos ou inconscientes, talentos ou habilidades inexplorados, etc.</p>
                        <p class="fonte18">O resultado do modelo se concentra na análise do formato e do tamanho do EU ABERTO.</p>
                        <p class="fonte18">A este Quadrante 1 chamamos de JANELA e é a partir da janela que devemos tirar as conclusões e desenvolver as recomendações.</p>

                        <br>
                        <p class="fonte18">
                            <h4>
                                <center>DIAGNÓSTICO</center>
                            </h4>
                        </p>

                        <p class="fonte18">Suas respostas ao questionário apresentam o seguinte perfil de janela que representa como você se vê.</p>

                        <center>
                            <canvas id="meuCanvas" width="400" height="400">

                                <script>
                                    var exposicao = {{$retExpo / 10}};
                                    var feedback = {{$retFeed / 10}};

                                    var size = 30;
                                    var canvas = document.getElementById('meuCanvas');
                                    var pincel = canvas.getContext('2d');
                                    var margem = 20;

                                    pincel.beginPath();
                                    pincel.rect((size) + margem, (size) + margem, size * feedback, size * exposicao);
                                    pincel.fillStyle = "red";
                                    pincel.fill();

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
                                    pincel.stroke();
                                </script>

                            </canvas>
                        </center>

                        <br>
                        <p class="fonte18">Leve em consideração os conceitos que foram apresentados para compreender o formato de sua janela e seu tamanho.</p>
                        <p class="fonte18">A seguir serão feitas recomendações específicas para desenvolver a área do seu EU ABERTO, que é o objetivo deste modelo para aumentar a qualidade do seu relacionamento com o cliente.</p>


                        <br>
                        <p class="fonte18">
                            <h4>
                                <center>RECOMENDAÇÕES</center>
                            </h4>
                        </p>

                        <p class="fonte18">Definidas as 4 posições ou áreas, serão apresentados os processos comportamentais básicos para <b>“GERENCIAR”</b> essa matriz.</p>
                        <p class="fonte18">Você pode imaginar duas linhas: uma linha horizontal e outra vertical que dividem o espaço de informações e que podem se mover. Isto significa que as pessoas podem controlar o perfil de seus relacionamentos interpessoais. A seguir você visualizará essas duas linhas e seus movimentos possíveis.</p>
                        <p class="fonte18">Você pode influenciar e definir o tamanho e a forma de sua JANELA, movimentando as linhas, através dos dois processos comportamentais utilizados nos relacionamentos interpessoais, que são os processos de <b>Exposição</b> e de <b>Feedback</b>.</p>

                        <p class="fonte18">
                            <h4>O PROCESSO DE EXPOSIÇÃO</h4>
                        </p>

                        <p class="fonte18">Se fornecermos ao cliente informações relevantes que possuímos e o cliente não, estaremos aumentando o EU ABERTO para baixo, e automaticamente reduzindo o EU SECRETO.</p>
                        <p class="fonte18">Este partilhar proposital é denominado de processo de <b>Exposição</b> e consiste na demonstração aberta e sincera de sentimentos, conhecimentos e suposições, em uma tentativa consciente de compartilhar algo.</p>
                        <p class="fonte18">O Processo de Exposição (linha vertical no gráfico) é controlado pelo Eu e nós podemos usá-lo para estabelecer um clima de confiança e estimular as exposições mútuas com o cliente.</p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_4.jpg" style="width: 40%;"></center>
                        <br>

                        <p class="fonte18">
                            <h4>O PROCESSO DE “FEEDBACK”</h4>
                        </p>

                        <p class="fonte18">É o processo comportamental necessário para aumentar o EU ABERTO no sentido lateral.</p>
                        <p class="fonte18">O processo de “FEEDBACK” reduz o EU CEGO e exige que nós solicitemos de uma forma ativa, informações que achamos que os outros possuem e nós não.</p>
                        <p class="fonte18">Não poderemos receber “Feedback”, a não ser que os outros desejem divulgar as informações que possuem.</p>
                        <p class="fonte18">Só podemos reduzir nosso EU CEGO se os outros cooperarem com Feedback.</p>
                        <p class="fonte18">Naturalmente nossa disposição em agir aberta e sinceramente influencia a cooperação e a confiança dos outros.</p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_5.jpg" style="width: 40%;"></center>
                        <br>

                        <p class="fonte18">Para compreender as recomendações, você deve considerar o perfil de sua janela em quatro dimensões:</p>
                        <p class="fonte18">1 – Seu formato: se é um quadrado ou um retângulo.<br>
                            2 - Se é um retângulo em sentido horizontal.<br>
                            3 – Se é um retângulo no sentido vertical.<br>
                            4 – O tamanho da janela.</p>
                        <p class="fonte18">As figuras seguintes representam estes conceitos:</p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_6.jpg" style="width: 100%;"></center>
                        <br>

                        <p class="fonte18">Observe o perfil de sua janela no gráfico apresentado no seu diagnóstico. Você poderá concluir facilmente com qual dos quatro perfis acima apresentados mais se assemelha seu diagnóstico.</p>
                        <p class="fonte18">A seguir são apresentadas recomendações para os quatro formatos de janela.</p>
                        <p class="fonte18">Leia com atenção as recomendações referidas ao formato mais próximo daquele que apresenta sua janela.</p>
                        <p class="fonte18">Qualquer que seja seu caso, o objetivo será utilizar os processos de Exposição e Feedback de modo a alcançar este resultado:</p>
                        <p class="fonte18">- Uma janela com formato quadrado: que representa um equilíbrio entre os processos de Exposição e de Feedback.</p>
                        <p class="fonte18">- Uma janela o mais ampla possível, que mostra sua capacidade de relacionamento positivo e empatia com seus clientes.</p>

                        <br>

                        <p class="fonte18">
                            <h4>PRIMEIRO TIPO DE PERFIL</h4>
                        </p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_7.jpg" style="width: 40%;"></center>
                        <br>

                        <p class="fonte18">A recomendação para este tamanho e formato de janela, se for seu caso, é desenvolver os processos de Exposição e Feedback para reduzir a área do EU DESCONHECIDO, que atualmente domina.</p>
                        <p class="fonte18">É necessário assumir um certo risco para se expor mais, oferecer mais informações a seu respeito, ser menos retraído e menos rígido ou distante.</p>
                        <p class="fonte18">Sua maior exposição aumentará seu envolvimento pessoal na relação com o cliente.</p>
                        <p class="fonte18">Aumentar sua Exposição influenciará positivamente os rumos do relacionamento e facilitará as vendas.</p>
                        <p class="fonte18">Para movimentar o eixo do Feedback, nos momentos oportunos peça ao seu cliente que manifeste como se sente na relação ao comportamento que você apresenta e o quanto ele o afeta. Isto é, você deve solicitar Feedback e o Feedback aumentará a área no sentido horizontal.</p>
                        <p class="fonte18">A recomendação, em síntese, é aumentar tanto o processo de Exposição, como o processo de Feedback.</p>
                        <p class="fonte18">O objetivo da Venda Consultiva se alcança com mais facilidade se a área do EU ABERTO alcança o nível 80/80 da escala e os processos de Exposição e Feedback estão equilibrados em seus valores na escala, ou seja, apresentam a forma de um quadrado e não de um retângulo.</p>
                        <p class="fonte18">Se este é seu perfil, siga estas recomendações e você conseguirá com facilidade e muito rapidamente “administrar” o relacionamento com seu cliente.</p>
                        <p class="fonte18">A melhoria de seus resultados será evidenciada com o aumento de suas vendas</p>

                        <p class="fonte18">
                            <h4>SEGUNDO TIPO DE PERFIL</h4>
                        </p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_8.jpg" style="width: 40%;"></center>
                        <br>

                        <p class="fonte18">Se este for seu caso, você deve aumentar sua Exposição. Este formato de janela mostra que o Feedback é o processo que você mais utiliza para estabelecer o relacionamento e que é utilizado em excesso por você.</p>
                        <p class="fonte18">A falta de Exposição é um sinal de desconfiança em relação aos outros. Aumente sua Exposição se abrindo com seu cliente para reduzir a área do EU SECRETO.</p>
                        <p class="fonte18">Expresse seus sentimentos e algumas informações pessoais para conquistar o envolvimento do cliente. Quando o cliente reconhece seu EU SECRETO, reage retirando sua confiança, o que pode provocar ansiedade, e certamente comprometerá seu objetivo de vender para esse cliente.</p>
                        <p class="fonte18">Pessoas com este perfil devem participar mais, deve interagir mais com o cliente porque a tendência de seu perfil é fazer falar o cliente, você não se expõe o suficiente.</p>
                        <p class="fonte18">Se este é seu perfil, siga estas recomendações e você conseguirá com facilidade e muito rapidamente “administrar” o relacionamento com seu cliente.</p>
                        <p class="fonte18">A melhoria de seus resultados será evidenciada com o aumento de suas vendas.</p>

                        <p class="fonte18">
                            <h4>TERCEIRO TIPO DE PERFIL</h4>
                        </p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_9.jpg" style="width: 40%;"></center>
                        <br>

                        <p class="fonte18">Se este for seu caso, você utiliza de maneira excessiva a Exposição em detrimento do Feedback.</p>
                        <p class="fonte18">A recomendação é abrir espaço para o Feedback.</p>
                        <p class="fonte18">Seu comportamento pode refletir uma necessidade de afirmação do seu ego e de desconfiança da opinião dos outros. Por isto você tem que praticar mais Feedback para que o cliente se expresse mais e inclusive possa ajudá-lo para você melhorar sua autopercepção.</p>
                        <p class="fonte18">Não permita que o cliente sinta que você tem pouca consideração por suas necessidades ou preocupação com seus sentimentos. Deixe espaço para ele. Você deve reduzir seu nível de Exposição para evitar que o cliente reaja defensivamente.</p>
                        <p class="fonte18">Se a Exposição for muito maior que o Feedback você estaria praticando uma Venda Transacional, uma vez que na Venda Consultiva o vendedor deve ouvir mais do que fala.</p>
                        <p class="fonte18">Você deve aumentar a solicitação de Feedback para superar ressentimentos do cliente, aumentar sua receptividade e despertar mais empatia junto ao seu cliente.</p>
                        <p class="fonte18">Se este é seu perfil, siga estas recomendações e você conseguirá com facilidade e muito rapidamente “administrar” o relacionamento com seu cliente.</p>
                        <p class="fonte18">A melhoria de seus resultados será evidenciada com o aumento de suas vendas.</p>

                        <p class="fonte18">
                            <h4>QUARTO TIPO DE PERFIL</h4>
                        </p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_10.jpg" style="width: 40%;"></center>
                        <br>

                        <p class="fonte18">Se sua janela apresenta este formato e tamanho, você deve manter os processos de Exposição e Feedback de modo que sua janela continue ampla e equilibrada. Isto transmite franqueza, sinceridade e sensibilidade pelas necessidades do cliente.</p>
                        <p class="fonte18">Seu perfil representa o estilo ideal para Vendas Consultivas, todavia este estilo pode provocar uma defesa por parte dos clientes, pois muitas pessoas não estão habituadas a relacionamentos honestos e baseados na confiança.</p>
                        <p class="fonte18">Leve isto em consideração, porque pode acontecer que, situacionalmente, você tenha que reduzir sua janela para voltar logo ao nível ideal.</p>
                        <p class="fonte18">Mais uma vez lembramos que o objetivo da venda consultiva se alcança com mais facilidade se a área da Arena alcança o nível 80/80 da escala e os processos de Exposição e Feedback estão equilibrados em seus valores na escala.</p>
                        <!-- <p class="fonte18">Como ultima recomendação, siga estas orientações para desenvolver sistematicamente sua Janela Pessoal. Você pode repetir este exercício com várias pessoas.</p>
                        <p class="fonte18">1. Peça a uma pessoa que conhece bem você que pense e desenhe o formato e o tamanho de sua JANELA e peça que lhe explique porque você é percebido(a) assim.</p>
                        <p class="fonte18">(Mecanismo de Feedback)</p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_3.jpg" style="width: 40%;"></center>
                        <br>

                        <p class="fonte18">2. Pense e desenhe num formulário igual, porém da pessoa que você escolheu, o formato e o tamanho da janela que você percebe nele ou nela e explique-lhe porque o/a percebe assim. (Mecanismo de Exposição)</p>

                        <center><img src="../posicionamento/public/img/instrumento8/diag_8_3.jpg" style="width: 40%;"></center>
                        <br>

                        <p class="fonte18">3. Peça a essa pessoa que comente atitudes ou comportamentos de você que causaram impacto negativo nele/nela. (Mecanismo de Feedback)</p>
                        <p class="fonte18">4. Relembre a essa pessoa atitudes ou comportamentos dele/a que causaram impacto negativo em você nos últimos tempos. (Mecanismo de Exposição)</p>
                        <p class="fonte18">5. Examine com a pessoa escolhida que Forças estão atuando entre vocês no sentido de facilitar ou dificultar a abertura das Janelas.</p>
                        <p class="fonte18">6. Estabeleça com essa pessoa algum tipo de compromisso e meios para se ajudarem a contribuir, reciprocamente, na ampliação de suas janelas.</p>
 -->
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