<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <meta charset="utf-8">
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
        font-size: 20px;
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
<img src="img/logo_capa.png" style="float: right;width: 30%;margin-top: 2%;"> 
        
<h2 style="color: #35408f;text-align: center;margin-top: 10%;">GUIA DO PROGRAMA TOP SELLER</h2>
<br>
<p>O objetivo deste Guia é que você tenha uma visão clara do contexto no qual se situam os 20 instrumentos da metodologia que você vai responder.</p>
<p>O guia está composto por estas quatro seções:</p>

<br>

<ol>
<li style="
    font-size: 17px;
    margin-bottom: 16px;
">APRESENTAÇÃO E FUNDAMENTAÇÃO DO PROJETO: 
PORQUE ESTE PROJETO É FUNDAMENTAL PARA SUA 
ATIVIDADE PROFISSIONAL</li>


<li style="
    font-size: 17px;
    margin-bottom: 16px;
">ESTRUTURA DA METODOLOGIA</li>


<li style="
    font-size: 17px;
    margin-bottom: 16px;
">ETAPAS DA METODOLOGIA E INSTRUMENTOS DE CADA
ETAPA</li>


<li style="
    font-size: 17px;
    margin-bottom: 16px;
">COMO IMPLEMENTAR ESTA METODOLOGIA</li>
</ol>

<br>

@include('paginacao', ['pagina' => '1'])

<br>

<center>
<a href="/manual" type="submit" class="btn btn-primary btn-lg " >Guia do Usuário</a>
<a href="/introAcompanhamento" type="submit" class="btn btn-primary btn-lg " >Autogestão da Metodologia</a>
<a href="/inicioInstrumentos" type="submit" class="btn btn-primary btn-lg " >Instrumentos</a>
</center>
<br>
 </div>
    </div>
  </body>
</html>