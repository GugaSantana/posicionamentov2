@extends('adminlte::page')

@section('content')
   
<div class="card card-primary">
    <div class="card-header">
        <h3><center>INSTRUMENTO 3</center></h3>
        <h3><center>MEU PERFIL COMO PROFISSIONAL DE VENDAS</center></h3>
        <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 14%;float: right;margin-top: -10%;">
    </div>
    <div class="card-body">
                        <div class="col-12">
                        <h4>
                            <center>Levantamento de Informações</center>
                        </h4>
                        
                        <p class="fonte18">No instrumento anterior, utilizando uma metodologia específica, definimos com precisão seus problemas prioritários.</p>
                        <p class="fonte18">Assim, sabendo em que ordem você deve tratar de seus problemas, você otimizará seu tempo e aumentará sua produtividade.</p>
                        <p class="fonte18">Neste instrumento vamos tratar de você: Você terá a oportunidade de fazer uma autoavaliação de seu perfil profissional e poderá concluir o potencial que você tem para melhorar seu desempenho, sua produtividade, enfim, sua eficácia como profissional de vendas. Nas recomendações serão dadas as instruções para converter este potencial em realidade.</p>
                        <p class="fonte18">Todo profissional de Vendas apresenta diferentes níveis de excelência nas diversas competências requeridas para obter os melhores resultados.</p>
                        <p class="fonte18">Este instrumento é de grande valor para visualizar seu perfil profissional e portanto, o nível em que se encontram suas competências para vendas.</p>
                        <p class="fonte18">Os resultados serão muito específicos e objetivos</p>
                            

                        </div>
                        <br>
                        <div class="col-12">
                            <p class="fonte18"><b>INSTRUÇÕES</b></p>

                            <p class="fonte18">Para responder este instrumento você deve autoavaliar em que medida você apresenta cada uma das 19 competências seguintes, relevantes para alcançar suas metas de vendas.</p>
                            <p class="fonte18">Procure ser o mais objetivo possível, pois as respostas serão o ponto de partida para um Programa de Desenvolvimento de suas Competências, o qual lhe permitirá alcançar suas metas de vendas com maior facilidade, e com menor tempo de dedicação (redução do ciclo de venda).</p>
                            <p class="fonte18">Responda o Questionário de Autoavaliação das Competências de Vendas que apresentamos a seguir.</p>
                            <p class="fonte18">Antes de preencher o questionário leia atentamente as definições das 19 competências contidas nas perguntas que você responderá.</p>
@php
$table1 = 
[
"<b>1. Conhecimento do Produto.</b> Como você classificaria seu nível de conhecimento dos serviços/produtos que você vende?",
"<b>2. Conhecimento dos Negócios do cliente.</b> Em que medida você conhece os processos de negócios, a organização, os negócios e as tendências dos negócios da empresa?",
"<b>3. Conhecimento do Mercado.</b> Qual é seu conhecimento das necessidades e exigências do mercado em que você atua?",
"<b>4. Informações sobre a concorrência.</b> Quão informado você está sobre os produtos e serviços concorrentes?",
"<b>5. Inteligência Emocional.</b> Em que medida você é consciente da importância do relacionamento humano para realizar uma venda?",
"<b>6. Habilidade para ouvir.</b> Você sabe ouvir com atenção o que outra pessoa está dizendo em termos de conteúdo e emoções envolvidas?",
"<b>7. Perguntar, Sondar, Estimular.</b> Quão hábil você é para estimular as outras pessoas a expor, com profundidade, seus pensamentos e pontos de vista?",
"<b>8. Sensibilidade.</b> Em que grau você é sensível aos sentimentos e as necessidades de outras pessoas?",
"<b>9. Cooperação.</b> Quão eficiente você é para estabelecer relações nas quais ambas as partes sintam liberdade para oferecer e pedir ajuda?",
"<b>10. Persuasão.</b> Em que medida você se sente preparado para apresentar pontos de vista e argumentos de uma maneira convincente?",
"<b>11. Capacidade de Análise.</b> Qual é seu grau de capacidade analítica para tratar das necessidades do cliente?",
"<b>12. Desenvolvimento de Estratégia e Planejamento.</b> Qual sua capacidade para desenvolver planos e idéias interessantes para o longo prazo?",
"<b>13. Identificação de Oportunidades.</b> Em que medida você está atento para a identificação de novas oportunidades de negócios?",
"<b>14. Organização Pessoal e Administração do Tempo.</b> Você é pontual, bem organizado nas apresentações e está sempre disposto para solucionar os problemas do cliente?",
"<b>15. Criatividade na Solução de Problemas.</b> Qual é sua capacidade para desenvolver propostas criativas e soluções alternativas inovadoras para os problemas e necessidades do cliente?",
"<b>16. Persistência no Seguimento.</b> Você é persistente, segue um plano e mantém o compromisso até os resultados serem atingidos?",
"<b>17. Serviço como Fator Diferencial.</b> Você procura desenvolver atividades que poderiam ser consideradas como um diferencial em relação à concorrência?",
"<b>18. Ajuste das Propostas.</b> Em que medida suas propostas atendem as verdadeiras necessidades de seus clientes?",
"<b>19. Confiança Pessoal.</b> Acredita que você transmite confiança?"
];
@endphp
<!-- <table border=1 cellpadding="5" cellspacing="0" >
	<tbody>
        @for($i=0; $i<19; $i++)
		<tr>
			<td>
            {!! $table1[$i] !!}
			</td>
        </tr>
        @endfor
	</tbody>
