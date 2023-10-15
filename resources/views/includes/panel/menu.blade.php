<div class="content-siderbar">
    <input type="checkbox" id="swich-2">
    <div class="nav-cont-area"></div>
    <nav class="nav-cont">
        <div class="nav-cont-title">
            <img src="{{ asset('img/AGROC.png') }}">
            <img src="{{ asset('img/tomate.png') }}">
        </div>
        <ul class="nav-list">
            <li class="nav-list-item {{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="/home">
                    <i class="fi fi-rr-star icon-list"></i>
                    <p>Productos</p>
                </a>
            </li>

            <li class="nav-list-item {{ Request::is('posts/create/post') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="{{ route('create/post') }}">
                    <i class="fi fi-rr-add icon-list"></i>
                    <p>Crear publicación</p>
                </a>
            </li>

            <li class="nav-list-item {{ Request::is('posts') ? 'active' : '' }} {{ Request::is('posts/show/post/7') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="{{ route('index/post') }}">
                    <i class="fi fi-rr-list-check icon-list"></i>
                    <p>Mis Publicaciones</p>
                </a>
            </li>

            <li class="nav-list-item {{ Request::is('categories') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="{{ route('categories') }}">
                    <i class="fi fi-rr-apps icon-list"></i>
                    <p>Categorias</p>
                </a>
            </li>
            <li class="nav-list-item {{ Request::is('chat') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="{{ route('chats') }}">
                    <i class="fi fi-rr-comments icon-list"></i>
                    <p>Chat</p>
                </a>
            </li>
            <li class="nav-list-item {{ Request::is('configurations') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="{{ route('configurations') }}">
                    <i class="fi fi-rr-settings icon-list"></i>
                    <p>Configuración</p>
                </a>
            </li>
            <li class="nav-list-item {{ Request::is('profile') ? 'active' : '' }} {{ Request::is('profile/2') ? 'active' : '' }} {{ Request::is('profile/edit/2') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="{{ route('index/profile') }}">
                    <i class="fi fi-rr-user icon-list"></i>
                    <p>Perfil</p>
                </a>
            </li>
            <li class="nav-list-item">
                <a class="nav-list-item-a" href="#">
                    <i class="fi fi-rr-scale icon-list"></i>
                    <p>Inventario</p>
                </a>
            </li>
            <li class="nav-list-item">
                <a class="nav-list-item-a" href="#">
                    <i class="fi fi-rr-diamond icon-list"></i>
                    <p>Suscripciones</p>
                </a>
            </li>
            <div id="active" class="act"></div>
        </ul>
    </nav>
