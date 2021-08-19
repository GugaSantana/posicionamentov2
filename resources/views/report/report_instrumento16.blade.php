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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 16</h3>
      <h3 style="color: #35408f;text-align: center;">NEUTRALIZAÇÃO DOS OBSTÁCULOS DA VENDA (FORÇAS RESTRITIVAS)</h3>

      <br>

      <div class="col-md-12">
        <!-- Tabela 1 -->

        @php
          $forcas = [
                      'R1 - Hábito',
                      'R2- Receio',
                      'R3 – Preço',
                      'R4 – Reclamação',
                      'R5 – Detalhe',
                      'R6 – Ignorância',
                      'R7 – Concorrência',
                      'R8 – Concorrência de Amizade',
                      'R9 – Personalidade Difícil',
                      'R10 – Tempo',
                      'R11 – Corte do Vinculo',
                      'R12 – Decisão Dividida',
                      'R13 – Ambiente Negativo',
                      'R14 – Atitudes Impróprias'
                    ]
        @endphp

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;min-width: 20em;">Forças Restritivas</td>
            <td style="text-align: center;vertical-align: middle;">Quantidade de Obstáculos por Força Restritiva</td>
            <td style="text-align: center;vertical-align: middle;">Percentual de Obstáculos por Força Restritiva</td>
          </tr>          
          </thead>
          @for($i=0; $i < 14; $i++)
            <tr>
              <td>{{$forcas[$i]}}</td>
              <td style="color:red; text-align: center;">{{$frequencia[$i]}}</td>
              <td style="color:red; text-align: center;">{{number_format($frequencia[$i] * 100 / $totalFreq, 2)}}</td>
            </tr>
          @endfor
           
        </table>

        <br>

        <!-- <h3 style="color: #35408f;">Quantidade Média de Argumentos por participante</h3>
        <table class="table table-bordered">
            <tr><td>number_format($totalFreq / $total, 2)</td></tr>
        </table> -->
      </div>
        
      <br>
    </div>
  </div>
</body>
<script>

</script>

</html>