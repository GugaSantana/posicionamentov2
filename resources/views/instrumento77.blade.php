@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <style>
        .card .table td, .card .table th {
            white-space: normal;
        }
    </style>
    
    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">GERENCIAMENTO DO RELACIONAMENTO ATRAVÉS DOS ESTADOS DO EGO</h3>
                            </div>
                            <div class="col-4 text-right">
                                <!--<a href="a" class="btn btn-sm btn-primary">Cadastrar</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                        <p>Este instrumento permite analisar e avaliar as trocas de perguntas e respostas na comunicação com seus clientes, com o objetivo de estabelecer o melhor relacionamento possível com o cliente, fazendo os ajustes necessários ao seu comportamento atual, implementando as recomendações que este Instrumento lhe proporcionará.</p>
                        <p>A qualidade do relacionamento é o pilar fundamental da Venda Consultiva e este instrumento contribuirá para que você possa gerenciar a Campo Psicológico  que se estabelece quando você interage com seu cliente.</p>
                        </div>
                        <br>
                        <div class="col-12">
                            <p><b>INSTRUÇÕES</b></p>
                            <p>Neste instrumento são apresentadas 18 perguntas. Você terá que distribuir 5 pontos entre 3 opções que apresenta cada pergunta, de maneira a indicar a resposta que melhor representa seu comportamento.</p>
                            <p>Você deve usar os 5 pontos de cada questão. Eles podem ser divididos nas três opções se todas forem escolhidas, duas opções se apenas duas forem aplicáveis no seu caso, ou apenas uma se as outras não refletem como você reagiria.</p>
                            <p>A opção favorita deve receber mais pontos.</p>
                            <p>Responda tendo em mente qual seria sua reação frente a situação colocada. Não procure ser “consistente”; as respostas espontâneas produzem os dados mais representativos de sua realidade.</p>
                            <p>Os exemplos seguintes lhe ajudarão a responder as perguntas do questionário.</p>
                            
                            <br>
                            <h2>Questionário</h2>
                        </div>
                        <!-- TABELA DE QUESTIONARIO -->
                        <div>

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
                                'titulo' => '(impassível)“Bem, não sei não! Nós temos um procedimento para isto e todos gostam dele. Você quer realmente se arriscar mudando-o agora mesmo? Não poderíamos esperar?”',
                                'questao1' => '“Acho que vemos as coisas de maneira diferente; conheço pessoas que não querem as coisas à antiga. Estou apenas sugerindo tentar algo que parece estar funcionando em outro departamento.”',
                                'input1' => '2',
                                'questao2' => '“Talvez você tenha razão; eu não tinha pensado nisto. Não queremos infringir as normas... seria o mesmo que arrumar barulho, na hora!”',
                                'input2' => '3',
                                'questao3' => '“Minha regra é: a gente tem que assumir riscos para reavaliar corretamente um trabalho. Posso lhe dar dez motivos de imediato, provando que já devíamos ter feito a mudança!”',
                                'input3' => '1'
                            ],
                            'questao6' => [
                                'titulo' => '(racional)“Eu quero ser acessível a novas idéias, examiná-las com honestidade; portanto peço-lhe dizer-me o que tem em mente. Farei o melhor que puder para lhe dar minha opinião sincera.”',
                                'questao1' => '“Ótimo! Confio que ao ouvir o que tenho a dizer, você ficará tão convicto quanto eu. Creia-me, é o único jeito que temos!”',
                                'input1' => '1',
                                'questao2' => '“Parece-me bastante razoável: o que lhe seria mais útil saber a esta altura? Ou deveria eu começar pelo começo?”',
                                'input2' => '2',
                                'questao3' => '“Bem, não quero tomar o seu tempo; portanto, escrevi este resumo da idéia. Por que você não o estuda quando tiver uma chance e me diz o que acha?”',
                                'input3' => '3'
                            ],
                            'questao7' => [
                                'titulo' => '(repugnado)“Eu lhe digo, não canso de me espantar pelo modo como um pouquinho de poder sobe à cabeça das pessoas; é o que basta pra me fazer duvidar da profissão de gerente!”',
                                'questao1' => '“Você não está insinuando que o poder me subiu a cabeça, não é?”',
                                'input1' => '3',
                                'questao2' => '“Concordo inteiramente; existe por aí um bando de ‘ditadores’ que desonra a profissão de gerente!”',
                                'input2' => '1',
                                'questao3' => '“Eu não acho que se deve generalizar; as pessoas fazem as coisas por muitas razões diferentes; acho difícil explicar por que se comportam assim quando desconheço seus motivos.”',
                                'input3' => '2'
                            ],
                            'questao8' => [
                                'titulo' => '(manhoso)“Eu não deveria lhe dizer isto – vai acontecer o diabo se souberem o que fiz – mas, é bom demais para ser mantido em segredo! Posso confiar em você?”',
                                'questao1' => '“Serei ‘boca de siri’, meu amigo; ninguém pode guardar um segredo como eu. Diga-me o que há.”',
                                'input1' => '3',
                                'questao2' => '“Além do fato de que você quer me dizer, há outras razões para que eu deva saber sobre isto? O assunto é a meu respeito ou sobre meu trabalho?”',
                                'input2' => '2',
                                'questao3' => '“Acho que você devia saber que tenho por hábito não dizer nem ouvir boatos. Perdoe, mas se você quer dizer algo, diga a outra pessoa.”',
                                'input3' => '1'
                            ],
                            'questao9' => [
                                'titulo' => '(acusador) “Às vezes, tenho a impressão de que você quer fazer as coisas diferentes só porque quer. Se deseja convencer-me, terá que me dar muito mais razões além das que arrumou até agora.”',
                                'questao1' => '“Estou apenas tentando ser útil; se você não quer aprender com a experiência dos outros, está bem para mim.”',
                                'input1' => '1',
                                'questao2' => '“Bem acho que devo dizer algo sobre isto. Eu gosto de fazer as coisas de maneira um pouco diferente; mas longe de mim pensar que devo tentar convencê-lo.”',
                                'input2' => '3',
                                'questao3' => '“O que é que eu disse que lhe deu esta impressão? O que estou fazendo que o leva a pensar que procuro convencê-lo de algo?”',
                                'input3' => '2'
                            ],
                            'questao10' => [
                                'titulo' => '(conclusivo)“Tudo o que ouvi até agora parece se basear em sua decisão de que eu teria um importante trabalho a fazer e que seria um tolo se não aproveitasse a oportunidade!”',
                                'questao1' => '“Você não deve se ofender com isto! Puxa, a gente procura retribuir-lhe com cortesia e você a toma como insulto!”',
                                'input1' => '3',
                                'questao2' => '“Talvez eu tenha esperado mais do que o necessário; parece-me que deveria primeiro verificar se você se interessaria pelo projeto e, depois, se possuiria as habilidades exigidas.”',
                                'input2' => '2',
                                'questao3' => '“Eu não o diria se não fosse verdade: em minha opinião não há absolutamente ninguém mais a considerar para o trabalho... e você talvez nunca mais tenha outra chance como esta!”',
                                'input3' => '1'
                            ],
                            'questao11' => [
                                'titulo' => '(resignado) “Ouça meu conselho. Vivo por aqui há muito tempo e uma das coisas que aprendi é que não se deve balançar o barco ou tentar fazer as coisas diferentes!”',
                                'questao1' => '“Eu reconheço que muitas pessoas compartilham sua opinião; mas eu decidi conscientemente não me deixar influir por ela. Vários fatos já ocorreram e apontam para direções mais positivas.”',
                                'input1' => '2',
                                'questao2' => '“Rapaz, não sei não! Se há algo que aprendi, e com sacrifício, é verificar, verificar novamente e novamente, para estar certo!”',
                                'input2' => '3',
                                'questao3' => '“Sei o que está dizendo mas deixe-me esclarecer que julgo parte de minhas funções mostrar a pessoas como você por que não se deve apegar a velhas rotinas. O contrário seria o nada!”',
                                'input3' => '1'
                            ],
                            'questao12' => [
                                'titulo' => '(suplicante) “Estou inteiramente perplexo como o que está ocorrendo; estou tão confuso sobre o que é errado que não sei por onde começar! O que você faria em meu lugar?”',
                                'questao1' => '“Como não estou no seu lugar, não posso tomar a decisão por você. Seria útil para você discutir o assunto comigo com mais detalhes?”',
                                'input1' => '2',
                                'questao2' => '“Bem, na verdade é muito simples; tome a decisão com base naquilo que faz você sentir-se ótimo.”',
                                'input2' => '1',
                                'questao3' => '“Rapaz, você está numa situação difícil, mas se fosse comigo, eu faria o que desejasse para ver o que acontecia.”',
                                'input3' => '3'
                            ],
                            'questao13' => [
                                'titulo' => '(categoria) “O fato é que você fez numerosas promessas no passado e falhou em cumprir todas elas! Francamente, é difícil aceitar o que você diz agora, sem uma prova.”',
                                'questao1' => '“Você quer dizer, depois do tempo que investi neste projeto, que vai deixar de considerá-lo por causa dessas coisas? Isto é mesquinhez!”',
                                'input1' => '1',
                                'questao2' => '“Creio que estamos em faixas de ondas diferentes; não me lembro de quaisquer promessas não cumpridas. Se vamos trabalhar juntos, esclareça-me, para que possamos nos sintonizar.”',
                                'input2' => '2',
                                'questao3' => '“Espero que você entenda que nunca o prejudiquei intencionalmente; vamos juntar-nos desta vez e eu provarei o quanto sou merecedor de confiança.”',
                                'input3' => '3'
                            ],
                            'questao14' => [
                                'titulo' => '(impaciente) “Não sei se lhe importa, mas estou há trinta minutos esperando para lhe falar. Espero que o que tem a me dizer seja tão importante quanto deixar-me atrasar o meu trabalho!”',
                                'questao1' => 'Vamos lá, tome um cafezinho, você sabe que não somos pagos por hora. Você se impacienta como se isto fosse nos causar barulho.”',
                                'input1' => '3',
                                'questao2' => '“Lá vem você de novo – desviando o rumo. Se você controlar seus nervos por um  minuto, verá que apenas está se mortificando com esta atitude.”',
                                'input2' => '1',
                                'questao3' => '“Como você está perturbado, talvez devêssemos nos encontrar em outra ocasião quando você não estiver submetido a tanta pressão de trabalho.”',
                                'input3' => '2'
                            ],
                            'questao15' => [
                                'titulo' => '(franco) “Olhe, tudo o que realmente eu quero saber é que utilidade prática tem sua abordagem no que diz respeito à execução do trabalho.”',
                                'questao1' => '“Você está certo, mas mais importante é o fato de eu poder afirmar que minha abordagem funciona. Isto não vale alguma coisa?”',
                                'input1' => '1',
                                'questao2' => '“Veremos a utilidade prática e as aplicações mais tarde. Agora, desejo saber se você, pessoalmente, gosta ou não da minha abordagem!”',
                                'input2' => '3',
                                'questao3' => '“Talvez fosse útil para nós ambos se você fosse mais específico sobre o que acha ser preciso para fazer uma comparação entre as diferentes abordagens.”',
                                'input3' => '2'
                            ],
                            'questao16' => [
                                'titulo' => '(pomposo) “Eu não sei o que você acha, mas tenho por regra nunca lavar roupa suja em público; e não costumo respeitar os que fazem o contrário.”',
                                'questao1' => '“Você quer dizer que respeita as pessoas à medida que elas se conformam com suas regras pessoais?”',
                                'input1' => '2',
                                'questao2' => '“É o que sempre me ensinaram, e até hoje, pessoas desse tipo me embaraçam... mesmo quando não estou envolvido.”',
                                'input2' => '3',
                                'questao3' => '“Concordo inteiramente com você; as pessoas  deveriam ter mais respeito próprio do que ficar a comentar lá fora o que se passa aqui dentro.” ',
                                'input3' => '1'
                            ],
                            'questao17' => [
                                'titulo' => '(tranquilo) “Você está me dizendo que sua decisão, sem exceções, é não apenas definitiva, mas a melhor que qualquer um de nós seria capaz de tomar?”',
                                'questao1' => '“Absolutamente, você sabe tão bem quanto eu que não me aguentaria um mês se começasse a retratar-me de minhas decisões.”',
                                'input1' => '1',
                                'questao2' => '“Não é bem isso o que quero dizer. Estou simplesmente afirmando quais são as prioridades; caso as suas sejam diferentes, precisamos conhecê-las antes mesmo de começar a decidir.”',
                                'input2' => '2',
                                'questao3' => '“Bem, ela é tão boa quanto às melhores que já foram propostas.”',
                                'input3' => '3'
                            ],
                            'questao18' => [
                                'titulo' => '(ressentido)“Não consigo que alguém tome uma decisão por aqui. Você acha que chegará a época em que a pessoa com autoridade se prestará a dizer sim ou não, em vez de eximir-se?”',
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
                        @foreach($questions as $question)
                            <table class="tg">
                            
                                <tr>
                                    <th class="tg-0pky" rowspan="3" style="font-size: 20px;font-weight: bold;vertical-align: middle;">{{$count}}</th>
                                    <th class="tg-0lax" rowspan="3" style="max-width: 20em;min-width: 20em;">{!!$question['titulo']!!}</th>
                                    
                                    <th class="tg-baqh">@if($question['input1'] == 1)A<input type="number" name="A{{$count}}" style="width: 3em;">@endif</th>
                                    <th class="tg-baqh">@if($question['input1'] == 2)A<input type="number" name="A{{$count}}" style="width: 3em;">@endif</th>
                                    <th class="tg-baqh">@if($question['input1'] == 3)A<input type="number" name="A{{$count}}" style="width: 3em;">@endif</th>
                                    <th class="tg-0lax">{{ $question['questao1'] }}</th>
                                </tr>
                                <tr>
                                    <td class="tg-baqh">@if($question['input2'] == 1)B<input type="number" name="B{{$count}}" style="width: 3em;">@endif</td>
                                    <td class="tg-baqh">@if($question['input2'] == 2)B<input type="number" name="B{{$count}}" style="width: 3em;">@endif</td>
                                    <td class="tg-baqh">@if($question['input2'] == 3)B<input type="number" name="B{{$count}}" style="width: 3em;">@endif</td>
                                    <td class="tg-0lax">{{$question['questao2']}}</td>
                                </tr>
                                <tr>
                                    <td class="tg-baqh">@if($question['input3'] == 1)C<input type="number" name="C{{$count}}" style="width: 3em;">@endif</td>
                                    <td class="tg-baqh">@if($question['input3'] == 2)C<input type="number" name="C{{$count}}" style="width: 3em;">@endif</td>
                                    <td class="tg-baqh">@if($question['input3'] == 3)C<input type="number" name="C{{$count}}" style="width: 3em;">@endif</td>
                                    <td class="tg-0lax">{{$question['questao3']}}</td>
                                </tr>
                            </table>
                            @php($count++)
                            <br>
                            @endforeach
                        </div>
                        <!-- FIM TABELA DE QUESTIONARIO -->
                        <br>
                        <div class="col-8">
                        <button class="btn btn-icon btn-3 btn-primary" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                            <span class="btn-inner--text">Enviar formulário</span>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush