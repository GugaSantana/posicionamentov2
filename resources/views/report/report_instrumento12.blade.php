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
      <img src="{{ asset('img/botton_ts.png') }}" style="float: right;width: 8%;margin-top: 2%;">

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 12</h3>
      <h3 style="color: #35408f;text-align: center;">PROSPECÇÃO DE CLIENTES</h3>

      <br>
      
      <div class="col-md-12">
        <!-- Tabela 1 -->
        <h3 style="color: #35408f;">A - Níveis de Eficácia da Prospecção</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td rowspan="2" style="text-align: center;vertical-align: middle;">Escala</td>
            <td colspan="2" style="text-align: center;vertical-align: middle;">Distribuição</td>
          </tr>
          <tr>
            <td style="text-align: center;vertical-align: middle;">Em valores absolutos</td>
            <td style="text-align: center;vertical-align: middle;">Em valores percentuais</td>
          </tr>          
          </thead>
            <tr>
              <td>De 9 a 10 – Alto</td>
              <td style="color:red; text-align: center;">{{$alto}}</td>
              <td style="color:red; text-align: center;">{{number_format($alto * 100 / $total, 2)}}</td>
            </tr>
            <tr>
              <td>De 6 a 8 – Médio</td>
              <td style="color:red; text-align: center;">{{$medio}}</td>
              <td style="color:red; text-align: center;">{{number_format($medio * 100 / $total, 2)}}</td>
            </tr>
            <tr>
              <td>De 1 a 5 – Baixo</td>
              <td style="color:red; text-align: center;">{{$baixo}}</td>
              <td style="color:red; text-align: center;">{{number_format($baixo * 100 / $total, 2)}}</td>
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