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
        <h3>
            <center>INSTRUMENTO 8</center>
        </h3>
        <h3>
            <center>GERENCIAMENTO DO RELACIONAMENTO ATRAVÉS DA EXPOSIÇÃO E DO FEEDBACK</center>
        </h3>
    </div>
    <div class="card-body">

                    <div class="col-12">
                        <p class="fonte18 center"><b>
                                Levantamento de Informações
                            </b></p>
                        <p class="fonte18">No instrumento anterior foi avaliada a estrutura da personalidade e as recomendações foram orientadas para equilibrar os três sistemas da Personalidade: PAI, ADULTO e CRIANÇA.</p>
                        <p class="fonte18">Este instrumento tem por objetivo melhorar a qualidade do seu relacionamento com seus clientes, uma condição fundamental nas Vendas Consultivas.</p>
                        <p class="fonte18">A maneira como você se posiciona em relação às Relações Interpessoais associadas ao seu trabalho determina o seu sucesso profissional.</p>
                        <p class="fonte18">Por isso, quanto mais você compreender a dinâmica das Relações Interpessoais, mais eficaz você será como vendedor.</p>
                        <p class="fonte18">Este questionário se destina a avaliar suas práticas interpessoais e seus estilos de abordagem com seus clientes, com o objetivo de lhe oferecer recomendações para melhorar sua relação comportamental com eles otimizando a dinâmica do seu estilo como vendedor.</p>
                        <p class="fonte18">Não há respostas “certas” ou “erradas” às questões. Na verdade, a <b>melhor</b> resposta é simplesmente aquela que melhor reflete o que você sente; isto é, a resposta que melhor representa suas práticas ao lidar com os clientes.</p>
                        <p class="fonte18">Este instrumento se complementa com o instrumento 7 – Gerenciamento do relacionamento através dos Estados do Ego. Somando as contribuições destes dois instrumentos com os dois instrumentos 9 e 10, você terá desenvolvido uma “Massa Critica” poderosa para implementar as Vendas Consultivas, pois estará em condições de gerenciar seus fundamentos comportamentais.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->
                        <p class="fonte18">Para cada item do inventário você deverá indicar qual das duas reações apresentadas seria a mais característica do <b>seu</b> modo de tratar a situação descrita.</p>
                        <p class="fonte18">Em cada questão apresentada, você tem que distribuir cinco pontos entre as duas opções</p>
                        <p class="fonte18">Procure responder indicando aquilo que você FARIA e não o que você acha que deveria ser feito.</p>
                        <p class="fonte18">Leia a seguir um exemplo de como você poderá distribuir esses cinco pontos:</p>
                    </div>

                    <div></div>

                    @php
                    
                    $example = [
                    '(1) Se <b>A</b> for exatamente o que você faria e <b>B</b> inteiramente não-característico do seu comportamento, escreva “5” sob <b>A</b> e “0” sob <b>B</b>, assim:',
                    '(2) Se <b>A</b> for consideravelmente próximo do que você faria e <b>B</b> algo pouco característico e representativo, escreva “4” sob <b>A</b> e “1” sob <b>B</b>, assim:',
                    '(3) Se <b>A</b> for apenas um pouco mais representativo do que <b>B</b> em relação ao que você faria, escreva “3” sob <b>A</b> e “2” sob B, assim:',
                    '(4) Cada uma das três combinações acima pode ser usada da maneira inversa; por exemplo, se você achar <b>B</b> ligeiramente mais característico do que <b>A</b>, escreva “2” sob <b>A</b> e “3” sob <b>B</b>, assim:'
                    ];

                    $a = [5, 4, 3, 2];

                    $b = [0,1,2,3];
                    @endphp

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/8">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered fonte18">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="border: none;"></th>
                                            <th style="text-align: center; width: 100px">A</th>
                                            <th style="text-align: center; width: 100px">B</th>
                                        </tr>
                                        </thead>
                                        @for($i=0;$i<4;$i++) 
                                            <tr>
                                            <td style="font-size: 18px">{!! $example[$i] !!}</td>
                                                <td style="font-size: 18px; text-align: center;">{{$a[$i]}}</td>
                                                <td style="font-size: 18px; text-align: center;">{{$b[$i]}}</td>
                                            </tr>
                                            @endfor

                                    </table>
                                </div>

                            </div>
                            <br>
                            

                            <p class="fonte18">Portanto, há várias combinações possíveis para responder ao par de alternativas existentes em cada item.</p>
                            <p class="fonte18"><b>A SOMA DOS VALORES DADOS A CADA PAR SEMPRE DEVE SER 5.</b></p>
                            <p class="fonte18">Lembre-se: não existe resposta CERTA ou resposta ERRADA.</p>
                            <p class="fonte18">Dar respostas “corretas” ou “ideais” distorce o seu significado e invalida os resultados do teste.</p>
                            <p class="fonte18">A seguir, apresentamos algumas situações típicas de relacionamento com clientes.</p>
                            <p class="fonte18">Como você, vendedor, trataria estas situações se elas se apresentassem com um cliente?</p>

                            @php
                            $questions = [

                                '
1. Se um cliente meu parecesse preocupado a maior parte do tempo e começasse a questionar-me em detalhes sem importância, irritando-se comigo sem razão aparente, eu:
<br>A. Procuraria conversar sobre o assunto, deixando claro que ele estaria me afetando, e à minha capacidade de prestar-lhe meus serviços.
<br><b>OU</b>
<br>B. Iria tratá-lo com “luvas de pelica” por um momento, presumindo que ele teria alguns problemas pessoais temporários que não seriam da minha conta.
','
2. Se eu e um de meus clientes tivéssemos tido uma séria discussão no passado e eu percebesse que ele mostrava-se pouco à vontade diante de mim, desde então, eu:
<br>A. Evitaria tornar as coisas piores; não chamaria a atenção para o seu comportamento, deixando o assunto de lado.
<br><b>OU</b>
<br>B. Comunicaria minha impressão sobre o seu comportamento e perguntaria como nossas relações foram afetadas pela discussão segundo o seu ponto de vista.
','
3. Se um cliente meu me dissesse que eu estava fazendo coisas que segundo ele me tornavam menos eficaz como vendedor junto à clientela, eu:
<br>A. Encorajá-lo-ia a esclarecer-me ou a entrar em detalhes sobre o que tinha observado, e a sugerir mudanças de minha parte.
<br><b>OU</b>
<br>B.Procuraria explicar minha abordagem e minha filosofia de vendas, a fim de tornar claro por que me comporto como tal.
','
4. Se em conversa com um de meus clientes ele começasse a fazer comentários e perguntas sobre produtos dos quais eu, como vendedor, deveria estar a par, mas
<br>de fato ignoro, eu:
<br>A. Procuraria levar a conversa para outra direção, receando ver questionadas minha especialização e credibilidade como vendedor.
<br><b>OU</b>
<br>B. Confessaria minha ignorância. Fosse qual fosse a reação do cliente, e encorajaria a continuação da conversa.
','
5. Se eu estivesse sob forte e crescente pressão pessoal e um de meus clientes me dissesse que eu estava me tornando impaciente com ele e também prestando-lhe cada vez menos bons serviços, eu:
<br>A. Ouviria seus comentários, encorajando-o a entrar em detalhes se ele assim o desejasse, mas não procuraria justificar meus atos.
<br><b>OU</b>
<br>B. Dir-lhe-ia que estou preocupado com algumas pressões pessoais e que continuaria assim por algum tempo. Por isso gostaria que ele fosse paciente comigo.
','
6. Se um de meus clientes se mostrasse de tal modo convencido com meus argumentos que estaria disposto a adquirir meu produto a níveis que, em minha opinião, estariam muito além de suas necessidades ou recursos, eu:
<br>A. Não mencionaria absolutamente minhas dúvidas, mas simplesmente deixaria que o próprio cliente fosse o melhor juiz de seus atos, enquanto eu limitaria meus esforços a assisti-lo nos detalhes da compra da melhor maneira possível.
<br><b>OU</b>
<br>B. Expressaria minhas dúvidas e tentaria vender menos, mesmo que isso significasse a perda da venda por inteiro.
','
7. Se um de meus clientes indicasse o fato de que eu teria um “conflito de personalidade” com um seu associado e com o qual seria importante eu cooperar
<br>para que meu cliente pudesse atingir seus objetivos, eu:
<br>A. Discutiria o problema com ele abertamente, a fim de descobrir como ele estaria sendo afetado e o que ele recomendaria que eu fizesse a respeito.
<br><b>OU</b>
<br>B. Consideraria seus comentários não pertinentes e um tanto arrogantes e desencorajaria mais discussões sobre o assunto.
','
8. Se eu tivesse razões para suspeitar da existência de rumores desagradáveis sobre minha integridade entre meus clientes e dos quais um em particular, muito provavelmente estaria a par, eu:
<br>A. Evitaria aumentar a importância do boato, discutindo-o com ele e esperaria que ele me dissesse quando o desejasse.
<br><b>OU</b>
<br>B. Arriscaria envolvê-lo, perguntando diretamente o que ele sabia sobre o assunto e o que ele pensava a respeito.
','
9. Se um de meus clientes tivesse ouvido, como eu, rumores desagradáveis sobre um de meus concorrentes e sua linha de produtos, perguntando-me o que eu saberia a respeito, eu:
<br>A. Alegaria ignorá-los, sugerindo que seria pouco ético comentar sobre meus competidores.
<br><b>OU</b>
<br>B. Diria exatamente o quê, quando e de quem ouvira, acrescentando quaisquer dúvidas pessoais que porventura tivesse.
','
10. Se eu soubesse que estava sendo considerado para promoção a um alto cargo de vendas e que as atitudes de meus clientes eram um tanto negativas em minha entrevistas com eles, eu:
<br>A. Procuraria usar mais autocrítica e tentaria avaliar meus pontos fracos como vendedor, para que pudesse fazer um melhor trabalho no futuro.
<br><b>OU</b>
<br>B. Arriscaria o embaraço de discutir meus pontos fracos com os clientes, obtendo suas idéias sobre como eu poderia melhor.
','
11. Se o meu relacionamento com um de meus clientes tivesse sido prejudicado por repetidas discussões e conflitos, em questões de importância para nós, eu:
<br>A. Seria cauteloso ao contratá-lo, receando que estas questões viessem à tona de novo e piorassem ainda mais nossas relações.
<br><b>OU</b>
<br>B. Mostraria os efeitos que a controvérsia estaria tendo em nosso relacionamento e sugeriria que a discutíssemos – apesar de tudo – até que a resolvêssemos.
','
12. Se numa das ocasiões em que meu chefe estivesse me acompanhando, encontrássemos um de meus clientes com que eu viesse tendo problemas e ele começasse a aludir a algumas queixas, as quais, se detalhadas, me colocariam
<br>em má situação aos olhos do meu chefe, eu:
<br>A. Tentaria colocar o assunto de lado, talvez fazendo piada com o cliente sobre suas queixas, ou, sugerindo que deveria ser realmente abordado quando tivéssemos mais tempo para analisá-lo em profundidade.
<br><b>OU</b>
<br>B. Sugeriria que o momento seria propício para ele desabafar, esperando que meu chefe assim pudesse nos ajudar.
','
13. Se ao conversar com um novo cliente, que poderia representar uma conta valiosa para mim, ele desse igual consideração a um produto de concorrente, tão bom quanto o meu em cada detalhe, eu:
<br>A. Minimizaria as semelhanças entre os produtos, citando fregueses satisfeitos, quantidades já vendidas e coisas assim, tentando convencê-lo que meu produto seria o preferível.
<br><b>OU</b>
<br>B. Daria minha opinião espontânea de que não haveria praticamente diferença em preço ou qualidade entre os dois produtos, e que tudo o que eu poderia fazer para merecer sua escolha seria a minha capacidade de servi-lo eficazmente.
','
14. Se o meu chefe me pressionasse e outros substancialmente (abonos especiais, competições internas, etc...) para colocar um produto, ao lidar com os clientes, eu:
<br>A. Faria tudo para convencê-los dos valores do produto e do quanto eles o necessitariam, usando minha abordagem mais sincera e persuasiva para fechar a venda quando eles se tornassem receptivos.
<br><b>OU</b>
<br>B. Solicitaria que eles me informassem de suas necessidades e preencheria os pedidos concomitantemente, sugerindo o produto especial apenas se ele parecesse apropriado às suas necessidades, na ocasião.
','
15. Se ao conversar com um novo e promissor freguês indicado por um colega que ele detestasse e ele perguntasse como obtive seu nome e o chamei, eu:
<br>A. Tentaria contornar a questão ou contar uma história lógica para explicar minha chamada, sem mencionar o outro vendedor, receando que ressentimentos entre terceiros poderiam provocar a perda de uma venda que de outra maneira seria conseguida facilmente.
<br><b>OU</b>
<br>B. Dir-lhe-ia simplesmente que o outro vendedor (citando seu nome) achou que poderia se interessar pelo meu produto e sugeriu que o procurasse.
','
16. Se um freguês dos mais promissores deixasse repetidamente de me atender, mas, mesmo assim, tivesse me encorajado a acreditar em seu sincero interesse e provável necessidade por meus serviços, eu:
<br>A. Pediria para dizer honestamente se eu estaria desperdiçando o seu tempo e o meu próprio, continuando a procurá-lo.
<br><b>OU</b>
<br>B. Confiaria em sua palavra e continuaria a chamá-lo sempre que conveniente, na esperança de que minha perseverança e entusiasmo pelo produto compensariam com uma boa venda, ao final.
','
17. Se eu começasse a nutrir clara antipatia por um de meus clientes até o ponto em que isto viesse a interferir em minha habilidade de trabalhar com ele ou de responder eficazmente às suas necessidades, eu:
<br>A. Não lhe diria nada diretamente, mas deixaria que conhecesse meus sentimentos mantendo minhas relações com ele numa base “estritamente profissional”.
<br><b>OU</b>
<br>B. Externaria meus sentimentos e tentaria “limpar a atmosfera” de tal modo que pudéssemos criar um clima de vendas mais produtivo. 
','
18. Se um novo cliente parecesse satisfeito com meu produto e estivesse preparado para fechar uma compra, embora fosse melhor servido com a linha de produtos do meu concorrente, segundo minha estimativa, eu:
<br>A. Procuraria dar toda importância à auto-avaliação que o cliente fez de suas necessidades, fechando a venda, como consequência.
<br><b>OU</b>
<br>B. Sentir-me-ia obrigado a informá-lo sobre o que acharia de suas necessidades em relação às duas linhas de produtos, deixando para ele a decisão final da compra.
','
19. Se um cliente começasse a questionar-me sobre alguns defeitos válidos, mas pouco conhecidos, de minha linha de produtos e dos quais eu estivesse bem a par, eu:
<br>A. Negaria ter qualquer conhecimento de suas informações, ou tentaria desacreditar sua exatidão.
<br><b>OU</b>
<br>B. Admitiria a veracidade de suas alegações e, se possível, dir-lhe-ia o que se estaria fazendo para contornar o problema.
','
20. Se, para minha total surpresa, um de meus melhores clientes parasse de repente de comprar meus produtos e começasse a criticar-me junto a outros clientes atuais e potenciais, eu:
<br>A. Confrontaria diretamente, perguntando-lhe qual seria o problema e por que ele estaria tentando prejudicar-lhe aos olhos dos outros.
<br><b>OU</b>
<br>B. Não “cutucaria a onça” e não me arriscaria a excitá-lo ainda mais tentando demonstrar meus argumentos.
'

                                ];
                            @endphp

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered fonte18">
                                    <thead class="bg-primary">    
                                        <tr>
                                            <th style="font-size: 18px;  border: none;"></th>
                                            <th style="font-size: 18px; text-align: center; width: 100px">A</th>
                                            <th style="font-size: 18px; text-align: center; width: 100px">B</th>
                                        </tr>
                                    </thead>
                                        @php
                                            $a=['E','N','F','N','F','N','F','N','N','N','N','N','N','N','N','F','N','N','N','F'];
                                            $b=['N','F','N','E','N','E','N','F','E','F','E','F','E','F','E','N','E','E','E','N'];

                                        @endphp

                                        @for($i=0;$i<20;$i++) 
                                            <tr>
                                                <td style="font-size: 18px">{!! $questions[$i] !!}</td>
                                                <td style="text-align: -webkit-center;font-size: 18px; vertical-align: middle;"><input class="form-control" type="text" maxlength="1" name="{{$a[$i]}}[]" id="A{{$i}}" style="width: 3em; text-align: center; font-size: 18px;" onkeypress='return SomenteNumero(event, {{$i}}, "a")' ></td>
                                                <td style="text-align: -webkit-center;font-size: 18px; vertical-align: middle;"><input class="form-control" type="text" maxlength="1" name="{{$b[$i]}}[]" id="B{{$i}}" style="width: 3em; text-align: center; font-size: 18px;" onkeypress='return SomenteNumero(event, {{$i}}, "b")' ></td>
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

    function SomenteNumero(e, count, coluna) {
        a = document.getElementById("A"+count).value|0;
        b = document.getElementById("B"+count).value|0;
        
        total = a+b;
        
        var tecla = (window.event) ? event.keyCode : e.which;

        if((tecla>47 && tecla<54)){
            if(coluna == 'a'){
                if(b == 0){
                    document.getElementById("B"+count).value = 5-(tecla-48);
                    return true;
                }
                if(tecla-48+b != 5) return false;
                else return true;
            }
            if(coluna == 'b'){
                if(a == 0){
                    document.getElementById("A"+count).value = 5-(tecla-48);
                    return true;
                }
                if(tecla-48+a != 5) return false;
                else return true;
            }
            return true;
        }
        else{
            if (tecla==8 || tecla==0){
                return true;
            }
            else{
                return false;
            }
        }
        
        
    }
</script>

@endpush