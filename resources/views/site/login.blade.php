@extends('site.page')

@section('site.content')
    <!-- Page Content -->
    <div class="page-heading-topseller header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 style="color: #c2a94d;">PROGRAMA TOP SELLER</h1>
            
            <!-- INICIO -->
                  <!-- Box Login -->
<div class="row">
  <div class="col-md-12">
@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )
@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@if(isset($alert))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
    Seu acesso ainda não foi liberado.
</div>
@endif

@if(isset($info))
<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-info"></i> Aviso!</h5>
    {{ $info }}
</div>
@endif

@if (isset($status))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-info"></i> Aviso!</h5>
    {{ $status }}
</div>
@endif

    <div class="col-md-4 offset-md-4">
        <div class="login-logo">
            <!-- <a href="{{ $dashboard_url }}"><img src="../posicionamento/public/img/logo_texto_azul.png" style="width: 100%">  {{-- config('adminlte.logo', '<b>Admin</b>LTE') --}}</a> -->
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p style="color:black; font-size: 16px" class="login-box-msg">{{ __('adminlte::adminlte.login_message') }}</p>
                <form action="{{ $login_url }}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span style="color: #495057" class="fa fa-envelope"></span>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ __('adminlte::adminlte.password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span style="font-size: 24px; color: #495057" class="fa fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label style="color:black" for="remember">{{ __('adminlte::adminlte.remember_me') }}</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ __('adminlte::adminlte.sign_in') }}
                            </button>
                        </div>
                    </div>
                </form>
                                
                @if ($register_url)
                    <p class="mt-2 mb-1">
                        <a href="{{ $register_url }}">
                            {{ __('adminlte::adminlte.register_a_new_membership') }}
                        </a>
                    </p>
                @endif

                @if ($password_reset_url)
                    <p class="mb-0">
                        <a href="{{ $password_reset_url }}">
                            {{ __('adminlte::adminlte.i_forgot_my_password') }}
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>

    </div>
</div>
                  <!-- FIM -->

          </div>
        </div>
      </div>
    </div>

    <!-- TOPSELLER 2-1 -->
    <!-- <div class="topseller2-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="topseller2-1-content">
              <div class="row">
               
                <div class="col-md-12">
                  <div style="padding: 0px;">
                   
                  
                  </div>
                </div>

                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->



@endsection
