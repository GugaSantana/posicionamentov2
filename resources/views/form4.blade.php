@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <style>
        .card .table td, .card .table th {
            white-space: normal;
            background-color: #DCDCDC;
        }
    </style>
        <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
.card .table td, .card .table th{font-size:15px}
</style>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">O GERENCIAMENTO DO RELACIONAMENTO COM O CLIENTE ATRAVÉS DA INTELIGÊNCIA EMOCIONAL</h3>
                            </div>
                            <div class="col-4 text-right">
                                <!--<a href="a" class="btn btn-sm btn-primary">Cadastrar</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <p>As Vendas Consultivas estão fundamentadas na qualidade do relacionamento e na empatia que se gera junto ao cliente.</p>
                            <p>O relacionamento com seu cliente é “gerenciável”,e uma das principais técnicas para aumentar a qualidade do relacionamento é desenvolver sua Inteligência Emocional.</p>
                            <p>A Inteligência Emocional refere-se à capacidade de identificar nossos próprios sentimentos e os sentimentos dos outros, assim como a capacidade de lidar com eles.</p>
                            <p>Inteligência Emocional é a capacidade de identificar, entender, utilizar e administrar emoções de forma eficiente e positiva. É a capacidade de gerir bem as emoções dentro de nós e nos nossos relacionamentos.</p>
                            <p>A Inteligência Emocional é uma espécie de “Inteligência Social”</p>
                            <p>Implementar Técnicas de Inteligência Emocional é fundamental para o sucesso em Vendas</p>    
                        </div>
                        <br>
                        <div class="col-8">
                            <p><b>INSTRUÇÕES</b></p>
                            <p>Para avaliar sua Inteligência Emocional responda as seguintes questões com transparência, escolhendo para cada uma delas a alternativa que mais se adéqua a você.</p>
                            <h2>Questionário</h2>
                        </div>
                        <!-- TABELA DE QUESTIONARIO -->
                        <div>

                            <div class="table-responsive">
                                <div>
                                <table class="table align-items-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col-6">
                                                Responda <b>sim</b> ou <b>não</b> às seguintes questões:
                                            </th>
                                            <th scope="col-2">
                                                Sim
                                            </th>
                                            <th scope="col-2">
                                                Às vezes
                                            </th>
                                            <th scope="col-2">
                                                Não
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                    @php
                                        $questions = [  '1. Quando estou chateado ou irritado consigo identificar a causa desse sentimento',
                                                        '2. Tenho uma visão realista de mim mesmo, e estou ciente de quais são as minhas potencialidades e limitações',
                                                        '3. Eu tendo a reagir de forma exacerbada frente a pequenos problemas',
                                                        '4. Tendo a me descontrolar e perder a calma nos momentos difíceis',
                                                        '5. Tenho confiança nas minhas habilidades, talentos e capacidades',
                                                        '6. Com freqüência acalmo colegas que estão descontrolados ou reagem agressivamente a uma determinada situação',
                                                        '7. Eu tenho boa auto estima, embora admito que devo mudar algumas coisas em minha vida.',
                                                        '8. Quando alguma coisa que eu desejo dá errado, supero meus desapontamentos e frustrações, e trato de aprender com as experiências negativas',
                                                        '9. Quando cometo erros, costumo fazer auto critica e condeno a minha falta de competência',
                                                        '10. Sempre me esforço e alcanço meus objetivos. Os obstáculos e a falta de apoio não me desmotivam',
                                                        '11. Não me frustro nem me sinto inseguro frente a situações traumáticas',
                                                        '12. Sei me colocar no lugar do outro e compreender as necessidades e as dificuldades pelas quais esta pessoa está passando',
                                                        '13. Sempre trato e me esforço para dar o melhor de mim no trabalho',
                                                        '14. Para mim é difícil iniciar contato com pessoas e fazer amigos',
                                                        '15. Sei o que eu quero da vida, tenho objetivos bem definidos e tenho métodos para alcançá-los',
                                                        '16. Gosto de colaborar e estou sempre disposto a ajudar os outros',
                                                        '17. Aprendo com meus erros, o que tem me ajudado a melhorar pensamentos e atitudes',
                                                        '18. Quando tenho dificuldade com alguma pessoa, converso diretamente com ela para esclarecer a situação de desconforto',
                                                        '19. Meus colegas me procuram quando necessitam de apoio psicológico e quando desejam contar um segredo ou algo intimo',
                                                        '20. Estou sempre procurando aprender algo novo, porque isto me ajuda a crescer e me desenvolver.',
]
                                    @endphp
                                    @for($i=1;$i<=20;$i++)
                                        <!-- QUESTÃO 1 -->
                                        <tr>
                                            <th scope="row" class="question">
                                                <div class="media align-items-center">
                                                    {{$questions[$i-1]}}
                                                </div>
                                            </th>
                                            <td class="yes">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radioY{{$i}}" type="radio">
                                                    <label class="custom-control-label" for="radioY{{$i}}"></label>
                                                </div>                                                
                                            </td>
                                            <td class="maybe">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radioM{{$i}}" type="radio">
                                                    <label class="custom-control-label" for="radioM{{$i}}"></label>
                                                </div>
                                            </td>
                                            <td class="no">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radioN{{$i}}" type="radio">
                                                    <label class="custom-control-label" for="radioN{{$i}}"></label>
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
                        <button class="btn btn-icon btn-3 btn-primary" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                            <span class="btn-inner--text">Enviar formulário</span>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush