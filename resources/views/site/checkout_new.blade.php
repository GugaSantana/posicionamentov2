@extends('site.page')

@section('site.content')
    <div id="loader" class="lds-dual-ring hidden overlay"></div>

    <!-- Page Content -->
    <div class="page-heading-topseller header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #c2a94d;">PROGRAMA TOP SELLER</h1>
                    <span>METODOLOGIA PARA AUMENTAR AS VENDAS, EM BASES OBJETIVAS, QUANTITATIVAS E MENSURÁVEIS</span>
                    <img style="width: 20%;" src="/images/logo_topseller.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="barra-dourada-divisao">
        <h2>PAGAMENTO</h2>
    </div>

    <!-- TOPSELLER 2-1 -->
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="center-content">


                    {{-- INICIO DE FORMULARIO DE INTEGRAÇÃO --}}
                    <form id="formulario" method="post" action="{{ route('finalizar_pagamento') }}">
                        {{-- <div class="text-center"> --}}
                        {{-- <img src="https://assets.pagseguro.com.br/ps-website-assets/v13.13.22/img/for-your-business/online/checkout/banner-image.png" class="img-fluid" alt="Responsive image"> --}}
                        {{-- <h1 class="text-center"></h1>
                            <hr> --}}
                        {{-- </div> --}}
                        {{-- <fieldset>
                        <div class="row mx-md-n5">
                            <div class="col px-md-5">
                                <div class="p-3 border bg-light">

                                    <legend class="text-center">GERAR SENDERHASH</legend>
                                    <div> --}}
                        <input class="form-control" type="text" id="senderHash" class="creditcard" name="senderHash" hidden>
                        <input class="form-control" type="text" id="user_email" class="creditcard" name="user_email" value="{{ $user_email }}" hidden>
                        
                        {{-- <button class="btn btn-info" id="generateSenderHash">Gerar</button> --}}

                        {{-- </div>
                                </div>
                            </div>
                    </fieldset>
                    <br> --}}

                        <fieldset>
                            <legend class="text-center">Dados de pagamento</legend>

                            <div class="row mx-md-n5">
                                <div class="col px-md-5">
                                    <div class="p-3 border bg-light">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div>
                                                    <label for="nameHolder" <b>Nome:</b></label>
                                                    <input type="text" class="form-control" id="nameHolder"
                                                        class="creditcard" name="nameHolder">
                                                </div>
                                                <div>
                                                    <label for="cpfHolder" <b>CPF:</b></label>
                                                    <input type="text" class="form-control" id="cpfHolder"
                                                        class="creditcard" name="cpfHolder">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="birthdayHolder" <b>Data de Nascimento</b></label>
                                                <input type="text" class="form-control" id="birthdayHolder"
                                                    class="creditcard" name="birthdayHolder" size="2"> &nbsp;


                                                <label for="phoneHolder" <b>Celular:</b></label>
                                                <input type="text" class="form-control" id="phoneHolder" class="creditcard"
                                                    name="phoneHolder" size="4">
                                            </div>

                                            <div class="col-sm-4 mt-2">
                                                <div>
                                                    <label for="creditCardNumber" <b>Número do cartão:</b></label>
                                                    <input type="text" class="form-control" id="creditCardNumber"
                                                        class="creditcard" name="creditCardNumber">
                                                </div>
                                                <div>
                                                    <label for="creditCardBrand" <b>Bandeira:</b></label>
                                                    <input tabindex="-1" type="text" class="form-control"
                                                        id="creditCardBrand" class="creditcard" name="creditCardBrand"
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-2">
                                                <label for="creditCardExpMonth" <b>Validade Mês (mm):</b></label>
                                                <input type="text" class="form-control" id="creditCardExpMonth"
                                                    class="creditcard" name="creditCardExpMonth" size="2"> &nbsp;


                                                <label for="creditCardExpYear" <b>Ano (yyyy):</b></label>
                                                <input type="text" class="form-control" id="creditCardExpYear"
                                                    class="creditcard" name="creditCardExpYear" size="4">
                                            </div>

                                            <div class="col-sm-4 mt-2">
                                                <label for="creditCardCvv" <b>CVV:</b></label>
                                                <input type="text" class="form-control" id="creditCardCvv"
                                                    class="creditcard" name="creditCardCvv">

                                                {{-- <label <b>Token:</b></label> --}}
                                                <input type="text" id="creditCardToken" class="form-control"
                                                    name="creditCardToken" hidden>
                                                {{-- <button class="btn btn-info" id="generateCreditCardToken">Gerar Token</button> --}}


                                            </div>

                                            <div id="diverror" class="col-12 mt-2">
                                                <div class="alert alert-danger alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">×</button>
                                                    <h5><i class="icon fa fa-ban"></i> Dados incorretos!</h5>
                                                    <p id="msgerror">Mensagem</p>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend class="text-center">Parcelamento</legend>
                            <div class="row mx-md-n5">
                                <div class="col px-md-5">
                                    <div class="p-3 border bg-light">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                Produto: <input class="form-control" type="text" id="product_name"
                                                    name="product_name" value="{{ $product->name }}" tabindex="-1"
                                                    readonly>
                                                {{-- <button class="btn btn-info" id="installmentCheck">Ver Parcelamento</button> --}}
                                            </div>
                                            <div class="col-sm-4">
                                                Preço: <input class="form-control" type="text" id="checkoutValue"
                                                    name="checkoutValue" value="{{ $product->price }}" tabindex="-1"
                                                    readonly>
                                                {{-- <button class="btn btn-info" id="installmentCheck">Ver Parcelamento</button> --}}
                                            </div>
                                            <div class="col-sm-4">
                                                Parcelas: <select name="installmentCombo" id="InstallmentCombo"
                                                    class="form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-sm-4">
                                                <a onclick="finishPayment()" class="btn btn-info"
                                                    id="installmentCheck">Finalizar Pagamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>

                        <br>
                    </form>
                    {{-- FIM DE FORMULARIO DE INTEGRAÇÃO --}}

                </div>
            </div>
        </div>
    </div>


    <div class="barra-dourada-divisao">
        <h4><a style="color: white; text-decoration: underline !important;" href="/contato">Contate-nos</a>, estamos
            aguardando por você…</h4>
    </div>


