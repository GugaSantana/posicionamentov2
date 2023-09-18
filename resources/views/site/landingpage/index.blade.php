@extends('site.landingpage.master')

@section('site.css')
    <style>
        p {
            font-size: 20px !important;
        }

        .btn-bigger {
            font-size: 24px !important;
        }

        .image-landing-mobile {
            width: 20em;
            border-radius: 1em;
            /* Defina a largura para 10em quando a largura da tela for menor que 768px (por exemplo, dispositivos móveis) */
            @media (max-width: 768px) {
                width: 10em;
            }
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
                                    <h4 class="text-right mb-4" style="color:red">MUDE PARA GANHAR!</h4>
                                    <h4 class="text-center">DOMINE AS MELHORES E MAIS MODERNAS FERRAMENTAS DE VENDAS E FIQUE
                                        RICO</h4>

                                    <div class="row">
                                        <div class="col-6" style="align-self: center;">
                                            <h4 class="text-right mt-4">Descubra o <font style="color: #ffde66">TOPSELLER</font>
                                            </h4>
                                        </div>
                                        <div class="col-6" style="align-self: center;">
                                            <img src="{{ asset('images/logo_topseller.png') }}" alt="" style="width: 10em">
                                            <img src="{{ asset('images/landingpage-img-1.png') }}" class="image-landing-mobile" alt="">
                                        </div>
                                    </div>



                                    <p class="text-center mt-4">Você conhecerá técnicas surpreendentes para aumentar sua
                                        receita....</p>

                                    <center><button type="button" class="btn btn-danger btn-bigger" data-toggle="modal" data-target="#cadastroModal">QUERO SABER MAIS</button>
                                    </center>

                                    <p class="text-center mt-4">Você colocará em prática, de maneira automática, uma nova
                                        forma de vender.<br>
                                        Isto é possível porque o TOPSELLER não é um curso.<br>
                                        Você será habilitado a utilizar novas, originais e poderosas técnicas de vendas</p>

                                    <p class="text-center">Estas técnicas serão <font style="font-size: 22px">“O sangue de
                                            sua Profissão”</font>
                                    </p>
                                    <div class="col-md-3" style="
                                        float: right;
                                        margin-right: -43px;
                                        padding-right: 1px;
                                    ">
                                        <a href="https://posicionamento.com.br" target="_blank"><img id="sus" class="navbar-brand" src="{{ asset('/img/LogoDesenvolvidoPor.png') }}" style="width: 10em;"></a>
                                    </div>
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

                                    <p>SIM, porque não se trata de teoria e nem de conceitos conhecidos, reciclados mil
                                        vezes! </p>
                                    <p>Tudo aqui é novo: por esse motivo você terá vantagens profissionais exclusivas e você
                                        aumentará seu faturamento</p>
                                    <p>Definitivamente você não conseguirá resultados diferentes fazendo mais ou menos a
                                        mesma coisa.</p>
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="left-content">

                                    <p>O <font style="color: #ffde66">TOPSELLER</font> é uma metodologia 100% on line</p>
                                    <p>para quem deseja aumentar sua produtividade como vendedor,</p>
                                    <p>para quem deseja aumentar seu faturamento apoiado em técnicas quantitativas, práticas, supermodernas e bem fundamentadas.</p>
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="right-image">
                                    <img src="{{ asset('images/landingpage-img-2.png') }}" alt="" style="width: 100%; border-radius: 1em;">
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
                                    <h4 class="text-center mb-4">PORQUE O <font style="color: #ffde66">TOPSELLER</font> PODE LHE AJUDAR</h4>
                                    
                                    <p><font style="color: #ffde66">A RESPOSTA É MUITO SIMPLES:</font> Uma recente pesquisa conduzida pela Escola de Negócios Marshall, da Universidade do Sul da Califórnia mostra que apenas 13% dos vendedores são responsáveis por 87% dos lucros das empresas.</p>

                                    <p>O potencial para aumentar suas vendas e sua receita é enorme!</p>

                                    <p style="color: red">SABE PORQUE TÃO POUCOS VENDEDORES SÃO REALMENTE COMPETENTES?</p>

                                    <p>Porque todos os vendedores têm os mesmos problemas: <b>VOCÊ NÃO É UMA EXCEÇÃO.</b></p>

                                    <p>SIM, e com o <font style="color: #ffde66">TOPSELLER</font> você pode sair na frente de todos na melhoria real e efetiva de seus resultados.</p>

                                    <p>VAMOS DEMONSTRAR porque seu problema e suas necessidades não são só suas: <font style="color: green">Você vai se surpreender</font></p>

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
                            <div class="col-md-8">
                                <div class="left-content">
                                    <h4 class="text-center mb-4" style="color: #ffde66">ENTENDA A MUDANÇA......</h4>

                                    <p>Durante décadas a <font style="color: green">OFERTA de produtos e serviços foi MAIOR que a DEMANDA</font></p>

                                    <p><font style="color: green">Pense:</font> quantas pessoas tinham carro, geladeira ou rádio nos anos 20 do século passado? </p>

                                    <p>Nos mercados com este perfil, se praticavam as chamadas Vendas Transacionais (na verdade se levantavam pedidos)</p>

                                    <p>Foco no produto ou nos serviços, despreocupação com os concorrentes, pouca necessidade de argumentação e de neutralização de obstáculos, nenhuma necessidade de descobrir e entender as reais necessidades do cliente.</p>

                                    <p>APLICAR PSICOLOGIA NA RELAÇÃO COM OS CLIENTES?  PARA QUE?</p>

                                    <p>FAZER UMA PROPOSTA DE VALOR PARA O CLIENTE? O QUE É ISSO? </p>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <div class="right-image">
                                    <h4 class="text-center mb-4" style="color: #ffde66">Vendas Transacionais</h4>
                                    <p class="text-center" style="color: green">OFERTA MENOR - DEMANDA MAIOR</p>

                                    <img src="{{ asset('images/landingpage-img-3.png') }}" alt="" style="width: 100%; border-radius: 1em;">

                                    <p class="text-center" style="color: green">VENDER ERA FÁCIL</p>
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
                            <div class="col-md-4 align-self-center">
                                <div class="right-image">
                                    <h4 class="text-center mb-4" style="color: #ffde66">Vendas Consultivas</h4>
                                    <p class="text-center" style="color: green">OFERTA MAIOR - DEMANDA MENOR</p>

                                    <img src="{{ asset('images/landingpage-img-4.png') }}" alt="" style="width: 100%; border-radius: 1em;">

                                    <p class="text-center" style="color: green">VENDER FICOU COMPLICADO</p>
                                </div>
                                
                            </div>
                            <div class="col-md-8 align-self-center">
                                <div class="left-content">
                                    <p>Os anos passaram e a OFERTA em quase todos os setores, hoje, é MAIOR que a DEMANDA. VOCÊ DUVIDA?</p>

                                    <p>Qualquer produto hoje apresenta muitas variedades, muitas marcas. Veja na figura: Que vinho vou comprar? </p>

                                    <p style="color: green">O verdadeiro problema de todos os vendedores é que a realidade mudou, o mercado mudou e suas práticas profissionais continuam a mesma</p>

                                    <p><font style="color: green">No mercado atual, onde a OFERTA É MAIOR DO QUE A DEMANDA,</font> você necessita de novas Técnicas de vendas! </p>

                                    <p>As chamadas <font style="color:red">TÉCNICAS CONSULTIVAS.</font></p>

                                    <p><font style="color: green">ENTÃO VOCÊ TEM QUE VIRAR A MESA,</font> você não vai resolver seu problema com um “curso mais do mesmo”,  você precisa de uma cirurgia.  </p>

                                    <p>Mostramos a causa principal dos seus problemas.......<font style="color:red">VOCÊ AINDA TEM DUVIDAS?</font></p>
                                    
                                    <center><button type="button" class="btn btn-danger btn-bigger"  style="white-space: normal" data-toggle="modal" data-target="#cadastroModal">QUERO CONHECER ESTAS TÉCNICAS</button></center>
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
                            <div class="col-md-12 align-self-center">
                                <div class="left-content">

                                    <div style="background-color: #843c0b;border-radius: 30px;padding: 1em;">
                                        <h4 class="text-center mb-4" style="color: #ffde66; text-decoration: underline">SUPER OPORTUNIDADE PARA VOCÊ</h4>
                                        <p>Após o Programa <font style="color: #ffde66">TOPSELLER</font> ter sido aplicado a milhares de profissionais de vendas, vendedores, promotores de vendas, gerentes e diretores......em dezenas de empresas</p>

                                        <p style="color: #ffde66">AGORA.....</p>

                                        <p><font style="color: #ffde66">Pela primeira vez o TOPSELLER</font> está sendo oferecido diretamente ao profissional, ou seja, poderá ser adquirido por pessoas físicas e não somente por empresas.   </p>
                                    </div>
                                    <h4 class="my-4" style="color: green">E AINDA....... </h4>

                                    <p>Se inscrevendo no <font style="color: #ffde66">TOPSELLER</font> você estará participando do primeiro Programa de Vendas que incorpora <font style="color: green">INTELIGÊNCIA ARTIFICIAL!</font></p>

                                    <p>Com o <font style="color: #ffde66">TOPSELLER</font> <b>você</b> será imbatível </p>
                                    
                                    <center><button type="button" class="btn btn-danger btn-bigger"  style="white-space: normal" data-toggle="modal" data-target="#cadastroModal">QUERO CONHECER ESTAS TÉCNICAS</button></center>
                                    <div class="col-md-3 mt-4" style="
                                        float: right;
                                        margin-right: -43px;
                                        padding-right: 1px;
                                    ">
                                        <a href="https://posicionamento.com.br" target="_blank"><img id="sus" class="navbar-brand" src="{{ asset('/img/LogoDesenvolvidoPor.png') }}" style="width: 10em;"></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="barra-dourada-divisao"></div>

    <div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informe os dados abaixo para continuar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="cadastroForm" action="{{ route('landingpage_register') }}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="nome">Nome Completo *</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Whatsapp *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="(99) 99999-9999" data-inputmask="'mask': '(99) 99999-9999'">
                        </div>
                        <button type="submit" class="btn btn-primary" id="submitBtn">Enviar</button>
                        <p style="font-size: 10px !important; line-height: 1.5" class='mt-4'>Utilizaremos seus dados unicamente para efeitos de marketing, para darmos informações adicionais de nossos serviços.</p>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('site.js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<script>
    $(document).ready(function() {
        $('#phone').inputmask('(99) 99999-9999');

        $('#submitBtn').click(function(event) {
            const phoneInput = $('#phone');
            const phoneValue = phoneInput.inputmask('unmaskedvalue');

            if (phoneValue.length !== 11) {
                alert("Digite um telefone válido completo.");
                event.preventDefault();
            }
        });
    });
</script>
@endsection