</table> -->

<br>

<p class="fonte18">Leia com atenção as perguntas formuladas para cada competência e responda no gráfico apresentado abaixo, conforme a seguinte escala.</p>

                            <br>
                            <p class="fonte18"><b>ESCALA</b></p>
                            <p class="fonte18" style="margin-bottom: 0%;">1 – Mínimo grau da escala. Sua resposta neste ponto significa que esta competência está ausente em seu perfil profissional.</p>
                            <p class="fonte18" style="margin-bottom: 0%;">2 – Grau de domínio desta competência é mínimo.</p>
                            <p class="fonte18" style="margin-bottom: 0%;">3 – Muito pouco. Minha situação nesta competência é muito precária.</p>
                            <p class="fonte18" style="margin-bottom: 0%;">4 – Pouco : É um ponto intermediário entre o “muito pouco” e o termo médio no domínio desta competência</p>
                            <p class="fonte18" style="margin-bottom: 0%;">5 – Tenho um termo médio de domínio da competência entre os extremos da escala.</p>
                            <p class="fonte18" style="margin-bottom: 0%;">6 – Estou ligeiramente acima do termo médio da escala</p>
                            <p class="fonte18" style="margin-bottom: 0%;">7 – Estou ganhando confiança nesta competência. Tenho certo grau de conforto</p>
                            <p class="fonte18" style="margin-bottom: 0%;">8 – Apresento um bom grau de domínio nesta competência, me sinto confortável.</p>
                            <p class="fonte18" style="margin-bottom: 0%;">9 – Me sinto bastante seguro nesta competência.</p>
                            <p class="fonte18" style="margin-bottom: 0%;">10 – Excelente. Apresento um alto nível de domínio desta competência. </p>
                            
                            <br>
                            <h3>Questionário</h3>
                        </div>
                        <form name="formulario" role="form" method="post" action="instrumento/3">
                        {!! csrf_field() !!}
                        <!-- TABELA DE QUESTIONARIO -->
                        <div>

                            <div class="table-responsive">
                                <div>
                                <table class="table table-hover table-bordered fonte18">
                                    <thead class="bg-primary">
                                        <tr class="center">
                                            <th scope="col-8">
                                                Responda de <b>1</b> a <b>10</b> às seguintes questões:
                                            </th>
                                            <th scope="col-2">
                                                1
                                            </th>
                                            <th scope="col-2">
                                                2
                                            </th>
                                            <th scope="col-2">
                                                3
                                            </th>
                                            <th scope="col-2">
                                                4
                                            </th>
                                            <th scope="col-2">
                                                5
                                            </th>
                                            <th scope="col-2">
                                                6
                                            </th>
                                            <th scope="col-2">
                                                7
                                            </th>
                                            <th scope="col-2">
                                                8
                                            </th>
                                            <th scope="col-2">
                                                9
                                            </th>
                                            <th scope="col-2">
                                                10
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @php
                                        $questions = [  'Conhecimento do Produto',
                                                        'Conhecimento dos Negócios do cliente',
                                                        'Conhecimento do Mercado',
                                                        'Informações sobre a concorrência',
                                                        'Inteligência Emocional',
                                                        'Habilidade para ouvir',
                                                        'Perguntar, Sondar, Estimular',
                                                        'Sensibilidade',
                                                        'Cooperação',
                                                        'Persuasão',
                                                        'Capacidade de Análise',
                                                        'Desenvolvimento de Estratégia e Planejamento',
                                                        'Identificação de Oportunidades',
                                                        'Organização Pessoal e Administração do Tempo',
                                                        'Criatividade na Solução de Problemas',
                                                        'Persistência no Seguimento',
                                                        'Serviço como Fator Diferencial',
                                                        'Ajuste das Propostas',
                                                        'Confiança Pessoal']
                                        @endphp
                                        @for($i=1;$i<=19;$i++)
                                        <!-- QUESTÃO 1 -->
                                        <tr>
                                            <td colspan="12">{!! $table1[$i-1] !!}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="question">
                                                <div class="media align-items-center">
                                                    {{$questions[$i-1]}}
                                                </div>
                                            </th>
                                            <td class="1-1">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i-1}}" class="custom-control-input" id="radio{{$i}}-1" type="radio" value=1 required>
                                                    <label style="cursor: pointer;" class="custom-control-label" for="radio{{$i}}-1"></label>
                                                </div>                                                
                                            </td>
                                            <td class="1-2">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i-1}}" class="custom-control-input" id="radio{{$i}}-2" type="radio" value=2 required>
                                                    <label style="cursor: pointer;" class="custom-control-label" for="radio{{$i}}-2"></label>
                                                </div>
                                            </td>
                                            <td class="1-3">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i-1}}" class="custom-control-input" id="radio{{$i}}-3" type="radio" value=3 required>
                                                    <label style="cursor: pointer;" class="custom-control-label" for="radio{{$i}}-3"></label>
                                                </div>                                                
                                            </td>
                                            <td class="1-4">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i-1}}" class="custom-control-input" id="radio{{$i}}-4" type="radio" value=4 required>
                                                    <label style="cursor: pointer;" class="custom-control-label" for="radio{{$i}}-4"></label>
                                                </div>
                                            </td>
                                            <td class="1-5">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i-1}}" class="custom-control-input" id="radio{{$i}}-5" type="radio" value=5 required>
                                                    <label style="cursor: pointer;" class="custom-control-label" for="radio{{$i}}-5"></label>
                                                </div>                                                
                                            </td>
                                            <td class="1-6">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i-1}}" class="custom-control-input" id="radio{{$i}}-6" type="radio" value=6 required>
                                                    <label style="cursor: pointer;" class="custom-control-label" for="radio{{$i}}-6"></label>
                                                </div>
                                            </td>
                                            <td class="1-7">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i-1}}" class="custom-control-input" id="radio{{$i}}-7" type="radio" value=7 required>
                                                    <label style="cursor: pointer;" class="custom-control-label" for="radio{{$i}}-7"></label>
                                                </div>                                                
                                            </td>
                                            <td class="1-8">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i-1}}" class="custom-control-input" id="radio{{$i}}-8" type="radio" value=8 required>
                                                    <label style="cursor: pointer;" class="custom-control-label" for="radio{{$i}}-8"></label>
                                                </div>
                                            </td>
                                            <td class="1-9">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i-1}}" class="custom-control-input" id="radio{{$i}}-9" type="radio" value=9 required>
                                                    <label style="cursor: pointer;" class="custom-control-label" for="radio{{$i}}-9"></label>
                                                </div>                                                
                                            </td>
                                            <td class="1-10">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i-1}}" class="custom-control-input" id="radio{{$i}}-10" type="radio" value=10 required>
                                                    <label style="cursor: pointer;" class="custom-control-label" for="radio{{$i}}-10"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- FIM QUESTÃO 1 -->
                                        @endfor
                           
                                    </tbody>
                                </table>
                                
                            </div>

                            </div>


                        </div>
                        <!-- FIM TABELA DE QUESTIONARIO -->
                        <br>
                        <div class="col-8">
                        <button class="btn btn-icon btn-3 btn-primary fonte18" type="submit">
                            <span class="btn-inner--icon"><i class="fa fa-paper-plane"></i></span>
                            <span class="btn-inner--text">Enviar formulário</span>
                        </button>
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
    <script>window.onload = function(){history.go(+1)};</script>
@endpush