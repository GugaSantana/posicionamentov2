@extends('adminlte::page')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3><center>INSTRUMENTO 10</center></h3>
        <h3><center>O GERENCIAMENTO DO RELACIONAMENTO ATRAVÉS DA INTELIGÊNCIA EMOCIONAL</center></h3>
    </div>
    <div class="card-body">

                <div class="col-12">
                    <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>
                    <p class="fonte18">Inteligência Emocional é a capacidade de compreender e gerenciar os próprios sentimentos e emoções, assim como os sentimentos e emoções dos outros</p>
                    <p class="fonte18">A Inteligência Emocional diz respeito ao modo como as pessoas lidam com seus sentimentos e emoções e como respondem às pessoas com as quais interagem.</p>
                    <p class="fonte18">Não existe correlação entre a Inteligência Emocional e o QI (Quociente Intelectual) , pois eles são controlados por diferentes áreas do cérebro.</p>
                    <p class="fonte18">A Inteligência Emocional pode evoluir e aumentar, ou seja, a Inteligência Emocional pode ser desenvolvida.</p>
                    <p class="fonte18">Para entender a Inteligência Emocional temos que partir do principio que o cérebro está constituído por 2 hemisférios.</p>
                    <p class="fonte18">O Hemisfério Esquerdo é racional, lógico, matemático, lida com a objetividade e com as coisas quantitativas.</p>
                    <p class="fonte18">O Hemisfério Direito é a sede das emoções, dos sentimentos, da sensibilidade e da criatividade.</p>
                    <p class="fonte18">A Inteligência Emocional está vinculada ao hemisfério direito, porém deve ser monitorada pelo hemisfério esquerdo.</p>

                    <center><img src="../posicionamento/public/img/diag_10_1.jpg" style="width: 50%"></center>

                    <p class="fonte18">Pessoas que aprendem a lidar com a Inteligência Emocional sabem pensar, sentir e agir de forma inteligente e consciente, e não permitem que as suas emoções administrem sua vida e nem atrapalhem seu trabalho.</p>

                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>

                    <p class="fonte18" style="color:red;"><b>Conforme suas respostas à primeira parte deste instrumento, você se localizou no intervalo de {{$inicio}} a {{$fim}} numa escala que vai de 0 a 20 pontos.</b></p>
                    <p class="fonte18">A conclusão do seu diagnóstico é a seguinte:</p>

                    {!! $diagnostico !!}
                        
                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÕES</center></h4></p>

                        <p class="fonte18">A Inteligência Emocional se fundamenta em 5 pilares que devem ser trabalhados para desenvolvê-la e poder alcançar êxito profissional.</p>
                        <p class="fonte18">Os pilares são os seguintes:</p>
                        <p class="fonte18"><b>Autoconhecimento:</b> é definido como a capacidade de um indivíduo. Para reconhecer e entender seus sentimentos, humor, emoções e os efeitos deles em si mesmo e sobre os outros.</p>
                        <p class="fonte18"><b>Auto-regulação:</b> é a capacidade de uma pessoa de reconhecer e controlar seus impulsos e agir sempre de forma racional e não baseada em pré-julgamentos.</p>
                        <p class="fonte18"><b>Motivação:</b> relacionada à vontade e a paixão do indivíduo por suas atividades e trabalho, independente de recompensas financeiras ou de status social.</p>
                        <p class="fonte18"><b>Empatia:</b> é a capacidade de “se colocar no lugar do outro” e agir com a outra pessoa levando em conta seu contexto e emoções no momento.</p>
                        <p class="fonte18"><b>Habilidade Social:</b> definida pela capacidade de uma pessoa de construir relacionamentos e de estabelecer vínculos de troca emocional com outros indivíduos.</p>
                        <p class="fonte18">Considerando que o nosso lado emocional do cérebro funciona mais rapidamente do que o lado racional, ou seja, enquanto estamos agindo sob emoções, nossa razão ainda está processando o fato e analisando alternativas, se impõe a necessidade de desenvolver e controlar nossa Inteligência Emocional!</p>
                        <p class="fonte18">Para aprender ou melhorar a forma como você lida com as próprias emoções bem como para compreender os comportamentos e sentimentos do cliente para poder gerenciar seu comportamento e a relação entre você e o cliente, as recomendações para desenvolver a Inteligência Emocional são as seguintes:</p>
                        <br>
                        <h4>1 – Conheça suas próprias emoções</h4>
                        <p class="fonte18">O primeiro passo é conhecer, analisar suas emoções e as ações e reações que você tem como resposta aos estímulos que recebe das outras pessoas.</p>
                        <p class="fonte18">Para você conhecer melhor suas próprias emoções, coloque seus sentimentos e suas ações de rotina em um papel e, depois, reflita sobre o que escreveu e decida que comportamentos devem ser mantidos e que comportamentos devem ser mudados.</p>
                        <p class="fonte18">Coloque em prática o mecanismo de solicitação de Feedback apresentado no Instrumento 8 para conhecer melhor suas emoções.</p>
                        <br>
                        <h4>2 – Controle suas emoções</h4>
                        <p class="fonte18">É necessário aprender a lidar com as emoções e controlá-las para que você possa se colocar na direção certa conforme cada situação. Isto fará toda a diferença entre o equilíbrio e a disfunção.</p>
                        <p class="fonte18">Evite pensar em resultados negativos. Seja otimista, tente enxergar o lado positivo das coisas.</p>
                        <p class="fonte18">Temos uma tendência inconsciente a reagir, e disparamos gatilhos emocionais, expressando emoções de maneira instantânea, o que mais tarde pode gerar arrependimentos e problemas desnecessários que poderão dificultar o alcance de suas metas.</p>
                        <p class="fonte18">Este tipo de comportamento precipitado deve ser evitado. Abra espaço para o Hemisfério Esquerdo do cérebro agir e controlar a impulsividade do Hemisfério Direito.</p>
                        <p class="fonte18">Quando estiver sob pressão, tente manter a calma. Encontre uma distração, realize uma atividade prazerosa para canalizar sua ansiedade.</p>
                        <p class="fonte18">Lembre das recomendações dadas no Instrumento 7: coloque sua personalidade sob o controle de Estado do Ego Adulto.</p>
                        <br>
                        <h4>3 – Desenvolva sua Automotivação</h4>
                        <p class="fonte18">Siga as recomendações do Instrumento 1 e desenvolva sua Visão de Futuro!. Esta é a decisão estratégica mais importante que você pode tomar para desenvolver sua autoestima.</p>
                        <p class="fonte18">Pensar antes de tomar as decisões lhe trará benefícios e evitará conflitos e arrependimentos de seus atos.</p>
                        <p class="fonte18">Apoie suas decisões na Visão de Futuro. Isto dará coerência a suas decisões.</p>
                        <p class="fonte18">Sabendo utilizar adequadamente suas emoções você chegará aos seus objetivos.</p>
                        <p class="fonte18">Você deve aprender a responder aos seus estímulos através de um processo consciente que envolve analisar como você se sente e isto depende fundamentalmente de sua automotivação, para depois decidir como você quer se comportar para atingir suas metas.</p>
                        <p class="fonte18">Deixe a Criança se expandir: A Automotivação está no Estado do Ego Criança. Revise as recomendações dadas no Instrumento 7</p>
                        <br>
                        <h4>4 – Desenvolva a Empatia</h4>
                        <p class="fonte18">Aprenda a se colocar no lugar do outro, a reconhecer as emoções dos outros e entender seus comportamentos, para se tornar mais sensível e aberto.</p>
                        <p class="fonte18">Empatia é entender o próximo, entender como alguém está se sentindo e porque se comporta de determinada maneira.</p>
                        <p class="fonte18">As recomendações do Instrumento 8 são valiosas para desenvolver a Empatia, ao equilibrar os processos de Exposição e Feedback.</p>
                        <br>
                        <h4>5 – Saiba se relacionar interpessoalmente</h4>
                        <p class="fonte18">Outro ponto chave para o sucesso é saber ter boas relações levando em consideração as emoções dos outros. Assim, você criará um ambiente positivo a sua volta.</p>
                        <p class="fonte18">As recomendações do Instrumento 7 poderá ajudá-lo (la) a melhorar seu relacionamento interpessoal ajustando os Estados do Ego aos Estados do Ego do seu cliente.</p>
                        <br>
                        <h4>6 - Reduza as emoções negativas</h4>
                        <p class="fonte18">Um dos principais pontos para desenvolver a Inteligência Emocional é ser capaz de gerir suas emoções negativas.</p>
                        <p class="fonte18">Evite saltar para uma conclusão negativa imediatamente e pense que as situações possuem várias opções de saída, basta você procurá-las. Escreva seus pensamentos e sentimentos, isso pode ajudar a externalizar e compreender melhor seu comportamento.</p>
                        <br>
                        <h4>7 - Lide de frente com o estresse e a ansiedade</h4>
                        <p class="fonte18">Passamos por momentos estressantes na vida e muitas vezes nos sentimos ansiosos por algum motivo. Saber lidar com situações de estresse fazem a diferença entre o equilíbrio e a disfunção de seus comportamentos.</p>
                        <p class="fonte18">Quando sob pressão, aprenda a manter a calma.</p>
                        <p class="fonte18">Lembre das Recomendações dadas no Instrumento 7. Utilize o Estado do Ego Adulto, coloque sua personalidade sob o comando do Adulto.</p>
                        <br>
                        <h4>8 – Responda ao invés do reagir</h4>
                        <p class="fonte18">A pressa é inimiga da perfeição. Desenvolver a Inteligência Emocional é um processo gradual.</p>
                        <p class="fonte18">Não descarte seus sentimentos antes de pensá-los. O Hemisfério Esquerdo deve monitorar o Hemisfério Direito do seu cérebro.</p>
                        <p class="fonte18">Controle sua reação seguindo as recomendações do Instrumento 7: não deixe que os Estados de Ego Pai e Criança assumam o controle de sua Personalidade.</p>
                        <p class="fonte18">O processo de reagir é um processo inconsciente onde disparamos um gatilho emocional e nos comportamos de forma inconsciente, expressando essa emoção de maneira instantânea. A reação é própria do Estado de Ego Pai e do Estado de Ego Criança.</p>
                        <p class="fonte18">Responder é um processo consciente que envolve perceber como você se sente, e depois decidir como você quer se comportar. Aplique o Estado de Ego Adulto.</p>
                        <p class="fonte18">Tome seu tempo e não reaja de maneira impulsiva e imediata.</p>
                        <p class="fonte18">Lembre que suas emoções influenciam suas decisões.</p>
                        <br>
                        <h4>9 - Conheça seus limites</h4>
                        <p class="fonte18">Há momentos em que é importante definir nossos limites adequadamente. Estes limites podem incluir o exercício de discordar, de dizer "não" sem se sentir culpado, e de controlar nossas respostas impulsivas para não ser vitima do curto prazo.</p>
                        <p class="fonte18">Em síntese, para você ter como referência o ideal; onde você deve chegar com o desenvolvimento da Inteligência Emocional são apresentadas a seguir as principais capacidades e competências das pessoas com alta Inteligência Emocional.</p>
                        <p class="fonte18">1 – Procuram consistentemente identificar suas próprias emoções e as emoções das pessoas à sua volta.</p>
                        <p class="fonte18">Para aumentar sua inteligência emocional participe de atividades e treinamentos voltados para desenvolver as seguintes competências:</p>
                        <p class="fonte18">- Diminuir os níveis de ansiedade e estresse<br>
                        - Diminuir as discussões nos seus relacionamentos<br>
                        - Melhorar os relacionamentos interpessoais<br>
                        - Ter empatia pelo outro<br>
                        - Alcançar mais equilíbrio emocional<br>
                        - Ter maior clareza nos objetivos e ações<br>
                        - Terá mais senso de responsabilidade e uma melhor visão de futuro<br>
                        - Aumentará a auto-estima e autoconfiança</p>
                        <p class="fonte18">2 – Reconhecem o impacto que suas palavras e ações exercem sobre as outras pessoas.</p>
                        <p class="fonte18">3 – Ouvem atentamente o que o interlocutor diz, e não fazem apenas de conta que estão prestando atenção.</p>
                        <p class="fonte18">4 – Têm a capacidade perceber as coisas que não são ditas, prestando atenção na inflexão e no tom de voz, nas pausas, na rapidez ou lentidão da fala e outras pistas.</p>
                        <p class="fonte18">5 – Ficam atentas e sabem interpretar a comunicação não-verbal e a linguagem corporal, como expressão facial, gestos, tiques, postura do corpo etc.</p>
                        <p class="fonte18">6 – Têm habilidade de controlar e lidar com suas próprias frustrações, irritações, alegrias, tristezas e outras emoções.</p>
                        <p class="fonte18">7 – Procuram resolver maduramente situações de conflito através do diálogo, do respeito e da colaboração com o interlocutor.</p>
                        <p class="fonte18">8 – Direcionam conscientemente situações de conflitos e divergências para soluções práticas e harmoniosas.</p>
                        <p class="fonte18">Independentemente de sua contagem de pontos no exercício que você respondeu, sempre há espaço para melhorar sua inteligência emocional.</p>


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