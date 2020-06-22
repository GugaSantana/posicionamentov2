<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Posicionamento - Auto Gestão</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- include summernote css/js-->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-pt-BR.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#oque').summernote({
        @if(!empty($autogestao) && empty($autogestao->oque)) height: 200, @endif
        lang: 'pt-BR',
      });
      $('#como').summernote({
        @if(!empty($autogestao) && empty($autogestao->como)) height: 200, @endif
        lang: 'pt-BR',
      });
      $('#quando').summernote({
        @if(!empty($autogestao) && empty($autogestao->quando)) height: 200, @endif
        lang: 'pt-BR',
      });
    });
  </script>

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
      font-size: 18px;
    }

    p {
      margin: 0 10px 10px;
    }

    td {
      padding: 10px;
    }
  </style>
</head>

<body style="background-image: url('posicionamento/public/img/img3.png');background-repeat: no-repeat;
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
      <img src="../posicionamento/public/img/logo_capa.png" style="float: right;width: 30%;margin-top: 2%;">

      <h2 style="color: #35408f; text-align: center;margin-top: 10%;">{{$instrumento[1]}}
        <h2>

          <h3 style="color: #35408f; text-align: center">{{$instrumento[2]}}</h3>
          <br>


          <form name="formulario" role="form" method="post" action="edit">
            {!! csrf_field() !!}
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td style="text-align: center;vertical-align: middle;">
                    <p>PLANO DE AÇÃO PARA IMPLANTAR AS RECOMENDAÇÕES</p>
                  </td>
                </tr>
                <tr>
                  <td class="bg-primary" style="text-align: center;vertical-align: middle;max-width: 9em;">
                    <p>ETAPAS (O QUE FAZER)</p>
                  </td>

                </tr>
                <tr>
                  <td>

                    <textarea id="oque" name="oque">
                      @if(!empty($autogestao)){{$autogestao->oque}}@endif
                    </textarea>

                  </td>

                <tr>
                  <td class="bg-primary" style="text-align: center;vertical-align: middle;max-width: 9em;">
                    <p>COMO FAZER</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <textarea id="como" name="como">
                      @if(!empty($autogestao)){{$autogestao->como}}@endif
                    </textarea>
                  </td>
                </tr>
                <tr>
                  <td class="bg-primary" style="text-align: center;vertical-align: middle;max-width: 9em;">
                    <p>QUANDO DEVO CONCLUIR AS RECOMENDAÇÕES</p>
                  </td>
                </tr>

                <tr>
                  <td>
                    <textarea id="quando" name="quando">
                      @if(!empty($autogestao)){{$autogestao->quando}}@endif
                    </textarea>
                  </td>

                </tr>
              </tbody>
            </table>

            <br>
            <input name="instrumento" value="{{$instrumento[0]}}" hidden>
            <input name="acao" id="acao" hidden>
            <center>
              @if(!empty($autogestao) && $autogestao->a == true)
              <a href="/autogestao" class="btn btn-primary" style="font-size: 18px"> Voltar </a>
              @else
              <button type="submit" class="btn btn-primary" onclick="document.getElementById('acao').value = 'edit'" style="font-size: 18px"> Plano de Ação em aberto </button>
              <button type="submit" class="btn btn-primary" onclick="document.getElementById('acao').value = 'finish'" style="font-size: 18px"> Plano de Ação concluído </button>
              @endif
            </center>
          </form>
          <br>
    </div>
  </div>
</body>

</html>