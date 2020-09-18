<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Posicionamento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        .flex-box {
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .container-box {
        background-color: #35408f;
        
        }

        .content-box {
        color: white;
        text-align: center;

        font-weight: bold;
        }

        .imgpos {
            position:absolute;
            left:50%;
            top:50%;
            margin-left:-280px;
            margin-top:-60px;
            width:560px;
            height: 120px;
          }

        @media screen and (max-width:860px) {
          .imgpos {
            position:absolute;
            left:50%;
            top:50%;
            margin-left:-150px;
            margin-top:-50px;
            width:300px;
            height: 100px;
          }
        }
        
    </style>
    @include('estilo')
  </head>
  <body >
  <img src="../posicionamento/public/img/logo_capa.png" class="imgpos">
    <!-- <div class="flex-box container-box">
        <div class="content-box">
        PROJETO PARA AUMENTAR SUAS VENDAS COM TECNOLOGIA DIGITAL, EM BASES PRÁTICAS, OBJETIVAS, QUANTITATIVAS E MENSURÁVEIS
        <br><br>
        <a href="/loginDemo" style="color:white;">DEMO</a>
        </div>
    </div> -->
    <div id="rodape">
        <!-- <a style="float:left; margin-left: 1%; color:white" class="btn btn-primary">Página Anterior</a> -->
        <a href="/intro" style="float:right; margin-right: 1%; color:white" class="seta-dir"><i></i></a> 
      </div>
  </body>
</html>