@endsection

@section('site.js')
    {{-- <script type="text/javascript" src="../checkout/js/numeral.min.js"></script> --}}
    {{-- Input mask --}}
    <script type="text/javascript" src="{{ asset('/checkout/js/jquery.inputmask.bundle.min.js') }}"></script>

    {{-- Javascript do Pagseguro --}}
    {{-- HOMOLOG <script type="text/javascript"
        src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script> --}}

    {{-- PRODUÇÃO --}}
    <script type="text/javascript" src= "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>

    <script>
        $(document).ready(function() {

            $("#diverror").hide();

            //Gera o SenderHash ao Carregar a tela
            generateSenderHash();


            $("#phoneHolder").inputmask2('(99) 9 9999-9999', {
                showMaskOnFocus: false,
                showMaskOnHover: false,
                clearMaskOnLostFocus: true
            });

            $("#cpfHolder").inputmask2('999.999.999-99', {
                showMaskOnFocus: false,
                showMaskOnHover: false,
                clearMaskOnLostFocus: true
            });

            $("#birthdayHolder").inputmask2('99/99/9999', {
                showMaskOnFocus: false,
                showMaskOnHover: false,
                clearMaskOnLostFocus: true
            });

            $("#creditCardNumber").inputmask2('9999 9999 9999 9999', {
                showMaskOnFocus: false,
                showMaskOnHover: false,
                clearMaskOnLostFocus: true
            });

            $("#creditCardExpMonth").inputmask2('99', {
                showMaskOnFocus: false,
                showMaskOnHover: false,
                clearMaskOnLostFocus: true
            });

            $("#creditCardExpYear").inputmask2('9999', {
                showMaskOnFocus: false,
                showMaskOnHover: false,
                clearMaskOnLostFocus: true
            });

        })

    </script>

    <!-- Funcionalidade do JS PAGSEGURO -->
    <script type="text/javascript">
        //Session ID
        PagSeguroDirectPayment.setSessionId("{{ $session }}");
        console.log("{{ $session }}");

        //Get SenderHash
        function generateSenderHash() {
            PagSeguroDirectPayment.onSenderHashReady(function(response) {
                if (response.status == 'error') {
                    console.log(response.message);
                    return false;
                }
                //Hash estará disponível nesta variável.
                $("#senderHash").val(response.senderHash);
            });
        }

        //Get CreditCard Brand and check if is Internationl
        $("#creditCardNumber").keyup(function() {
            var creditCardNumber = $("#creditCardNumber").val().replace(/[^\d]+/g, '');
            if (creditCardNumber.length >= 6) {
                PagSeguroDirectPayment.getBrand({
                    cardBin: creditCardNumber.substring(0, 6),
                    success: function(response) {
                        console.log(response);
                        $("#creditCardBrand").val(response['brand']['name'].toUpperCase());
                        $("#creditCardCvv").attr('size', response['brand']['cvvSize']);
                        installmentCheck();
                        $("#creditCardNumber").removeClass('is-invalid');
                    },
                    error: function(response) {
                        console.log(response);
                        $("#creditCardNumber").addClass('is-invalid');
                    }
                })
            };
        })

        function printError(error) {
            $.each(error['errors'], (function(key, value) {
                console.log("Foi retornado o código " + key + " com a mensagem: " + value);
            }));
        }

        function getPaymentMethods(valor) {
            PagSeguroDirectPayment.getPaymentMethods({
                amount: valor,
                success: function(response) {
                    //console.log(JSON.stringify(response));
                    console.log(response);
                },
                error: function(response) {
                    console.log(JSON.stringify(response));
                }
            })
        }

        function mostrar_erros(response) {
            var errosCartao = '';
            var promises = [];
            $.each(response, function(key, value) {
                promises.push(errosCartao += "<li>" + value + "</li>");
            });
            $.when.apply($, promises).then(function() {
                alerta("error", "Erro", errosCartao);
            });
        }

        //Generates the creditCardToken
        function generateCreditCardToken() {
            var param = {
                cardNumber: $("#creditCardNumber").val(),
                cvv: $("#creditCardCvv").val(),
                expirationMonth: $("#creditCardExpMonth").val(),
                expirationYear: $("#creditCardExpYear").val(),
                success: function(response) {
                    console.log(response);
                    $("#creditCardToken").val(response['card']['token']);
                    // $("#diverror").hide();
                },
                error: function(response) {
                    console.log(response.errors);
                    // $("#msgerror").html(response.errors);
                    // alert(response.errors[0]);
                    // $("#diverror").show();
                    // alert('awui');
                }
            }
            //parâmetro opcional para qualquer chamada
            if ($("#creditCardBrand").val() != '') {
                param.brand = $("#creditCardBrand").val().toLowerCase();
            }
            PagSeguroDirectPayment.createCardToken(param);
        }

        //Check installment
        function installmentCheck() {
            if ($("#creditCardBrand").val() != '') {
                getInstallments();
            } else {
                // alert("Uma bandeira deve estar selecionada");
            }
        }

        function getInstallments() {
            var brand = $("#creditCardBrand").val().toLowerCase();
            PagSeguroDirectPayment.getInstallments({
                amount: $("#checkoutValue").val().replace(",", "."),
                brand: brand,
                maxInstallmentNoInterest: {{ $product->installment_free }}, //calculo de parcelas sem juros
                success: function(response) {
                    var installments = response['installments'][brand];
                    buildInstallmentSelect(installments);
                },
                error: function(response) {
                    console.log(response);
                }
            })
        }

        function buildInstallmentSelect(installments) {
            $("#InstallmentCombo").empty();
            $.each(installments, (function(key, value) {
                if (key == {{ $product->installment }}) {
                    return false;
                }
                $("#InstallmentCombo").append("<option value = '" + value['quantity'] + "|" + value[
                        'installmentAmount'].toFixed(2) + "'>" + value['quantity'] +
                    "x de " + value['installmentAmount'].toFixed(2) + " - Total de " + value['totalAmount']
                    .toFixed(2) + "</option>");
            }))
        }

        function finalizarPagamento() {
            // $("#formulario").submit();
            alerta('success', 'Teste', 'Finalizado com sucesso');
        }

        $("#creditCardNumber").keyup(function() {
            generateCreditCardToken();
        })

        $("#creditCardExpMonth").keyup(function() {
            generateCreditCardToken();
        })

        $("#creditCardExpYear").keyup(function() {
            generateCreditCardToken();
        })

        $("#creditCardCvv").keyup(function() {
            generateCreditCardToken();
        })

        // Validações
        function alerta(tipo, titulo, texto) {
            if (tipo == "error") {
                var classe = "bg-danger-400"
            }
            if (tipo == "success") {
                var classe = "bg-teal-400"
            }
            const wrapper = document.createElement('div');
            wrapper.innerHTML = texto;
            swal({
                title: titulo,
                content: wrapper,
                icon: tipo,
                button: {
                    text: "Ok",
                    closeModal: !0,
                    className: classe
                }
            })
        }

        // Envio para o backend
        function finishPayment() {
            var senderHash = $("#senderHash").val();
            var nameHolder = $("#nameHolder").val();
            var cpfHolder = $("#cpfHolder").val();
            var birthdayHolder = $("#birthdayHolder").val();
            var phoneHolder = $("#phoneHolder").val();
            var creditCardToken = $("#creditCardToken").val();
            var installmentCombo = $("select[name=installmentCombo]").val();
            var product_name = $("#product_name").val();
            var user_email = $("#user_email").val();

            if (senderHash == '0' || senderHash == '' || senderHash == 'undefined' || senderHash == null) {
                $("#senderHash").focus();
                return false;
            }

            if (nameHolder == '0' || nameHolder == '' || nameHolder == 'undefined' || nameHolder == null) {
                $("#nameHolder").focus();
                alerta('error', 'Validação', 'Preencha o seu nome');
                return false;
            }

            if (cpfHolder == '0' || cpfHolder == '' || cpfHolder == 'undefined' || cpfHolder == null) {
                $("#cpfHolder").focus();
                alerta('error', 'Validação', 'Preencha o seu CPF');
                return false;
            }

            if (birthdayHolder == '0' || birthdayHolder == '' || birthdayHolder == 'undefined' || birthdayHolder == null) {
                $("#birthdayHolder").focus();
                alerta('error', 'Validação', 'Preencha sua data de nascimento');
                return false;
            }

            if (phoneHolder == '0' || phoneHolder == '' || phoneHolder == 'undefined' || phoneHolder == null) {
                $("#phoneHolder").focus();
                alerta('error', 'Validação', 'Preencha o seu Telefone')
                return false;
            }

            if (creditCardToken == '0' || creditCardToken == '' || creditCardToken == 'undefined' || creditCardToken ==
                null) {
                $("#creditCardNumber").focus();
                alerta('error', 'Validação', 'Dados do cartão de crédito estão incorretos');
                return false;
            }

            if (installmentCombo == '0' || installmentCombo == '' || installmentCombo == 'undefined' || installmentCombo ==
                null) {
                $("#installmentCombo").focus();
                alerta('error', 'Validação', 'Selecione uma forma de pagamento');
                return false;
            }



            $.ajax({
                type: 'POST',
                url: "{{ route('finalizar_pagamento') }}",
                data: {
                    senderHash: senderHash,
                    nameHolder: nameHolder,
                    cpfHolder: cpfHolder,
                    birthdayHolder: birthdayHolder,
                    phoneHolder: phoneHolder,
                    creditCardToken: creditCardToken,
                    installmentCombo: installmentCombo,
                    product_name: product_name,
                    user_email: user_email,
                },

                beforeSend: function() {
                    $('#loader').removeClass('hidden');
                },

                success: function(e) {
                    if (e.success == 0) {
                        alerta('error', 'Falha ao enviar pagamento', e.message +
                            "<br>Corriga os dados e tente novamente");
                    } else {
                        var classe = "bg-teal-400"
                        const wrapper = document.createElement('div');
                        wrapper.innerHTML = "Aguarde a aprovação do pagamento para a liberação do seu acesso <br><br> Código de pagamento do Pagseguro: <br>" + e.message;
                        swal({
                            title: 'Pagamento enviado!',
                            content: wrapper,
                            icon: 'success',
                            button: {
                                text: "Ok",
                                closeModal: !0,
                                className: classe
                            }
                        }).then(function() {
                            window.location = "{{ route('site') }}";
                        });
                    }
                },

                complete: function() {
                    $('#loader').addClass('hidden');
                },
            })

        }

    </script>

@endsection

@section('site.css')

<style>
.lds-dual-ring.hidden {
    display: none;
}

.lds-dual-ring {
    display: inline-block;
    width: 80px;
    height: 80px;
}

.lds-dual-ring:after {
    content: " ";
    display: block;
    width: 64px;
    height: 64px;
    margin: 5% auto;
    margin-top: 20%;
    border-radius: 50%;
    border: 6px solid #fff;
    border-color: #fff transparent #fff transparent;
    animation: lds-dual-ring 1.2s linear infinite;
}

@keyframes lds-dual-ring {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, .8);
    z-index: 999;
    opacity: 1;
    transition: all 0.5s;
}
</style>
@endsection