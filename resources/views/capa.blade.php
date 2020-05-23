<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
    <style>
        .flex-box {
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .container-box {
        background-color: #35408f;
        height: 300px;
        }

        .content-box {
        color: white;
        text-align: center;
        width: 18em;
        font-size: 34px;
        }

        #rodape {
        width: 34%;
        position: absolute;
        bottom: 0;
        left: 60%;
        }

        #rodape img {
            width: 100%;
            /* height: 100px; */
            position: absolute;
            bottom: 0;
            left: 0;
            object-fit: cover; /* classe pra deixa a imagem com a proporção correta e não ficar achatada */
        }
    </style>
  </head>
  <body style="background-repeat: no-repeat;
  background-attachment: fixed;background-size: 100% 100%;font-family: arial;">
    <br><br><br><br><br><br><br><br>
    <div class="flex-box container-box">
        <div class="content-box">
        PROJETO PARA AUMENTAR SUAS VENDAS COM TECNOLOGIA DIGITAL, EM BASES PRÁTICAS, OBJETIVAS, QUANTITATIVAS E MENSURÁVEIS
        <br><br>
        <a href="/loginDemo" style="color:#ff8100;text-decoration: none;">DEMO</a>
        </div>
    </div>
    <div id="rodape">
        <img src="img/logo_capa.png"/> 
    </div>
  </body>
</html>