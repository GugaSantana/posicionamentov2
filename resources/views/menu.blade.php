<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Posicionamento</title>
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

    </style>
  </head>
  <body style="background-image: url('posicionamento/public/img/img1.png');background-repeat: no-repeat;
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

<br>
<br>
<br>
<br>
<br>

<center>
<a href="/intro" type="submit" class="btn btn-primary btn-lg " >Carta de boas vindas</a>
@if(in_array(\Auth::user()->role_id, [1, 2]))
<a href="/manual" type="submit" class="btn btn-primary btn-lg " >Guia do Usuário</a>
@endif
<a href="/introAcompanhamento" type="submit" class="btn btn-primary btn-lg " >Autogestão da Metodologia</a>
<a href="/inicioInstrumentos" type="submit" class="btn btn-primary btn-lg " >Instrumentos</a>
      </center>
<br>

<br>
 </div>
    </div>
  </body>
</html>