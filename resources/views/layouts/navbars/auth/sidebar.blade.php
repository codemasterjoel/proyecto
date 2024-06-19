<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header mb-5">
        <i class="fas fa-times p-3 cursor-pointer text-seconsdary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="p-2">
            <img src="{{asset('assets/img/logo.png')}}" class="">
            {{-- <span class="ms-3 font-weight-bold">Soft UI Dashboard Laravel Livewire</span> --}}
        </a>
    </div>
    {{-- <hr class="horizontal dark mt-0"> --}}
    <div class=" navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            {{-- INICIO --}}    
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-icons {{ in_array(request()->route()->getName(),['dashboard']) ? 'text-white' : 'text-dark' }}">home</span>
                    </div>
                    <span class="nav-link-text ms-1"><b>INICIO</b></span>
                </a>
            </li>
            {{-- PERFIL DE USUARIO --}}
            @if (auth()->user()->nivel_id == 1)
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'user-profile' ? 'active' : '' }}" href="{{ route('user-profile') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['user-profile']) ? 'text-white' : 'text-dark' }}">account_box</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>PERFIL</b></span>
                    </a>
                </li>
            @endif
            {{-- REGISTRO DE LSB --}}
            @if (auth()->user()->nivel_id == 1)
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'lsb' ? 'active' : '' }}" href="">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['lsb']) ? 'text-white' : 'text-dark' }}">person</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>REGISTRO LSB</b></span>
                    </a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'ffm' ? 'active' : '' }}" href="{{ route('ffm') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-icons {{ in_array(request()->route()->getName(),['ffm']) ? 'text-white' : 'text-dark' }}">person</span>
                    </div>
                    <span class="nav-link-text ms-1"><b>REGISTRO 1x10 FFM</b></span>
                </a>
            </li>
            {{-- REGISTRO DE NBC --}}
            @if (auth()->user()->nivel_id == 1)
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'nbc' ? 'active' : '' }}" href="">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['nbc']) ? 'text-white' : 'text-dark' }}">groups</span>
                            {{-- <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center ></i> --}}
                        </div>
                        <span class="nav-link-text ms-1"><b>REGISTRO DE NBC</b></span>
                    </a>
                </li>  
            @endif
            {{-- MAPA --}}
            @if (auth()->user()->nivel_id == 1)
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="{{ route('user-management') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}">person_pin_circle</span>
                            {{-- <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center ></i> --}}
                        </div>
                        <span class="nav-link-text ms-1"><b>MAPA</b></span>
                    </a>
                </li>
            @endif

            
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">CONFIGURACIÓN</h6>
            </li>
            @if (auth()->user()->nivel_id == 1)
                {{-- GESTIÓN DE USUARIOS --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="{{ route('user-management') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark' }}">manage_accounts</span>
                            {{-- <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center ></i> --}}
                        </div>
                        <span class="nav-link-text ms-1"><b>GESTIÓN DE USUARIOS</b></span>
                    </a>
                </li>
                {{-- SAIME --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'saime' ? 'active' : '' }}"
                        href="">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['saime']) ? 'text-white' : 'text-dark' }}">business</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>SAIME</b></span>
                    </a>
                </li>
                {{-- BENEFICIOS --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'billing' ? 'active' : '' }}" href="{{ route('billing') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['billing']) ? 'text-white' : 'text-dark' }}">card_giftcard</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>BENEFICIOS</b></span>
                    </a>
                </li>
            @endif
            <li class="nav-item d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                    <auth.logout />
                </a>
            </li>
        </ul>
    </div>
</aside>
