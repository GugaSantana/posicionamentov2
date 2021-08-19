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
      <img src="{{ asset('img/botton_ts.png') }}" style="float: right;width: 8%;margin-top: 2%;">

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 7</h3>
      <h3 style="color: #35408f;text-align: center;">MEU CONHECIMENTO DOS PRODUTOS CONCORRENTES</h3>

      <div class="col-md-12">
        <!-- Tabela 1 -->
        <h3 style="color: #35408f;">A – Estados do Ego que prevalecem</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Estados do Ego</td>
            <td style="text-align: center;vertical-align: middle;">Média dos Valores Individuais</td>
            <td style="text-align: center;vertical-align: middle;">Média dos Valores Individuais em Percentual</td>
          </tr>
          </thead>
            @php
              $questions = [  'Pai',
                              'Adulto',
                              'Criança'];
              $soma = $data[0]+$data[1]+$data[2];
            @endphp

            @for($i=0; $i<3; $i++)
            <tr>
              <td>{!! $questions[$i] !!}</td>
              <td style="color:red; text-align: center;">{{ $data[$i] }}</td>
              <td style="color:red; text-align: center;">{{ number_format($data[$i] * 100 / $soma, 2) }}</td>
            </tr>
            @endfor
        </table>

        <br>

        <!-- Tabela 2 -->
        <h3 style="color: #35408f;">B – Desvios da Versatilidade dos Estados do Ego</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Estados do Ego</td>
            <td style="text-align: center;vertical-align: middle;">Média dos Valores Individuais</td>
            <td style="text-align: center;vertical-align: middle;">Desvios de Versatilidade</td>
          </tr>
          </thead>
            @php
              $questions = [  'Pai',
                              'Adulto',
                              'Criança']
            @endphp

            @for($i=0; $i<3; $i++)
            <tr>
              <td>{!! $questions[$i] !!}</td>
              <td style="color:red; text-align: center;">{{ $data[$i] }}</td>
              <td style="color:red; text-align: center;">{{$data[$i]-50}}</td>
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