<div class="content-siderbar">
    <input type="checkbox" id="swich-2">
    <div class="nav-cont-area"></div>
    <nav class="nav-cont">
        <div class="nav-cont-title">
            <img src="{{ asset('images/ORIENTTOUR.png') }}">
            <img src="{{ asset('images/logo.png') }}">
        </div>

        <a class="nav-info-user" href="{{ route('profile') }}">
            <img src="" alt="">
            <div class="nav-info-user-p">
                <p>
                    <?php
                    $firstName = explode(' ', Auth::user()->name)[0];
                    $lastName = explode(' ', Auth::user()->last_name)[0];
                    echo $firstName . ' ' . $lastName;
                    ?>
                </p>
                <p>Mi perfil</p>
            </div>
        </a>

        <ul class="nav-list">
            <li class="nav-list-item {{ Request::is('home') ? 'active' : '' }}
                {{ Request::is('option/sold') ? 'active' : '' }}
                {{ Request::is('option/recomendation') ? 'active' : '' }}
                {{ Request::is('post') ? 'active' : '' }}">

                <a class="nav-list-item-a" href="/home">
                    <i class="fi fi-rr-star icon-list"></i>
                    <p>Inicio</p>
                </a>
            </li>

            <li class="nav-list-item {{ Request::is('category') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="{{ route('category') }}">
                    <i class="fi fi-rr-apps icon-list"></i>
                    <p>Categorias</p>
                </a>
            </li>

            <li class="nav-list-item {{ Request::is('favorite') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="{{ route('favorite') }}">
                    <i class="fi fi-rr-heart icon-list"></i>
                    <p>Me gusta</p>
                </a>
            </li>

            <li class="nav-list-item {{ Request::is('map') ? 'active' : '' }} {{ Request::is('posts/show/post/7') ? 'active' : '' }}">
                <a class="nav-list-item-a" href="{{ route('map') }}">
                    <i class="fi fi-rr-marker icon-list"></i>
                    <p>Mapa</p>
                </a>
            </li>

        </ul>
    </nav>
