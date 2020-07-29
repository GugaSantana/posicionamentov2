@extends('adminlte::page')

@section('content')
<style>

</style>
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .verticalTableHeader {
    text-align:center;
    white-space:nowrap;
    g-origin:50% 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    
}
.verticalTableHeader p {
    margin:0 -999px;
    display:inline-block;
}
.verticalTableHeader p:before{
    content:'';
    width:0;
    padding-top:110%;/* takes width as reference, + 10% for faking some extra padding */
    display:inline-block;
    vertical-align:middle;
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

    /* The container must be positioned relative: */
/* The container must be positioned relative: */
.select-custom {
    position: relative;
    font-family: Arial;
    height: 2em;
    vertical-align: middle;
    border-radius: .375rem;
    background-color: white;
    text-align-last: center;
}

</style>
<div class="card card-primary">
    <div class="card-header">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3>
            <center>INSTRUMENTO 15</center>
        </h3>
        <h3>
            <center>AVALIAÇÃO DA QUANTIDADE E QUALIDADE DOS MEUS ARGUMENTOS DE VENDAS (FORÇAS PROPULSORAS)</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 15</center>
                </h3>
                <h3>
                    <center>AVALIAÇÃO DA QUANTIDADE E QUALIDADE DOS MEUS ARGUMENTOS DE VENDAS (FORÇAS PROPULSORAS)</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">
                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                        <p class="fonte18">Este é o instrumento que operacionaliza a terceira etapa das Vendas Consultivas: a etapa da APRESENTAÇÃO dos produtos para seus clientes.</p>
                        <p class="fonte18">Este instrumento tem por objetivo aumentar significativamente a quantidade e a qualidade de seus argumentos para aumentar seu poder de persuasão e facilitar o processo decisório de seus clientes.</p>
                        <p class="fonte18">Naturalmente, quanto mais e melhores argumentos de venda você tiver, mais eficaz e produtivo será seu desempenho, porque você estará aumentando seu poder de persuasão e estará influenciando a decisão de compra do cliente.</p>
                        <p class="fonte18">A metodologia apresenta uma série de Fatores de Argumentação que denominamos de Forças Propulsoras das Vendas.</p>
                        <p class="fonte18">O objetivo deste instrumento é avaliar o nível de desempenho atual que você apresenta nas Forças Propulsoras das Vendas.</p>
                        <p class="fonte18">Você receberá um relatório com seu nível de desempenho nas Forças Propulsoras e recomendações específicas lhe serão dadas para que você aumente o número de argumentos disponíveis para vender seus produtos.</p>
                        <p class="fonte18">Existe uma “Lógica Interna” entre as Forças Propulsoras que lhe será apresentada nas recomendações para potencializar ainda mais sua eficácia nas Vendas Consultivas.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->

                        <p class="fonte18">Escolha um produto que você comercializa e que você conhece muito bem: deve ser um produto com o qual você já tenha experiência de vendas.</p>
                        <p class="fonte18">A seguir, escreva como itens, de uma maneira breve, telegráfica, todos os argumentos que você tem para vender esse produto.</p>
                        <p class="fonte18">Numere os argumentos de 1 até x, sendo x o número do ultimo argumento apresentado.</p>
                        <p class="fonte18">Os números não representam ordem de importância dos argumentos, você não tem que fazer nenhuma classificação dos argumentos, só deve registrá-los</p>
                       
                    </div>

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/15_1">
                            {!! csrf_field() !!}
                            
                            <div class="row">
                            <p class="fonte18"><b>Produto escolhido:</b>
                            <input name="produto_escolhido" type="text"  required>
                            </p>
                            </div>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered fonte18">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">Meus Argumentos para Vender o Produto Escolhido</th>
                                        </tr>
                                        </thead>
                                        <tbody class="appendItens">
                                            <tr>
                                                <td style="font-size: 18px; vertical-align: middle; width: 600px">1 - <input name="argumentos[]" type="text" size="80%" required></td>
                                            </tr>
                                        </tbody>
                                        @php $idItem = 1 @endphp
                                        <tfoot>
                                            <tr><td style="border: none; text-align: right;">
                                                <input type="button" class="btn btn-success" onclick="addItem()" value="Adicionar Argumento">
                                            </td></tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            

                            <br>
                            
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary fonte18" type="submit">
                                    <span class="btn-inner--icon"><i class="fa fa-paper-plane"></i></span>
                                    <span class="btn-inner--text">Enviar formulário</span>
                                </button>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    function preenchimento(i) {
        digitado = document.getElementById("problema" + i).value;
        document.getElementById("problemaTexto" + i).innerHTML = digitado;
    }

    $(document).ready(function() {
        $("#number").keyup(function() {
            $("#number").val(this.value.match(/[0-9]*/));
        });
    });

    function SomenteNumero(e) {
        var tecla = (window.event) ? event.keyCode : e.which;
        if ((tecla > 48 && tecla < 54)) return true;
        else {
            if (tecla == 8 || tecla == 0) return true;
            else return false;
        }
    }

    var idItem = {{$idItem}}

  function addItem(){
    idItem++;
    $(".appendItens").append('\
        <tr>\
            <td style="font-size: 18px; vertical-align: middle; width: 600px">'+idItem+' - <input name="argumentos[]" type="text" size="80%" id="focus'+idItem+'"></td>\
        </tr>');
    document.getElementById("focus"+idItem).focus();
  }
</script>

@endpush