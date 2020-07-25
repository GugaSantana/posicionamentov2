<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Posicionamento</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    .text1 {
      align-self: center;
      color: white;
      text-align: end;
      font-size: 40px;
      font-weight: bold;
    }

    .text2 {
      align-self: center;
      color: white;
      text-align: start;
      font-size: 18px;
      padding-right: 12%;
    }

    .linha {
      height: 100vh;
    }

    @media screen and (max-width:1000px) {
      .text1 {
        align-self: center;
        color: white;
        text-align: center;
        font-size: 40px;
        font-weight: bold;
      }

      .text2 {
        align-self: center;
        color: white;
        text-align: center;
        font-size: 18px;
      }

      .linha {
        height: 60vh;
        margin-top: 12vh;
      }
    }
  </style>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

  @include('estilo')

</head>

<body style="background-image: linear-gradient(to right, #1794d0, #000652);background-repeat: no-repeat;
  background-attachment: fixed;background-size: 100% 100%;font-family: Arial;">

  <div class="container">
    <div class="row linha">
      <div class="col-lg-6 text1">
        SOMOS<br>CONSULTORES EM<br>COMPETITIVIDADE<br>SISTÊMICA
      </div>
      <div class="col-lg-6 text2">
        A Posicionamento está no mercado desde 1986, atendendo empresas de diferentes setores da economia, tanto no Brasil como no exterior. Por meio de <b>metodologias inovadoras</b>, integradas de maneira sistêmica aos processos empresariais, temos contribuído com o desenvolvimento da competitividade de importantes marcas, gerando para elas <b>resultados concretos</b>, em bases objetivas e quantificáveis.
      </div>
    </div>
  </div>

  <div id="rodape">
    <a href="slide3" style="float:right; margin-right: 1%; color:white" class="seta-dir"><i></i></a>
    <a href="slide1" style="float:right; margin-right: 1%; color:white" class="seta-esq"><i></i></a>
  </div>

</body>

</html>