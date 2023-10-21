<header class="header-cont-opt">
    <div class="header_list_opt">
        <ul>
            <li class="head_list_opt {{ Request::is('home') ? 'optionActive' : '' }}">
                <a href="{{ route('home') }}">Para tí</a>
            </li>
            <li class="head_list_opt {{ Request::is('option/sold') ? 'optionActive' : '' }}">
                <a href="{{ route('option.sold') }}">Mas vendido</a>
            </li>
            <li class="head_list_opt {{ Request::is('option/recomendation') ? 'optionActive' : '' }}">
                <a href="{{ route('option.recomendation') }}">Recomendaciones</a>
            </li>
            <li class="head_list_opt {{ Request::is('') ? 'optionActive' : '' }}">
                <a href="#">Provicional</a>
            </li>
            <li class="head_list_opt {{ Request::is('') ? 'optionActive' : '' }}">
                <a href="#">Provicional</a>
            </li>
        </ul>
    </div>
</header>

