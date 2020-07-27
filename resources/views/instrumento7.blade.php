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
            <center>INSTRUMENTO 7</center>
        </h3>
        <h3>
            <center>GERENCIAMENTO DO RELACIONAMENTO ATRAVÉS DOS ESTADOS DO EGO</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 7</center>
                </h3>
                <h3>
                    <center>GERENCIAMENTO DO RELACIONAMENTO ATRAVÉS DOS ESTADOS DO EGO</center>
                </h3>
            </div>
        </div>
    </div>
    <div class="card-body">
                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                            <p class="fonte18">Este instrumento permite analisar e avaliar a dinâmica da comunicação e o perfil das trocas de perguntas e respostas na comunicação com seus clientes, com o objetivo de estabelecer o melhor relacionamento possível com ele.</p>
                            <p class="fonte18">Você poderá fazer os ajustes necessários no seu comportamento atual, depois da implementação das recomendações que este Instrumento lhe proporcionará.</p>
                            <p class="fonte18">A qualidade do relacionamento é o pilar fundamental da Venda Consultiva e este instrumento contribuirá para que você possa gerenciar o Campo Psicológico que se estabelece quando você interage com seu cliente.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h4 style="color: #35408f">PRIMEIRA PARTE</h4> -->

                        <p class="fonte18">Neste instrumento são apresentadas 18 perguntas. Você terá que distribuir 5 pontos entre 3 opções que apresenta cada pergunta, de maneira a indicar a resposta que melhor representaria seu comportamento.</p>
                        <p class="fonte18">Você deve usar os 5 pontos de cada questão. Eles podem ser divididos nas três opções se todas forem escolhidas, duas opções se apenas duas forem aplicáveis no seu caso, ou apenas uma se as outras duas não refletem como você reagiria.</p>
                        <p class="fonte18">A opção favorita deve receber mais pontos.</p>
                        <p class="fonte18">Responda tendo em mente qual seria sua reação frente a cada situação apresentada. Não procure ser “consistente”; as respostas espontâneas produzem os dados mais representativos de sua realidade.</p>
                        <p class="fonte18">Os exemplos seguintes lhe ajudarão a compreender como você deve responder o questionário.</p>

                        <br>
                        <p class="fonte18"><b>Exemplo 1:</b> Suponhamos que você concorda, ou seja, você se identifica inteiramente com a alternativa A e discorda das outras duas; neste caso, você distribuirá os 5 pontos da seguinte maneira:</p>

                        <div class="table-responsive">
                        <table class="table table-hover table-bordered fonte18">                            
                            <tr>
                                <td rowspan="3" style="font-size: 20px;font-weight: bold;vertical-align: middle;width: 1px;">X</td>
                                <td rowspan="3" style="vertical-align: middle; text-align: center; width: 20%;">Descrição da situação</td>
                                
                                <td style="text-align: center; vertical-align: middle; width: 1%;">A<input type="number" value=5 style="width: 2em; text-align: center;"></td>
                                <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                <td style="text-align: center;width: 70%;">Descrição da alternativa A</td>
                            </tr>
                            <tr>
                                <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                <td style="text-align: center; vertical-align: middle; width: 1%;">B<input type="number" value=0 style="width: 2em; text-align: center;"></td>
                                <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                <td style="text-align: center;width: 70%;">Descrição da alternativa B</td>
                            </tr>
                            <tr>
                                <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                <td style="text-align: center; vertical-align: middle; width: 1%;">C<input type="number" value=0 style="width: 2em; text-align: center;"></td>
                                <td style="text-align: center;width: 70%;">Descrição da alternativa C</td>
                            </tr>
                        </table>
                        </div>

                            <br>
                            <p class="fonte18"><b>Exemplo 2:</b> Suponhamos que você não concorda inteiramente com uma alternativa e as outras alternativas também poderiam representar seu comportamento em alguma medida. Neste caso, por hipótese, você distribuirá os 5 pontos da seguinte maneira:</p>

                            <div class="table-responsive">
                            <table class="table table-hover table-bordered fonte18">                            
                                <tr>
                                    <td rowspan="3" style="font-size: 20px;font-weight: bold;vertical-align: middle;width: 1px;">X</td>
                                    <td rowspan="3" style="vertical-align: middle; text-align: center; width: 20%;">Descrição da situação</td>
                                    
                                    <td style="text-align: center; vertical-align: middle; width: 1%;">A<input type="number" value=1 style="width: 2em; text-align: center;"></td>
                                    <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                    <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                    <td style="text-align: center;width: 70%;">Descrição da alternativa A</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                    <td style="text-align: center; vertical-align: middle; width: 1%;">B<input type="number" value=3 style="width: 2em; text-align: center;"></td>
                                    <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                    <td style="text-align: center;width: 70%;">Descrição da alternativa B</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                    <td style="text-align: center; vertical-align: middle; width: 1%;"></td>
                                    <td style="text-align: center; vertical-align: middle; width: 1%;">C<input type="number" value=1 style="width: 2em; text-align: center;"></td>
                                    <td style="text-align: center;width: 70%;">Descrição da alternativa C</td>
                                </tr>
                            </table>
                            </div>
                                <br>

                                <p class="fonte18">Qualquer combinação de pontos é válida para melhor representar qual seria sua resposta a cada situação.</p>
                                <p class="fonte18">A soma dos valores para cada questão sempre deve ser 5.</p>


                    </div>

                    <br>
                    <br>

                    <div class="col-12">
                        <h4>O que você responderia se alguém lhe dissesse:</h4>
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/7" autocomplete="off">
                            {!! csrf_field() !!}
                            
                            @php
                        $questions = [
                            'questao1' => [
                                'titulo' => '<b>(abatido)</b>“Bem... sei lá! Eu gostaria muito de tentar, mas da última vez deu tudo errado e eu é que me estrepei!”',
                                'questao1' => '“Bem, como se diz, quem não arrisca não petisca; além disso, você pode contar comigo. Não vou deixar você na mão!”',
                                'input1' => '1',
                                'questao2' => '“Não sei o que você acha, mas, se eu tiver sempre que ter certeza das coisas, não me sinto propenso a fazer algo... e nem acho graça nisso.”',
                                'input2' => '3',
                                'questao3' => '“Bom, parece que você precisa de tempo para pensar; não creio que se deva resolver isso agora. Pode ser que você ache que, no seu caso, não vale a pena todo o trabalho!”',
                                'input3' => '2'
                            ],
                            'questao2' => [
                                'titulo' => '<b>(sarcástico)</b>“Você não espera que eu acredite nesta conversa mole, não é? Vocês caras, são todos iguais!”',
                                'questao1' => '“Bem, percebe-se que algo está acontecendo com você; e eu não sei o quê. Não acha que esta é uma boa hora para a gente começar a se entender?”',
                                'input1' => '2',
                                'questao2' => '“Eh, espere aí! Com quem você pensa que está falando? Você está contestando minha integridade e também minha autoridade como gerente!”',
                                'input2' => '1',
                                'questao3' => '“Pouco me importa se você acredita ou não! Se você não crê no que digo o problema é seu, não meu.”',
                                'input3' => '3'
                            ],
                            'questao3' => [
                                'titulo' => '<b>(ambíguo)</b>“Esta sua abordagem é coisa nova, sem dúvida; mas, sinceramente, não parece lógico eu me envolver nela... eu gostaria de examinar tudo de novo, com mais detalhe.”',
                                'questao1' => '“Bem eu tenho lá alguns problemas com este assunto; preciso mesmo que alguém me ajude. Que tal se eu voltasse mais tarde, depois de trabalhar nele um pouco mais?”',
                                'input1' => '3',
                                'questao2' => '“Existem alguns pontos que você quer explorar mais a fundo, ou você quer rever tudo de novo?”',
                                'input2' => '2',
                                'questao3' => '“Não vejo por que é tão difícil de entender! Você é assim tão confuso, ou é porque faz questão de discordar de mim?”',
                                'input3' => '1'
                            ],
                            'questao4' => [
                                'titulo' => '<b>(agitado)</b>“Eh, acho que consegui resolver aquele nosso problema! Descobri a solução ontem à noite, quando menos esperava, e estou ansioso para que tentemos de novo!”',
                                'questao1' => '“Vamos com calma; você sabe que temos de obter aprovação antes de qualquer tentativa e eu não me envolvo em coisa nenhuma sem estar 100% convencido!”',
                                'input1' => '1',
                                'questao2' => '“Ótimo! Diga-me qual é sua idéia e vamos começar. Se chegarmos a uma solução, será aquela vitória!”',
                                'input2' => '3',
                                'questao3' => '“Vejamos o que você tem a dizer; se a solução for boa, poderemos estudar quem é o mais indicado para colocá-la em execução.”',
                                'input3' => '2'
                            ],
                            'questao5' => [
                                'titulo' => '<b>(impassível)</b>“Bem, não sei não! Nós temos um procedimento para isto e todos gostam dele. Você quer realmente se arriscar mudando-o agora mesmo? Não poderíamos esperar?”',
                                'questao1' => '“Acho que vemos as coisas de maneira diferente; conheço pessoas que não querem as coisas à antiga. Estou apenas sugerindo tentar algo que parece estar funcionando em outro departamento.”',
                                'input1' => '2',
                                'questao2' => '“Talvez você tenha razão; eu não tinha pensado nisto. Não queremos infringir as normas... seria o mesmo que arrumar barulho, na hora!”',
                                'input2' => '3',
                                'questao3' => '“Minha regra é: a gente tem que assumir riscos para reavaliar corretamente um trabalho. Posso lhe dar dez motivos de imediato, provando que já devíamos ter feito a mudança!”',
                                'input3' => '1'
                            ],
                            'questao6' => [
                                'titulo' => '<b>(racional)</b>“Eu quero ser acessível a novas idéias, examiná-las com honestidade; portanto peço que me diga o que tem em mente. Farei o melhor que puder para lhe dar minha opinião sincera.”',
                                'questao1' => '“Ótimo! Confio que ao ouvir o que tenho a dizer, você ficará tão convicto quanto eu. Creia-me, é o único jeito que temos!”',
                                'input1' => '1',
                                'questao2' => '“Parece-me bastante razoável: o que lhe seria mais útil saber a esta altura? Ou deveria eu começar pelo começo?”',
                                'input2' => '2',
                                'questao3' => '“Bem, não quero tomar o seu tempo; portanto, escrevi este resumo da idéia. Por que você não o estuda quando tiver uma chance e me diz o que acha?”',
                                'input3' => '3'
                            ],
                            'questao7' => [
                                'titulo' => '<b>(repugnado)</b>“Eu lhe digo, não canso de me espantar pelo modo como um pouquinho de poder sobe à cabeça das pessoas; é o que basta pra me fazer duvidar da profissão de gerente!”',
                                'questao1' => '“Você não está insinuando que o poder me subiu a cabeça, não é?”',
                                'input1' => '3',
                                'questao2' => '“Concordo inteiramente; existe por aí um bando de ‘ditadores’ que desonra a profissão de gerente!”',
                                'input2' => '1',
                                'questao3' => '“Eu não acho que se deve generalizar; as pessoas fazem as coisas por muitas razões diferentes; acho difícil explicar por que se comportam assim quando desconheço seus motivos.”',
                                'input3' => '2'
                            ],
                            'questao8' => [
                                'titulo' => '<b>(manhoso)</b>“Eu não deveria lhe dizer isto – vai acontecer o diabo se souberem o que fiz – mas, é bom demais para ser mantido em segredo! Posso confiar em você?”',
                                'questao1' => '“Serei ‘boca de siri’, meu amigo; ninguém pode guardar um segredo como eu. Diga-me o que há.”',
                                'input1' => '3',
                                'questao2' => '“Além do fato de que você quer me dizer, há outras razões para que eu deva saber sobre isto? O assunto é a meu respeito ou sobre meu trabalho?”',
                                'input2' => '2',
                                'questao3' => '“Acho que você devia saber que tenho por hábito não dizer nem ouvir boatos. Perdoe, mas se você quer dizer algo, diga a outra pessoa.”',
                                'input3' => '1'
                            ],
                            'questao9' => [
                                'titulo' => '<b>(acusador)</b>“Às vezes, tenho a impressão de que você quer fazer as coisas diferentes só porque quer. Se deseja convencer-me, terá que me dar muito mais razões além das que arrumou até agora.”',
                                'questao1' => '“Estou apenas tentando ser útil; se você não quer aprender com a experiência dos outros, está bem para mim.”',
                                'input1' => '1',
                                'questao2' => '“Bem acho que devo dizer algo sobre isto. Eu gosto de fazer as coisas de maneira um pouco diferente; mas longe de mim pensar que devo tentar convencê-lo.”',
                                'input2' => '3',
                                'questao3' => '“O que é que eu disse que lhe deu esta impressão? O que estou fazendo que o leva a pensar que procuro convencê-lo de algo?”',
                                'input3' => '2'
                            ],
                            'questao10' => [
                                'titulo' => '<b>(conclusivo)</b>“Tudo o que ouvi até agora parece se basear em sua decisão de que eu teria um importante trabalho a fazer e que seria um tolo se não aproveitasse a oportunidade!”',
                                'questao1' => '“Você não deve se ofender com isto! Puxa, a gente procura retribuir-lhe com cortesia e você a toma como insulto!”',
                                'input1' => '3',
                                'questao2' => '“Talvez eu tenha esperado mais do que o necessário; parece-me que deveria primeiro verificar se você se interessaria pelo projeto e, depois, se possuiria as habilidades exigidas.”',
                                'input2' => '2',
                                'questao3' => '“Eu não o diria se não fosse verdade: em minha opinião não há absolutamente ninguém mais a considerar para o trabalho... e você talvez nunca mais tenha outra chance como esta!”',
                                'input3' => '1'
                            ],
                            'questao11' => [
                                'titulo' => '<b>(resignado)</b>“Ouça meu conselho. Vivo por aqui há muito tempo e uma das coisas que aprendi é que não se deve balançar o barco ou tentar fazer as coisas diferentes!”',
                                'questao1' => '“Eu reconheço que muitas pessoas compartilham sua opinião; mas eu decidi conscientemente não me deixar influir por ela. Vários fatos já ocorreram e apontam para direções mais positivas.”',
                                'input1' => '2',
                                'questao2' => '“Rapaz, não sei não! Se há algo que aprendi, e com sacrifício, é verificar, verificar novamente e novamente, para estar certo!”',
                                'input2' => '3',
                                'questao3' => '“Sei o que está dizendo mas deixe-me esclarecer que julgo parte de minhas funções mostrar a pessoas como você por que não se deve apegar a velhas rotinas. O contrário seria o nada!”',
                                'input3' => '1'
                            ],
                            'questao12' => [
                                'titulo' => '<b>(suplicante)</b>“Estou inteiramente perplexo como o que está ocorrendo; estou tão confuso sobre o que é errado que não sei por onde começar! O que você faria em meu lugar?”',
                                'questao1' => '“Como não estou no seu lugar, não posso tomar a decisão por você. Seria útil para você discutir o assunto comigo com mais detalhes?”',
                                'input1' => '2',
                                'questao2' => '“Bem, na verdade é muito simples; tome a decisão com base naquilo que faz você sentir-se ótimo.”',
                                'input2' => '1',
                                'questao3' => '“Rapaz, você está numa situação difícil, mas se fosse comigo, eu faria o que desejasse para ver o que acontecia.”',
                                'input3' => '3'
                            ],
                            'questao13' => [
                                'titulo' => '<b>(categoria)</b>“O fato é que você fez numerosas promessas no passado e falhou em cumprir todas elas! Francamente, é difícil aceitar o que você diz agora, sem uma prova.”',
                                'questao1' => '“Você quer dizer, depois do tempo que investi neste projeto, que vai deixar de considerá-lo por causa dessas coisas? Isto é mesquinhez!”',
                                'input1' => '1',
                                'questao2' => '“Creio que estamos em faixas de ondas diferentes; não me lembro de quaisquer promessas não cumpridas. Se vamos trabalhar juntos, esclareça-me, para que possamos nos sintonizar.”',
                                'input2' => '2',
                                'questao3' => '“Espero que você entenda que nunca o prejudiquei intencionalmente; vamos juntar-nos desta vez e eu provarei o quanto sou merecedor de confiança.”',
                                'input3' => '3'
                            ],
                            'questao14' => [
                                'titulo' => '<b>(impaciente)</b>“Não sei se você se importa, mas estou há trinta minutos esperando para lhe falar. Espero que o que tem a me dizer seja tão importante quanto me deixar atrasar para o meu trabalho!”',
                                'questao1' => 'Vamos lá, tome um cafezinho, você sabe que não somos pagos por hora. Você se impacienta como se isto fosse nos causar problema.”',
                                'input1' => '3',
                                'questao2' => '“Lá vem você de novo – desviando o rumo. Se você controlar seus nervos por um  minuto, verá que apenas está se mortificando com esta atitude.”',
                                'input2' => '1',
                                'questao3' => '“Como você está perturbado, talvez devêssemos nos encontrar em outra ocasião quando você não estiver submetido a tanta pressão de trabalho.”',
                                'input3' => '2'
                            ],
                            'questao15' => [
                                'titulo' => '<b>(franco)</b>“Olhe, tudo o que realmente eu quero saber é que utilidade prática tem sua abordagem no que diz respeito à execução do trabalho.”',
                                'questao1' => '“Você está certo, mas mais importante é o fato de eu poder afirmar que minha abordagem funciona. Isto não vale alguma coisa?”',
                                'input1' => '1',
                                'questao2' => '“Veremos a utilidade prática e as aplicações mais tarde. Agora, desejo saber se você, pessoalmente, gosta ou não da minha abordagem!”',
                                'input2' => '3',
                                'questao3' => '“Talvez fosse útil para nós se você fosse mais específico sobre o que acha ser preciso para fazer uma comparação entre as diferentes abordagens.”',
                                'input3' => '2'
                            ],
                            'questao16' => [
                                'titulo' => '<b>(pomposo)</b>“Eu não sei o que você acha, mas tenho por regra nunca lavar roupa suja em público; e não costumo respeitar os que fazem o contrário.”',
                                'questao1' => '“Você quer dizer que respeita as pessoas à medida que elas se conformam com suas regras pessoais?”',
                                'input1' => '2',
                                'questao2' => '“É o que sempre me ensinaram, e até hoje, pessoas desse tipo me embaraçam... mesmo quando não estou envolvido.”',
                                'input2' => '3',
                                'questao3' => '“Concordo inteiramente com você; as pessoas  deveriam ter mais respeito próprio do que ficar a comentar lá fora o que se passa aqui dentro.” ',
                                'input3' => '1'
                            ],
                            'questao17' => [
                                'titulo' => '<b>(tranquilo)</b>“Você está me dizendo que sua decisão, sem exceções, é não apenas definitiva, mas a melhor que qualquer um de nós seria capaz de tomar?”',
                                'questao1' => '“Absolutamente, você sabe tão bem quanto eu que não me aguentaria um mês se começasse a retratar-me de minhas decisões.”',
                                'input1' => '1',
                                'questao2' => '“Não é bem isso o que quero dizer. Estou simplesmente afirmando quais são as prioridades; caso as suas sejam diferentes, precisamos conhecê-las antes mesmo de começar a decidir.”',
                                'input2' => '2',
                                'questao3' => '“Bem, ela é tão boa quanto às melhores que já foram propostas.”',
                                'input3' => '3'
                            ],
                            'questao18' => [
                                'titulo' => '<b>(ressentido)</b>“Não consigo que alguém tome uma decisão por aqui. Você acha que chegará a época em que a pessoa com autoridade se prestará a dizer sim ou não, em vez de eximir-se?”',
                                'questao1' => '“Você está tendo dificuldades com alguém em particular, ou se trata de um sentimento generalizado?”',
                                'input1' => '2',
                                'questao2' => '“Duvido. Acho que eles gostam de nos manter no escuro, para que possam ter quem culpar quando as coisas dão errado.”',
                                'input2' => '3',
                                'questao3' => '“Uma coisa posso lhe dizer; Não tenho receio de tomar decisões; e toda vez que alguém ‘enrolar’ você, não deixe de me contar que eu tomarei conta do assunto pessoalmente!”',
                                'input3' => '1'
                            ]
                        ]
                        @endphp
                        @php($count = 1)
                            <div class="table-responsive">
                        @foreach($questions as $question)
                            <table class="table table-bordered fonte18">                            
                                <tr>
                                    <td class="bg-primary" rowspan="3" style="font-size: 20px;font-weight: bold;vertical-align: middle;width: 1px;">{{$count}}</td>
                                    <td rowspan="3" style="vertical-align: middle; text-align: center; width: 300px;">{!!$question['titulo']!!}</td>
                                    
                                    <td style="text-align: center; vertical-align: middle; width: 10px;">@if($question['input1'] == 1)A<input type="text" autocomplete="off" id="A{{$count}}" name="pai{{$count}}" style="width: 2em; text-align: center;" maxlength="1" onkeypress='return SomenteNumero(event, {{$count}}, "A")' required>@endif</td>
                                    <td style="text-align: center; vertical-align: middle; width: 10px;">@if($question['input1'] == 2)A<input type="text" autocomplete="off" id="A{{$count}}" name="adulto{{$count}}" style="width: 2em; text-align: center;" maxlength="1" onkeypress='return SomenteNumero(event, {{$count}}, "A")' required>@endif</td>
                                    <td style="text-align: center; vertical-align: middle; width: 10px;">@if($question['input1'] == 3)A<input type="text" autocomplete="off" id="A{{$count}}" name="crianca{{$count}}" style="width: 2em; text-align: center;" maxlength="1" onkeypress='return SomenteNumero(event, {{$count}}, "A")' required>@endif</td>
                                    <td style="text-align: center;width: 800px;">{{ $question['questao1'] }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle; width: 10px;">@if($question['input2'] == 1)B<input type="text" autocomplete="off" id="B{{$count}}" name="pai{{$count}}" style="width: 2em; text-align: center;" maxlength="1" onkeypress='return SomenteNumero(event, {{$count}}, "B")' required>@endif</td>
                                    <td style="text-align: center; vertical-align: middle; width: 10px;">@if($question['input2'] == 2)B<input type="text" autocomplete="off" id="B{{$count}}" name="adulto{{$count}}" style="width: 2em; text-align: center;" maxlength="1" onkeypress='return SomenteNumero(event, {{$count}}, "B")' required>@endif</td>
                                    <td style="text-align: center; vertical-align: middle; width: 10px;">@if($question['input2'] == 3)B<input type="text" autocomplete="off" id="B{{$count}}" name="crianca{{$count}}" style="width: 2em; text-align: center;" maxlength="1" onkeypress='return SomenteNumero(event, {{$count}}, "B")' required>@endif</td>
                                    <td style="text-align: center;width: 800px;">{{$question['questao2']}}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle; width: 10px;">@if($question['input3'] == 1)C<input type="text" autocomplete="off" id="C{{$count}}" name="pai{{$count}}" style="width: 2em; text-align: center;" maxlength="1" onkeypress='return SomenteNumero(event, {{$count}}, "C")' required>@endif</td>
                                    <td style="text-align: center; vertical-align: middle; width: 10px;">@if($question['input3'] == 2)C<input type="text" autocomplete="off" id="C{{$count}}" name="adulto{{$count}}" style="width: 2em; text-align: center;" maxlength="1" onkeypress='return SomenteNumero(event, {{$count}}, "C")' required>@endif</td>
                                    <td style="text-align: center; vertical-align: middle; width: 10px;">@if($question['input3'] == 3)C<input type="text" autocomplete="off" id="C{{$count}}" name="crianca{{$count}}" style="width: 2em; text-align: center;" maxlength="1" onkeypress='return SomenteNumero(event, {{$count}}, "C")' required>@endif</td>
                                    <td style="text-align: center;width: 800px;">{{$question['questao3']}}</td>
                                </tr>
                            </table>
                            @php($count++)
                            <br>
                            @endforeach
                            </div>
                        </div>
                        <!-- FIM TABELA DE QUESTIONARIO -->

                            <br>
                            
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary" type="submit">
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

    function SomenteNumero(e, count, letra) {
        a = document.getElementById("A"+count).value|0;
        b = document.getElementById("B"+count).value|0;
        c = document.getElementById("C"+count).value|0;

        total = a+b+c;
        
        var tecla = (window.event) ? event.keyCode : e.which;

        if(tecla == 48){
            return true;
        }
        else if(tecla == 49){
            if(total+1 > 5) return false
            else return true;
        }
        else if(tecla == 50){
            if(total+2 > 5) return false
            else return true;
        }
        else if(tecla == 51){
            if(total+3 > 5) return false
            else return true;
        }
        else if(tecla == 52){
            if(total+4 > 5) return false
            else return true;
        }
        else if(tecla == 53){
            if(total+5 > 5){
                return false
            } 
            else if(total == 0){
                if(letra == "A"){
                    document.getElementById("B"+count).value = 0;
                    document.getElementById("C"+count).value = 0;
                }
                else if(letra == "B"){
                    document.getElementById("A"+count).value = 0;
                    document.getElementById("C"+count).value = 0;
                }
                else{
                    document.getElementById("A"+count).value = 0;
                    document.getElementById("B"+count).value = 0;
                }
            }
            else{
                return true;
            }
        }
        else {
            if (tecla == 8 || tecla == 0) return true;
            else return false;
        }
    }
</script>
<script>window.onload = function(){history.go(+1)};</script>
@endpush