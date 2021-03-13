@extends('site.page')

@section('site.content')
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
        <h2>PRÓXIMOS PASSOS</h2>
    </div>

    <!-- TOPSELLER 2-1 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center-content">


                    {{-- INICIO DE FORMULARIO DE INTEGRAÇÃO --}}
                  <form id="formulario" method="get" action="{{ route("finalizar_pagamento") }}">
                    <div class="text-center">
                        {{-- <img src="https://assets.pagseguro.com.br/ps-website-assets/v13.13.22/img/for-your-business/online/checkout/banner-image.png" class="img-fluid" alt="Responsive image"> --}}
                        <h1 class="text-center">Pagamento</h1>
                        <hr>
                    </div>
                    <fieldset>
                        <div class="row mx-md-n5">
                            <div class="col px-md-5">
                                <div class="p-3 border bg-light">

                                    <legend class="text-center">GERAR SENDERHASH</legend>
                                    <div>
                                        <input class="form-control" type="text" id="senderHash" class="creditcard"
                                            name="senderHash">
                                        <button class="btn btn-info" id="generateSenderHash">Gerar</button>

                                    </div>
                                </div>
                            </div>
                    </fieldset>
                    <br>

                    <fieldset>
                        <legend class="text-center">Dados de pagamento</legend>

                        <div class="row mx-md-n5">
                            <div class="col px-md-5">
                                <div class="p-3 border bg-light">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div>
                                                <label for="creditCardNumber" <b>Número do cartão:</b></label>
                                                <input type="text" class="form-control" id="creditCardNumber"
                                                    class="creditcard" name="creditCardNumber">
                                            </div>
                                            <div>
                                                <label for="creditCardBrand" <b>Bandeira:</b></label>
                                                <input type="text" class="form-control" id="creditCardBrand"
                                                    class="creditcard" name="creditCardBrand">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="creditCardExpMonth" <b>Validade Mês (mm):</b></label>
                                            <input type="text" class="form-control" id="creditCardExpMonth"
                                                class="creditcard" name="creditCardExpMonth" size="2"> &nbsp;


                                            <label for="creditCardExpYear" <b>Ano (yyyy):</b></label>
                                            <input type="text" class="form-control" id="creditCardExpYear"
                                                class="creditcard" name="creditCardExpYear" size="4">
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="creditCardCvv" <b>CVV:</b></label>
                                            <input type="text" class="form-control" id="creditCardCvv" class="creditcard"
                                                name="creditCardCvv">

                                            <label <b>Token:</b></label>
                                            <input type="text" id="creditCardToken" class="form-control"
                                                name="creditCardToken">
                                            <button class="btn btn-info" id="generateCreditCardToken">Gerar Token</button>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend class="text-center">PARCELAMENTO</legend>
                        <div class="row mx-md-n5">
                            <div class="col px-md-5">
                                <div class="p-3 border bg-light">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            Valor a ser pago: <input class="form-control" type="text" id="checkoutValue"
                                                name="checkoutValue" value="{{ $price }}" disabled>
                                            {{-- <button class="btn btn-info" id="installmentCheck">Ver Parcelamento</button> --}}
                                        </div>
                                        <div class="col-sm-4">
                                            Parcelas: <select id="InstallmentCombo" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                    <button onclick="finalizarPagamento()" class="btn btn-info" id="installmentCheck">Finalizar Pagamento</button>

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
    <script type="text/javascript" src="../checkout/js/jquery.inputmask.bundle.min.js"></script>

    {{-- Javascript do Pagseguro --}}
    <script type="text/javascript"
        src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>

    <script>
        $(document).ready(function() {

            //Gera o SenderHash ao Carregar a tela
            generateSenderHash();


            $("#cartao_celular").inputmask2('(99) 9 9999-9999', {
                showMaskOnFocus: false,
                showMaskOnHover: false,
                clearMaskOnLostFocus: true
            });

            $("#cartao_cpf").inputmask2('999.999.999-99', {
                showMaskOnFocus: false,
                showMaskOnHover: false,
                clearMaskOnLostFocus: true
            });

            $("#cartao_data_nascimento").inputmask2('99/99/9999', {
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
                    },
                    error: function(response) {
                        console.log(response);
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

        //Generates the creditCardToken
        function generateCreditCardToken(){
          var param = {
                cardNumber: $("#creditCardNumber").val(),
                cvv: $("#creditCardCvv").val(),
                expirationMonth: $("#creditCardExpMonth").val(),
                expirationYear: $("#creditCardExpYear").val(),
                success: function(response) {
                    console.log(response);
                    $("#creditCardToken").val(response['card']['token']);
                },
                error: function(response) {
                    console.log(response);
                    printError(response);
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
                maxInstallmentNoInterest: 5, //calculo de parcelas sem juros
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
            $.each(installments, (function(key, value) {
                $("#InstallmentCombo").append("<option value = " + value['quantity'] + ">" + value['quantity'] +
                    "x de " + value['installmentAmount'].toFixed(2) + " - Total de " + value['totalAmount']
                    .toFixed(2) + "</option>");
            }))
        }

        function finalizarPagamento(){
          $("#formulario").submit();
        }

        $("#creditCardCvv").keyup(function() {
          generateCreditCardToken();
        })

    </script>

@endsection
