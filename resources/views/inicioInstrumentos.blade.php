@extends('adminlte::page')

@section('content')

<style>
  .card .table td,
  .card .table th {
    white-space: normal;
    background-color: #DCDCDC;
  }
</style>
<style type="text/css">
  .tg {
    border-collapse: collapse;
    border-spacing: 0;
  }

  .tg td {
    font-family: Arial, sans-serif;
    font-size: 14px;
    padding: 10px 5px;
    border-style: solid;
    border-width: 1px;
    overflow: hidden;
    word-break: normal;
    border-color: black;
  }

  .tg th {
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: normal;
    padding: 10px 5px;
    border-style: solid;
    border-width: 1px;
    overflow: hidden;
    word-break: normal;
    border-color: black;
  }

  .tg .tg-baqh {
    text-align: center;
    vertical-align: top
  }

  .tg .tg-0pky {
    border-color: inherit;
    text-align: left;
    vertical-align: top
  }

  .tg .tg-0lax {
    text-align: left;
    vertical-align: top
  }

  .card .table td,
  .card .table th {
    font-size: 15px
  }
</style>
<div class="card card-primary">
  
  <div class="card-body">

    <table border=1>
      <tr>
        <td colspan="2" style="padding: 20px; color: white;font-size: 20px;text-align: center; background-color: #35408f">
          ETAPAS DA METODOLOGIA E INSTRUMENTOS
        </td>
      </tr>
      <tr>
        <td style="padding: 20px; color: #35408f; text-align: center; background-color: #a9d2de">
          ETAPAS
        </td>
        <td style="padding: 20px; color: #35408f; text-align: center; background-color: #a9d2de">
          INSTRUMENTOS
        </td>
      </tr>
      <tr>
        <td style="padding: 20px; color: #35408f; font-weight: bold; text-align: center; background-color: #f2f7f9">
          A – PRECONDIÇÕES PARA AUMENTAR
          AS VENDAS
        </td>
        <td style="padding: 20px; background-color: #f2f7f9">
          1 – Meu Nível de Empreendedorismo<br>
          2 – Meus problemas prioritários para Aumentar as Vendas<br>
          3 – Meu perfil como profissional de Vendas<br>
          4 – Meu conhecimento da linha de produtos que vendo<br>
          5 – Meu conhecimento dos produtos concorrentes<br>
          6 – Matriz para aumentar minha Produtividade nas Vendas
        </td>
      </tr>
      <tr>
        <td style="padding: 20px; color: #35408f; font-weight: bold; text-align: center; background-color: #a9d2de">
          B – COMO AUMENTAR AS VENDAS ATRAVÉS DAS TÉCNICAS DE VENDAS CONSULTIVAS
        </td>
        <td style="padding: 20px; background-color: #a9d2de">
          <font style="color: #35408f"><b>Gerenciamento do Campo Psicológico</b></font><br>
          7 – Gerenciamento do relacionamento através dos Estados do Ego.<br>
          8 – Gerenciamento do relacionamento através da Exposição e do Feedback<br>
          9 – Gerenciamento do relacionamento utilizando os Canais Neurolinguísticos<br>
          10 – Gerenciamento do relacionamento através da Inteligência Emocional<br>
          <p style="color: #35408f; font-family: Arial; font-weight: bold; padding-top: 2%; margin-block-end: 0px;">Aumento da Eficácia da Prospecção de Clientes</p>
          11 – Definição do perfil do Cliente Ideal <br>
          12 – Como fazer a Prospecção de Clientes<br>
          <p style="color: #35408f; font-family: Arial; font-weight: bold; padding-top: 2%; margin-block-end: 0px;">Aumento da Eficácia de Qualificação dos Clientes</p>
          13 – Qualificação dos Clientes Potenciais (Prospects)<br>
          14 – Matriz para identificar Clientes Prioritários<br>
          <p style="color: #35408f; font-family: Arial; font-weight: bold; padding-top: 2%; margin-block-end: 0px;">Aumento da Eficácia da Apresentação para os Clientes </p>
          15 – Desenvolvimento da Quantidade e Qualidade dos meus Argumentos de Vendas (Forças Propulsoras)<br>
          <p style="color: #35408f; font-family: Arial; font-weight: bold; padding-top: 2%; margin-block-end: 0px;">Aumento da Eficácia da Negociação com os Clientes</p>
          16 – Neutralização dos Obstáculos da Venda(Forças Restritivas)<br>
          <p style="color: #35408f; font-family: Arial; font-weight: bold; padding-top: 2%; margin-block-end: 0px;">Aumento da Eficácia do Fechamento das Vendas</p>
          17 – Técnicas de Fechamento de Vendas
        </td>
      </tr>
      <tr>
        <td style="padding: 20px; color: #35408f; font-weight: bold; text-align: center; background-color: #f2f7f9">
          C – A GESTÃO DAS VENDAS UTILIZANDO
          ESTA METODOLOGIA
        </td>
        <td style="padding: 20px; background-color: #f2f7f9">
          18 – O Funil de Vendas, com objetivos e métricas de avanço. <br>
          19 – Planos de Ação quantitativos para alcançar as Metas de Vendas<br>
          20 – O Relatório de Progresso
        </td>
      </tr>
    </table>














  </div>
</div>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush