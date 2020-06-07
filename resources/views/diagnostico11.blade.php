@extends('adminlte::page')

@section('content')

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
        <h3><center>INSTRUMENTO 11</center></h3>
        <h3><center>DEFINIÇÃO DO PERFIL DO CLIENTE IDEAL</center></h3>
    </div>
    <div class="card-body">

                <div class="col-12">
                    <h4><center>Diagnóstico e Recomendações</center></h4>
                    <br>
                    <p class="fonte18">Definir o Perfil de Cliente Ideal é uma maneira de segmentação estratégica.</p>
                    <p class="fonte18">Segmentação é a seleção do publico alvo para desenvolver o trabalho, dentre todos os públicos que constituem o mercado, e serve para dar Foco a seu trabalho e facilitar o alcance de suas metas de faturamento.</p>
                    <p class="fonte18">Vamos fazer uma analogia para entender o significado de Cliente Ideal. Imagine que os clientes sejam frutas. A melhor estratégia para vender (e vender rápido) é pegar em primeiro lugar as frutas que estão nos galhos mais baixos.</p>

                    <center><img src="../posicionamento/public/img/diag_11_1.jpg" style="width: 50%;"></center>
                    <br>
                    <p class="fonte18">Se você tem um objetivo de quantidade de frutas para pegar (metas de venda), você pegará as que exigem menos esforço para colher, pois elas são as que darão maior retorno. Como analogia, esses serão seus clientes ideais</p>

                    <br>
                    <p class="fonte18"><h4><center>DIAGNÓSTICO</center></h4></p>
                    
                    <p class="fonte18">Você considerou os seguintes clientes para esta análise</p>

                    <!-- Primeira tabela ordem de prioridade-->
                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered">
                                <thead class="bg-primary">
                                <tr>
                                    <th style="font-size: 18px; text-align: center; width: 200px">Clientes</th>
                                </tr>
                                </thead>
                                @php($i=1)
                                @foreach($data['cliente'] as $cliente)
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle;">{{$i}} - {{$cliente}}</td>
                                    </tr>
                                @php($i++)
                                @endforeach
                            </table>
                        </div>
                    </div>

                    <br>
                    
                    <p class="fonte18">O resultado das suas respostas para os 11 fatores avaliados é o seguinte:</p>

                   
                    <!-- Primeira tabela ordem de prioridade-->
                    <div class="row">
                        <div class="col-12" style="overflow: auto;">
                            <table class="table table-hover table-bordered">
                                <thead class="bg-primary">
                                <tr>
                                    <th style="font-size: 18px; text-align: center; width: 200px">Fatores</th>
                                    <th style="font-size: 18px; text-align: center; width: 200px">Suas Conclusões</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">1 - Idade dos Clientes</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['idade']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">2 - Sexo dos Clientes</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['sexo']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">3 - Renda dos Clientes</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['salario']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">4 - Família dos Clientes</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['familia']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">5 - Nível Educacional dos Clientes</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['escola']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">6 - Profissão dos Clientes</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['trabalho']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">7 - Bairros onde se concentram os clientes</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['regiao']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">8 – Zonas nas quais se localizam meus melhores clientes</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['habitantes']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">9 - Volume de compra de meus clientes</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['volume_compra']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">10 - Frequência de compra de meus clientes</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['frequencia_compra']}}</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 18px; vertical-align: middle;">11 - O que meus clientes valorizam mais</td>
                                    <td style="font-size: 18px; vertical-align: middle;">{{$data['valor_compra']}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                        <br>
                        <p class="fonte18">Isto representa sua Situação Atual, não necessariamente a Situação Ideal.</p>
                        <p class="fonte18">Nas recomendações serão apresentadas orientações para migrar à Situação Ideal.</p>

                        <br>
                        <p class="fonte18"><h4><center>RECOMENDAÇÃO</center></h4></p>
                        
                        <p class="fonte18">O Diagnóstico apresentou sua Situação atual em relação aos 11 fatores que são utilizados para definir seu cliente ideal.</p>
                        <p class="fonte18">A partir da situação atual (<b>Real</b> – apresentada no diagnóstico) defina o que você considera que seja a posição <b>Ideal</b> para situar os seus clientes ideais em cada um dos 11 fatores</p>
                        <p class="fonte18">- Pesquise, veja como estão posicionados os clientes de seus colegas em relação a esses 11 fatores e análise o posicionamento de mercado de seus concorrentes.</p>
                        <p class="fonte18">- Pergunte aos colegas que apresentam os maiores faturamentos como eles posicionam seus clientes em relação a esses fatores.</p>
                        <p class="fonte18">Utilize para definir o seu Cliente Ideal os intervalos apresentados no formulário seguinte. Registre nos intervalos da escala onde se situam os resultados de sua pesquisa</p>


                        <p class="fonte18">1 – Idade dos Clientes (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="idade" id="idade1" value="Adolescentes 15 a 18 anos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="idade1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="idade" id="idade2" value="Adulto Jovem 19 a 35 anos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="idade2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="idade" id="idade3" value="Meia Idade 36 a 50 anos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="idade3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="idade" id="idade4" value="Maduros 50 a 60 anos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="idade4"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="idade" id="idade5" value="Terceira Idade Acima de 60 anos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="idade5"></label>
                                            </div>


                                        </td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <p class="fonte18">2 – Sexo dos Clientes (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="sexo" id="sexoM" value="Homem" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="sexoM"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="sexo" id="sexoF" value="Mulher" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="sexoF"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">3 – Renda dos Clientes (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="salario" id="salario1" value="Até 5 salários mínimos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="salario1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="salario" id="salario2" value="De 6 a 10 salários mínimos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="salario2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="salario" id="salario3" value="De 10 a 20 salários mínimos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="salario3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="salario" id="salario4" value="Acima de 20 salários mínimos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="salario4"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">4 – Família dos Clientes (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="familia" id="familia1" value="Mora sozinho" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="familia1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="familia" id="familia2" value="Não tem filhos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="familia2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="familia" id="familia3" value="Família pequena" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="familia3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="familia" id="familia5" value="Família pequena até 2 filhos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="familia5"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="familia" id="familia6" value="Família grande Outras pessoas moram com o casal (sogros, tios,..)" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="familia6"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">5 – Nível Educacional dos Clientes (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola1" value="Ensino Fundamental Incompleto" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="escola1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola2" value="Ensino Fundamental Completo" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="escola2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola3" value="Ensino Médio Incompleto" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="escola3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola4" value="Ensino Médio Completo" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="escola4"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola5" value="Ensino Superior" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="escola5"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="escola" id="escola6" value="Pós Graduado" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="escola6"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">6 – Profissão dos Clientes (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho1" value="Autônomos" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho2" value="Empregados" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho3" value="Trabalham no setor de Serviços" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho4" value="Trabalham na Indústria" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho4"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho5" value="Trabalho Intelectual" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho5"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="trabalho" id="trabalho6" value="Trabalho Manual" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="trabalho6"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br><br>

                            <p class="fonte18">7 – Bairros onde se concentram meus clientes (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="regiao" id="regiao1" value="Zona Norte" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="regiao1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="regiao" id="regiao2" value="Zona Sul" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="regiao2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="regiao" id="regiao3" value="Centro" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="regiao3"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="regiao" id="regiao4" value="Zona Oeste" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="regiao4"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="regiao" id="regiao5" value="Zona Leste" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="regiao5"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>
                            
                            <p class="fonte18">8 – Meus melhores clientes se localizam em zonas com (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="habitantes" id="habitantes1" value="Alta concentração de habitantes" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="habitantes1"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="habitantes" id="habitantes2" value="Média concentração de habitantes" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="habitantes2"></label>
                                            </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="habitantes" id="habitantes3" value="Baixa concentração de habitantes" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="habitantes3"></label>
                                            </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br><br>

                            <p class="fonte18">9 – Volume de compra de meus clientes (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="volume_compra" id="volume_compra1" value="Alto" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="volume_compra1"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="volume_compra" id="volume_compra2" value="Médio" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="volume_compra2"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="volume_compra" id="volume_compra3" value="Baixo" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="volume_compra3"></label>
                                                </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">10 – Frequência de compra dos clientes (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="frequencia_compra" id="frequencia_compra1" value="Alta" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="frequencia_compra1"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="frequencia_compra" id="frequencia_compra2" value="Média" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="frequencia_compra2"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="frequencia_compra" id="frequencia_compra3" value="Baixa" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="frequencia_compra3"></label>
                                                </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">11 – O que meus clientes valorizam mais (Ideal)</p>

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
                                                <input type="radio" class="custom-control-input" required name="valor_compra" id="valor_compra1" value="Preço" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="valor_compra1"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="valor_compra" id="valor_compra2" value="Qualidade" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="valor_compra2"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="valor_compra" id="valor_compra3" value="Entrega Rápida" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="valor_compra3"></label>
                                                </div>


                                        </td>
                                            <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                            
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" required name="valor_compra" id="valor_compra4" value="Formas de Pagamento" onclick="fillForm(this.name, this.value)">
                                                <label style="cursor: pointer" class="custom-control-label" for="valor_compra4"></label>
                                                </div>


                                        </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18">- Feito este levantamento, analise as informações, reflita, e de acordo com suas conclusões, mude seu posicionamento nas categorias que considere necessárias para aumentar seu faturamento.</p>
                            <p class="fonte18">Utilize o formulário seguinte como roteiro para alcançar o seu CLIENTE IDEAL.</p>

                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <th style="font-size: 18px; text-align: center; width: 200px">Fatores</th>
                                            <th style="font-size: 18px; text-align: center; width: 200px">Suas Conclusões</th>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">1 - Idade dos Clientes</td>
                                            <td id="idade" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">2 - Sexo dos Clientes</td>
                                            <td id="sexo" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">3 - Renda dos Clientes</td>
                                            <td id="salario" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">4 - Família dos Clientes</td>
                                            <td id="familia" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">5 - Nível Educacional dos Clientes</td>
                                            <td id="escola" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">6 - Profissão dos Clientes</td>
                                            <td id="trabalho" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">7 - Bairros onde se concentram os clientes</td>
                                            <td id="regiao" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">8 – Zonas nas quais se localizam meus melhores clientes</td>
                                            <td id="habitantes" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">9 - Volume de compra de meus clientes</td>
                                            <td id="volume_compra" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">10 - Frequência de compra de meus clientes</td>
                                            <td id="frequencia_compra" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 18px; vertical-align: middle;">11 - O que meus clientes valorizam mais</td>
                                            <td id="valor_compra" style="font-size: 18px; vertical-align: middle;"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <br>

                            <p class="fonte18"><b>IMPORTANTE:</b></p>

<p class="fonte18">- Feito isto, a recomendação é começar a Prospectar clientes com o perfil que você acaba de definir e registrou na tabela acima.</p>
<p class="fonte18">Como prospectar clientes tecnicamente é o objetivo do instrumento seguinte (Instrumento 12 – Prospecção de Clientes)</p>

                        <!-- RESPOSTA DE ACORDO COM REQUISIÇÃO -->
                        <!-- <p class="fonte18"><h4>Diagnóstico - $retorno['titulo']</h4></p>
                        <p class="fonte18">$retorno['diagnostico']</p>
                        <p class="fonte18"><h4>Recomendação - $retorno['titulo']</h4></p>
                        <p class="fonte18">$retorno['recomendacao']</p> -->
                        <br>
                        <center><a href="/autogestao" class="fonte18"><span class="fa fa-arrow-circle-right" style="color:red; font-size: 22px"></span> Ir para Planilha de Autogestão</a></center>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>

<script>
    function fillForm(element, text){
        document.getElementById(element).innerHTML = text;
    }
</script>

@endpush