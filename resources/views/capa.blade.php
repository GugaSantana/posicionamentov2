<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Posicionamento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        width: 100%;
        font-size: 34px;
        }

        #rodape {
        width: 34%;
        position: absolute;
        bottom: 0;
        left: 60%;
        background-color: #5993ce;
        }

        #rodape img {
            width: 100%;
            /* height: 100px; */
            position: absolute;
            bottom: 0;
            left: 0;
            object-fit: cover; /* classe pra deixa a imagem com a proporção correta e não ficar achatada */
        }

        footer.fixar-rodape{
          /* border-top: 1px solid #333; */
          bottom: 0;
          left: 0;
          height: 15%;
          position: fixed;
          width: 100%;
          background-color: #5993ce;
        }

        .imgpos {
            width: 25%;
            float: right;
            margin-right: 2%;
          }

        @media screen and (max-width:800px) {
          .imgpos {
            width: 50%;
            float: right;
            margin-right: 2%;
          }

          .container-box {
            height: 200px;
          }

          .content-box {
            font-size: 24px;
          }
        }

        @media screen and (max-width:500px) {
          .imgpos {
            width: 80%;
            margin-right: 2%;
          }
        }

        .selo {
          width: 20%;
          margin-left: 80%;
          position: fixed;
        }

    </style>
  </head>
  <body style="background-repeat: no-repeat;
  background-attachment: fixed;background-size: 100% 100%;font-family: arial; background-color: #35408f">
<img src="{{ asset('img/botton_ts.png') }}" class="selo">
<br>
<br>
  <p style="color: #5993ce; text-align: center; font-size: 36px; font-weight: bold;">PROGRAMA TOP SELLER</p>

    <div class="flex-box container-box">
        <div class="content-box">
        METODOLOGIA PARA AUMENTAR AS VENDAS,<br> EM BASES OBJETIVAS, QUANTITATIVAS E MENSURÁVEIS,<br> ATRAVÉS DA INTERNET
        <br><br>
        <a href="/manualIntro" style="color:#ff8100;text-decoration: none;">ENTRAR</a>
        </div>
    </div>
    <footer class="fixar-rodape">
        <img src="../posicionamento/public/img/logo_texto_branco.png" class="imgpos">
    </footer>
  </body>
</html>