@extends('adminlte::master')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', 'register-page')

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('body')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ $dashboard_url }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">{{ __('adminlte::adminlte.register_message') }}</p>
                <form action="{{ $register_url }}" method="post">
                    {{ csrf_field() }}

                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}"
                               placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>

                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="cpf" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" value="{{ old('cpf') }}"
                               placeholder="CPF" maxlength="11" pattern="[0-9]+$"   >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @if ($errors->has('cpf'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('cpf') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        Gênero:
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="genero">
                          <label for="customRadio1" class="custom-control-label">Masculino</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="genero">
                          <label for="customRadio2" class="custom-control-label">Feminino</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="nascimento" class="form-control {{ $errors->has('nascimento') ? 'is-invalid' : '' }}" value="{{ old('nascimento') }}"
                               placeholder="Data de Nascimento" maxlength="10" OnKeyPress="formatar('##/##/####', this)">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-calendar"></span>
                            </div>
                        </div>
                        @if ($errors->has('nascimento'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('nascimento') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="fone" class="form-control {{ $errors->has('fone') ? 'is-invalid' : '' }}" value="{{ old('fone') }}"
                               placeholder="Telefone" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                        @if ($errors->has('fone'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('fone') }}</strong>
                            </div>
                        @endif
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="text" id="cep" name="cep" onblur="pesquisacep();" class="form-control {{ $errors->has('cep') ? 'is-invalid' : '' }}" value="{{ old('cep') }}"
                               placeholder="Cep" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('cep'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('cep') }}</strong>
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" id="address" name="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" value="{{ old('address') }}"
                               placeholder="Rua" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('address'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('address') }}</strong>
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" id="quarter" name="quarter" class="form-control {{ $errors->has('quarter') ? 'is-invalid' : '' }}" value="{{ old('quarter') }}"
                               placeholder="Bairro" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('quarter'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('quarter') }}</strong>
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" id="city" name="city" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" value="{{ old('city') }}"
                               placeholder="Cidade" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('city'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('city') }}</strong>
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" id="state" name="state" class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" value="{{ old('state') }}"
                               placeholder="UF" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('state'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('state') }}</strong>
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" id="number" name="number" class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" value="{{ old('number') }}"
                               placeholder="Número" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('number'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('number') }}</strong>
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" id="formation" name="formation" class="form-control {{ $errors->has('formation') ? 'is-invalid' : '' }}" value="{{ old('formation') }}"
                               placeholder="Formação" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('formation'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('formation') }}</strong>
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}"
                               placeholder="{{ __('adminlte::adminlte.email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                               placeholder="{{ __('adminlte::adminlte.password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                               placeholder="{{ __('adminlte::adminlte.retype_password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                    Sua inscrição é uma indicação da empresa para qual trabalha?
                        <input type="text" id="empresa" name="empresa" class="form-control {{ $errors->has('empresa') ? 'is-invalid' : '' }}" value="{{ old('empresa') }}"
                               placeholder="Empresa" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('empresa'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('empresa') }}</strong>
                            </div>
                        @endif
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        {{ __('adminlte::adminlte.register') }}
                    </button>
                </form>
                <p class="mt-2 mb-1">
                    <a href="{{ $login_url }}">
                        {{ __('adminlte::adminlte.i_already_have_a_membership') }}
                    </a>
                </p>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    <script>
        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('address').value=(conteudo.logradouro);
                document.getElementById('quarter').value=(conteudo.bairro);
                document.getElementById('city').value=(conteudo.localidade);
                document.getElementById('state').value=(conteudo.uf);
                //document.getElementById('ibge').value=(conteudo.ibge);
            } //end if.
            else {
                //CEP não Encontrado.
                alert("CEP não encontrado.");
            }
        }
            
        function pesquisacep() {
            valor = document.getElementById('cep').value;
            //Nova variável "cep" somente com dígitos.

            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
                //Valida o formato do CEP.
                if(validacep.test(cep)) {
                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('address').value="...";
                    document.getElementById('quarter').value="...";
                    document.getElementById('city').value="...";
                    document.getElementById('state').value="...";
                    //document.getElementById('ibge').value="...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);
                    document.getElementById('number').focus();

                } //end if.
                else {
                    //cep é inválido.
                    //limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                //limpa_formulário_cep();
            }
        };
 
        function formatar(mascara, documento){
            var i = documento.value.length;
            var saida = mascara.substring(0,1);
            var texto = mascara.substring(i);
            
            if (texto.substring(0,1) != saida){
                        documento.value += texto.substring(0,1);
            }
            
        }
    </script>
    @stack('js')
    @yield('js')
@stop
