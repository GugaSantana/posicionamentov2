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

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .slide1-landing {
            min-height: calc(100% - 80px);
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
                                    <h4 class="text-center">Obrigado pela sua compra!</h4>

                                    {{-- <div class="row">
                                        <div class="col-6" style="align-self: center;">
                                            <h4 class="text-right mt-4">Descubra o <font style="color: #ffde66">TOPSELLER</font>
                                            </h4>
                                        </div>
                                        <div class="col-6" style="align-self: center;">
                                            <img src="{{ asset('images/logo_topseller.png') }}" alt="" style="width: 10em">
                                            <img src="{{ asset('images/landingpage-img-1.png') }}" class="image-landing-mobile" alt="">
                                        </div>
                                    </div> --}}



                                    <p class="text-center mt-4">Recebemos o seu pagamento, assim que for aprovado você receberá um email de confirmação com as instruções para fazer o seu acesso ao Top Seller</p>

                                    <div class="col-md-3" style="
                                        float: right;
                                        margin-right: -43px;
                                        padding-right: 1px;
                                    ">
                                        <a href="https://posicionamento.com.br" target="_blank"><img class="navbar-brand" src="{{ asset('/img/LogoDesenvolvidoPor.png') }}" style="width: 10em;"></a>
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