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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 1</h3>
      <h3 style="color: #35408f;text-align: center;">MEU NIVEL DE EMPREENDEDORISMO</h3>

      <h3 style="color: #35408f;text-align: center;">A – Distribuição do Nível de Empreendedorismo de Equipes de Vendas</h3>
      <br>

      <!-- GRAFICO 1 -->
      <div class="col-md-6">
      <p style="color: green;text-align: center; font-weight: bold; text-decoration: underline; margin-bottom: -4%">Em Valores Absolutos</p>
        <canvas id="grafico" width="400" height="400">
        </canvas>
      </div>
      <!-- FIM DO GRAFICO 1 -->
      <!-- GRAFICO 2 -->
      <div class="col-md-6">
      <p style="color: green;text-align: center; font-weight: bold; text-decoration: underline; margin-bottom: -4%">Em Valores Percentuais</p>
        <canvas id="grafico2" width="400" height="400">
        </canvas>
      </div>
        <!-- FIM DO GRAFICO 2 -->
      <br>
      <div class="col-md-12">
        <br>
        <!-- Tabela 1 -->
        <h3 style="color: #35408f;text-align: center;">B – Ranking das posições de Empreendedorismo</h3>
        <table class="table table-bordered">
        <thead class="bg-primary">
          <th style="text-align: center">Nível Decrescente de Valores por Quadrante</th>
          <th style="text-align: center">Número de Participantes</th>
        </thead>
        <tr>
          <td>1 – Alta Visão – Alta Ação</td>
          <td style="text-align: center">{{$quadrante[0]}}</td>
        </tr>
        <tr>
          <td>2 – Média Visão – Alta Ação</td>
          <td style="text-align: center">{{$quadrante[1]}}</td>
        </tr>
        <tr>
          <td>3 – Baixa Visão - Alta Ação</td>
          <td style="text-align: center">{{$quadrante[2]}}</td>
        </tr>
        <tr>
          <td>4 – Alta Visão – Média Ação</td>
          <td style="text-align: center">{{$quadrante[3]}}</td>
        </tr>
        <tr>
          <td>5 – Média Visão – Média Ação</td>
          <td style="text-align: center">{{$quadrante[4]}}</td>
        </tr>
        <tr>
          <td>6 – Baixa Visão – Média Ação</td>
          <td style="text-align: center">{{$quadrante[5]}}</td>
        </tr>
        <tr>
          <td>7 – Média Visão – Baixa Ação</td>
          <td style="text-align: center">{{$quadrante[6]}}</td>
        </tr>
        <tr>
          <td>8 – Alta Visão – Baixa Ação</td>
          <td style="text-align: center">{{$quadrante[7]}}</td>
        </tr>
        <tr>
          <td>9 – Baixa Visão – Baixa Ação</td>
          <td style="text-align: center">{{$quadrante[8]}}</td>
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
            //Grafico 1
            var size = 30;
            var canvas = document.getElementById('grafico');
            var pincel = canvas.getContext('2d');
            var margem = 20;
            pincel.beginPath();
            for (let i = 1; i <= 11; i++) {
                for (let j = 1; j <= 11; j++) {
                    pincel.rect((size * i) + margem, size * j, size, size);
                }
            }

            pincel.stroke();

            pincel.beginPath();
            pincel.clearRect(size + margem + 1, size + 1, (size * 4) - 2, (size * 3) - 2);

            pincel.beginPath();
            pincel.clearRect(size + margem + 1, (size * 4) + 1, (size * 4) - 2, (size * 5) - 2);

            pincel.beginPath();
            pincel.clearRect(size + margem + 1, (size * 9) + 1, (size * 4) - 2, (size * 3) - 2);


            pincel.beginPath();
            pincel.clearRect((size * 5) + margem + 1, size + 1, (size * 4) - 2, (size * 3) - 2);

            pincel.beginPath();
            pincel.clearRect((size * 5) + margem + 1, (size * 4) + 1, (size * 4) - 2, (size * 5) - 2);

            pincel.beginPath();
            pincel.clearRect((size * 5) + margem + 1, (size * 9) + 1, (size * 4) - 2, (size * 3) - 2);


            pincel.beginPath();
            pincel.clearRect((size * 9) + margem + 1, size + 1, (size * 3) - 2, (size * 3) - 2);

            pincel.beginPath();
            pincel.clearRect((size * 9) + margem + 1, (size * 4) + 1, (size * 3) - 2, (size * 5) - 2);

            pincel.beginPath();
            pincel.clearRect((size * 9) + margem + 1, (size * 9) + 1, (size * 3) - 2, (size * 3) - 2);

            //Bolinha
            // pincel.beginPath();
            // pincel.arc(size + (size / 2) + (size * acao) + margem, (size * (11 - visao)) + (size / 2), size / 4, 0, 2 * Math.PI);
            // pincel.fillStyle = "red";
            // pincel.fill();

            //Linha até a bolinha
            // pincel.beginPath();
            // pincel.moveTo(size + (size / 2) + (size * acao) + margem, (size * (11 - visao)) + (size / 2));
            // pincel.lineTo(size + margem, (size * (11 - visao)) + (size / 2));
            // pincel.strokeStyle = "red";
            // pincel.stroke();

            //Linha até a bolinha
            // pincel.beginPath();
            // pincel.moveTo(size + (size / 2) + (size * acao) + margem, (size * (11 - visao)) + (size / 2));
            // pincel.lineTo(size + (size / 2) + (size * acao) + margem, size * 12);
            // pincel.strokeStyle = "red";
            // pincel.stroke();

            //Textos
            pincel.beginPath();
            pincel.font = (size / 2.25) + "px Arial";
            pincel.fillStyle = "black";

            for (let i = 0; i < 11; i++) {
                pincel.fillText(i, size + (size / 3) + (size * i) + margem, size * 12.5);
            }

            let j = 10;
            for (let i = 0; i < 11; i++) {
                pincel.fillText(i, size - (size / 1.5) + margem, size + (size / 1.5) + size * j);
                j--;
            }


            pincel.textAlign = "center";
            pincel.fillText('VISÃO ALTA', (size * 3) + margem, size * 2.2);
            pincel.fillText('AÇÃO BAIXA', (size * 3) + margem, size * 2.8);
            pincel.fillStyle = "red";
            @if(!empty($quadrante[0]))
            pincel.fillText('{{$quadrante[0]}}', (size * 3) + margem, size * 3.4);
            @endif
            pincel.fillStyle = "black";
            pincel.fillText('VISÃO ALTA', (size * 7) + margem, size * 2.2);
            pincel.fillText('AÇÃO MEDIA', (size * 7) + margem, size * 2.8);
            pincel.fillStyle = "red";
            @if(!empty($quadrante[1]))
            pincel.fillText('{{$quadrante[1]}}', (size * 7) + margem, size * 3.4);
            @endif
            pincel.fillStyle = "black";
            pincel.fillText('VISÃO ALTA', (size * 10.5) + margem, size * 2.2);
            pincel.fillText('AÇÃO ALTA', (size * 10.5) + margem, size * 2.8);
            pincel.fillStyle = "red";
            @if(!empty($quadrante[2]))
            pincel.fillText('{{$quadrante[2]}}', (size * 10.5) + margem, size * 3.4);
            @endif
            pincel.fillStyle = "black";
            pincel.fillText('VISÃO MÉDIA', (size * 3) + margem, size * 6.2);
            pincel.fillText('AÇÃO BAIXA', (size * 3) + margem, size * 6.8);
            pincel.fillStyle = "red";
            @if(!empty($quadrante[3]))
            pincel.fillText('{{$quadrante[3]}}', (size * 3) + margem, size * 7.4);
            @endif
            pincel.fillStyle = "black";
            pincel.fillText('VISÃO MÉDIA', (size * 7) + margem, size * 6.2);
            pincel.fillText('AÇÃO MÉDIA', (size * 7) + margem, size * 6.8);
            pincel.fillStyle = "red";
            @if(!empty($quadrante[4]))
            pincel.fillText('{{$quadrante[4]}}', (size * 7) + margem, size * 7.4);
            @endif
            pincel.fillStyle = "black";
            pincel.fillText('VISÃO MÉDIA', (size * 10.5) + margem, size * 6.2);
            pincel.fillText('AÇÃO ALTA', (size * 10.5) + margem, size * 6.8);
            pincel.fillStyle = "red";
            @if(!empty($quadrante[5]))
            pincel.fillText('{{$quadrante[5]}}', (size * 10.5) + margem, size * 7.4);
            @endif
            pincel.fillStyle = "black";
            pincel.fillText('VISÃO BAIXA', (size * 3) + margem, size * 10.2);
            pincel.fillText('AÇÃO BAIXA', (size * 3) + margem, size * 10.8);
            pincel.fillStyle = "red";
            @if(!empty($quadrante[6]))
            pincel.fillText('{{$quadrante[6]}}', (size * 3) + margem, size * 11.4);
            @endif
            pincel.fillStyle = "black";
            pincel.fillText('VISÃO BAIXA', (size * 7) + margem, size * 10.2);
            pincel.fillText('AÇÃO MÉDIA', (size * 7) + margem, size * 10.8);
            pincel.fillStyle = "red";
            @if(!empty($quadrante[7]))
            pincel.fillText('{{$quadrante[7]}}', (size * 7) + margem, size * 11.4);
            @endif
            pincel.fillStyle = "black";
            pincel.fillText('VISÃO BAIXA', (size * 10.5) + margem, size * 10.2);
            pincel.fillText('AÇÃO ALTA', (size * 10.5) + margem, size * 10.8);
            pincel.fillStyle = "red";
            @if(!empty($quadrante[8]))
            pincel.fillText('{{$quadrante[8]}}', (size * 10.5) + margem, size * 11.4);
            @endif
            pincel.fillStyle = "black";

            pincel.beginPath();
            pincel.moveTo(15, size - 5);
            pincel.lineTo(15, size * 10);
            pincel.lineTo(15, (size - 5) + 1);
            pincel.lineTo(15, (size * 10) + 1);
            pincel.lineTo(15, (size - 5) + 2);
            pincel.lineTo(15, (size * 10) + 2);
            pincel.lineTo(15, (size - 5) + 1);
            //setas
            pincel.lineTo(5, (size - 5) + 12);
            pincel.moveTo(15, (size - 5) + 1);
            pincel.lineTo(25, (size - 5) + 12);
            pincel.strokeStyle = "black";
            pincel.stroke();

            pincel.beginPath();
            pincel.rotate(-Math.PI / 2);
            pincel.textAlign = "center";
            pincel.font = (size / 1.8) + "px Arial";
            pincel.fillText("Visão", -330, size - 12);

            pincel.textAlign = "start";
            pincel.rotate(Math.PI / 2);

            pincel.beginPath();
            pincel.moveTo(110, size * 13);
            pincel.lineTo(size * 12.6, size * 13);
            //setas
            pincel.lineTo((size * 12.6) - 10, (size * 13) + 10);
            pincel.moveTo(size * 12.6, size * 13);
            pincel.lineTo((size * 12.6) - 10, (size * 13) - 10);
            pincel.stroke();

            //texto
            pincel.fillText("Ação", 60, size * 13.1);

            pincel.strokeStyle = "black";
            pincel.stroke();




            // Grafico 2
            var size = 30;
            var canvas2 = document.getElementById('grafico2');
            var pincel2 = canvas2.getContext('2d');
            var margem = 20;
            pincel2.beginPath();
            for (let i = 1; i <= 11; i++) {
                for (let j = 1; j <= 11; j++) {
                    pincel2.rect((size * i) + margem, size * j, size, size);
                }
            }

            pincel2.stroke();

            pincel2.beginPath();
            pincel2.clearRect(size + margem + 1, size + 1, (size * 4) - 2, (size * 3) - 2);

            pincel2.beginPath();
            pincel2.clearRect(size + margem + 1, (size * 4) + 1, (size * 4) - 2, (size * 5) - 2);

            pincel2.beginPath();
            pincel2.clearRect(size + margem + 1, (size * 9) + 1, (size * 4) - 2, (size * 3) - 2);


            pincel2.beginPath();
            pincel2.clearRect((size * 5) + margem + 1, size + 1, (size * 4) - 2, (size * 3) - 2);

            pincel2.beginPath();
            pincel2.clearRect((size * 5) + margem + 1, (size * 4) + 1, (size * 4) - 2, (size * 5) - 2);

            pincel2.beginPath();
            pincel2.clearRect((size * 5) + margem + 1, (size * 9) + 1, (size * 4) - 2, (size * 3) - 2);


            pincel2.beginPath();
            pincel2.clearRect((size * 9) + margem + 1, size + 1, (size * 3) - 2, (size * 3) - 2);

            pincel2.beginPath();
            pincel2.clearRect((size * 9) + margem + 1, (size * 4) + 1, (size * 3) - 2, (size * 5) - 2);

            pincel2.beginPath();
            pincel2.clearRect((size * 9) + margem + 1, (size * 9) + 1, (size * 3) - 2, (size * 3) - 2);

            //Bolinha
            // pincel2.beginPath();
            // pincel2.arc(size + (size / 2) + (size * acao) + margem, (size * (11 - visao)) + (size / 2), size / 4, 0, 2 * Math.PI);
            // pincel2.fillStyle = "red";
            // pincel2.fill();

            //Linha até a bolinha
            // pincel2.beginPath();
            // pincel2.moveTo(size + (size / 2) + (size * acao) + margem, (size * (11 - visao)) + (size / 2));
            // pincel2.lineTo(size + margem, (size * (11 - visao)) + (size / 2));
            // pincel2.strokeStyle = "red";
            // pincel2.stroke();

            //Linha até a bolinha
            // pincel2.beginPath();
            // pincel2.moveTo(size + (size / 2) + (size * acao) + margem, (size * (11 - visao)) + (size / 2));
            // pincel2.lineTo(size + (size / 2) + (size * acao) + margem, size * 12);
            // pincel2.strokeStyle = "red";
            // pincel2.stroke();

            //Textos
            pincel2.beginPath();
            pincel2.font = (size / 2.25) + "px Arial";
            pincel2.fillStyle = "black";

            for (let i = 0; i < 11; i++) {
                pincel2.fillText(i, size + (size / 3) + (size * i) + margem, size * 12.5);
            }

            j = 10;
            for (let i = 0; i < 11; i++) {
                pincel2.fillText(i, size - (size / 1.5) + margem, size + (size / 1.5) + size * j);
                j--;
            }


            pincel2.textAlign = "center";
            pincel2.fillText('VISÃO ALTA', (size * 3) + margem, size * 2.2);
            pincel2.fillText('AÇÃO BAIXA', (size * 3) + margem, size * 2.8);
            pincel2.fillStyle = "red";
            @if(!empty($quadrantePorc[0]))
            pincel2.fillText('{{number_format($quadrantePorc[0], 2)}}%', (size * 3) + margem, size * 3.4);
            @endif
            pincel2.fillStyle = "black";
            pincel2.fillText('VISÃO ALTA', (size * 7) + margem, size * 2.2);
            pincel2.fillText('AÇÃO MEDIA', (size * 7) + margem, size * 2.8);
            pincel2.fillStyle = "red";
            @if(!empty($quadrantePorc[1]))
            pincel2.fillText('{{number_format($quadrantePorc[1], 2)}}%', (size * 7) + margem, size * 3.4);
            @endif
            pincel2.fillStyle = "black";
            pincel2.fillText('VISÃO ALTA', (size * 10.5) + margem, size * 2.2);
            pincel2.fillText('AÇÃO ALTA', (size * 10.5) + margem, size * 2.8);
            pincel2.fillStyle = "red";
            @if(!empty($quadrantePorc[2]))
            pincel2.fillText('{{number_format($quadrantePorc[2], 2)}}%', (size * 10.5) + margem, size * 3.4);
            @endif
            pincel2.fillStyle = "black";
            pincel2.fillText('VISÃO MÉDIA', (size * 3) + margem, size * 6.2);
            pincel2.fillText('AÇÃO BAIXA', (size * 3) + margem, size * 6.8);
            pincel2.fillStyle = "red";
            @if(!empty($quadrantePorc[3]))
            pincel2.fillText('{{number_format($quadrantePorc[3], 2)}}%', (size * 3) + margem, size * 7.4);
            @endif
            pincel2.fillStyle = "black";
            pincel2.fillText('VISÃO MÉDIA', (size * 7) + margem, size * 6.2);
            pincel2.fillText('AÇÃO MÉDIA', (size * 7) + margem, size * 6.8);
            pincel2.fillStyle = "red";
            @if(!empty($quadrantePorc[4]))
            pincel2.fillText('{{number_format($quadrantePorc[4], 2)}}%', (size * 7) + margem, size * 7.4);
            @endif
            pincel2.fillStyle = "black";
            pincel2.fillText('VISÃO MÉDIA', (size * 10.5) + margem, size * 6.2);
            pincel2.fillText('AÇÃO ALTA', (size * 10.5) + margem, size * 6.8);
            pincel2.fillStyle = "red";
            @if(!empty($quadrantePorc[5]))
            pincel2.fillText('{{number_format($quadrantePorc[5], 2)}}%', (size * 10.5) + margem, size * 7.4);
            @endif
            pincel2.fillStyle = "black";
            pincel2.fillText('VISÃO BAIXA', (size * 3) + margem, size * 10.2);
            pincel2.fillText('AÇÃO BAIXA', (size * 3) + margem, size * 10.8);
            pincel2.fillStyle = "red";
            @if(!empty($quadrantePorc[6]))
            pincel2.fillText('{{number_format($quadrantePorc[6], 2)}}%', (size * 3) + margem, size * 11.4);
            @endif
            pincel2.fillStyle = "black";
            pincel2.fillText('VISÃO BAIXA', (size * 7) + margem, size * 10.2);
            pincel2.fillText('AÇÃO MÉDIA', (size * 7) + margem, size * 10.8);
            pincel2.fillStyle = "red";
            @if(!empty($quadrantePorc[7]))
            pincel2.fillText('{{number_format($quadrantePorc[7], 2)}}%', (size * 7) + margem, size * 11.4);
            @endif
            pincel2.fillStyle = "black";
            pincel2.fillText('VISÃO BAIXA', (size * 10.5) + margem, size * 10.2);
            pincel2.fillText('AÇÃO ALTA', (size * 10.5) + margem, size * 10.8);
            pincel2.fillStyle = "red";
            @if(!empty($quadrantePorc[8]))
            pincel2.fillText('{{number_format($quadrantePorc[8], 2)}}%', (size * 10.5) + margem, size * 11.4);
            @endif
            pincel2.fillStyle = "black";

            pincel2.beginPath();
            pincel2.moveTo(15, size - 5);
            pincel2.lineTo(15, size * 10);
            pincel2.lineTo(15, (size - 5) + 1);
            pincel2.lineTo(15, (size * 10) + 1);
            pincel2.lineTo(15, (size - 5) + 2);
            pincel2.lineTo(15, (size * 10) + 2);
            pincel2.lineTo(15, (size - 5) + 1);
            //setas
            pincel2.lineTo(5, (size - 5) + 12);
            pincel2.moveTo(15, (size - 5) + 1);
            pincel2.lineTo(25, (size - 5) + 12);
            pincel2.strokeStyle = "black";
            pincel2.stroke();

            pincel2.beginPath();
            pincel2.rotate(-Math.PI / 2);
            pincel2.textAlign = "center";
            pincel2.font = (size / 1.8) + "px Arial";
            pincel2.fillText("Visão", -330, size - 12);

            pincel2.textAlign = "start";
            pincel2.rotate(Math.PI / 2);

            pincel2.beginPath();
            pincel2.moveTo(110, size * 13);
            pincel2.lineTo(size * 12.6, size * 13);
            //setas
            pincel2.lineTo((size * 12.6) - 10, (size * 13) + 10);
            pincel2.moveTo(size * 12.6, size * 13);
            pincel2.lineTo((size * 12.6) - 10, (size * 13) - 10);
            pincel2.stroke();

            //texto
            pincel2.fillText("Ação", 60, size * 13.1);

            pincel2.strokeStyle = "black";
            pincel2.stroke();
        </script>

</html>