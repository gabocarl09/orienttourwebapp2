<div>
    <header class="header-cont" id="hdr_cont_id">
        <div class="hdr-cont">
            <img src="{{ asset('/images/logo.png') }}">
        </div>
        <div class="hdr-cont-1 hdrMenuChat">
            <label class="hdr-cont-1-menu-bgr-1">
                <i class="fi fi-br-menu-burger"></i>
            </label>
        </div>
        <div class="hdr-cont-2">
            @if (Route::currentRouteName() === 'home' || Route::currentRouteName() === 'favorite')
            <input type="search" class="hdr-cont-input" placeholder="Buscar">
            <button class="hdr-cont-input-btn">
                <i class="fi fi-rr-search"></i>
            </button>
            @endif
        </div>


        <div class="hdr-cont-3">

            <div class="hdr-cont-3-users">
                <div class="dropdown" id="user-dropdown">
                    <i class="fi fi-rr-settings"></i>

                    <i class="fi fi-br-caret-down"></i>
                    <div class="dropdown-content">
                        <a href="">
                            <i class="fi fi-rr-user"></i>
                            <span class="item-text"> Ver Perfil</span>
                        </a>
                        <a href="">
                            <i class="fi fi-rr-settings"></i>
                            <span class="item-text"> Ajustes</span>
                        </a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
                            <i class="fi fi-rr-exit"></i><span class="item-text"> Cerrar Sesión</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
                            @method('POST')
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

            <div class="hdr-cont-3-users">
                <div class="dropdown" id="notification-dropdown">
                    <i class="fi fi-br-shopping-cart-add"></i>
                    {{-- <i class="fi fi-rr-shopping-bag-add" id="notification-icon"></i> --}}

                    <div class="dropdown-content" id="notification-content">
                        <!-- Las notificaciones se cargarán aquí dinámicamente -->
                    </div>
                </div>
            </div>

            <label for="swich-2" class="hdr-cont-1-menu-bgr-2 hdr-cont-3-users menuBRG">
                <i class="fi fi-br-menu-burger"></i>
            </label>
        </div>
    </header>

