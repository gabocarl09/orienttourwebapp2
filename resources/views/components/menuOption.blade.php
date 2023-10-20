<header class="header-cont-opt">
    <div class="header_list_opt">
        <ul>
            <li class="head_list_opt {{ Request::is('/') ? 'optionActive' : '' }}">
                <a href="#">Para tí</a>
            </li>
            <li class="head_list_opt {{ Request::is('') ? 'optionActive' : '' }}">
                <a href="#">Mas vendido</a>
            </li>
            <li class="head_list_opt {{ Request::is('') ? 'optionActive' : '' }}">
                <a href="#">Recomendaciones</a>
            </li>
        </ul>
    </div>
</header>

