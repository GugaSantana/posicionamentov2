    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Deixe seu recado</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>55 11 5093-1236</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="https://www.facebook.com/posicionamentoconsultores/" target="blank"><i class="fa fa-facebook"></i></a></li>
              <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
              <li><a href="https://www.linkedin.com/company/67931187" target="blank"><i class="fa fa-linkedin"></i></a></li>
              <!-- <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- <a class="navbar-brand" href="index.html"><h2>Posicionamento</h2></a> -->
          <img id="sus" class="navbar-brand" src="{{asset('/img/LogoAjusteBranco.png')}}">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item @if($menu_page == 1) active @endif">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item @if($menu_page == 2) active @endif">
                <a class="nav-link" href="/empresa">A Empresa</a>
              </li>
              <li class="nav-item @if($menu_page == 3) active @endif">
                <a class="nav-link" href="/servicos">Serviços</a>
              </li>
              <li class="nav-item @if($menu_page == 4) active @endif">
              <a class="nav-link" href="#">Programa Top Seller</a>
                <ul class="sub-item">
                  <li>
                    <a class="nav-link" href="/programatopseller">Apresentação do Programa</a>
                  </li>
                  <li>
                    <a class="nav-link" href="/programatopseller2">Estrutura e Implantação</a>
                  </li>
                  <li>
                    <a class="nav-link" href="/nextSteps">Próximos Passos</a>
                  </li>
                  <li>
                    <a class="nav-link" href="/login">Login</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item @if($menu_page == 5) active @endif">
                <a class="nav-link" href="/contato">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>