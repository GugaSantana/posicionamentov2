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
    <div class="card-header"  style="min-height: 8em;">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3>
            <center>INSTRUMENTO 10</center>
        </h3>
        <h3>
            <center>O GERENCIAMENTO DO RELACIONAMENTO COM O CLIENTE<br>ATRAVÉS DA INTELIGÊNCIA EMOCIONAL</center>
        </h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="../posicionamento/public/img/selo_top_seller.png" style="width: 7em; float:right">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 10</center>
                </h3>
                <h3>
                    <center>O GERENCIAMENTO DO RELACIONAMENTO COM O CLIENTE ATRAVÉS DA INTELIGÊNCIA EMOCIONAL</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">

                    <div class="col-12">
                            <h4>
                                <center>Levantamento de Informações</center>
                            </h4>

                            <p class="fonte18">Este é o quarto instrumento da série comportamental que começou com a avaliação do desenvolvimento dos Estados do Ego (a estrutura da Personalidade), continuou com o instrumento que nos permite equilibrar a relação entre Feedback e Exposição no relacionamento interpessoal e, o terceiro instrumento tratou do Gerenciamento das Comunicações utilizando os Canais Neurolinguísticos.</p>
                            <p class="fonte18">Este instrumento contribuirá para o desenvolvimento de sua Inteligência Emocional, condição fundamental para gerar EMPATIA junto a seus clientes, pois como sabemos, as Vendas Consultivas estão fundamentadas na qualidade do relacionamento e na empatia que se gera junto ao cliente.</p>
                            <p class="fonte18">O relacionamento com seu cliente é “gerenciável”,e uma das principais técnicas para aumentar a qualidade do relacionamento é desenvolver sua Inteligência Emocional.</p>
                            <p class="fonte18">A Inteligência Emocional refere-se à capacidade de identificar nossos próprios sentimentos e os sentimentos dos outros, assim como a capacidade de lidar com eles.</p>
                            <p class="fonte18">Inteligência Emocional é a capacidade de identificar, entender, utilizar e administrar emoções de forma eficiente e positiva. É a capacidade de gerir bem as emoções dentro de nós e nos nossos relacionamentos.</p>
                            <p class="fonte18">A Inteligência Emocional é uma espécie de “Inteligência Social”</p>
                            <p class="fonte18">Implementar Técnicas de Inteligência Emocional é fundamental para o sucesso em Vendas Consultivas.</p>

                    </div>
                    <br>
                    <div class="col-12">
                        <p class="fonte18"><b>INSTRUÇÕES</b></p>
                        <!-- <h2 style="color: #35408f">PRIMEIRA PARTE</h2> -->
                        <p class="fonte18">Para avaliar sua Inteligência Emocional responda as seguintes questões com transparência (sinceridade), escolhendo para cada uma delas a alternativa que mais se adéqua a você.</p>
                    </div>

                    <div></div>

                    @php

                    $questions = [
                        '1. Quando estou chateado ou irritado consigo identificar a causa desse sentimento?',
                        '2. Tenho uma visão realista de mim mesmo, e estou ciente de quais são as minhas potencialidades e limitações?',
                        '3. Eu tendo a reagir de forma determinada frente a pequenos problemas?',
                        '4. Tendo a manter o controle e a calma nos momentos difíceis?',
                        '5. Tenho confiança nas minhas habilidades, talentos e capacidades?',
                        '6. Com freqüência acalmo colegas que estão descontrolados ou reagem agressivamente a uma determinada situação?',
                        '7. Eu tenho boa auto estima, embora admito que devo mudar algumas coisas em minha vida?',
                        '8. Quando alguma coisa que eu desejo dá errado, supero meus desapontamentos e frustrações, e trato de aprender com as experiências negativas?',
                        '9. Quando cometo erros, costumo fazer auto critica e condeno a minha falta de competência?',
                        '10. Sempre me esforço e alcanço meus objetivos. Os obstáculos e a falta de apoio não me desmotivam.',
                        '11. Não me frustro nem me sinto inseguro frente a situações traumáticas.',
                        '12. Sei me colocar no lugar do outro e compreender as necessidades e as dificuldades pelas quais esta pessoa está passando?',
                        '13. Sempre trato e me esforço para dar o melhor de mim no trabalho?',
                        '14. Para mim é fácil iniciar contato com pessoas e fazer amigos?',
                        '15. Sei o que eu quero da vida, tenho objetivos bem definidos e tenho métodos para alcançá-los?',
                        '16. Gosto de colaborar e estou sempre disposto a ajudar os outros',
                        '17. Aprendo com meus erros, o que tem me ajudado a melhorar pensamentos e atitudes?',
                        '18. Quando tenho dificuldade com alguma pessoa, converso diretamente com ela para esclarecer a situação de desconforto?',
                        '19. Meus colegas me procuram quando necessitam de apoio psicológico e quando desejam contar um segredo ou algo intimo?',
                        '20. Estou sempre procurando aprender algo novo, porque isto me ajuda a crescer e me desenvolver'
                        ];
                    @endphp

                    <div class="col-12">
                        <br>
                        <!-- TABELA DE QUESTIONARIO -->
                        <form name="formulario" role="form" method="post" action="instrumento/10">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                    <thead class="bg-primary">    
                                        <tr>
                                            <th style="font-size: 18px; text-align: center;">QUESTÕES</th>
                                            <th style="font-size: 18px; text-align: center; width: 100px">Sim</th>
                                            <th style="font-size: 18px; text-align: center; width: 100px">Não</th>
                                        </tr>
                                    </thead>
                                        @for($i=0;$i<20;$i++) 
                                            <tr>
                                            <td style="font-size: 18px">{!! $questions[$i] !!}</td>
                                                <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                                
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" name="questao{{$i}}" id="questaoSim{{$i}}" value="s" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="questaoSim{{$i}}"></label>
                                            </div>
                                            </td>
                                                <td style="font-size: 18px; text-align: center; vertical-align: middle;">
                                                
                                                <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" name="questao{{$i}}" id="questaoNao{{$i}}" value="n" required>
                                                <label style="cursor: pointer" class="custom-control-label" for="questaoNao{{$i}}"></label>
                                                </div>
                                                
                                            
                                            </td>
                                            </tr>
                                            @endfor

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