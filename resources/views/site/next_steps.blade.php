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

    <!-- <div class="barra-dourada">
              <div class="container">
                <!-- <div class="row">
                  <div class="col-md-8">
                    <h4>Request a call back right now ?</h4>
                    <span>Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</span>
                  </div>
                  <div class="col-md-4">
                    <a href="contact.html" class="border-button">Contact Us</a>
                  </div>
                </div> -->
    <!-- </div>
            </div> -->

    <div class="barra-dourada-divisao">
        <h2>PRÓXIMOS PASSOS</h2>
    </div>

    <!-- TOPSELLER 2-1 -->
    <div class="topseller2-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="topseller2-1-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center-content">
                                  @if(session('message'))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="fa fa-exclamation-triangle"></i> Alerta!</h5>
    
    {{ session('message') }}
  </div>
  @endif

                                    <!-- <h2>ESTRUTURA DA METODOLOGIA</h2><br> -->
                                    <p>SE VOCÊ QUER SABER SOBRE O INVESTIMENTO PARA ADQUIRIR O <b
                                            style="color: #ffde66;">PROGRAMA TOP SELLER</b>, POR FAVOR ENTRE EM CONTATO
                                        CONOSCO CLICANDO <a style="color: white; text-decoration: underline !important;"
                                            href="/contato">AQUI.</a></p>
                                </div>
                                <div class="center-content">
                                    <!-- <h2>ESTRUTURA DA METODOLOGIA</h2><br> -->
                                    <p>SE VOCÊ QUER EFETUAR O PAGAMENTO DO SEU INVESTIMENTO NO <b
                                            style="color: #ffde66;">PROGRAMA TOP SELLER</b> POR FAVOR INSIRA ABAIXO O NÚMERO
                                        DO SEU VOUCHER:</p>
                                    <form method="post" action="{{ route('checkout') }}">
                                        {!! csrf_field() !!}

                                        <div class="form-group">
                                          <label for="email">Email</label>
                                          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                          <label for="password">Password</label>
                                          <input type="password" class="form-control" id="password" placeholder="Senha" name="senha">
                                        </div>
                                        <div class="form-group">
                                          <label for="voucher">Voucher</label>
                                          <input type="text" class="form-control" id="voucher" aria-describedby="Voucher" placeholder="Voucher" name="voucher">
                                        </div>

                                        <button type="submit" class="btn btn-warning ml-2">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <div class="barra-dourada-divisao">
        <h4><a style="color: white; text-decoration: underline !important;" href="/contato">Contate-nos</a>, estamos
            aguardando por você…</h4>
    </div>



    <!-- <div class="more-info about-info">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="more-info-content">
                      <div class="row">
                        <div class="col-md-6 align-self-center">
                          <div class="right-content">
                            <span>our solid background on finance</span>
                            <h2>Get to know about <em>our company</em></h2>
                            <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. 
                            <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>
                            <a href="" class="filled-button">Read More</a>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="left-image">
                            <img src="../posicionamento/public/images/about-image.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="team">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Our team <em>members</em></h2>
                      <span>Suspendisse a ante in neque iaculis lacinia</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="team-item">
                      <img src="../posicionamento/public/images/team_01.jpg" alt="">
                      <div class="down-content">
                        <h4>William Smith</h4>
                        <span>Co-Founder</span>
                        <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="team-item">
                      <img src="../posicionamento/public/images/team_02.jpg" alt="">
                      <div class="down-content">
                        <h4>Mary Houston</h4>
                        <span>Chief Marketing Officer</span>
                        <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="team-item">
                      <img src="../posicionamento/public/images/team_03.jpg" alt="">
                      <div class="down-content">
                        <h4>Paul Walker</h4>
                        <span>Financial Analyst</span>
                        <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="fun-facts">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="left-content">
                      <span>Lorem ipsum dolor sit amet</span>
                      <h2>Our solutions for your <em>business growth</em></h2>
                      <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue. 
                      <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie nunc, ut posuere ante tortor ut neque.</p>
                      <a href="" class="filled-button">Read More</a>
                    </div>
                  </div>
                  <div class="col-md-6 align-self-center">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="count-area-content">
                          <div class="count-digit">945</div>
                          <div class="count-title">Work Hours</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="count-area-content">
                          <div class="count-digit">1280</div>
                          <div class="count-title">Great Reviews</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="count-area-content">
                          <div class="count-digit">578</div>
                          <div class="count-title">Projects Done</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="count-area-content">
                          <div class="count-digit">26</div>
                          <div class="count-title">Awards Won</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="testimonials">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>What they say <em>about us</em></h2>
                      <span>testimonials from our greatest clients</span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="owl-testimonials owl-carousel">
                      
                      <div class="testimonial-item">
                        <div class="inner-content">
                          <h4>George Walker</h4>
                          <span>Chief Financial Analyst</span>
                          <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                      </div>
                      
                      <div class="testimonial-item">
                        <div class="inner-content">
                          <h4>John Smith</h4>
                          <span>Market Specialist</span>
                          <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                      </div>
                      
                      <div class="testimonial-item">
                        <div class="inner-content">
                          <h4>David Wood</h4>
                          <span>Chief Accountant</span>
                          <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                      </div>
                      
                      <div class="testimonial-item">
                        <div class="inner-content">
                          <h4>Andrew Boom</h4>
                          <span>Marketing Head</span>
                          <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

@endsection