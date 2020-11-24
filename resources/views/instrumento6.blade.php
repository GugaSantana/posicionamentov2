@extends('adminlte::page')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3>
            <center>INSTRUMENTO 6</center>
        </h3>
        <h3>
            <center>MATRIZ PARA AUMENTAR MINHA PRODUTIVIDADE NAS VENDAS</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 6</center>
                </h3>
                <h3>
                    <center>MATRIZ PARA AUMENTAR MINHA PRODUTIVIDADE NAS VENDAS</center>
                </h3>
            </div>
        </div>
    </div>
    <div class="card-body">
                    <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>

                        <p class="fonte18">Com os Instrumentos anteriores, você teve a oportunidade de avaliar sua Visão e seu Nível de Ação, estabelecer quais são seus problemas prioritários, seu perfil profissional e avaliar em que medida você conhece os produtos que vende e os produtos concorrentes.</p>
                        <p class="fonte18">Esta primeira etapa da Metodologia, que denominamos de <b>Precondições para Aumentar as Vendas</b>, se encerra com este Instrumento.</p>
                        <p class="fonte18">É uma oportunidade única de você obter esta informação e mais do que isto, de receber as Recomendações para aumentar seu nível de produtividade atual.</p>
                        <p class="fonte18">Avaliar a Produtividade é um procedimento técnico, que requer um certo grau de concentração.</p>
                        <p class="fonte18">A Produtividade é sempre uma relação entre um INPUT, que são recursos que colocamos para obter alguma coisa (dinheiro, tempo, matérias-primas) e um OUTPUT, ou seja, um resultado: o que obtemos com o INPUT.</p>
                        <p class="fonte18">Quanto maior o OUTPUT e menor o INPUT, mais produtivos seremos. Por exemplo: Se com 1 litro de gasolina (Input = insumo) fazemos com o carro 12 Km (Output = resultado), temos maior produtividade que se o carro consumir 2 litros para percorrer a mesma distância.</p>
                        <p class="fonte18">No caso dos vendedores, OUTPUT são as vendas realizadas e INPUT a quantidade de esforço, basicamente tempo, que é dedicado para obter o OUTPUT planejado.</p>
                        <p class="fonte18">Na área de Vendas, pouco se aplica este conceito de produtividade, apesar de seu resultado ser extraordinário.</p>
                        <p class="fonte18">Este Instrumento avaliará com precisão e objetividade seu Nível de Produtividade e as Recomendações que serão feitas a partir do resultado obtido, o que garantirá, de maneira objetiva e mensurável, o aumento de sua eficácia e a conquista de suas metas.</p>


                        <!-- <center><img src="../img/inst5_1.png"></center> -->

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>

                        <p class="fonte18">Você deve preencher a MATRIZ DE PRODUTIVIDADE abaixo, seguindo atentamente as instruções que apresentamos a seguir:</p>

                        <form name="formulario" id="formulario" role="form" method="post" action="instrumento/6">
                            {!! csrf_field() !!}
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered center fonte18">
                                <tr>
                                    <th colspan="2" rowspan="2">Variáveis de entrada</th>
                                    <th class="bg-primary" style="text-align: center;" colspan="12">Atividades que desenvolvo<p style="font-size: 16px">Clique nos números abaixo para exibir a Atividade correspondente</p></th>
                                </tr>
                                <tr>
                                    @php
                                        $atividadesDesenvolvidas = [
                                            'PROSPECÇÃO DE CLIENTES<br> Tempo dedicado a busca de novos clientes',
                                            'QUALIFICAÇÃO DE CLIENTES<br> Tempo dedicado a identificação do potencial de negócios com os clientes prospectados.',
                                            'PLANEJAMENTO/PRÉ VENDA<br> Tempo dedicado a definição de prioridades, elaboração de Planos de abordagem,contatos.',
                                            'APRESENTAÇÕES, NEGOCIAÇÕES, FECHAMENTOS<br> Tempo dedicado ao trabalho junto ao cliente, seja presencial ou remoto.',
                                            'FOLLOW UP / PÓS VENDA<br> Tempo dedicado ao cliente para dar apoio no pós venda e para criar um vínculo de longo prazo',
                                            'CAPACITAÇÃO / APRIMORAMENTO / COACHING<br> Tempo dedicado a melhoria do seu desempenho profissional',
                                            'ATIVIDADES ADMINISTRATIVAS<br> Tempo dedicado a reuniões, elaboração de relatórios, solicitação de pedidos, etc.',
                                            'OUTRAS ATIVIDADES<br> Tempo dedicado a atividades que não se enquadram nas anteriormente descritas tais como: viagens, tempo de espera para atendimento no cliente, etc.',
                                                                    ]
                                    @endphp
                                    @for($i=0;$i<8;$i++) 
                                        <td>
                                            <input hidden data-toggle="tooltip" title="{{$atividadesDesenvolvidas[$i]}}" type="text" class="form-control" name="atividade{{$i}}" placeholder="" id="atividade{{$i}}" value="{{$atividadesDesenvolvidas[$i]}}" readonly="true">
                                            <input value="{{$i+1}}" class="form-control center" readonly="true" style="cursor: pointer" onclick="showMessage('{{$atividadesDesenvolvidas[$i]}}')">
                                        </td>
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
                                <tr>
                                    <td colspan="2" class="bg-primary">A - Alta importância (15% ou +)</td>
                                    <td id="message" colspan="12" style="background-color: #f9eac3"></td>
                                </tr>
                                @for($j=0;$j<4;$j++) <tr>
                                    <td><input data-toggle="tooltip" title="Quais são os objetivos de alta importância para você alcançar suas metas." type="text" class="form-control" name="objetivo{{$j}}" id="objetivo{{$j}}" placeholder="" @if($j==0) required @endif></td>
                                    <td><input data-toggle="tooltip" title="Peso relativo do Objetivo. Ex: 15%, 20%, ..." id="pesoobjetivo{{$j}}" type="text" class="form-control" name="pesoobjetivo{{$j}}" placeholder="" onblur="down15(this)" onkeypress='return SomenteNumeroCem(event, this.id, "pesoobjetivo")' @if($j==0) required @endif></td>
                                    @for($i=0;$i<8;$i++) <td><input data-toggle="tooltip" title="Registre os valores da escala: em que medida cada atividade que você está analisando contribui para alcançar cada objetivo" id="number{{$j}}-{{$i}}" type="text" class="form-control" name="percentualTempo{{$j}}-{{$i}}" placeholder="" onkeypress='return SomenteNumeroDez(event, this)' @if($j==0) required @endif></td>
                                        @endfor
                                        </tr>
                                        @endfor
                                        <tr>
                                            <td colspan="14"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="bg-primary">B - Baixa importância (abaixo de 15%)</td>
                                            <td colspan="12" style="background-color: #f9eac3"></td>
                                        </tr>
                                        @for($j=4;$j<8;$j++) <tr>
                                            <td><input data-toggle="tooltip" title="Registrar os Objetivos de Baixa importância se houver" type="text" class="form-control" name="objetivomedia{{$j-4}}" placeholder="" @if($j==4) required @endif></td>
                                            <td><input data-toggle="tooltip" title="Peso relativo do Objetivo. Ex: 4%, 12%, ..." id="pesoobjetivo{{$j}}" type="text" class="form-control" name="pesoobjetivomedia{{$j-4}}" placeholder="" onkeypress='return SomenteNumeroCem(event, this.id, "pesoobjetivo", 1)' @if($j==4) required @endif></td>
                                            @for($i=0;$i<8;$i++) <td><input data-toggle="tooltip" title="Registre os valores da escala: em que medida cada atividade que você está analisando contribui para alcançar cada objetivo" id="number{{$j-4}}-{{$i}}" type="text" class="form-control" name="percentualTempomedia{{$j-4}}-{{$i}}" placeholder="" onkeypress='return SomenteNumeroDez(event, this)' @if($j==0) required @endif></td>
                                                @endfor
                                                </tr>
                                                @endfor
                            </table>
