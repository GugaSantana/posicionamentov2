<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Auto Gestão Acompanhamento</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
    .flex-box {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container-box {
      background-color: white;

    }

    .content-box {
      color: black;
      text-align: justify;
      width: 90%;
      font-size: 18px;
    }

    .btn-chatgpt {
      color: #fff;
      background-color: #0F9E7B;
      border-color: #0F9E7B;
    }

    .btn-chatgpt:hover {
      background-color: #0c8e6e;
      border-color: #0c8e6e;
    }

    p {
      padding-bottom: 1%;
    }

    .zoom {
      transition: transform 0.3s ease;
    }

    .zoom:hover {
      transform: scale(1.05);
      cursor: pointer;
    }
  </style>
</head>

<body style="background-image: url('posicionamento/public/img/img2.png');background-repeat: no-repeat;
  background-attachment: fixed;background-size: 100% 100%;">
  <div class="flex-box container-box" style="
    margin-top: 4%;
    margin-left: 6%;
    margin-right: 6%;
    margin-bottom: 4%;
    background-color: #f2f7f9;
    border-radius: 70px;
">
    <div class="content-box">
      <img src="img/logo_capa.png" style="float: left;width: 30%;margin-top: 2%;">
      <img src="{{ asset('img/botton_ts.png') }}" style="float: right;width: 8%;margin-top: 2%;">

      <h2 style="color: #35408f;text-align: center;margin-top: 5em;">AUTOGESTÃO DA METODOLOGIA</h2>
      
      <h3 style="color: #35408f; text-align: center;margin-top: 2em">A - ACOMPANHAMENTO DA IMPLANTAÇÃO</h3>
      <br>

      <p>Desejamos que você assimile, fixe e internalize as técnicas que serão apresentadas, para poder utilizá-las no seu dia a dia, de modo a se beneficiar de todo o potencial da Metodologia TOPSELLER</p>
      <p>Com este objetivo desenvolvemos um procedimento simples que lhe permitirá acompanhar seu progresso na aprendizagem. Chamamos este processo de Autogestão da Metodologia.</p>
      <p>A <b>AUTOGESTÃO DA METODOLOGIA</b> está centrada na <b>PLANILHA DE AUTOGESTÃO.</b></p>
      <p>A <b>Planilha de Autogestão</b> envolve as atividades de elaboração e implementação dos Planos de Ação de cada instrumento da metodologia.</p>
      <div style="border: 6px double #35408f; padding:3em">
        <p>O trabalho com a <b>Planilha de Autogestão</b> se dá através das 7 atividades que apresentamos a seguir:</p>
        <p>1 – Para cada instrumento concluído, no final do <b>Relatório de Diagnóstico e Recomendações</b>, você terá uma indicação como a seguinte, para ir à Planilha de Autogestão.</p>
        <center>
          <p><span class="oi oi-arrow-circle-right" style="color:red; font-size: 22px"></span> Ir para a Planilha de Autogestão.</p>
        </center>
        <p>2 – Na primeira coluna da Planilha de Autogestão são apresentados os 20 Instrumentos da Metodologia.</p>
        <p>A planilha tem mais quatro colunas que mostrarão seu progresso na elaboração e na implementação de cada Plano de Ação.</p>

        <div style="text-align: center;">
          <img src="{{ asset('img/chatgpt/autogestao.png') }}" alt="" style="max-width: 70%;border: 2px double #35408f;">
        </div>
        <br>

        <p>3 – Quando você clicar em “ir para Planilha de Autogestão” ao final das Recomendações, na Planilha de Autogestão aparecerá um <font style="color: #35408f;">SIM</font> na Etapa A do instrumento trabalhado.</p>
        <p>Ao clicar <font style="color: #35408f;">SIM</font> na coluna <b>Etapa A – Analisei e estudei o Diagnóstico e as Recomendações deste Instrumento</b>, você acessará o Formulário correspondente ao <b>Plano de Ação</b> do Instrumento que acaba de ser concluído.</p>
        <p>Neste momento começa uma etapa fundamental da Metodologia: o desenvolvimento dos <b>Planos de Ação</b> através dos quais você <b>IMPLEMENTARÁ AS RECOMENDAÇÕES</b> apresentadas em cada Instrumento, em função dos resultados dos Diagnósticos personalizados.</p>
        <p>Todos os Planos de Ação têm a mesma estrutura, estão formados por três campos, os quais você deverá preencher, ou seja, para esses campos você deverá produzir conteúdo. Os campos são:
        <br>- QUE FAZER <br>
        - COMO FAZER e<br>
        - QUANDO DEVO CONCLUIR.<br>
        </p>
        <p>Em outro capítulo desta seção descreveremos estes campos.</p>

        <p>4 - Se durante seu trabalho no Formulário do Plano de Ação você precisar retornar ao Diagnóstico, clique antes em <font style="color: #35408f;">SALVAR</font>, a fim de não perder o conteúdo que você já produziu. Quando você for encerrar uma seção de trabalho, no final de cada Formulário, escolha e clique numa das opções: <b>Plano de Ação em aberto</b> (se ainda você não concluiu seu Plano) ou <b>Plano de Ação concluído</b> (quando você tiver terminado o Plano de Ação)</p>
        <p>5 – As colunas seguintes da Planilha de Autogestão corresponde as outras etapas, as quais vão sendo habilitadas, conforme você for clicando <font style="color: #35408f;">SIM</font> quando você considerar a etapa concluída. Continue procedendo assim até a <b>Etapa D – Concluí a Implantação das Recomendações deste Instrumento</b></p>
        <p>6 – Este procedimento se repetirá para todos os Instrumentos, até a conclusão do <font style="color: #35408f;"><b>Programa TOPSELLER</b></font>, quando você terá preenchido toda a Planilha de Autogestão.</p>

        <p>7 - Se durante a sua evolução no <font style="color: #35408f;">Programa TOPSELLER</font>, você quiser fazer algum acréscimo ou alteração num Plano de Ação já concluído, você poderá retornar a esse Plano de Ação, fazer os ajustes e clicar em salvar.</p>
        
        <br>
        <p>Agora estamos prontos para começar o trabalho!</p>
      </div>

      <br>

      <h3 style="color: #35408f; text-align: center;">B – ELABORAÇÃO DOS PLANOS DE AÇÃO</h3>
      <br>

      <p>Todos os Planos de Ação têm a mesma estrutura, são formados por três campos, os quais você deverá preencher, ou seja, para esses campos você deverá produzir conteúdo. Os campos são:<br>
        - QUE FAZER<br>
        - COMO FAZER e<br>
        - QUANDO DEVO CONCLUIR.</p>

      <p>Cada parte do Plano de Ação tem uma clara identidade:</p>

      <p>- <b>QUE FAZER</b> - Se refere basicamente às Atividades que se sugerem sejam feitas porque são necessárias para implantar as <b>Recomendações</b> e assim melhorar seu desempenho como vendedor.
      <br>Por exemplo: " Melhorar o conhecimento dos produtos/serviços concorrentes"</p>
      
      <p>Evidentemente isto é uma atividade, um QUE FAZER</p>
        
      <p><b>COMO FAZER</b> - Esta dimensão se refere a como efetivamente executar as atividades estabelecidas no campo anterior QUE FAZER. São procedimentos ou iniciativas para implementar, na prática, as atividades planejadas. No exemplo anterior, estas são alternativas possíveis de COMO FAZER:<br>
      . Obter e analisar folhetos técnicos dos concorrentes<br>
      . Visitar sites dos concorrentes<br>
      . Assistir vídeos específicos no Youtube<br>
      . Fazer engenharia reversa<br>
      . Obter informações em áreas técnicas da própria empresa<br>
      . Participar de feiras e exposições onde participam os principais concorrentes<br>
      . Analisar as vantagens competitivas e os pontos fracos dos produtos/serviços concorrentes</p>

      <p>- <b>QUANDO DEVO CONCLUIR.</b> Tem a ver com o cronograma. É o prazo no qual se espera ter concluído todos os procedimentos e iniciativas descritas no campo COMO FAZER.</p>

      <p><font style="color: #35408f;">Agora o desafio é ir para a prática.</font></p>

      <p>E na prática temos dois caminhos ou possibilidades para fazer os Planos de Ação, a saber:<br>
        A- FAZER OS PLANOS DE AÇÃO DE MANEIRA TRADICIONAL<br>
        B- FAZER OS PLANOS DE AÇÃO UTILIZANDO INTELIGÊNCIA ARTIFICIAL</p>

      <p>A- FAZER OS PLANOS DE AÇÃO DE MANEIRA TRADICIONAL</p>

      <p>É simples, você reflete sobre o <b>Diagnóstico</b> e as <b>Recomendações</b> e pergunta-se: "o que eu deveria fazer para implementar esta recomendação, de que maneira posso levá-la à prática?".</p>
      <p>Você pode fazer brainstormings, consultar colegas, especialistas conhecidos, encontrar alternativas em buscadores como GOOGLE, consultar Wikipédia, assistir vídeos, ler revistas especializadas, entre outras iniciativas possíveis. Este é um processo demorado e de relativa eficácia que, na maioria das vezes se apoia exclusivamente em seu esforço pessoal.</p>
      <p>Entretanto, devemos reconhecer que, até pouco tempo atrás, era o único caminho que tínhamos para desenvolver os Planos de Ação.</p>
      <p>Porém, desde o mês de novembro de 2022, temos a disposição uma segunda possibilidade para elaborar os Planos de Ação, uma possibilidade revolucionária a nível internacional, que apresentamos a seguir.</p>

      <p>B- FAZER OS PLANOS DE AÇÃO UTILIZANDO INTELIGÊNCIA ARTIFICIAL</p>
      <p>A Inteligência Artificial é uma verdadeira revolução tecnológica, uma tecnologia disruptiva em âmbito mundial</p>
      <p>Uma de suas ferramentas está disponível desde novembro de 2022 para nos auxiliar a aumentar dramaticamente nossa eficácia e melhorar nosso desempenho profissional.</p>
      <p>Em relação ao programa TOPSELLER, esta ferramenta de Inteligência Artificial pode contribuir de maneira significativa com os Planos de Ação, aumentando suas consistências, seus fundamentos, a qualidade dos conteúdos, e a articulação das atividades e das etapas dos Planos de Ação, tudo isso de maneira muito simples, e ao mesmo tempo economizando valioso tempo.</p>
      <p style="color: #35408f;">Esta é nossa recomendação! Dos dois caminhos possíveis: Adote a alternativa B, elabore os Planos de Ação utilizando a Inteligência Artificial.</p>
      <p>O TOPSELLER é pioneiro a nível internacional na utilização da Inteligência Artificial no âmbito do desenvolvimento de competências, e ele capacitará você, passo a passo, para usar a Inteligência Artificial no desenvolvimento de seus Planos de Ação, através do Tutorial que apresentamos a seguir. Siga as instruções e de maneira fácil e rápida, você será habilitado a utilizar com eficácia a ferramenta de Inteligência Artificial escolhida.</p>


      {{-- COLOCAR AQUI --}}
      <p>Entrando nos Planos de Ação, se você decidiu utilizar a inteligência artificial, irá encontrar os seguintes 2 acessos (link’s)</p>
      
      <div style="text-align: center; ">
        <a href="https://chat.openai.com/auth/login" target="_blank"><img src="{{ asset('img/chatgpt/button_chatgpt.png') }}" alt="" style="width: 100px" class="zoom"></a>
        <a href="/chatgpt" target="_blank"><img src="{{ asset('img/chatgpt/button_tutorial.png') }}" alt="" style="width: 100px" class="zoom"></a>
        
      </div>

      <table>
        <tr>
          <td>
            <a href="https://chat.openai.com/auth/login" target="_blank"><img src="{{ asset('img/chatgpt/button_chatgpt.png') }}" alt="" style="width: 100px" class="zoom"></a>
          </td>
          <td>
            <div style="border: 1px solid #0F9E7B; padding:1em; margin-left:2em;">
              <p style="padding-bottom: 0px; margin-bottom: 0px;">Ao clicar neste link você acessa diretamente o ChatGPT para iniciar seus trabalhos</p>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <a href="/chatgpt" target="_blank"><img src="{{ asset('img/chatgpt/button_tutorial.png') }}" alt="" style="width: 100px" class="zoom"></a>
          </td>
          <td>
            <div style="border: 1px solid #0F9E7B; padding:1em; margin-left:2em;">
              <p style="padding-bottom: 0px; margin-bottom: 0px;">Ao clicar neste link você acessa o Tutorial para se cadastrar no ChatGPT ou para receber as instruções especificas para operar o ChatGPT corretamente</p>
            </div>
          </td>
        </tr>
      </table>
      
      <br>
      
      <p>Escolha o botão adequado a sua necessidade e acesse o conteúdo.</p>
      <p>Se você não é cadastrado no ChatGPT, acesse abaixo: Tutorial para habilitar os participantes no uso do ChatGPT.</p>

      <p>Admitindo que você esta habilitado a operar com o ChatGPT, continuamos com o nosso passo a passo, e trataremos do preenchimento efetivo dos Planos de Ação.</p>

      <p>O conteúdo dos Planos de Ação serão as respostas dadas pelo ChatGPT às perguntas que formulamos, ao que, naturalmente, devemos somar contribuições nossas.</p>
      <p>Em relação aos conteúdos oferecidos pela Inteligência Artificial, recomendamos que as respostas dadas pelo ChatGPT sejam copiadas e coladas nos respectivos campos dos Planos de Ação.</p>
      <p>Uma vez incorporadas as respostas nos campos dos Planos de Ação, recomendamos você realizar os ajustes necessários na redação, para dar "organicidade" e harmonia à apresentação do conteúdo dos Planos de Ação.</p>
      <p>Seguindo todas as considerações, estaremos garantindo a qualidade e a eficácia dos Planos de Ação do TOPSELLER, utilizando a mais moderna e poderosa ferramenta disponível no mundo: a INTELIGÊNCIA ARTIFICIAL.</p>

      <a href="/chatgpt" class="btn btn-chatgpt">TUTORIAL PARA HABILITAR OS PARTICIPANTES NO USO DO CHATGPT</a>

      <br>






      <p>
        <font style="color: #35408f">
          <center>Desejamos sucesso na aprendizagem e temos certeza que seus resultados melhorarão significativamente, incorporando as 20 técnicas que compõem esta Metodologia!<center>
        </font>
      </p>

      <br>


      <nav aria-label="Navegação de página exemplo" style="text-align: center;">
        <ul class="pagination justify-content-center">
          <!--<li class="page-item disabled">
      <a class="page-link" href="/$anterior" tabindex="-1">Anterior</a>
    </li> -->
          <li class="page-item active"><a class="page-link" href="/introAcompanhamento">1</a></li>
          <li class="page-item"><a class="page-link" href="/autogestao">2</a></li>

          <!-- <li class="page-item">
      <a class="page-link" href="/$proximo">Próximo</a>
    </li> -->
        </ul>
      </nav>

      <br>


      <br>

      @include('menu_intro')

      <br>


    </div>
  </div>
</body>

</html>