<?php
// include_once("configuracoes.php");

//Nesse checkout estamos usando o método GET somente a título de aprendizagem,
//mas para a segurança da sua aplicação use o método POST para passar os dados da venda para o checkout.

// $id_transacao = $_GET["id_transacao"];
// $descricao = $_GET["descricao"];

//Lembre-se: a moeda deve estar formatada sem vírgula e com o ponto separando somente os centavos.
//R$ 0,50 ficaria assim 0.50
//R$ 10,00 ficaria assim 10.00
//R$ 100,00 ficaria assim 100.00
//R$ 1.000,00 ficaria assim 1000.00

// $total = $_GET["total"];
// $total_tela = $_GET["total_tela"];

$id_transacao = "1";
$descricao = "Produto de teste";

//Lembre-se: a moeda deve estar formatada sem vírgula e com o ponto separando somente os centavos.
//R$ 0,50 ficaria assim 0.50
//R$ 10,00 ficaria assim 10.00
//R$ 100,00 ficaria assim 100.00
//R$ 1.000,00 ficaria assim 1000.00

$total = "99.99";
$total_tela = "R$ 99,99";

//------------------------------------
?>
    <!DOCTYPE html>
    <html lang="pt">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Checkout transparente PagSeguro em PHP">
        <meta name="author" content="Posicionamento">
        <title>Checkout transparente PagSeguro em PHP</title>

    </head>

    <body>
        <div class="page-content">
            <div class="content-wrapper">
                <div class="content d-flex justify-content-center align-items-center">
                    <form id="form_login" name="form_login" class="checkout-form" action="" autocomplete="off" enctype="application/x-www-form-urlencoded" method="post" onsubmit="return false;">
                        <!-- <div class="header mb-4 text-center checkout-logo">
                            <img src="../img/LogoAjusteAzul.png" class="img-fluid" alt="Sua logomarca" />
                        </div> -->
                        <div class="d-sm-flex justify-content-sm-center d-flex justify-content-center d-xl-block mb-3">
                            <div class="badge badge-pill text-14 font-weight-light valor_cobrado" style="background-color: #c2a94d">
                                Produto: <strong class="font-weight-semibold">PROGRAMA TOP SELLER</strong>
                            </div>
                            <div class="badge badge-pill text-14 font-weight-light valor_cobrado" style="background-color: #c2a94d">
                                Valor cobrado: <strong class="font-weight-semibold"><?php echo $total_tela; ?></strong>
                            </div>
                        </div>
                        <div class="card mb-0 shadow-0 mt-3 card_sucesso hidden">
                            <div class="card-body card_sucesso_txt">
                                Pagamento concluído com sucesso.
                            </div>
                        </div>
                        <div class="card mb-0 shadow-0 mt-3 card_pagamento">
                            <div class="card-heading">
                                <ul class="nav nav-tabs nav-justified nav-tabs-solid border-0 shadow-0 tabs_checkout">
                                    <li class="nav-item"><a id="tab_cartao" href="#tab-cartao" class="nav-link tab_checkout pt-2 pb-2 active show" data-toggle="tab">CRÉDITO</a></li>
                                    <li class="nav-item"><a id="tab_boleto" href="#tab-boleto" class="nav-link tab_checkout pt-2 pb-2" data-toggle="tab">BOLETO</a></li>
                                    <li class="nav-item"><a id="tab_debito" href="#tab-debito" class="nav-link tab_checkout pt-2 pb-2" data-toggle="tab">DÉBITO</a></li>
                                </ul>
                            </div>
                            <div class="card-body">

                                <div class="tab-content">

                                    <div class="tab-pane active show" id="tab-cartao">

                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" id="cartao_nome" placeholder="Nome do titular" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-md-2 col-sm-4">
                                                <div class="form-group">
                                                    <input class="form-control" id="cartao_celular" placeholder="Celular do titular" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-md-2 col-sm-3 col-8">
                                                <div class="form-group">
                                                    <input class="form-control" id="cartao_cpf" placeholder="CPF do titular" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-md-2 col-sm-3 col-4">
                                                <div class="form-group">
                                                    <input class="form-control" id="cartao_data_nascimento" placeholder="Nascimento" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-md-7 col-sm-7 col-6">
                                                <div class="form-group">
                                                    <input autocomplete="off" class="form-control" id="cartao_numero" placeholder="Número do Cartão" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                                <div class="form-group">
                                                    <input autocomplete="off" class="form-control" id="cartao_validade" placeholder="Validade" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-md-2 col-sm-2 col-3">
                                                <div class="form-group">
                                                    <input autocomplete="off" class="form-control" id="cartao_cvv" placeholder="CVV" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <select id="cartao_bandeira" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <select id="cartao_parcelas" class="form-control hidden">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-boleto">
                                        <p style="color: black">A confirmação do pagamento via Boleto bancário é automática e ocorre <strong>entre 48 e 72 horas</strong>. </p>
                                    </div>
                                    <div class="tab-pane" id="tab-debito">
                                        <p style="color: black">O pagamento via débito em conta está disponível para os bancos: Bradesco, Banco do Brasil, Itaú e Banrisul. Clique no banco desejado e em seguida clique em PAGAR.</p>
                                        <ul id="bancos">
                                            <li><img class="img-banco" id="bradesco" src="../checkout/img/bradesco.jpg" alt="Bradesco" title="Bradesco" /></li>
                                            <li><img class="img-banco selecionado" id="bancodobrasil" src="../checkout/img/bancodobrasil.jpg" alt="Banco do Brasil" title="Banco do Brasil" /></li>
                                            <li><img class="img-banco" id="itau" src="../checkout/img/itau.jpg" alt="Itaú" title="Itaú" /></li>
                                            <li><img class="img-banco" id="banrisul" src="../checkout/img/banrisul.jpg" alt="Banrisul" title="Banrisul" /></li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="hidden" id="id_transacao" value="<?php echo $id_transacao; ?>" />
                                <input type="hidden" id="total" value="<?php echo $total; ?>" />
                                <input type="hidden" id="descricao" value="Aqui vai a descrição do item comprado." />
                                <input type="hidden" id="forma_de_pagamento" value="Cartão" />
                                <input type="hidden" id="banco" value="bancodobrasil" />
                                <button type="submit" id="botao_pagar" class="btn bg-green btn-block" style="background-color: #c2a94d"><span>Pagar</span></button>
                            </div>
                        </div>
                        <div class="footer mt-3 text-muted text-center">
                            <div id="div_logos_bandeiras"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>

    </html>
