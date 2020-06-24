@extends('adminlte::page')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3>
            <center>INSTRUMENTO 6</center>
        </h3>
        <h3>
            <center>MATRIZ PARA AUMENTAR MINHA PRODUTIVIDADE NAS VENDAS</center>
        </h3>
    </div>
    <div class="card-body">
                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                        <p class="fonte18">Com os instrumentos anteriores você teve a oportunidade de avaliar sua Visão e seu Nível de Ação, estabelecer quais são seus problemas prioritários, seu perfil profissional e avaliar em que medida você conhece os produtos que vende e os produtos concorrentes.</p>
                        <p class="fonte18">Esta primeira etapa da metodologia que denominamos de <b>Precondições para Aumentar as Vendas</b>, se encerra com este instrumento.</p>
                        <p class="fonte18">É uma oportunidade única de você obter esta informação e, mais do que isto, de receber as recomendações para aumentar seu nível de produtividade atual.</p>
                        <p class="fonte18">Avaliar a Produtividade é um procedimento técnico, que requer um certo grau de concentração.</p>
                        <p class="fonte18">A Produtividade é sempre uma relação entre um INPUT que são recursos que colocamos para obter alguma coisa (dinheiro, tempo, matérias primas) e um OUTPUT , ou seja, um resultado: o que obtemos com o INPUT</p>
                        <p class="fonte18">Quanto maior o OUTPUT e menor o INPUT mais produtivos seremos. Por exemplo: Se com 1 litro de gasolina (Input=insumo) fazemos com o carro 12 kms (Output=resultado), temos maior produtividade de que se o carro consumir 2 litros para percorrer a mesma distância.</p>
                        <p class="fonte18">No caso dos vendedores OUTPUT são as vendas realizadas e INPUT a quantidade de esforço, basicamente tempo, que é dedicado para obter o OUTPUT planejado.</p>
                        <p class="fonte18">Na área de Vendas pouco se aplica este conceito de produtividade, apesar de seu resultado ser extraordinário.</p>
                        <p class="fonte18">Este instrumento avaliará com precisão e objetividade seu Nível de Produtividade e as recomendações que serão feitas a partir do resultado obtido, garantirá de maneira objetiva e mensurável, o aumento de sua eficácia e a conquista de suas metas.</p>


                        <!-- <center><img src="../img/inst5_1.png"></center> -->

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>

                        <p class="fonte18">Você deve preencher a MATRIZ DE PRODUTIVIDADE abaixo, seguindo atentamente as instruções que viram a seguir:</p>

                        <form name="formulario" id="formulario" role="form" method="post" action="instrumento/6">
                            {!! csrf_field() !!}

                            <table class="table table-hover table-bordered center fonte18">
                                <tr>
                                    <th colspan="2" rowspan="2">Variáveis de entrada</th>
                                    <th class="bg-primary" style="text-align: center;" colspan="12">Atividades que desenvolvo</th>
                                </tr>
                                <tr>
                                    @for($i=0;$i<8;$i++) <td><input data-toggle="tooltip" title="ATIVIDADES QUE VOCÊ REALIZA PARA ALCANÇAR SEUS OBJETIVOS DE VENDAS. EX: Prospectar novos clientes, viajar, fazer reunião, preencher relatórios, etc.." type="text" class="form-control" name="atividade{{$i}}" placeholder="" id="atividade{{$i}}"></td>
                                        @endfor
                                </tr>
                                <tr>
                                    <td rowspan="2">Objetivos</td>
                                    <td rowspan="2">Pesos relativos</td>
                                    <td class="bg-primary" style="text-align: center;" colspan="12">PERCENTUAL DE TEMPO GASTO EM CADA ATIVIDADE (O total deve ser 100%)</td>
                                </tr>
                                <tr>
                                    @for($i=0;$i<8;$i++) <td><input data-toggle="tooltip" title="Tempo gasto em cada atividade. Utilize um intervalo (semana, mês) para facilitar a distribuição do tempo nas atividades. Do 100% do seu tempo de trabalho quanto (%) é gasto na atividade." id="number{{$i}}" type="text" class="form-control" name="percentualTempo{{$i}}" placeholder="" onkeypress='return SomenteNumeroCem(event, this.id, "number")' @if($i==0) required @endif></td>
                                        @endfor
                                </tr>
                                <tr class="bg-primary">
                                    <td colspan="2">A - Alta importância (15% ou +)</td>
                                    <td colspan="12"></td>
                                </tr>
                                @for($j=0;$j<4;$j++) <tr>
                                    <td><input data-toggle="tooltip" title="Quais são os objetivos de alta importância para você alcançar suas metas." type="text" class="form-control" name="objetivo{{$j}}" id="objetivo{{$j}}" placeholder="" @if($j==0) required @endif></td>
                                    <td><input data-toggle="tooltip" title="Peso relativo do Objetivo. Ex: 15%, 20%, ..." id="pesoobjetivo{{$j}}" type="text" class="form-control" name="pesoobjetivo{{$j}}" placeholder="" onkeypress='return SomenteNumeroCem(event, this.id, "pesoobjetivo")' @if($j==0) required @endif></td>
                                    @for($i=0;$i<8;$i++) <td><input data-toggle="tooltip" title="Registre os valores da escala: em que medida cada atividade que você está analisando contribui para alcançar cada objetivo" id="number{{$j}}-{{$i}}" type="text" class="form-control" name="percentualTempo{{$j}}-{{$i}}" placeholder="" onkeypress='return SomenteNumeroDez(event, this)' @if($j==0) required @endif></td>
                                        @endfor
                                        </tr>
                                        @endfor
                                        <tr>
                                            <td colspan="14"></td>
                                        </tr>
                                        <tr class="bg-primary">
                                            <td colspan="2">B - Baixa importância (15% ou -)</td>
                                            <td colspan="12"></td>
                                        </tr>
                                        @for($j=4;$j<8;$j++) <tr>
                                            <td><input data-toggle="tooltip" title="Registrar os Objetivos de Baixa importância se houver" type="text" class="form-control" name="objetivomedia{{$j-4}}" placeholder="" @if($j==4) required @endif></td>
                                            <td><input data-toggle="tooltip" title="Peso relativo do Objetivo. Ex: 4%, 12%, ..." id="pesoobjetivo{{$j}}" type="text" class="form-control" name="pesoobjetivomedia{{$j-4}}" placeholder="" onkeypress='return SomenteNumeroCem(event, this.id, "pesoobjetivo", 1)' @if($j==4) required @endif></td>
                                            @for($i=0;$i<8;$i++) <td><input data-toggle="tooltip" title="Registre os valores da escala: em que medida cada atividade que você está analisando contribui para alcançar cada objetivo" id="number{{$j-4}}-{{$i}}" type="text" class="form-control" name="percentualTempomedia{{$j-4}}-{{$i}}" placeholder="" onkeypress='return SomenteNumeroDez(event, this)' @if($j==0) required @endif></td>
                                                @endfor
                                                </tr>
                                                @endfor
                            </table>

                            <br>
                            <div class="col-8">
                                <button class="btn btn-icon btn-3 btn-primary" type="button" onclick="submitForm()">
                                    <span class="btn-inner--icon"><i class="fa fa-paper-plane"></i></span>
                                    <span class="btn-inner--text">Enviar formulário</span>
                                </button>
                            </div>

                        </form>
                        <br>
                        <p class="fonte18">Instruções de preenchimento da Matriz passo a passo:</p>
                        <p class="fonte18">A – Na Matriz, a primeira coluna refere-se aos <u>Objetivos</u> que você deve alcançar para realizar sua meta de vendas e a segunda coluna é a de <u>Pesos Relativos</u>, ou seja, a importância, em percentual, de cada um desses objetivos.</p>
                        <p class="fonte18">Estas colunas estão divididas em 2 blocos: Objetivos de Alta Importância e Objetivos de Baixa Importância. Você pode registrar até 4 objetivos de Alta Importância e 4 Objetivos de Baixa Importância, ou seja, você pode registrar um total de até 8 objetivos. (podendo ser menos de 8 objetivos a serem atingidos)</p>
                        <p class="fonte18">Os Objetivos de <b>Alta Importância</b> são aqueles que representam 15% ou mais de importância para atingimento da Meta de Vendas.</p>
                        <p class="fonte18">Os Objetivos de <b>Baixa Importância</b> são aqueles que representam menos de 15% de importância para atingimento da Meta de Vendas.</p>
                        <p class="fonte18">Alguns exemplos de objetivos: volume de vendas, preço médio, melhorar o mix, obter informações sobre a concorrência.</p>
                        <p class="fonte18">Não esqueça que cada objetivo deve ter um peso em valor percentual e soma total dos pesos dos objetivos é de 100%</p>
                        <p class="fonte18">B – Na Matriz, a primeira linha horizontal a ser preenchida é a de <u>Atividades que Desenvolvo</u>. Nesta linha você deve registrar as principais atividades que você realiza para alcançar seus objetivos de vendas.</p>
                        <p class="fonte18">Você pode registrar até 8 atividades, porem pode ser menos que 8.</p>
                        <p class="fonte18">Exemplos de atividades: Deslocamentos até os clientes, elaboração de relatórios, reuniões com os clientes, compra de produtos.</p>
                        <p class="fonte18">C – Na Matriz, a segunda linha horizontal a ser preenchida é de <u>Percentual de Tempo Gasto em cada Atividade</u>. Nesta linha você deve registrar quanto tempo, em termos percentuais, você dedica a cada uma das atividades que foram definidas. A soma dos percentuais dedicados as atividades deve totalizar 100%.</p>
                        <p class="fonte18">D- Agora com as variáveis de entrada preparadas você deve preencher a Matriz, respondendo a seguinte pergunta:</p>
                        <p class="fonte18">Em que medida, em uma escala de 1 a 10, cada atividade contribui para alcançar um objetivo? Utilize a escala a seguir:</p>

                        <center><img src="../posicionamento/public/img/inst6_1.png"></center>

                        <br>

                        <p class="fonte18">Iniciando pela primeira atividade e primeiro objetivo relacionado; no cruzamento entre essa atividade que você está avaliando e o objetivo 1, você colocará o numero da escala que você atribui para a contribuição dessa atividade para alcançar este objetivo.</p>
                        <p class="fonte18">Na sequencia, você faz a mesma pergunta em relação ao objetivo 2, ao objetivo 3, e assim sucessivamente para todos os objetivos.</p>
                        <p class="fonte18">Verifique se você cruzou todas as atividades com todos os objetivos.</p>
                        <p class="fonte18"><b>Ao passar o mouse sobre os campos da matriz são exibidas as instruções de preenchimento.</b></p>

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
        $(document).ready(function() {
            $("#number").keyup(function() {
                $("#number").val(this.value.match(/[0-9]*/));
            });
        });

        function SomenteNumero(e) {
            var tecla = (window.event) ? event.keyCode : e.which;
            if ((tecla > 47 && tecla < 58)) return true;
            else {
                if (tecla == 8 || tecla == 0) return true;
                else return false;
            }
        }

        function SomenteNumeroCem(e, element, name, a=0) {
            if(a == 1){
                var teste = SomenteNumeroMedia(e, element);
                if(!teste){
                    return false;
                }
            }
            var num;
            var tecla = (window.event) ? event.keyCode : e.which;
            switch (tecla) {
                case 48:
                    num = 0;
                    break;
                    case 49:
                    num = 1;
                    break;
                    case 50:
                    num = 2;
                    break;
                    case 51:
                    num = 3;
                    break;
                    case 52:
                    num = 4;
                    break;
                    case 53:
                    num = 5;
                    break;
                    case 54:
                    num = 6;
                    break;
                    case 55:
                    num = 7;
                    break;
                    case 56:
                    num = 8;
                    break;
                    case 57:
                    num = 9;
                    break;
            }

            var soma = 0;
            for (let i = 0; i < 8; i++) {
                if(name+i == element) continue;
                soma += document.getElementById(name+i).value|0;
            }

            var numcampo = document.getElementById(element).value;
            var total = ''+numcampo+num;
            total = parseInt(total);

            total += soma;

            if(total > 100){
                if(name == 'pesoobjetivo'){
                    alert("A soma dos pesos devem ser de 100%")
                }
                else{
                    alert("A soma do tempo gasto deve ser de 100%")
                }
                return false;
            }

            if ((tecla > 47 && tecla < 58)) return true;
            else {
                if (tecla == 8 || tecla == 0) return true;
                else return false;
            }
        }

        function SomenteNumeroMedia(e, element) {
            var num;
            var tecla = (window.event) ? event.keyCode : e.which;
            switch (tecla) {
                case 48:
                    num = 0;
                    break;
                    case 49:
                    num = 1;
                    break;
                    case 50:
                    num = 2;
                    break;
                    case 51:
                    num = 3;
                    break;
                    case 52:
                    num = 4;
                    break;
                    case 53:
                    num = 5;
                    break;
                    case 54:
                    num = 6;
                    break;
                    case 55:
                    num = 7;
                    break;
                    case 56:
                    num = 8;
                    break;
                    case 57:
                    num = 9;
                    break;
            }

            var numcampo = document.getElementById(element).value;
            var total = ''+numcampo+num;
            total = parseInt(total);

            if(total >= 15){
                alert("Digite no maximo 14%")
                return false;
            }

            if ((tecla > 47 && tecla < 58)) return true;
            else {
                if (tecla == 8 || tecla == 0) return true;
                else return false;
            }
        }

        function SomenteNumeroDez(e, element) {
            var num;
            var tecla = (window.event) ? event.keyCode : e.which;
            switch (tecla) {
                case 48:
                    num = 0;
                    break;
                    case 49:
                    num = 1;
                    break;
                    case 50:
                    num = 2;
                    break;
                    case 51:
                    num = 3;
                    break;
                    case 52:
                    num = 4;
                    break;
                    case 53:
                    num = 5;
                    break;
                    case 54:
                    num = 6;
                    break;
                    case 55:
                    num = 7;
                    break;
                    case 56:
                    num = 8;
                    break;
                    case 57:
                    num = 9;
                    break;
            }

            var numcampo = element.value;
            var total = ''+numcampo+num;
            total = parseInt(total);

            if(total > 10){
                alert("Digite valores de 1 a 10");
                return false;
            }

            if ((tecla > 47 && tecla < 58)) return true;
            else {
                if (tecla == 8 || tecla == 0) return true;
                else return false;
            }
        }

        function submitForm(){
            var validate = document.getElementById('atividade0');
            // If x is Not a Number or less than one or greater than 10
            if (!validate.value) {
                alert('Campo vazio');
                validate.focus();
                return false;
            }
            
            for (i = 0 ;i < 4; i++) {
                val = document.getElementById('pesoobjetivo'+i).value|0;
                obj = document.getElementById('objetivo'+i).value;

                if(val < 15 && obj.length != 0){
                    alert("Os pesos relativos de Alta importância devem ser maiores que 15%");
                    document.getElementById('pesoobjetivo'+i).focus();
                    return false;
                }
            }
            total = 0;
            for(i=0;i<8;i++){
                valor = parseInt(document.getElementById('number'+i).value);
                if(!isNaN(valor)){
                    total += valor;
                } 
            }
            
            if(total != 100){
                alert("A soma do tempo gasto deve ser de 100%");
                document.getElementById('number0').focus();
                return false;
            }

            var validate = document.getElementById('objetivo0');
            // If x is Not a Number or less than one or greater than 10
            if (!validate.value) {
                alert('Campo vazio');
                validate.focus();
                return false;
            }


            var validate = document.getElementById('pesoobjetivo0');
            // If x is Not a Number or less than one or greater than 10
            if (!validate.value) {
                alert('Campo vazio');
                validate.focus();
                return false;
            }

            total = 0;
            for(i=0;i<8;i++){
                valor = parseInt(document.getElementById('pesoobjetivo'+i).value);
                if(!isNaN(valor)){
                    total += valor;
                } 
            }

            if(total != 100){
                alert("A soma dos pesos dos objetivos deve ser de 100%");
                document.getElementById('pesoobjetivo0').focus();
                return false;
            }
            

                
            var validate = document.getElementById('number0-0');
                // If x is Not a Number or less than one or greater than 10
                if (!validate.value) {
                    alert('Campo vazio');
                    validate.focus();
                    return false;
                }

                                
                

                

                
            document.getElementById('formulario').submit();
                
            
        }
    </script>
    <script>window.onload = function(){history.go(+1)};</script>
    @endpush