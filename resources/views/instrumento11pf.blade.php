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
                        <p class="fonte18">Você deve definir as características que um cliente deve ter para que você consiga vender para ele com maior facilidade.</p>
                        <p class="fonte18">Este instrumento tem por objetivo ajudar você a identificar o Perfil de seu Cliente Ideal de maneira estruturada.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->

                        <p class="fonte18">Para definir o Perfil do Cliente Ideal responda as seguintes questões:</p>
                        <p class="fonte18"><b>1 – Escolha dez clientes atuais com os quais você gosta de fazer negócios e com os quais faz bons negócios.</b></p>
                        <p class="fonte18">Leve em conta não só a questão da qualidade do relacionamento com seus clientes, mas também o volume que você vende para eles e a lucratividade (maiores clientes, os que compram com mais frequência, os que geram mais lucratividade etc).</p>

                    </div>

                    <div class="col-12">
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="/instrumento/11/pf">
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
                                                <td style="font-size: 18px; vertical-align: middle;">Cliente {{$i+1}}: <input style="width: 100%;" type="text" name="cliente[]" required></td>
                                            </tr>
                                        @endfor

                                    </table>
                                </div>

                            </div>

                            <br>

                            <p class="fonte18"><b>2 – Características Demográficas</b></p>
                            <p class="fonte18">Avalie o perfil desses clientes conforme as características demográficas que serão apresentadas</p>
                            <p class="fonte18">Em cada questão, escolha uma posição <b><u>onde se situa a maioria deles</u></b></p>
                            <br>
                            <p class="fonte18">2.1 – Idade dos Clientes (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Adolescentes<br>15 a 18 anos</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Adulto Jovem<br>19 a 35 anos</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Meia Idade<br>36 a 50 anos</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Maduros<br>50 a 60 anos</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Terceira Idade<br>Acima de 60 anos</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="idade" id="idade1" value="Adolescentes 15 a 18 anos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="idade1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="idade" id="idade2" value="Adulto Jovem 19 a 35 anos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="idade2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="idade" id="idade3" value="Meia Idade 36 a 50 anos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="idade3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="idade" id="idade4" value="Maduros 50 a 60 anos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="idade4"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="idade" id="idade5" value="Terceira Idade Acima de 60 anos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="idade5"></label>
                                            </div>


                                        </td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <p class="fonte18">2.2 – Sexo dos Clientes (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Homem</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Mulher</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="sexo" id="sexoM" value="Homem" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="sexoM"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="sexo" id="sexoF" value="Mulher" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="sexoF"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">2.3 – Renda Estimada dos Clientes (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Até 5 salários mínimos</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">De 6 a 10 salários mínimos</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">De 10 a 20 salários mínimos</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Acima de 20 salários mínimos</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="salario" id="salario1" value="Até 5 salários mínimos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="salario1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="salario" id="salario2" value="De 6 a 10 salários mínimos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="salario2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="salario" id="salario3" value="De 10 a 20 salários mínimos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="salario3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="salario" id="salario4" value="Acima de 20 salários mínimos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="salario4"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">2.4 – Família dos Clientes (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Mora sozinho</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Não tem filhos</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Família pequena</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Família pequena: até 2 filhos</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Família grande Outras pessoas moram com o casal (sogros, tios,..)</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="familia" id="familia1" value="Mora sozinho" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="familia1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="familia" id="familia2" value="Não tem filhos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="familia2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="familia" id="familia3" value="Família pequena" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="familia3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="familia" id="familia5" value="Família pequena até 2 filhos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="familia5"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="familia" id="familia6" value="Família grande Outras pessoas moram com o casal (sogros, tios,..)" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="familia6"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">2.5 – Nível Educacional dos Clientes (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Ensino Fundamental Incompleto</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Ensino Fundamental Completo</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Ensino Médio Incompleto</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Ensino Médio Completo</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Ensino Superior</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Pós Graduado</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola1" value="Ensino Fundamental Incompleto" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="escola1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola2" value="Ensino Fundamental Completo" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="escola2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola3" value="Ensino Médio Incompleto" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="escola3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola4" value="Ensino Médio Completo" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="escola4"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola5" value="Ensino Superior" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="escola5"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola6" value="Pós Graduado" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="escola6"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">2.6 – Profissão dos Clientes (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Autônomos</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Empregados</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Trabalham no setor de Serviços</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Trabalham na Indústria</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Trabalho Intelectual</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Trabalho Manual</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho1" value="Autônomos" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho2" value="Empregados" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho3" value="Trabalham no setor de Serviços" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho4" value="Trabalham na Indústria" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho4"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho5" value="Trabalho Intelectual" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho5"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho6" value="Trabalho Manual" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho6"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br><br>

                            <p class="fonte18"><b>3 – Segmentação Geográfica</b></p>
                            <p class="fonte18">3.1 – Bairros onde se concentram meus clientes (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Zona Norte</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Zona Sul</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Centro</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Zona Oeste</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Zona Leste</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="regiao" id="regiao1" value="Zona Norte" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="regiao1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="regiao" id="regiao2" value="Zona Sul" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="regiao2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="regiao" id="regiao3" value="Centro" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="regiao3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="regiao" id="regiao4" value="Zona Oeste" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="regiao4"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="regiao" id="regiao5" value="Zona Leste" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="regiao5"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <p class="fonte18">3.2 – Meus melhores clientes se localizam em zonas com (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Alta concentração de habitantes</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Média concentração de habitantes</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Baixa concentração de habitantes</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="habitantes" id="habitantes1" value="Alta concentração de habitantes" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="habitantes1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="habitantes" id="habitantes2" value="Média concentração de habitantes" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="habitantes2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="habitantes" id="habitantes3" value="Baixa concentração de habitantes" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="habitantes3"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br><br>

                            <p class="fonte18"><b>4 – Perfil de Consumo</b></p>
                            <p class="fonte18">4.1 – Volume de compra de meus clientes (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Alto</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Médio</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Baixo</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="volume_compra" id="volume_compra1" value="Alto" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="volume_compra1"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="volume_compra" id="volume_compra2" value="Médio" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="volume_compra2"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="volume_compra" id="volume_compra3" value="Baixo" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="volume_compra3"></label>
                                                </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">4.2 – Frequência de compra de meus clientes (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Alta</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Média</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Baixa</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="frequencia_compra" id="frequencia_compra1" value="Alta" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="frequencia_compra1"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="frequencia_compra" id="frequencia_compra2" value="Média" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="frequencia_compra2"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="frequencia_compra" id="frequencia_compra3" value="Baixa" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="frequencia_compra3"></label>
                                                </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">4.3 – O que meus clientes valorizam mais (da maioria dos 10 selecionadas)</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Preço</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Qualidade</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Entrega Rápida</th>
                                            <th style="vertical-align: middle; font-size: 18px; text-align: center; width: 200px">Formas de Pagamento</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="valor_compra" id="valor_compra1" value="Preço" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="valor_compra1"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="valor_compra" id="valor_compra2" value="Qualidade" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="valor_compra2"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="valor_compra" id="valor_compra3" value="Entrega Rápida" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="valor_compra3"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="valor_compra" id="valor_compra4" value="Formas de Pagamento" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="valor_compra4"></label>
                                                </div>


                                        </td>
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