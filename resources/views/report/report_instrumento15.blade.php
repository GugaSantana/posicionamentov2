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
      <img src="../posicionamento/public/img/logo_capa.png" style="float: left;width: 30%;margin-top: 2%;">
      <img src="../posicionamento/public/img/selo_top_seller.png" style="float: right;width: 12%;">

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 15</h3>
      <h3 style="color: #35408f;text-align: center;">DESENVOLVIMENTO DA QUANTIDADE E QUALIDADE DOS MEUS ARGUMENTOS DE VENDAS (FORÇAS PROPULSORAS)</h3>

      <br>

      <div class="col-md-12">
        <!-- Tabela 1 -->

        @php
          $forcas = [
                      'F1- Benefício',
                      'F2- Nosso Produto',
                      'F3- Produto Concorrente',
                      'F4- Prejuízo',
                      'F5- Proposta',
                      'F6- Prestígio',
                      'F7 - História',
                      'F8- Explicação',
                      'F9- Ambiente',
                      'F10- Prestígio Pessoal',
                      'F11- Apelo para o Narcisismo',
                      'F12- Segurança',
                      'F13- Serviço',
                      'F14- Contato',
                      'F15- Pergunta',
                      'F16- Comando',
                      'F17- O Fator Gerenciador'
                    ]
        @endphp

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;min-width: 20em;">Forças Propulsoras</td>
            <td style="text-align: center;vertical-align: middle;">Quantidade de Argumentos por Força Propulsora</td>
            <td style="text-align: center;vertical-align: middle;">Percentual de Argumentos por Força Propulsora</td>
          </tr>          
          </thead>
          @for($i=0; $i < 17; $i++)
            <tr>
              <td>{{$forcas[$i]}}</td>
              <td style="color:red; text-align: center;">{{$frequencia[$i]}}</td>
              <td style="color:red; text-align: center;">{{number_format($frequencia[$i] * 100 / $totalFreq, 2)}}</td>
            </tr>
          @endfor
           
        </table>

        <br>

        <h3 style="color: #35408f;">Quantidade Média de Argumentos por participante</h3>
        <table class="table table-bordered">
            <tr><td>{{number_format($totalFreq / $total, 2)}}</td></tr>
        </table>
      </div>
        
      <br>
    </div>
  </div>
</body>
<script>

</script>

</html>