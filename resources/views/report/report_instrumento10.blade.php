<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Guia do Programa</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <meta charset="utf-8">
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
      width: 100%;
      font-size: 18px;
    }

    canvas {
        display: block;
        margin: 0 auto;
    }

  </style>
</head>

<body style="background-image: url('posicionamento/public/img/img2.png');background-repeat: no-repeat;
  background-attachment: fixed;background-size: 100% 100%;">
  <div class="flex-box container-box">
    <div class="content-box">
      <img src="../posicionamento/public/img/logo_capa.png" style="float: left;width: 30%;margin-top: 2%;">
      <img src="../posicionamento/public/img/selo_top_seller.png" style="float: right;width: 12%;">

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 10</h3>
      <h3 style="color: #35408f;text-align: center;">O GERENCIAMENTO DO RELACIONAMENTO ATRAVÉS DA INTELIGÊNCIA EMOCIONAL</h3>

      <br>
      
      <div class="col-md-12">
        <!-- Tabela 1 -->
        <h3 style="color: #35408f;">A – Níveis de Inteligência Emocional</h3>
          
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">ESCALA</td>
            <td style="text-align: center;vertical-align: middle;">Número de participantes por Intervalo</td>
            <td style="text-align: center;vertical-align: middle;">Valores Percentuais por Intervalo</td>
          </tr>
          </thead>
            <tr>
              <td>18 – 20 <br> Alto grau de Inteligência Emocional</td>
              <td style="color:red; text-align: center;">{{$dif18}}</td>
              <td style="color:red; text-align: center;">{{number_format($dif18 * 100 / $total, 2)}}</td>
            </tr>
            <tr>
              <td>12 – 17 <br> Intermediário de Inteligência Emocional</td>
              <td style="color:red; text-align: center;">{{$dif12}}</td>
              <td style="color:red; text-align: center;">{{number_format($dif12 * 100 / $total, 2)}}</td>
            </tr>
            <tr>
              <td>1 – 11 <br> Baixo Nível de Inteligência Emocional</td>
              <td style="color:red; text-align: center;">{{$dif1}}</td>
              <td style="color:red; text-align: center;">{{number_format($dif1 * 100 / $total, 2)}}</td>
            </tr>
        </table>

        <br>

      </div>

      <br>
    </div>
  </div>
</body>
<script>
   
</script>

</html>