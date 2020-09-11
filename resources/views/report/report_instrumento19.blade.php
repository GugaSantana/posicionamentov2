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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 19</h3>
      <h3 style="color: #35408f;text-align: center;">PLANO DE AÇÃO QUANTITATIVO PARA ALCANÇAR AS METAS DE VENDAS</h3>

      <br>

      <div class="col-md-12">
        <!-- Tabela 1 -->
        @php 
          $table = [
                      'O Que',
                      'Quando',
                      'Quem',
                      'Porque',
                      'Onde',
                      'Como',
                      'Quanto'
                    ];
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">ETAPAS DO PLANO DE AÇÃO</td>
            <td style="text-align: center;vertical-align: middle;">Média dos Desvios dos Participantes Em Ordem Decrescente</td>
          </tr>          
          </thead>
            
          @foreach($somaDesvios as $key => $desvio)
            <tr>
              <td>{{$table[$key]}}</td>
              <td style="color:red; text-align: center;">{{number_format($desvio / $total, 2)}}</td>
            </tr>
          @endforeach
           
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