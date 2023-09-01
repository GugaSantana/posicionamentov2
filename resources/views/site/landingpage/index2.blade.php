@extends('site.landingpage.master')

@section('site.css')
    <style>
        p {
            font-size: 20px !important;
        }

        .btn-bigger {
            font-size: 24px !important;
        }
    </style>
@endsection

@section('site.content')
    <div class="barra-dourada-divisao"></div>

    <div class="slide1-landing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide1-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    
                                    <div class="row">
                                        <div class="col-6" style="align-self: center;">
                                            <h4 class="text-right">COMO ESTÁ ORGANIZADO O <font style="color: #ffde66">TOPSELLER</font></h4>
                                            </h4>

                                            <p class="mt-4"> O <font style="color: #ffde66">TOPSELLER</font> está constituído por 20 instrumentos quantitativos e analíticos que você responderá pela internet </p>

                                            <p>Os 20 instrumentos seguem uma sequência lógica.<br>
                                            Você vai montar um quebra-cabeças de facílima compreensão.</p>
                                        </div>
                                        <div class="col-6" style="align-self: center;">
                                            <img src="{{ asset('images/logo_topseller.png') }}" alt="" style="width: 10em; margin-top: -16em;">
                                            <img src="{{ asset('images/landingpage-img-1.png') }}" alt="" style="width: 20em; border-radius: 1em;">
                                        </div>
                                    </div>

                                    

                                    <p>Através de questionários, matrizes, escalas e outros meios você apresentará as informações necessárias para realizar seu diagnóstico das 20 competências de vendas essenciais para a nova realidade do mercado, receberá as Recomendações de melhoria personalizadas e também receberá os modelos de Planos de Ação para melhorar as 20 competências, além de aprender a utilizar a Inteligência Artificial para ajudá-lo na elaboração destes Planos.</p>
                                    <p>Tudo num formato extremamente simples.</p>

                                    <h4 class="mb-4" style="color: #ffde66"> O objetivo é facilitar e melhorar sua vida e não complicar.</h4>

                                    <form action="{{ route('landingpage_buy') }}" method="post">
                                        {!! csrf_field() !!}
                                        <center><button type="submit" class="btn btn-danger btn-bigger">QUERO COMPRAR</button></center>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="barra-dourada-divisao"></div>

    <div class="slide1-landing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide1-content">
                        <div class="row">
                            <div class="col-md-4 my-4">
                                <div class="left-content" style="border-style: double; border-radius: 10px; border-color: green; padding: 10px; height: 100%">
                                    <h4 style="color: green" class="text-center">1ª FASE</h4>
                                    <p style="color: green" class="text-center">Precondições para aumentar suas vendas</p>

                                    <p style="font-size: 16px !important">Esta etapa está constituída pelos 6 primeiros instrumentos do <font style="color: #ffde66"><b>TOPSELLER</b></font> – Estes instrumentos são os alicerces que sustentarão as técnicas de vendas consultivas. Vamos construir o prédio para vendermos mais e faturarmos mais. </p>
                                    <p style="font-size: 16px !important">Temos que apoiar o prédio das Técnicas de Vendas Consultivas em <font style="color: green"><b>FATORES CRÍTICOS DE SUCESSO.</b></font></p>
                                    <p style="font-size: 16px !important">Nível de conhecimento dos produtos ou serviços que vendo, nível de conhecimento dos produtos e serviços concorrentes, nível de otimização de minha Matriz de Produtividade nas Vendas, a correta priorização dos problemas que devo resolver para aumentar minhas vendas entre outros fatores são cuidadosamente diagnosticados na primeira fase do <font style="color: #ffde66"><b>TOPSELLER</b></font>.</p>
                                </div>
                            </div>
                            <div class="col-md-4 my-4">
                                <div class="left-content" style="border-style: double; border-radius: 10px; border-color: green; padding: 10px; height: 100%">
                                    <h4 style="color: green" class="text-center">2ª FASE</h4>
                                    <p style="color: green" class="text-center">Como aumentar as Vendas utilizando as Técnicas consultivas </p>

                                    <p style="font-size: 16px !important">11 instrumentos constituem esta fase do TOPSELLER.</p>
                                    <p style="font-size: 16px !important">Com um bom alicerce definido na Fase 1, podemos começar a construir o prédio das vendas consultivas</p>
                                    <p style="font-size: 16px !important">Hoje onde a <font style="color: green"><b>OFERTA é maior que a DEMANDA</b></font> em quase todos os mercados a venda não começa pelo produto ou serviço que oferecemos e sim pela pessoa do comprador.</p>
                                    <p style="font-size: 16px !important">O Vendedor Consultivo se assemelha a um médico: Se não conquista a confiança do comprador, seu respeito, se não transmite segurança e não gera empatia o vendedor será pouco produtivo nos mercados saturados em que estamos imersos.</p>
                                    <p style="font-size: 16px !important">Gerenciar o Campo Psicológico é gerenciar a interação entre o vendedor e o cliente. Se você não cuida do Campo Psicológico, se está fora de controle, prepare-se para perder vendas. <br>Aqui você será habilitado para “Gerenciar o Campo Psicológico”</p>
                                    <p style="font-size: 16px !important">A seguir o <font style="color: #ffde66"><b>TOPSELLER</b></font> através de mais 5 instrumentos passa a diagnosticar suas competências e fragilidades para fazer a PROPECÇÃO DE CLIENTES, na sua QUALIFICAÇÃO, na APRESENTAÇÃO dos argumentos de vendas, organizados em 17 linhas de argumentação, na NEGOCIAÇÃO e neutralização das diferentes categorias de obstáculos e no FECHAMENTO.</p>
                                </div>
                            </div>
                            <div class="col-md-4 my-4">
                                <div class="left-content" style="border-style: double; border-radius: 10px; border-color: green; padding: 10px; height: 100%">
                                    <h4 style="color: green" class="text-center">3ª FASE</h4>
                                    <p style="color: green" class="text-center">A Gestão de Vendas utilizando esta metodologia</p>

                                    <p style="font-size: 16px !important">Os 3 últimos instrumentos o habilitarão para que você implemente as 20 técnicas de maneira correta ao longo do tempo! </p>
                                    <p style="font-size: 16px !important">Queremos que <font style="color: green"><b>estas técnicas sejam o Sangue de sua Profissão</b></font>, que você as aplique de maneira espontânea, automática, que forme parte de sua cultura, que as aplique inconscientemente, como respiramos, como caminhamos.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="barra-dourada-divisao"></div>

    <div class="slide1-landing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide1-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    
                                    <h4 class="mb-4">.....e passando por todas as etapas do <font style="color: #ffde66">TOPSELLER</font> Você será imbatível</h4>

                                    <img src="{{ asset('images/landingpage-img-5.png') }}" alt="" style="width: 100%; border-radius: 1em;">

                                    <p class="mt-4">SE VOCÊ <font style="color: green">QUER</font> AUMENTAR SEU FATURAMENTO E FAZ SEU TRABALHO DO MESMO JEITO QUE SEMPRE FEZ...</p>

                                    <h4 class="mb-4">NUNCA ALCANÇARÁ SEUS SONHOS ....... <font style="color: green">AUMENTE SEUS GANHOS, FAÇA DIFERENTE....</font></h4>

                                    <center><img src="{{ asset('images/landingpage-img-6.png') }}" alt="" style="width: 50%; border-radius: 1em;"></center>
                                    
                                    <form action="{{ route('landingpage_buy') }}" method="post">
                                        {!! csrf_field() !!}
                                        <center><button type="submit" class="btn btn-danger btn-bigger mt-4">QUERO COMPRAR</button></center>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="barra-dourada-divisao"></div>
    
@endsection

@section('site.js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<script>
    $(document).ready(function() {
        $('#telefone').inputmask('(99) 99999-9999');

        $('#submitBtn').click(function(event) {
            const telefoneInput = $('#telefone');
            const telefoneValue = telefoneInput.inputmask('unmaskedvalue');

            if (telefoneValue.length !== 11) {
                alert("Digite um telefone válido completo.");
                event.preventDefault();
            }
        });
    });
</script>
@endsection