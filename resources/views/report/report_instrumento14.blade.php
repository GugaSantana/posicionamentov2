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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 14</h3>
      <h3 style="color: #35408f;text-align: center;">MATRIZ PARA IDENTIFICAR CLIENTES PRIORITÁRIOS</h3>

      <h3 style="color: #35408f;">A – Alteração da Posição dos Clientes Prioritários</h3>

      <div class="col-md-12">
        <!-- Tabela 1 -->
        <h3 style="color: #35408f;">1 - Deslocamento dos 2 clientes inicialmente considerados mais importantes</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Posição no Levantamento</td>
            <td style="text-align: center;vertical-align: middle;">Inicial Posição após avaliação analítica</td>
            <td style="text-align: center;vertical-align: middle;">Frequência de cada Alteração</td>
            <td style="text-align: center;vertical-align: middle;">Em Valor Percentual</td>
          </tr>          
          </thead>
          @for($i=1; $i <= 8; $i++)
            <tr>
              <td style="text-align: center;">1</td>
              <td style="text-align: center;">{{$i}}</td>
              <td style="color:red; text-align: center;">{{$firstTo[$i]}}</td>
              <td style="color:red; text-align: center;">{{number_format($firstTo[$i] * 100 / $total, 2)}}</td>
            </tr>
          @endfor
           
        </table>

        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- Tabela 2 -->

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Posição no Levantamento</td>
            <td style="text-align: center;vertical-align: middle;">Inicial Posição após avaliação analítica</td>
            <td style="text-align: center;vertical-align: middle;">Frequência de cada Alteração</td>
            <td style="text-align: center;vertical-align: middle;">Em Valor Percentual</td>
          </tr>          
          </thead>
          @for($i=1; $i <= 8; $i++)
            <tr>
              <td style="text-align: center;">2</td>
              <td style="text-align: center;">{{$i}}</td>
              <td style="color:red; text-align: center;">{{$secondTo[$i]}}</td>
              <td style="color:red; text-align: center;">{{number_format($secondTo[$i] * 100 / $total, 2)}}</td>
            </tr>
          @endfor
           
        </table>

        <br>

        <!-- Tabela 3 -->
        <h3 style="color: #35408f;">2 – Deslocamento do cliente inicialmente considerado o menos importante</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Posição no Levantamento</td>
            <td style="text-align: center;vertical-align: middle;">Inicial Posição após avaliação analítica</td>
            <td style="text-align: center;vertical-align: middle;">Frequência de cada Alteração</td>
            <td style="text-align: center;vertical-align: middle;">Em Valor Percentual</td>
          </tr>          
          </thead>
          @for($i=1; $i <= 8; $i++)
            <tr>
              <td style="text-align: center;">8</td>
              <td style="text-align: center;">{{$i}}</td>
              <td style="color:red; text-align: center;">{{$lastTo[$i]}}</td>
              <td style="color:red; text-align: center;">{{number_format($lastTo[$i] * 100 / $total, 2)}}</td>
            </tr>
          @endfor
           
        </table>

        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- Tabela 4 -->
        <h3 style="color: #35408f;">B - Fatores Críticos de Competitividade nos Clientes Prioritários</h3>

        @php
          $table4 = [
            '1 – Faturamento',
            '2 – Crescimento',
            '3 – Adaptação dos Produtos',
            '4 – Rentabilidade',
            '5 – Capacidade Financeira',
            '6 – Concorrência',
            '7 – Receptividade do Cliente',
            '8 – Conhecimento',
            '9 – Dificuldade',
            '10 – Recompensas',
            '11 – Investimento Pessoal',
            '12 – Tempo'
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Fatores de Avaliação</td>
            <td style="text-align: center;vertical-align: middle;">Frequência de Valores iguais ou menores que 3</td>
            <td style="text-align: center;vertical-align: middle;">Em Valor Percentual</td>
          </tr>          
          </thead>
          @php $i=1; @endphp
          @foreach($table4 as $table)
            <tr>
              <td>{{$table}}</td>
              <td style="text-align: center;">{{$fatores[$i]}}</td>
              <td style="color:red; text-align: center;">{{number_format($fatores[$i] * 100 / array_sum($fatores), 2)}}</td>
            </tr>
            @php $i++; @endphp
          @endforeach
           
        </table>

      </div>
        
      <br>
    </div>
  </div>
</body>
<script>

</script>

</html>