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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 6</h3>
      <h3 style="color: #35408f;text-align: center;">MATRIZ PARA AUMENTAR A PRODUTIVIDADE NAS VENDAS</h3>

      <div class="col-md-12 table-responsive">
        <!-- Tabela 1 -->
        <h3 style="color: #35408f;">A – Tempo demandado pelas Atividades Chaves</h3>

        @php
            $atividadesDesenvolvidas = [
              '1 – Prospecção de Clientes',
              '2 – Qualificação de Clientes',
              '3 – Planejamento, pré-venda',
              '4 – Apresentações, Negociações e Fechamento de Vendas',
              '5 – Follow up, Pós Venda',
              '6 – Capacitação técnica e Comportamental',
              '7 – Atividades Administrativas (reuniões,relatórios, solicitação de pedidos, Inputs ao CRM',
              '8 – Outras atividades',
              ]
        @endphp
        
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
              <td style="text-align: center;vertical-align: middle;"><b>ATIVIDADES</b></td>
              <td style="text-align: center;"><b>Percentual de Tempo Dedicado</b></td>
          </tr>
          </thead>
          @php
              $totalPercentual = array_sum($totalTempoAtividades);
          @endphp
          @foreach($totalTempoAtividades as $key => $value)
          <tr>
            <td>{{ $atividadesDesenvolvidas[$key] }}</td>
            <td style="color:red; text-align:center;">{{number_format($value * 100 / $totalPercentual, 2)}}</td>
          </tr>
          @endforeach
        </table>

        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- Tabela 2 -->
        <h3 style="color: #35408f;">B – Níveis de Contribuição (Produção) das Atividades Chaves</h3>
        
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
              <td style="text-align: center;vertical-align: middle;"><b>ATIVIDADES</b></td>
              <td style="text-align: center;"><b>Valores</b></td>
          </tr>
          </thead>
          @foreach($totalAtividadeBruta as $key => $value)
          <tr>
            <td>{{ $atividadesDesenvolvidas[$key] }}</td>
            <td style="color:red; text-align:center;">{{number_format($value / $total, 2)}}</td>
          </tr>
          @endforeach
        </table>

        <br>

        <!-- Tabela 3 -->
        <h3 style="color: #35408f;">C – Nível da Produtividade das Atividades Chaves</h3>
        
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
              <td style="text-align: center;vertical-align: middle;"><b>ATIVIDADES</b></td>
              <td style="text-align: center;"><b>Valores</b></td>
          </tr>
          </thead>
          @foreach($totalProdutividade as $key => $value)
          <tr>
            <td>{{ $atividadesDesenvolvidas[$key] }}</td>
            <td style="color:red; text-align:center;">{{number_format($value / $total, 2)}}</td>
          </tr>
          @endforeach
        </table>

        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- Tabela 4 -->
        <h3 style="color: #35408f;">D – Defasagem média entre a contribuição de todas as atividades desenvolvidas e o objetivo mais importante dos participantes</h3>
        
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
              <td style="text-align: center;vertical-align: middle;"><b>Objetivo Principal</b></td>
              <td style="text-align: center;"><b>Defasagem Média</b></td>
          </tr>
          </thead>
          
          <tr>
            <td class="bg-primary"></td>
            <td style="color:red; text-align:center;">{{$maiorDefasagem}}</td>
          </tr>
          
        </table>
        
        <br>

        <!-- Tabela 5 -->
        <h3 style="color: #35408f;">E – Defasagem média entre a contribuição de todas as atividades desenvolvidas e o objetivo menos importante dos participantes</h3>
        
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
              <td style="text-align: center;vertical-align: middle;"><b>Objetivo Menos Importante</b></td>
              <td style="text-align: center;"><b>Defasagem Média</b></td>
          </tr>
          </thead>
          
          <tr>
            <td class="bg-primary"></td>
            <td style="color:red; text-align:center;">{{$menorDefasagem}}</td>
          </tr>
          
        </table>
      </div>
        
      <br>
    </div>
  </div>
</body>
<script>
      
</script>

</html>