@extends('adminlte::master')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', 'register-page')
@section('style_body', 'background-img: linear;background-image: linear-gradient(0deg, #063a85, #fff);')

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
    <div class="register-box" style="width: 80%">
        <div class="register-logo" style="margin-top: 4%;">
            <a href="{{ $dashboard_url }}"><img src="../posicionamento/public/img/logo_texto_azul.png" style="width: 35%">  {{-- config('adminlte.logo', '<b>Admin</b>LTE') --}}</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">{{ __('adminlte::adminlte.register_message') }}</p>
                <form action="{{ $register_url }}" method="post">
                    {{ csrf_field() }}
                    
                    <!-- LINHA 1 -->
                    <div class="row">
                        <!-- NOME -->
                        <div class="input-group mb-3 col-md-6">
                            <input required type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}"
                                placeholder="{{ __('adminlte::adminlte.full_name') }}*" autofocus>
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

                        <!-- SOBRENOME -->
                        <div class="input-group mb-3 col-md-6">
                            <input required type="text" name="lastname" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" value="{{ old('lastname') }}"
                                placeholder="Sobrenome*" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>

                            @if ($errors->has('lastname'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- FIM LINHA 1 -->
                    <!-- LINHA 2 -->
                    <div class="row">
                    <!-- SEXO -->
                    <div class="col-md-6">
                        <select required class="form-control {{ $errors->has('sexo') ? 'is-invalid' : '' }}" value="{{ old('sexo') }}" id="sexo" name="sexo">
                            <option value="" selected>Sexo</option>    
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                        
                        @if ($errors->has('sexo'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('sexo') }}</strong>
                            </div>
                        @endif
                    </div>
                    <!-- DATA NASCIMENTO -->
                    <div class="input-group mb-3 col-md-6">
                        <input required type="text" name="nascimento" class="form-control {{ $errors->has('nascimento') ? 'is-invalid' : '' }}" value="{{ old('nascimento') }}"
                               placeholder="Data de Nascimento*" id="data">
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

                    </div>
                    <!-- FIM LINHA 2 -->
                    <!-- LINHA 3 -->
                    <div class="row">
                    <!-- ESCOLARIDADE -->
                    <div class="col-md-6">
                        <select required class="form-control {{ $errors->has('escolaridade') ? 'is-invalid' : '' }}" value="{{ old('escolaridade') }}" id="escolaridade" name="escolaridade">
                            <option value="" selected>Escolaridade</option>    
                            <option value="Fundamental">Fundamental</option>
                            <option value="Médio">Médio</option>
                            <option value="Superior (Graduação)">Superior (Graduação)</option>
                            <option value="Pós-Graduação">Pós-Graduação</option>
                            <option value="Mestrado">Mestrado</option>
                            <option value="Doutorado">Doutorado</option>
                        </select>
                        
                        @if ($errors->has('escolaridade'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('escolaridade') }}</strong>
                            </div>
                        @endif
                    </div>

                    <!-- CURSO -->
                    <div class="input-group mb-3 col-md-6">
                        <input required type="text" name="curso" class="form-control {{ $errors->has('curso') ? 'is-invalid' : '' }}" value="{{ old('curso') }}"
                               placeholder="Especificar Curso" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('curso'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('curso') }}</strong>
                            </div>
                        @endif
                    </div>
                    </div>
                    <!-- FIM LINHA 3 -->
                    <!-- LINHA 4 -->
                    <div class="row">
                    <!-- EMAIL -->
                    <div class="input-group mb-3 col-md-6">
                        <input required type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}"
                               placeholder="{{ __('adminlte::adminlte.email') }}*">
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
                    <!-- CPF -->
                    <div class="input-group mb-3 col-md-6">
                        <input required type="text" name="cpf" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" value="{{ old('cpf') }}"
                               placeholder="CPF*" id="cpf"   >
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
                    </div>
                    <!-- FIM LINHA 4 -->
                    <!-- LINHA 5 -->
                    <div class="row">
                    <!-- SENHA -->
                    <div class="input-group mb-3 col-md-6">
                        <input required type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                               placeholder="{{ __('adminlte::adminlte.password') }}* (Mínimo 8 caracteres)">
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
                    <!-- CONFIRMA SENHA -->
                    <div class="input-group mb-3 col-md-6">
                        <input required type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                               placeholder="{{ __('adminlte::adminlte.retype_password') }}* (Mínimo 8 caracteres)">
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
                    </div>
                    <!-- FIM LINHA 5 -->
                    <!-- LINHA 6 -->
                    <div class="row">
                    <!-- TELEFONE -->
                    <div class="input-group mb-3 col-md-6">
                        <input type="text" name="fone" class="form-control {{ $errors->has('fone') ? 'is-invalid' : '' }}" value="{{ old('fone') }}"
                               placeholder="Telefone Fixo" id="telefone">
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
                    <!-- CELULAR -->
                    <div class="input-group mb-3 col-md-6">
                        <input required type="text" name="cellphone" class="form-control {{ $errors->has('cellphone') ? 'is-invalid' : '' }}" value="{{ old('cellphone') }}"
                               placeholder="Telefone Celular*" id="celular">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                        @if ($errors->has('cellphone'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('cellphone') }}</strong>
                            </div>
                        @endif
                    </div>
                    </div>
                    <!-- FIM LINHA 6 -->
                    <!-- LINHA 7 -->
                    <div class="row">
                    <!-- CEP -->
                    <div class="input-group mb-3 col-md-3">
                        <input required type="text" id="cep" name="cep" onblur="pesquisacep();" class="form-control {{ $errors->has('cep') ? 'is-invalid' : '' }}" value="{{ old('cep') }}"
                               placeholder="Cep*" autofocus>
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
                    <!-- RUA -->
                    <div class="input-group mb-3 col-md-6">
                        <input required type="text" id="address" name="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" value="{{ old('address') }}"
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
                    <!-- BAIRRO -->
                    <div class="input-group mb-3 col-md-3">
                        <input required type="text" id="quarter" name="quarter" class="form-control {{ $errors->has('quarter') ? 'is-invalid' : '' }}" value="{{ old('quarter') }}"
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
                    </div>
                    <!-- FIM LINHA 7 -->
                    <!-- LINHA 8 -->
                    <div class="row">
                    <!-- CIDADE -->
                    <div class="input-group mb-3 col-md-4">
                        <input required type="text" id="city" name="city" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" value="{{ old('city') }}"
                               placeholder="Cidade*" autofocus>
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
                    <!-- ESTADO -->
                    <div class="input-group mb-3 col-md-2">
                        <input required type="text" id="state" name="state" class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" value="{{ old('state') }}"
                               placeholder="UF*" autofocus>
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
                    <!-- NUMERO -->
                    <div class="input-group mb-3 col-md-2">
                        <input required type="text" id="number" name="number" class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" value="{{ old('number') }}"
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
                    <!-- COMPLEMENTO -->
                    <div class="input-group mb-3 col-md-4">
                        <input type="text" id="complemento" name="complemento" class="form-control {{ $errors->has('complemento') ? 'is-invalid' : '' }}" value="{{ old('complemento') }}"
                               placeholder="Complemento" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('complemento'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('complemento') }}</strong>
                            </div>
                        @endif
                    </div>
                    </div>
                    <!-- FIM LINHA 8 -->
                    <!-- LINHA 9 -->
                    <div class="row">
                    <!-- EMPRESA -->
                    <div class="input-group mb-3 col-md-4">
                        
                        <select required class="form-control {{ $errors->has('empresa') ? 'is-invalid' : '' }}" value="{{ old('empresa') }}" id="empresa" name="empresa">
                            <option value="" selected>Empresa</option>    
                            @foreach(\App\Company::where('enable',1)->get() as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('empresa'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('empresa') }}</strong>
                            </div>
                        @endif
                    </div>

                    <!-- RAMO -->
                    <div class="col-md-2">
                        <select required class="form-control {{ $errors->has('ramo') ? 'is-invalid' : '' }}" value="{{ old('ramo') }}" id="ramo" name="ramo">
                            <option value="" selected>Ramo</option>    
                            <option value="Industrial">Industrial</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Serviços">Serviços</option>
                        </select>
                        
                        @if ($errors->has('ramo'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('ramo') }}</strong>
                            </div>
                        @endif
                    </div>

                    <!-- ATIVIDADE -->
                    <div class="input-group mb-3 col-md-6">
                        <input required type="text" name="atividade" class="form-control {{ $errors->has('atividade') ? 'is-invalid' : '' }}" value="{{ old('atividade') }}"
                               placeholder="Especificar Atividade" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('atividade'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('atividade') }}</strong>
                            </div>
                        @endif
                    </div>
                    </div>
                    <!-- FIM LINHA 9 -->
                    <!-- LINHA 10 -->
                    <div class="row">
                    <!-- CARGO -->
                    <div class="input-group mb-3 col-md-4">
                        <input required type="text" name="cargo" class="form-control {{ $errors->has('cargo') ? 'is-invalid' : '' }}" value="{{ old('cargo') }}"
                               placeholder="Cargo" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-book"></span>
                            </div>
                        </div>

                        @if ($errors->has('cargo'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('cargo') }}</strong>
                            </div>
                        @endif
                    </div>
                    </div>
                    <!-- FIM LINHA 10 -->
                    
                    
                    
                    
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
    <script>
        !function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(a.length<o.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a)},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});

        $(document).ready(function(){
            $("#data").mask("99/99/9999", {
    completed: function () {
        console.log('complete')
        var value = $(this).val().split('/');
        var maximos = [31, 12, 2100];
        var novoValor = value.map(function (parcela, i) {
            if (parseInt(parcela, 10) > maximos[i]) return maximos[i];
            return parcela;
        });
        if (novoValor.toString() != value.toString()) $(this).val('').focus();
    }
});
            $("#telefone").mask("(99) 9999-9999");
            $("#cpf").mask("999.999.999-99");
            $("#cep").mask("99999-999");

            $('#celular').focusout(function(){
                var phone, element;
                element = $(this);
                element.unmask();
                phone = element.val().replace(/\D/g, '');
                if(phone.length > 10) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
            }).trigger('focusout');
	    });
        </script>
    @stack('js')
    @yield('js')
@stop
