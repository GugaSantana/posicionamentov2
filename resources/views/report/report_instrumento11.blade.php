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
      <img src="{{ asset('img/botton_ts.png') }}" style="float: right;width: 8%;margin-top: 2%;">

      <h3 style="color: #35408f;text-align: center;margin-top: 10%;">INSTRUMENTO 11</h3>
      <h3 style="color: #35408f;text-align: center;">DEFINIÇÃO DO PERFIL DO CLIENTE IDEAL</h3>

      <br>
      
      <div class="col-md-12">
        <!-- TABELA 2 -->
        @php
          $table1 = [
            'Adolescentes 15 a 18 anos',
            'Adulto Jovem 19 a 35 anos',
            'Meia Idade 36 a 50 anos',
            'Maduros 50 a 60 anos',
            'Terceira Idade Acima de 60 anos'
            ]        
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">1 – Idade dos Clientes</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table1 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retIdade1[$i]}}</td>
                    <td style="color: red">{{number_format($retIdade1[$i] * 100 / array_sum($retIdade1), 2)}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table1 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retIdade2[$i]}}</td>
                    <td style="color: red">{{number_format($retIdade2[$i] * 100 / array_sum($retIdade2), 2)}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM TABELA 1 -->
        
        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- TABELA 2 -->
        @php
          $table2 = [
            'Homem',
            'Mulher'
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">2 – Sexo</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table2 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retSexo1[$i]}}</td>
                    <td style="color: red">{{number_format($retSexo1[$i] * 100 / array_sum($retSexo1), 2)}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table2 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retSexo2[$i]}}</td>
                    <td style="color: red">{{number_format($retSexo2[$i] * 100 / array_sum($retSexo2), 2)}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM DA TABELA 2 -->
        
        <br>

        <!-- TABELA 3 -->
        @php
          $table3 = [
              'Até 5 salários mínimos',
              'De 6 a 10 salários mínimos',
              'De 10 a 20 salários mínimos',
              'Acima de 20 salários mínimos'
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">3 – Renda dos Clientes</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table3 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retRenda1[$i]}}</td>
                    <td style="color: red">{{number_format($retRenda1[$i] * 100 / array_sum($retRenda1), 2)}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table3 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retRenda2[$i]}}</td>
                    <td style="color: red">{{number_format($retRenda2[$i] * 100 / array_sum($retRenda2), 2)}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM DA TABELA 3 -->
        
        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- TABELA 4 -->
        @php
          $table4 = [
              'Mora sozinho',
              'Não tem filhos',
              'Família pequena',
              'Família pequena: até 2 filhos',
              'Família grande Outras pessoas moram com o casal (sogros, tios,..)'
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">4 – Família dos Clientes (Ideal)</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table4 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retFamilia1[$i]}}</td>
                    <td style="color: red">{{array_sum($retFamilia1) != 0 ? number_format($retFamilia1[$i] * 100 / array_sum($retFamilia1), 2) : 0.00}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table4 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retFamilia2[$i]}}</td>
                    <td style="color: red">{{array_sum($retFamilia2) != 0 ? number_format($retFamilia2[$i] * 100 / array_sum($retFamilia2), 2) : 0.00}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM DA TABELA 4 -->

        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- TABELA 5 -->
        @php
          $table5 = [
              'Ensino Fundamental Incompleto',
              'Ensino Fundamental Completo',
              'Ensino Médio Incompleto',
              'Ensino Médio Completo',
              'Ensino Superior',
              'Pós Graduado'
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">5 – Nível Educacional dos Clientes (Ideal)</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table5 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retEscola1[$i]}}</td>
                    <td style="color: red">{{number_format($retEscola1[$i] * 100 / array_sum($retEscola1), 2)}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table5 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retEscola2[$i]}}</td>
                    <td style="color: red">{{number_format($retEscola2[$i] * 100 / array_sum($retEscola2), 2)}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM DA TABELA 5 -->

        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- TABELA 6 -->
        @php
          $table6 = [
            'Autônomos',
            'Empregados',
            'Trabalham no setor de Serviços',
            'Trabalham na Indústria',
            'Trabalho Intelectual',
            'Trabalho Manual'
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">6 – Profissão dos Clientes (Ideal)</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table6 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retTrabalho1[$i]}}</td>
                    <td style="color: red">{{number_format($retTrabalho1[$i] * 100 / array_sum($retTrabalho1), 2)}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table6 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retTrabalho2[$i]}}</td>
                    <td style="color: red">{{number_format($retTrabalho2[$i] * 100 / array_sum($retTrabalho2), 2)}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM DA TABELA 6 -->

        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- TABELA 7 -->
        @php
          $table7 = [
            'Zona Norte',
            'Zona Sul',
            'Centro',
            'Zona Oeste',
            'Zona Leste',
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">7 – Bairros onde se concentram os clientes (Ideal)</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table7 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retRegiao1[$i]}}</td>
                    <td style="color: red">{{number_format($retRegiao1[$i] * 100 / array_sum($retRegiao1), 2)}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table7 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retRegiao2[$i]}}</td>
                    <td style="color: red">{{number_format($retRegiao2[$i] * 100 / array_sum($retRegiao2), 2)}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM DA TABELA 7 -->

        <br>

        <!-- TABELA 8 -->
        @php
          $table8 = [
            'Alta concentração de habitantes',
            'Média concentração de habitantes',
            'Baixa concentração de habitantes'
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">8 – Meus melhores clientes se localizam em zonas com (Ideal)</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table8 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retHabitantes1[$i]}}</td>
                    <td style="color: red">{{number_format($retHabitantes1[$i] * 100 / array_sum($retHabitantes1), 2)}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table8 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retHabitantes2[$i]}}</td>
                    <td style="color: red">{{number_format($retHabitantes2[$i] * 100 / array_sum($retHabitantes2), 2)}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM DA TABELA 8 -->

        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- TABELA 9 -->
        @php
          $table9 = [
              'Alto',
              'Médio',
              'Baixo',
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">9 – Volume de compra dos clientes (Ideal)</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table9 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retVolumeCompra1[$i]}}</td>
                    <td style="color: red">{{number_format($retVolumeCompra1[$i] * 100 / array_sum($retVolumeCompra1), 2)}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table9 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retVolumeCompra2[$i]}}</td>
                    <td style="color: red">{{number_format($retVolumeCompra2[$i] * 100 / array_sum($retVolumeCompra2), 2)}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM DA TABELA 9 -->

        <br>

        <!-- TABELA 10 -->
        @php
          $table10 = [
              'Alta',
              'Média',
              'Baixa'
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">10 – Frequência de compra dos clientes (Ideal)</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table10 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retFrequenciaCompra1[$i]}}</td>
                    <td style="color: red">{{number_format($retFrequenciaCompra1[$i] * 100 / array_sum($retFrequenciaCompra1), 2)}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table10 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retFrequenciaCompra2[$i]}}</td>
                    <td style="color: red">{{number_format($retFrequenciaCompra2[$i] * 100 / array_sum($retFrequenciaCompra2), 2)}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM DA TABELA 10 -->

        <!-- NOVA FOLHA -->
        <div class="break"></div>

        <!-- TABELA 11 -->
        @php
          $table11 = [
              'Preço',
              'Qualidade',
              'Entrega Rápida',
              'Formas de Pagamento'
            ]
        @endphp
        <table class="table table-hover table-bordered">
          <thead class="bg-primary">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">11 – O que meus clientes valorizam mais (Ideal)</td>
          </tr>
          </thead>
          <tr>
            <td style="text-align: center;vertical-align: middle;">A – Quadro da Situação Atual</td>
            <td style="text-align: center;vertical-align: middle;">B – Quadro da Situação Proposta</td>
          </tr>
            
          <tr>
            <td style="text-align: center;">
            <!-- TABELA DA ESQUERDA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table11 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retValorCompra1[$i]}}</td>
                    <td style="color: red">{{number_format($retValorCompra1[$i] * 100 / array_sum($retValorCompra1), 2)}}</td>
                  </tr>
                  @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA ESQUERDA -->
            </td>
            <td style="text-align: center;">
            <!-- TABELA DA DIREITA -->
              <table class="table table-bordered">
                <thead class="bg-primary">
                <tr>
                  <td>Intervalos</td>
                  <td>Frequência de Respostas dos Participantes</td>
                  <td>Valor Percentual</td>
                </tr>
                </thead>
                @php $i=0; @endphp
                @foreach($table11 as $table)
                  <tr>
                    <td>{{$table}}</td>
                    <td style="color: red">{{$retValorCompra2[$i]}}</td>
                    <td style="color: red">{{number_format($retValorCompra2[$i] * 100 / array_sum($retValorCompra2), 2)}}</td>
                  </tr>
                @php $i++; @endphp
                @endforeach
              </table>
            <!-- FIM DA TABELA DA DIREITA -->
            </td>
          </tr>
        </table>
        <!-- FIM DA TABELA 11 -->
      </div>

      <br>
    </div>
  </div>
</body>
<script>
   
</script>

</html>