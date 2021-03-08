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
<div class="topseller2-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="topseller2-1-content">
          <div class="row">
            <div class="col-md-12">
              <div class="center-content">

                
                @include('site.checkout.index')


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
  <h4><a style="color: white; text-decoration: underline !important;" href="/contato">Contate-nos</a>, estamos aguardando por você…</h4>
</div>


@endsection

@section('site.js')
<script type="text/javascript" src="{{$pagseguro_url_js}}"></script>
<script type="text/javascript" src="../checkout/js/pagseguro.js"></script>
<script type="text/javascript" src="../checkout/js/numeral.min.js"></script>
<script type="text/javascript" src="../checkout/js/jquery.inputmask.bundle.min.js"></script>
<script src="../checkout/js/blockui.min.js"></script>
<script type="text/javascript" src="../checkout/js/sweet_alert.min.js"></script>

@endsection

@section('site.css')


<link href="../checkout/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
<link href="../checkout/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
<link href="../checkout/css/checkout.css" rel="stylesheet" type="text/css">
@endsection