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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 8</h3>
      <h3 style="color: #35408f;text-align: center;">GERENCIAMENTO DO RELACIONAMENTO ATRAVÉS DA EXPOSIÇÃO E DO FEEDBACK</h3>

      <br>
      <!-- GRAFICO 1 -->
      <div class="col-md-12">
      <h3 style="color: #35408f;">A – Janela Corporativa de Exposição e Feedback</h3>
        <canvas id="grafico" width="400" height="400">
        </canvas>
      </div>

      <div class="col-md-12">
        <!-- Tabela 1 -->
        <h3 style="color: #35408f;">B – Quantidade de pessoas que tem um resultado de Feedback acima de 60.</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Valor Absoluto</td>
            <td style="text-align: center;vertical-align: middle;">Valor Percentual</td>
          </tr>
          </thead>
            <tr>
              <td style="color:red; text-align: center;">{{$feed60}}</td>
              <td style="color:red; text-align: center;">{{$feed60 * 100 / $total}}</td>
            </tr>
        </table>

        <br>

        <!-- Tabela 2 -->
        <h3 style="color: #35408f;">C – Quantidade de pessoas que tem um resultado de Exposição acima de 60.</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Valor Absoluto</td>
            <td style="text-align: center;vertical-align: middle;">Valor Percentual</td>
          </tr>
          </thead>
            <tr>
              <td style="color:red; text-align: center;">{{$expo60}}</td>
              <td style="color:red; text-align: center;">{{$expo60 * 100 / $total}}</td>
            </tr>
        </table>

        <br>

        <!-- Tabela 3 -->
        <h3 style="color: #35408f;">D – Quantidade de pessoas que tem uma janela menor que 25/25</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Valor Absoluto</td>
            <td style="text-align: center;vertical-align: middle;">Valor Percentual</td>
          </tr>
          </thead>
            <tr>
              <td style="color:red; text-align: center;">{{$janela25}}</td>
              <td style="color:red; text-align: center;">{{$janela25 * 100 / $total}}</td>
            </tr>
        </table>

        <br>

        <!-- Tabela 4 -->
        <h3 style="color: #35408f;">E – Quantidade de pessoas que tem uma janela maior que 70/70</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td style="text-align: center;vertical-align: middle;">Valor Absoluto</td>
            <td style="text-align: center;vertical-align: middle;">Valor Percentual</td>
          </tr>
          </thead>
            <tr>
              <td style="color:red; text-align: center;">{{$janela70}}</td>
              <td style="color:red; text-align: center;">{{$janela70 * 100 / $total}}</td>
            </tr>
        </table>

      </div>
        
      <br>
    </div>
  </div>
