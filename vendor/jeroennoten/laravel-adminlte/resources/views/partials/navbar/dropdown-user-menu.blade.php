@php( $logout_url = View::getSection('logout_url') ?? config('adminlte.logout_url', 'logout') )
@php( $profile_url = View::getSection('profile_url') ?? config('adminlte.profile_url', 'logout') )

@if (config('adminlte.use_route_url', false))
    @php( $profile_url = $profile_url ? route($profile_url) : '' )
    @php( $logout_url = $logout_url ? route($logout_url) : '' )
@else
    @php( $profile_url = $profile_url ? url($profile_url) : '' )
    @php( $logout_url = $logout_url ? url($logout_url) : '' )
@endif

<li class="nav-item dropdown user-menu">

    {{-- User menu toggler --}}
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        @if(config('adminlte.usermenu_image'))
            <img src="{{ Auth::user()->adminlte_image() }}"
                 class="user-image img-circle elevation-2"
                 alt="{{ Auth::user()->name }}">
        @endif
        <span @if(config('adminlte.usermenu_image')) class="d-none d-md-inline" @endif>
            {{ Auth::user()->name }}
        </span>
    </a>

    {{-- User menu dropdown --}}
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        {{-- User menu header --}}
        @if(!View::hasSection('usermenu_header') && config('adminlte.usermenu_header'))
            <li class="user-header {{ config('adminlte.usermenu_header_class', 'bg-primary') }}
                @if(!config('adminlte.usermenu_image')) h-auto @endif">
                @if(config('adminlte.usermenu_image'))
                    <img src="{{ Auth::user()->adminlte_image() }}"
                         class="img-circle elevation-2"
                         alt="{{ Auth::user()->name }}">
                @endif
                <p class="@if(!config('adminlte.usermenu_image')) mt-0 @endif">
                    {{ Auth::user()->name }}
                    @if(config('adminlte.usermenu_desc'))
                        <small>{{ Auth::user()->adminlte_desc() }}</small>
                    @endif
                </p>
            </li>
        @else
            @yield('usermenu_header')
        @endif

        {{-- Configured user menu links --}}
        @each('adminlte::partials.menuitems.menu-item-top-nav-user', $adminlte->menu(), 'item')

        {{-- User menu body --}}
        @hasSection('usermenu_body')
            <li class="user-body">
                @yield('usermenu_body')
            </li>
        @endif

        {{-- User menu footer --}}
        <li class="user-footer">
            @if($profile_url)
                <a href="{{ $profile_url }}" class="btn btn-default btn-flat">
                    <i class="fa fa-fw fa-user"></i>
                    {{ __('adminlte::menu.profile') }}
                </a>
            @endif
            @if(Auth::User()->role_id == 1)
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="/user/list">
                <i class="fa fa-fw fa-edit"></i>
                Permissões de usuários
            </a>
            @endif
            @if(Auth::User()->role_id == 1)
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="/role/list">
                <i class="fa fa-fw fa-lock"></i>
                Níveis de acesso
            </a>
            @endif
            @if(Auth::User()->role_id == 1)
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="/user/acompanhamento">
                <i class="fas fa-fw fa-book"></i>
                Acompanhamento
            </a>
            @endif
            @if(Auth::User()->role_id == 1)
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="/user/autogestao">
                <i class="fas fa-fw fa-book"></i>
                Acompanhamento Auto Gestão
            </a>
            @endif
            @if(Auth::User()->role_id == 1)
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="/user/report">
                <i class="fa fa-user"></i>
                Usuários
            </a>
            @endif
            @if(Auth::User()->role_id == 1)
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="/company/list">
                <i class="fa fa-building"></i>
                Empresas
            </a>
            @endif
            @if(Auth::User()->role_id == 1)
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="/report/list">
                <i class="fa fa-file"></i>
                Relatórios
            </a>
            @endif
            @if(Auth::User()->role_id == 1)
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="/product/list">
                <i class="fa fa-cube"></i>
                Produtos
            </a>
            @endif
            @if(Auth::User()->role_id == 1)
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="/order/list">
                <i class="fa fa-money"></i>
                Pedidos
            </a>
            @endif
            @if(Auth::User()->role_id == 1)
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="/user/subslanding">
                <i class="fa fa-user"></i>
                Inscritos LandingPage
            </a>
            @endif
            
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i>
                {{ __('adminlte::adminlte.log_out') }}
            </a>
            <form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
                @if(config('adminlte.logout_method'))
                    {{ method_field(config('adminlte.logout_method')) }}
                @endif
                {{ csrf_field() }}
            </form>
        </li>

    </ul>

</li>
