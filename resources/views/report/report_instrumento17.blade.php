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

    #bola{
        background: radial-gradient(circle at center,#f00 0%,#f00 0%,#f00 6px,rgba(0,0,0,0) 8px);
        
    }
    #bolaVerde{
        background: radial-gradient(circle at center,#008000 0%,#008000 0%,#008000 8px,rgba(0,0,0,0) 10px);
    }
    #bolaPreenchida{
        background: radial-gradient(circle at center,#f00 6px,#008000 0%,#008000 8px,rgba(0,0,0,0) 10px);
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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 17</h3>
      <h3 style="color: #35408f;text-align: center;">TÉCNICAS DE FECHAMENTO DA VENDA</h3>

      <br>

      <div class="col-md-12">
        <!-- Tabela 1 -->

        @php
          $tecnicas = [
                        '1- Fechamento Direto',
                        '2- Fechamento por Alternativas',
                        '3- Fechamento pela Oportunidade',
                        '4- Fechamento pelos Próximos Passos',
                        '5- Fechamento pela Balança',
                        '6- Fechamento pela Experimentação',
                        '7- Fechamento pelo Valor',
                        '8- Fechamento Experimental',
                        '9- Fechamento Induzido',
                        '10- Fechamento por Pergunta',
                        '11- Fechamento Por Sinais De Linguagem Corporal',
                        '12- Fechamento Natural'
                      ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td rowspan="2" style="text-align: center;vertical-align: middle;"></td>
            <td rowspan="2" style="text-align: center;vertical-align: middle;">TÉCNICAS DE FECHAMENTO DA VENDA</td>
            <td colspan="5" style="text-align: center;vertical-align: middle;">MÉDIA DAS RESPOSTAS</td>
          </tr>
          <tr>
            <td style="text-align: center;vertical-align: middle;">0</td>
            <td style="text-align: center;vertical-align: middle;">1</td>
            <td style="text-align: center;vertical-align: middle;">2</td>
            <td style="text-align: center;vertical-align: middle;">3</td>
            <td style="text-align: center;vertical-align: middle;">4</td>
          </tr>
          </thead>
            <tr>
              <td rowspan="12" style="text-align: center;vertical-align: middle;">TÉCNICAS HARD SELL</td>
            </tr>
              @for($i=0; $i<11; $i++)
              <tr>  
                <td>{{$tecnicas[$i]}}</td>
                <td @if($mediaResp[$i] == 0) id="bola" @endif></td>
                <td @if($mediaResp[$i] == 1) id="bola" @endif></td>
                <td @if($mediaResp[$i] == 2) id="bola" @endif></td>
                <td @if($mediaResp[$i] == 3) id="bola" @endif></td>
                <td @if($mediaResp[$i] == 4) id="bola" @endif></td>

              </tr>
              @endfor
            <tr><td colspan="7"></td></tr>
            <tr>
              <td style="text-align: center;vertical-align: middle;">TÉCNICA SOFT SELL</td>
              <td>{{$tecnicas[11]}}</td>
              <td @if($mediaResp[11] == 0) id="bolaVerde" @endif></td>
              <td @if($mediaResp[11] == 1) id="bolaVerde" @endif></td>
              <td @if($mediaResp[11] == 2) id="bolaVerde" @endif></td>
              <td @if($mediaResp[11] == 3) id="bolaVerde" @endif></td>
              <td @if($mediaResp[11] == 4) id="bolaVerde" @endif></td>
            </tr>

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