</div>
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
                        <p class="fonte18">Estas colunas estão divididas em 2 blocos: Objetivos de Alta Importância e Objetivos de Baixa Importância. Você pode registrar até 4 Objetivos de Alta Importância e 4 Objetivos de Baixa Importância, isto é, você pode registrar um total de até 8 Objetivos (podendo ser menos de 8 Objetivos a serem atingidos).</p>
                        <p class="fonte18">Os Objetivos de <b>Alta Importância</b> são aqueles que representam 15% ou mais de importância para se atingir a Meta de Vendas.</p>
                        <p class="fonte18">Os Objetivos de <b>Baixa Importância</b> são aqueles que representam menos de 15% de importância para se atingir a Meta de Vendas.</p>
                        <p class="fonte18">Alguns exemplos de Objetivos: volume de vendas, preço médio, melhorar o mix, obter informações sobre a concorrência.</p>
                        <p class="fonte18">Não se esqueça de que cada Objetivo deve ter um peso em valor percentual e que a soma total dos pesos dos Objetivos é de 100%.</p>
                        <p class="fonte18">B – Na Matriz, a primeira linha horizontal a ser preenchida é a de <u>Atividades que Desenvolvo</u>. Nesta linha, você deve identificar as principais atividades que você realiza para alcançar seus Objetivos de Vendas.</p>
                        <p class="fonte18">Para facilitar o entendimento do conteúdo de cada atividade descrita, apresentamos suas descrições:</p>
                        <p class="fonte18"><b>1 – Prospecção de Clientes</b> – Tempo dedicado a busca de novos clientes.<br>
                        <b>2 – Qualificação de Clientes</b> – Tempo dedicado a identificação do potencial de negócios com os clientes prospectados.<br>
                        <b>3 – Planejamento/Pré venda</b> – Tempo dedicado a definição de prioridades, elaboração de Planos de abordagem, contatos, etc.<br>
                        <b>4 – Apresentações, Negociações, Fechamentos</b> – Tempo dedicado ao trabalho junto ao cliente, seja presencial ou remoto.<br>
                        <b>5 – Follow up / Pós Venda</b> – Tempo dedicado ao cliente para dar apoio no pós-venda e para criar um vínculo de longo prazo.<br>
                        <b>6 – Capacitação / Aprimoramento / Coaching</b> - Tempo dedicado a melhoria do seu desempenho profissional.<br>
                        <b>7 – Atividades administrativas</b> – Tempo dedicado às reuniões, elaboração de relatórios, solicitação de pedidos, etc.<br>
                        <b>8 – Outras atividades</b> - Tempo dedicado às atividades que não se enquadram nas anteriormente descritas, tais como: viagens, tempo de espera para atendimento ao cliente, etc.</p>
                        <p class="fonte18">C – Na Matriz, a segunda linha horizontal a qual você deve preencher, refere-se ao Percentual de Tempo que você gasta em cada Atividade. Nesta linha, você deve registrar quanto tempo, em termos percentuais, você dedica a cada uma das atividades que foram definidas. Você ainda pode alocar um percentual de tempo a OUTRAS ATIVIDADES que você realiza, além das sete descritas. A soma dos percentuais dedicados a todas essas atividades deve totalizar 100%.</p>
                        <p class="fonte18">IMPORTANTE: No caso de você não desenvolver uma ou mais das atividades descritas, simplesmente não lhe atribua um percentual de tempo dedicado.</p>
                        <p class="fonte18">D- Agora, com as duas dimensões da Matriz preparadas, você deve preencher a Matriz respondendo à seguinte pergunta:</p>
                        <p class="fonte18">Em que medida, em uma escala de 1 a 10, cada uma dessas atividades contribui para alcançar cada objetivo? Utilize as definições da escala que a seguir:</p>
                        
                        <center><img src="../posicionamento/public/img/instrumento6/inst6_1.png"></center>

                        <br>

                        <p class="fonte18">Iniciando pela primeira atividade e pelo primeiro objetivo que você escreveu, no cruzamento entre a atividade que você está avaliando e o Objetivo 1, você colocará o número da escala que representará para você a contribuição dessa atividade para alcançar este objetivo.</p>
                        <p class="fonte18">Na sequência, você faz a mesma pergunta para o Objetivo 2, Objetivo 3, e assim sucessivamente para todos os objetivos.</p>
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

        function down15(element){
            if(element.value == ''){
                return true;
            }
            number = element.value|0;
            if(number < 15){
                alert("Os pesos relativos de Alta importância devem ser iguais ou maiores que 15%");
                element.value = '';
                setTimeout(function() { element.focus(); }, 100); 
            }
        }

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

        function showMessage(message){
            $("#message").html(message);
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
                    alert("Os pesos relativos de Alta importância devem ser iguais ou maiores que 15%");
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