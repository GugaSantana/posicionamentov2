@extends('adminlte::page')

@section('content')

<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
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
</style>
<div class="card card-primary">
    <div class="card-header">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3>
            <center>INSTRUMENTO 11</center>
        </h3>
        <h3>
            <center>DEFINIÇÃO DO PERFIL DO CLIENTE IDEAL (IDEAL CUSTOMER PROFILE)</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>
    </div>
    <div class="card-body">

                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                        <p class="fonte18">O Cliente Ideal é aquele que tem o perfil de quem realmente precisa comprar de você.</p>
                        <p class="fonte18">Você deve definir as características que um cliente deve ter, para que você consiga vender para ele com maior facilidade.</p>
                        <p class="fonte18">Este Instrumento tem por objetivo ajudar você a identificar o Perfil de seu Cliente Ideal de maneira estruturada.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->

                        <p class="fonte18">Para definir o Perfil do Cliente Ideal responda às seguintes questões:</p>
                        <p class="fonte18">Em cada questão, escolha uma posição na escala apresentada.</p>
                        <p class="fonte18"><b>Escolha dez clientes atuais com os quais você gosta de fazer negócios e com os quais faz bons negócios.</b></p>

                    </div>

                    <div class="col-12">
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="/instrumento/11/pj">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 100px">Clientes Escolhidos</th>
                                        </tr>
                                        </thead>
                                        @for($i=0;$i<10;$i++)
                                            <tr>
                                                <td style="font-size: 18px; vertical-align: middle;">Cliente {{$i+1}}: <input style="width: 100%;" type="text" name="cliente[]" @if($i < 5) required @endif></td>
                                            </tr>
                                        @endfor
                                    </table>
                                </div>
                            </div>

                            <p class="fonte18">Avalie o perfil desses clientes, conforme as características que serão apresentadas.</p>
                            <p class="fonte18">Na escala de 1 a 10, assinale em que posição você se situa:</p>
                            <br>

                            <p class="fonte18"><b>1 – Segmentação</b></p>
                            <p class="fonte18">Posição de segmentação da maioria dos 10 clientes selecionados.</p>

                            <!-- Questionário 1 -->
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Não segmento os meus clientes</th>
                                            <th colspan=4 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Segmento os meus clientes de maneira intuitiva</th>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Faço uma segmentação profissional</th>
                                        </tr>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">{{$i}}</th>
                                            @endfor
                                        </tr>
                                        </thead>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" required name="segmento" id="segmento{{$i}}" value="{{$i}}" required>
                                                    <label style="cursor: pointer" class="custom-control-label" for="segmento{{$i}}"></label>
                                                </div>
                                            </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18"><b>2 – Volume de Vendas</b></p>
                            <p class="fonte18">O volume de vendas nestes clientes é:</p>

                            <!-- Questionário 2 -->
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Baixo</b><br>É difícil vender para eles</th>
                                            <th colspan=4 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Médio</b></th>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Alto</b><br>Vendo para estes clientes com facilidade</th>
                                        </tr>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">{{$i}}</th>
                                            @endfor
                                        </tr>
                                        </thead>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" required name="volume" id="volume{{$i}}" value="{{$i}}" required>
                                                    <label style="cursor: pointer" class="custom-control-label" for="volume{{$i}}"></label>
                                                </div>
                                            </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18"><b>3 – Facilidade para vender</b></p>
                            <p class="fonte18">A facilidade com que vendo a estes clientes é:</p>

                            <!-- Questionário 3 -->
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Baixo</b><br>É difícil vender para eles</th>
                                            <th colspan=4 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Médio</b></th>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Alto</b><br>Vendo para estes clientes com facilidade</th>
                                        </tr>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">{{$i}}</th>
                                            @endfor
                                        </tr>
                                        </thead>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" required name="facilidade" id="facilidade{{$i}}" value="{{$i}}" required>
                                                    <label style="cursor: pointer" class="custom-control-label" for="facilidade{{$i}}"></label>
                                                </div>
                                            </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <p class="fonte18"><b>4 – Potencial para aumentar o faturamento</b></p>
                            <p class="fonte18">O potencial de aumento de faturamento nos 10 clientes selecionados é:</p>

                            <!-- Questionário 4 -->
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Baixo</b></th>
                                            <th colspan=4 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Médio</b></th>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Alto</b></th>
                                        </tr>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">{{$i}}</th>
                                            @endfor
                                        </tr>
                                        </thead>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" required name="potencial" id="potencial{{$i}}" value="{{$i}}" required>
                                                    <label style="cursor: pointer" class="custom-control-label" for="potencial{{$i}}"></label>
                                                </div>
                                            </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <p class="fonte18"><b>5 – Lucratividade</b></p>
                            <p class="fonte18">A lucratividade nestes clientes é:</p>

                            <!-- Questionário 5 -->
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Baixo</b></th>
                                            <th colspan=4 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Médio</b></th>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Alto</b></th>
                                        </tr>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">{{$i}}</th>
                                            @endfor
                                        </tr>
                                        </thead>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" required name="lucratividade" id="lucratividade{{$i}}" value="{{$i}}" required>
                                                    <label style="cursor: pointer" class="custom-control-label" for="lucratividade{{$i}}"></label>
                                                </div>
                                            </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <p class="fonte18"><b>6 – Concorrência</b></p>
                            <p class="fonte18">A concorrência nestes clientes, como fator que complica o processo de Vendas é:</p>

                            <!-- Questionário 6 -->
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Baixo</b></th>
                                            <th colspan=4 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Médio</b></th>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Alto</b></th>
                                        </tr>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">{{$i}}</th>
                                            @endfor
                                        </tr>
                                        </thead>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" required name="concorrencia" id="concorrencia{{$i}}" value="{{$i}}" required>
                                                    <label style="cursor: pointer" class="custom-control-label" for="concorrencia{{$i}}"></label>
                                                </div>
                                            </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <p class="fonte18"><b>7 – Tempo para fechar as Vendas</b></p>
                            <p class="fonte18">Considerando diversos fatores como a cultura da empresa, personalidade dos compradores, etc., a quantidade de tempo que necessito para realizar uma venda é:</p>

                            <!-- Questionário 7 -->
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Baixo</b></th>
                                            <th colspan=4 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Médio</b></th>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Alto</b></th>
                                        </tr>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">{{$i}}</th>
                                            @endfor
                                        </tr>
                                        </thead>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" required name="tempo" id="tempo{{$i}}" value="{{$i}}" required>
                                                    <label style="cursor: pointer" class="custom-control-label" for="tempo{{$i}}"></label>
                                                </div>
                                            </td>
                                            @endfor
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <p class="fonte18"><b>8 – Frequência de Compra</b></p>
                            <p class="fonte18">A frequência com que estes clientes compram é:</p>

                            <!-- Questionário 8 -->
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Baixo</b></th>
                                            <th colspan=4 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Médio</b></th>
                                            <th colspan=3 style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px"><b>Alto</b></th>
                                        </tr>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">{{$i}}</th>
                                            @endfor
                                        </tr>
                                        </thead>
                                        <tr>
                                            @for($i=1; $i <= 10; $i++)
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" required name="frequencia" id="frequencia{{$i}}" value="{{$i}}" required>
                                                    <label style="cursor: pointer" class="custom-control-label" for="frequencia{{$i}}"></label>
                                                </div>
                                            </td>
                                            @endfor
                                        </tr>
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
</script>
<script>window.onload = function(){history.go(+1)};</script>
@endpush