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
    width: 2em;
    vertical-align: middle;
    border-radius: .375rem;
    background-color: white;
    text-align-last: center;
    -webkit-appearance: none;
    -moz-appearance: none;
}




</style>

<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>INSTRUMENTO 14</center>
        </h3>
        <h3>
            <center>MATRIZ PARA IDENTIFICAR CLIENTES PRIORITÁRIOS</center>
        </h3>
    </div>
    <div class="card-body">

                    <div class="col-12">
                        <p class="fonte18 center"><b>
                                Levantamento de Informações
                            </b></p>

                            <p class="fonte18">Com o instrumento anterior você recebeu as orientações técnicas para Qualificar Clientes Potenciais.</p>
                            <p class="fonte18">Este é o segundo instrumento da segunda etapa das Vendas Consultivas, que é a Qualificação dos Clientes Potenciais. É evidente que os clientes não têm o mesmo potencial de geração de receitas: não tem o mesmo valor.</p>
                            <p class="fonte18">Regularmente estabelecemos o valor ou a importância dos clientes através de um processo intuitivo ou baseado na experiência.</p>
                            <p class="fonte18">Este instrumento lhe permitirá avaliar de maneira técnica e quantitativa o valor e a verdadeira importância de cada um de seus clientes para que você possa administrar sua carteira de clientes com maior eficácia e produtividade, seguindo as recomendações que você receberá depois da interpretação dos resultados de suas respostas.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->


                        <p class="fonte18">Para responder este instrumento será utilizada a Matriz para Análise dos Clientes Prioritários.</p>
                        <p class="fonte18">Siga as seguintes instruções para seu preenchimento:</p>
                        <p class="fonte18">A – Na primeira coluna da Matriz para Análise dos Clientes Prioritários (denominada “Classificação Inicial”) registre os 12 clientes mais importantes da sua carteira, sendo o primeiro o mais importante, e registre os outros clientes numa seqüência decrescente de importância.</p>
                        <p class="fonte18">B – Após o registro dos seus 12 clientes mais importantes, na sequência, você irá preencher a Matriz pontuando para cada cliente um valor para cada um dos 12 fatores de avaliação apresentados. São eles: faturamento, crescimento, adaptação dos produtos, rentabilidade, capacidade financeira, concorrência, receptividade do cliente, conhecimento, dificuldade, recompensas, investimento pessoal e tempo</p>
                        <p class="fonte18">Para este preenchimento você irá se basear na Escala dos Fatores de Avaliação que vem logo abaixo da Matriz.</p>
                        <p class="fonte18">Na tabela, para cada um dos 12 fatores de avaliação dos clientes, você tem uma escala de 0 a 10 pontos.</p>
                        <p class="fonte18">Avalie cada cliente que você registrou na primeira coluna da Matriz em cada um desses 12 fatores.</p>
                        <p class="fonte18">Para isto comece pelo primeiro fator e atribua um valor entre 0 e 10 pontos para cada cliente. Feito isto repita o procedimento com o segundo fator, e assim sucessivamente até o 12º Fator.</p>
                        <p class="fonte18">Observe que no final do seu trabalho todos os clientes terão um valor para cada um dos 12 fatores.</p>


                       
                    </div>

                    <div></div>

                    @php

                    $titles = ['Faturamento', 'Crescimento', 'Adaptação dos produtos', 'Rentabilidade', 'Capacidade Financeira', 'Concorrência', 'Receptividade do Cliente', 'Conhecimento', 'Dificuldade', 'Recompensas', 'Investimento Pessoal', 'Tempo'];
                        
                    @endphp

                    <div class="col-12">
                        <br>
                        <p style="color: blue; text-align: center; font-size: 20px"><b>Matriz para Análise dos Clientes Prioritários</b></p>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/14">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-hover table-bordered" style="width: 100%">
                                        <thead>
                                        <tr>
                                            <th rowspan="2" style="font-size: 18px; text-align: center; vertical-align: middle;">CLIENTES</th>
                                            <th colspan="12" style="font-size: 18px; text-align: center; width: 100px">FATORES DE AVALIAÇÃO</th>
                                        </tr>
                                        <tr>
                                        @for($i=0;$i<12;$i++) 
                                            <td width="10px" style="font-size: 18px; text-align: center; vertical-align: middle;">{{$i+1}}</td>
                                        @endfor
                                        </tr>
                                        <tr>
                                            <td width="10px" style="font-size: 18px; text-align: center; vertical-align: middle;">Classificação inicial</td>
                                            @foreach($titles as $title)
                                                <td width="10px" class="verticalTableHeader" style="overflow: initial; font-size: 18px; text-align: center; vertical-align: middle;"><p style="font-size: 18px">{{$title}}</p></td>
                                            @endforeach
                                        </tr>
                                        </thead>
                                            @for($i=0;$i<12;$i++) 
                                                <tr>
                                                    <td width="10px" style="font-size: 18px; text-align: center; vertical-align: middle;"><input name="cliente[]" type="text" ></td>    
                                                @for($j=0;$j<12;$j++) 
                                                    <td width="10px" style="font-size: 18px; text-align: center">
                                                    <select class="select-custom" id="exampleFormControlSelect1" name="valor{{$i}}[]">
                                                        <option></option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>    
                                                </td>
                                                @endfor
                                                </tr>
                                            @endfor

                                    </table>
                                </div>

                            </div>

                            <br>

                            <table class="table table-hover table-bordered">
                                <thead class="bg-primary">
                                <tr>
                                    <th colspan="2" style="font-size: 18px; text-align: center; width: 100px">FATORES DE AVALIAÇÃO</th>
                                </tr>
                                </thead>
                                @for($i=1;$i<=6;$i++) 
                                <tr>
                                    <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                        <img src="../posicionamento/public/img/inst_14_{{$i}}.png" style="width: 100%;">
                                    </td>
                                    <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                        <img src="../posicionamento/public/img/inst_14_{{$i+6}}.png" style="width: 100%;">
                                    </td>
                                </tr>
                                @endfor
                                
                            </table>

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
</script>

@endpush