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
    .break {
          page-break-before: always;
    }

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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 9</h3>
      <h3 style="color: #35408f;text-align: center;">GERENCIAMENTO DO RELACIONAMENTO UTILIZANDO OS CANAIS NEUROLINGUISTICOS</h3>

      <br>
      
      <div class="col-md-12">
        <!-- Tabela 1 -->
        
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">CANAIS NEUROLINGUISTICOS</td>
            <td style="text-align: center;vertical-align: middle;">Valores médios do Total de Participantes</td>
            <td style="text-align: center;vertical-align: middle;">Potencial de Desenvolvimento dos Canais</td>
          </tr>
          </thead>
            <tr>
              <td>Visual</td>
              <td style="color:red; text-align: center;">{{number_format($visual, 2)}}</td>
              <td style="color:red; text-align: center;">{{10 - number_format($visual, 2)}}</td>
            </tr>
            <tr>
              <td>Auditivo</td>
              <td style="color:red; text-align: center;">{{number_format($auditivo, 2)}}</td>
              <td style="color:red; text-align: center;">{{10 - number_format($auditivo, 2)}}</td>
            </tr>
            <tr>
              <td>Cinestésico</td>
              <td style="color:red; text-align: center;">{{number_format($cinestesico, 2)}}</td>
              <td style="color:red; text-align: center;">{{10 - number_format($cinestesico, 2)}}</td>
            </tr>
        </table>

        <br>

        <!-- Tabela 2 -->
        
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Canais Neurolinguiticos com valores igual ou menor que três</td>
            <td style="text-align: center;vertical-align: middle;">Total de casos</td>
            <td style="text-align: center;vertical-align: middle;">Percentual sobre o total dos participantes</td>
          </tr>
          </thead>
            <tr>
              <td>Visual</td>
              <td style="color:red; text-align: center;">{{$visualMenor3}}</td>
              <td style="color:red; text-align: center;">{{number_format($visualMenor3 * 100 / $total, 2)}}</td>
            </tr>
            <tr>
              <td>Auditivo</td>
              <td style="color:red; text-align: center;">{{$auditivoMenor3}}</td>
              <td style="color:red; text-align: center;">{{number_format($auditivoMenor3 * 100 / $total, 2)}}</td>
            </tr>
            <tr>
              <td>Cinestésico</td>
              <td style="color:red; text-align: center;">{{$cinestesicoMenor3}}</td>
              <td style="color:red; text-align: center;">{{number_format($cinestesicoMenor3 * 100 / $total, 2)}}</td>
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