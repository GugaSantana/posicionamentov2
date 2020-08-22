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
      width: 90%;
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
      <img src="../posicionamento/public/img/selo_top_seller.png" style="float: right;width: 12%;">

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 13</h3>
      <h3 style="color: #35408f;text-align: center;">QUALIFICAÇÃO DOS CLIENTES POTENCIAIS</h3>

      <br>
      
      <div class="col-md-12">
        <!-- Tabela 1 -->
        <h3 style="color: #35408f;">A – Nível de Eficácia da Qualificação</h3>

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
              <td><font color="blue"><b>5</b></font> – Alto Nível de Qualificação</td>
              <td style="color:red; text-align: center;">{{$alto}}</td>
              <td style="color:red; text-align: center;">{{number_format($alto * 100 / $total, 2)}}</td>
            </tr>
            <tr>
              <td><font color="blue"><b>De 3 a 4</b></font> – Bom Nível de Qualificação</td>
              <td style="color:red; text-align: center;">{{$medio}}</td>
              <td style="color:red; text-align: center;">{{number_format($medio * 100 / $total, 2)}}</td>
            </tr>
            <tr>
              <td><font color="blue"><b>De 1 a 2</b></font> – Baixo Nível de Qualificação</td>
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