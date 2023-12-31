<div class="content-siderbar">
    <input type="checkbox" id="swich-2">
    <div class="nav-cont-area"></div>
    <nav class="nav-cont">
        <div class="nav-cont-title">
            <img src="{{ asset('images/ORIENTTOUR.png') }}">
            <img src="{{ asset('images/logo.png') }}">
        </div>

        <a class="nav-info-user">
            <img src="" alt="">
            <div class="nav-info-user-p">
                <p>Nombre completo</p>
                <p>Mi perfil</p>
            </div>
        </a>

        <ul class="nav-list">
            <li class="nav-list-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="/home">
                    <i class="fi fi-rr-star icon-list"></i>
                    <p>Inicio</p>
                </a>
            </li>

            <li class="nav-list-item {{ Request::is('categories') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="#">
                    <i class="fi fi-rr-apps icon-list"></i>
                    <p>Categorias</p>
                </a>
            </li>

            <li class="nav-list-item {{ Request::is('') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="#">
                    <i class="fi fi-rr-heart icon-list"></i>
                    <p>Favoritos</p>
                </a>
            </li>

            <li class="nav-list-item {{ Request::is('') ? 'active' : '' }} {{ Request::is('posts/show/post/7') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="#">
                    <i class="fi fi-rr-marker icon-list"></i>
                    <p>Mapa</p>
                </a>
            </li>
            
        </ul>
    </nav>
