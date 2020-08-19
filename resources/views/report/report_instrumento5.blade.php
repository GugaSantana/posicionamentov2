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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 5</h3>
      <h3 style="color: #35408f;text-align: center;">MEU CONHECIMENTO DOS PRODUTOS CONCORRENTES</h3>

      <div class="col-md-12">
        <!-- Tabela 1 -->
        
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
              <td rowspan="2" style="min-width: 27em; text-align: center;vertical-align: middle;"><b>RESULTADOS</b></td>
              <td colspan="10" style="text-align: center;"><b>ESCALA</b></td>
          </tr>
          <tr style="text-align: center;">
              <td style="width: 3%">1</td>
              <td style="width: 3%">2</td>
              <td style="width: 3%">3</td>
              <td style="width: 3%">4</td>
              <td style="width: 3%">5</td>
              <td style="width: 3%">6</td>
              <td style="width: 3%">7</td>
              <td style="width: 3%">8</td>
              <td style="width: 3%">9</td>
              <td style="width: 3%">10</td>
          </tr>
          </thead>
            @php
              $questions = [  'Valor Absoluto dos Participantes',
                              'Valor Percentual por Intervalos da Escala',
                              'Valores Percentuais Acumulados por Intervalos da Escala']
            @endphp

            @for($i=0; $i<3; $i++)
            <tr>
                <td>{!! $questions[$i] !!}</td>
                <td style="color:red">{{-- !empty($escala[$i][1]) ? $escala[$i][1] : '' --}}</td>
                <td style="color:red">{{-- !empty($escala[$i][2]) ? $escala[$i][2] : '' --}}</td>
                <td style="color:red">{{-- !empty($escala[$i][3]) ? $escala[$i][3] : '' --}}</td>
                <td style="color:red">{{-- !empty($escala[$i][4]) ? $escala[$i][4] : '' --}}</td>
                <td style="color:red">{{-- !empty($escala[$i][5]) ? $escala[$i][5] : '' --}}</td>
                <td style="color:red">{{-- !empty($escala[$i][6]) ? $escala[$i][6] : '' --}}</td>
                <td style="color:red">{{-- !empty($escala[$i][7]) ? $escala[$i][7] : '' --}}</td>
                <td style="color:red">{{-- !empty($escala[$i][8]) ? $escala[$i][8] : '' --}}</td>
                <td style="color:red">{{-- !empty($escala[$i][9]) ? $escala[$i][9] : '' --}}</td>
                <td style="color:red">{{-- !empty($escala[$i][10]) ? $escala[$i][10] : '' --}}</td>
            </tr>
            @endfor
        </table>
      </div>
        
      <br>
    </div>
  </div>
</body>
<script>
      
</script>

</html>