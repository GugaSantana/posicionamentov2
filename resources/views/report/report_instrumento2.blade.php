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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 2</h3>
      <h3 style="color: #35408f;text-align: center;">MEUS PROBLEMAS PRIORITÁRIOS PARA AUMENTAR AS VENDAS</h3>

      <h3 style="color: #35408f;">Alteração dos Problemas Prioritários</h3>
  
      <br>

      <div class="col-md-12">
        <!-- Tabela 1 -->
        <h3 style="color: #35408f;">A – Deslocamento do Problema mais Importante na Percepção Inicial.</h3>
        <table class="table table-bordered">
        <thead class="bg-primary">
          <th style="text-align: center">MUDANÇA</th>
          <th style="text-align: center">Em valores absolutos</th>
          <th style="text-align: center">Em valores percentuais</th>
        </thead>
        <tr>
          <td>De 1 para 1</td>
          <td style="text-align: center">{{$desvio_maior[0]}}</td>
          <td style="text-align: center">{{($desvio_maior[0] * 100 / $total) ?? 0}}%</td>
        </tr>
        <tr>
          <td>De 1 para 2</td>
          <td style="text-align: center">{{$desvio_maior[1]}}</td>
          <td style="text-align: center">{{($desvio_maior[1] * 100 / $total) ?? 0}}%</td>
        </tr>
        <tr>
          <td>De 1 para 3</td>
          <td style="text-align: center">{{$desvio_maior[2]}}</td>
          <td style="text-align: center">{{($desvio_maior[2] * 100 / $total) ?? 0}}%</td>
        </tr>
        <tr>
          <td>De 1 para 4</td>
          <td style="text-align: center">{{$desvio_maior[3]}}</td>
          <td style="text-align: center">{{($desvio_maior[3] * 100 / $total) ?? 0}}%</td>
        </tr>
        <tr>
          <td>De 1 para 5</td>
          <td style="text-align: center">{{$desvio_maior[4]}}</td>
          <td style="text-align: center">{{($desvio_maior[4] * 100 / $total) ?? 0}}%</td>
        </tr>
        </table>
        <br>
        <!-- Tabela 2 -->
        <h3 style="color: #35408f;">B – Deslocamento do Problema menos Importante na Percepção Inicial.</h3>
        <table class="table table-bordered">
        <thead class="bg-primary">
          <th style="text-align: center">MUDANÇA</th>
          <th style="text-align: center">Em valores absolutos</th>
          <th style="text-align: center">Em valores percentuais</th>
        </thead>
        <tr>
          <td>De 5 para 1</td>
          <td style="text-align: center">{{$desvio_menor[0]}}</td>
          <td style="text-align: center">{{($desvio_menor[0] * 100 / $total) ?? 0}}%</td>
        </tr>
        <tr>
          <td>De 5 para 2</td>
          <td style="text-align: center">{{$desvio_menor[1]}}</td>
          <td style="text-align: center">{{($desvio_menor[1] * 100 / $total) ?? 0}}%</td>
        </tr>
        <tr>
          <td>De 5 para 3</td>
          <td style="text-align: center">{{$desvio_menor[2]}}</td>
          <td style="text-align: center">{{($desvio_menor[2] * 100 / $total) ?? 0}}%</td>
        </tr>
        <tr>
          <td>De 5 para 4</td>
          <td style="text-align: center">{{$desvio_menor[3]}}</td>
          <td style="text-align: center">{{($desvio_menor[3] * 100 / $total) ?? 0}}%</td>
        </tr>
        <tr>
          <td>De 5 para 5</td>
          <td style="text-align: center">{{$desvio_menor[4]}}</td>
          <td style="text-align: center">{{($desvio_menor[4] * 100 / $total) ?? 0}}%</td>
        </tr>
        </table>
      </div>
      
      <br>
      <br>
      <br>
      <br>



      <br>
    </div>
  </div>
</body>
<script>
      
</script>

</html>