</body>
<script>
    var exposicao = {{$retExpo / 10}};
    var feedback = {{$retFeed / 10}};

    var size = 30;
    var canvas = document.getElementById('grafico');
    var pincel = canvas.getContext('2d');
    var margem = 20;

    pincel.beginPath();
    pincel.rect((size) + margem, (size) + margem, size * feedback, size * exposicao);
    pincel.fillStyle = "red";
    pincel.fill();

    pincel.beginPath();
    for (let i = 1; i < 11; i++) {
        for (let j = 1; j < 11; j++) {
            pincel.rect((size * i) + margem, (size * j) + margem, size, size);
        }
    }
    pincel.stroke();

    //Textos
    pincel.beginPath();
    pincel.font = (size / 2.25) + "px Arial";
    pincel.fillStyle = "black";
    pincel.textAlign = "center";

    let cont = 10;
    for (let i = 0; i < 10; i++) {
        pincel.fillText(cont, size * 2 + (size * i) + margem, size - (size / 6) + margem);
        cont += 10;
    }

    cont = 0;
    for (let i = 0; i < 11; i++) {
        pincel.fillText(cont, size - (size / 2) + margem, size + (size / 10) + size * i + margem);
        cont += 10;
    }

    // Seta lateral
    pincel.beginPath();
    pincel.moveTo(15, (size - 5) + margem);
    pincel.lineTo(15, (size * 2.8) + margem);
    pincel.lineTo(15, (size - 5) + 1 + margem);
    pincel.lineTo(15, (size * 2.8) + 1 + margem);
    pincel.lineTo(15, (size - 5) + 2 + margem);
    pincel.lineTo(15, (size * 2.8) + 2 + margem);
    pincel.lineTo(15, (size - 5) + 1 + margem);
    //setas
    /*pincel.lineTo(5, (size-5)+12);
    pincel.moveTo(15, (size-5)+1);
    pincel.lineTo(25, (size-5)+12);*/
    pincel.strokeStyle = "black";
    pincel.stroke();

    pincel.textAlign = "center";
    pincel.font = (size / 1.8) + "px Arial";
    pincel.fillStyle = "red";

    esp = 3.5;
    pincel.fillText("E", 15, (size * esp) + margem);
    esp += 0.7;
    pincel.fillText("X", 15, (size * esp) + margem);
    esp += 0.7;
    pincel.fillText("P", 15, (size * esp) + margem);
    esp += 0.7;
    pincel.fillText("O", 15, (size * esp) + margem);
    esp += 0.7;
    pincel.fillText("S", 15, (size * esp) + margem);
    esp += 0.7;
    pincel.fillText("I", 15, (size * esp) + margem);
    esp += 0.7;
    pincel.fillText("Ç", 15, (size * esp) + margem);
    esp += 0.7;
    pincel.fillText("Ã", 15, (size * esp) + margem);
    esp += 0.7;
    pincel.fillText("O", 15, (size * esp) + margem);
    esp += 0.2;

    pincel.beginPath();
    pincel.moveTo(15, (size * esp) + margem);
    pincel.lineTo(15, (size * 11) + margem);
    pincel.lineTo(15, (size * esp) + margem);
    pincel.lineTo(15, (size * 11) + margem);
    pincel.lineTo(15, (size * esp) + margem);
    pincel.lineTo(15, (size * 11) + margem);
    pincel.lineTo(15, (size * esp) + margem);
    //setas
    pincel.moveTo(15, (size * 11) + margem);
    pincel.lineTo(5, (size * 11) - 12 + margem);
    pincel.moveTo(15, (size * 11) + margem);
    pincel.lineTo(25, (size * 11) - 12 + margem);
    pincel.strokeStyle = "black";
    pincel.stroke();

    // Seta Top
    pincel.beginPath();
    pincel.moveTo(size * 1.5, (size * 0.6));
    pincel.lineTo(size * 4, (size * 0.6));

    pincel.strokeStyle = "black";
    pincel.stroke();

    pincel.textAlign = "center";
    pincel.font = (size / 1.8) + "px Arial";
    pincel.fillStyle = "red";

    esp = 4.5;
    pincel.fillText("F", size * esp, (size * 0.8));
    esp += 0.5;
    pincel.fillText("E", size * esp, (size * 0.8));
    esp += 0.5;
    pincel.fillText("E", size * esp, (size * 0.8));
    esp += 0.5;
    pincel.fillText("D", size * esp, (size * 0.8));
    esp += 0.5;
    pincel.fillText("B", size * esp, (size * 0.8));
    esp += 0.5;
    pincel.fillText("A", size * esp, (size * 0.8));
    esp += 0.5;
    pincel.fillText("C", size * esp, (size * 0.8));
    esp += 0.5;
    pincel.fillText("K", size * esp, (size * 0.8));
    esp += 0.4;

    pincel.beginPath();
    pincel.moveTo(size * esp, (size * 0.6));
    pincel.lineTo(size * 11.5, (size * 0.6));
    //setas
    pincel.moveTo(size * 11.5, (size * 0.6));
    pincel.lineTo((size * 11.5) - 12, (size * 0.6) + 10);
    pincel.moveTo(size * 11.5, (size * 0.6));
    pincel.lineTo((size * 11.5) - 12, (size * 0.6) - 10);
    pincel.strokeStyle = "black";
    pincel.stroke();
</script>

</html>