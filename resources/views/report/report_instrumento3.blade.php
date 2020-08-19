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

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 3</h3>
      <h3 style="color: #35408f;text-align: center;">MEU PERFIL COMO PROFISSIONAL DE VENDAS</h3>

      <div class="col-md-12">
        <!-- Tabela 1 -->
        <h3 style="color: #35408f;">A – Competências em Vendas Consultivas dos participantes</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
              <td rowspan="2" style="min-width: 27em; text-align: center;vertical-align: middle;"><b>COMPETÊNCIAS</b></td>
              <td colspan="10" style="text-align: center;"><b>PARTICIPANTES POR INTERVALO DA ESCALA</b></td>
          </tr>
          <tr style="text-align: center;">
              <td style="width: 3%">1</td>
              <td style="width: 3%">2</td>
              <td style="width: 3%">3</td>
              <td style="width: 3%">4</td>
              <td style="width: 3%">5</td>
              <td style="width: 3%">6</td>
              <td style="width: 3%">7</td>
              <td style="width: 3%">8</td>
              <td style="width: 3%">9</td>
              <td style="width: 3%">10</td>
          </tr>
          </thead>
            @php
              $questions = [  '1. Conhecimento do Produto.',
                              '2. Conhecimento dos Negócios do cliente.',
                              '3. Conhecimento do Mercado.',
                              '4. Informações sobre a concorrência.',
                              '5. Inteligência Emocional.',
                              '6. Habilidade para ouvir.',
                              '7. Perguntar, Sondar, Estimular.',
                              '8. Sensibilidade.',
                              '9. Cooperação.',
                              '10. Persuasão.',
                              '11. Capacidade de Análise.',
                              '12. Desenvolvimento de Estratégia e Planejamento.',
                              '13. Identificação de Oportunidades.',
                              '14. Organização Pessoal e Administração do Tempo.',
                              '15. Criatividade na Solução de Problemas.',
                              '16. Persistência no Seguimento.',
                              '17. Serviço como Fator Diferencial.',
                              '18. Ajuste das Propostas.',
                              '19. Confiança Pessoal.']
            @endphp

            @for($i=0; $i<19; $i++)
            <tr>
                <td>{!! $questions[$i] !!}</td>
                <td style="color:red">{{!empty($escala[$i][1]) ? $escala[$i][1] : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][2]) ? $escala[$i][2] : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][3]) ? $escala[$i][3] : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][4]) ? $escala[$i][4] : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][5]) ? $escala[$i][5] : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][6]) ? $escala[$i][6] : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][7]) ? $escala[$i][7] : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][8]) ? $escala[$i][8] : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][9]) ? $escala[$i][9] : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][10]) ? $escala[$i][10] : '' }}</td>
            </tr>
            @endfor
        </table>
      </div>
        
      <br>

      <div class="col-md-12 table-responsive">
        <!-- Tabela 2 -->
        <h3 style="color: #35408f;">B – Competências em Vendas Consultivas dos participantes em valores percentuais</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
              <td rowspan="2" style="min-width: 27em; text-align: center;vertical-align: middle;"><b>COMPETÊNCIAS</b></td>
              <td colspan="10" style="text-align: center;"><b>PARTICIPANTES POR INTERVALO DA ESCALA (EM PERCENTUAL)</b></td>
          </tr>
          <tr style="text-align: center;">
              <td style="width: 3%">1</td>
              <td style="width: 3%">2</td>
              <td style="width: 3%">3</td>
              <td style="width: 3%">4</td>
              <td style="width: 3%">5</td>
              <td style="width: 3%">6</td>
              <td style="width: 3%">7</td>
              <td style="width: 3%">8</td>
              <td style="width: 3%">9</td>
              <td style="width: 3%">10</td>
          </tr>
          </thead>
            @php
              $questions = [  '1. Conhecimento do Produto.',
                              '2. Conhecimento dos Negócios do cliente.',
                              '3. Conhecimento do Mercado.',
                              '4. Informações sobre a concorrência.',
                              '5. Inteligência Emocional.',
                              '6. Habilidade para ouvir.',
                              '7. Perguntar, Sondar, Estimular.',
                              '8. Sensibilidade.',
                              '9. Cooperação.',
                              '10. Persuasão.',
                              '11. Capacidade de Análise.',
                              '12. Desenvolvimento de Estratégia e Planejamento.',
                              '13. Identificação de Oportunidades.',
                              '14. Organização Pessoal e Administração do Tempo.',
                              '15. Criatividade na Solução de Problemas.',
                              '16. Persistência no Seguimento.',
                              '17. Serviço como Fator Diferencial.',
                              '18. Ajuste das Propostas.',
                              '19. Confiança Pessoal.']
            @endphp

            @for($i=0; $i<19; $i++)
            <tr>
                <td>{!! $questions[$i] !!}</td>
                <td style="color:red">{{!empty($escala[$i][1]) ? number_format($escala[$i][1] * 100 / $total, 2) : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][2]) ? number_format($escala[$i][2] * 100 / $total, 2) : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][3]) ? number_format($escala[$i][3] * 100 / $total, 2) : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][4]) ? number_format($escala[$i][4] * 100 / $total, 2) : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][5]) ? number_format($escala[$i][5] * 100 / $total, 2) : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][6]) ? number_format($escala[$i][6] * 100 / $total, 2) : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][7]) ? number_format($escala[$i][7] * 100 / $total, 2) : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][8]) ? number_format($escala[$i][8] * 100 / $total, 2) : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][9]) ? number_format($escala[$i][9] * 100 / $total, 2) : '' }}</td>
                <td style="color:red">{{!empty($escala[$i][10]) ? number_format($escala[$i][10] * 100 / $total, 2) : '' }}</td>
            </tr>
            @endfor
        </table>
      </div>

      <br>

      <div class="col-md-12 table-responsive">
        <!-- Tabela 3 -->
        <h3 style="color: #35408f;">3 – Ranking do Nivel de criticidade das competências</h3>

        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
              <td style="text-align: center;vertical-align: middle;"><b>COMPETÊNCIAS</b></td>
              <td style="text-align: center;"><b>Ranking</b></td>
          </tr>
          </thead>
            @php
              $questions = [  '1. Conhecimento do Produto.',
                              '2. Conhecimento dos Negócios do cliente.',
                              '3. Conhecimento do Mercado.',
                              '4. Informações sobre a concorrência.',
                              '5. Inteligência Emocional.',
                              '6. Habilidade para ouvir.',
                              '7. Perguntar, Sondar, Estimular.',
                              '8. Sensibilidade.',
                              '9. Cooperação.',
                              '10. Persuasão.',
                              '11. Capacidade de Análise.',
                              '12. Desenvolvimento de Estratégia e Planejamento.',
                              '13. Identificação de Oportunidades.',
                              '14. Organização Pessoal e Administração do Tempo.',
                              '15. Criatividade na Solução de Problemas.',
                              '16. Persistência no Seguimento.',
                              '17. Serviço como Fator Diferencial.',
                              '18. Ajuste das Propostas.',
                              '19. Confiança Pessoal.']
            @endphp

            @for($i=0; $i<19; $i++)
            <tr>
                <td>{!! $questions[$i] !!}</td>
                @php
                $sum = 0;
                  for($cont = 1; $cont <= 10; $cont++){
                    $sum += $escala[$i][$cont] * $cont;
                  }
                @endphp
                <td style="color:red">{{!empty($sum) ? number_format($sum/$total, 2) : '' }}</td>
            </tr>
            @endfor
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
      
</script>

</html>