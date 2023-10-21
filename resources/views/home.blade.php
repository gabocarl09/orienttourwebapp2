@extends('layouts.panel')

@section('content')
@include('components.menuOption')

<main class="home_cont">

    @include('components.post.card')
    <!-- Producto destacado -->
    <section class="home_dest">
        <div class="home_dest_text">
            <h3>Producto estrella</h3>
            <p>El producto estrella de San Juan de oriente.
                 El toro encuetado, sinonimo de una fiesta
                 donde la historia, las leyendas y tradiciones
                 se fusionan de una manera magistral.</p>
        </div>
        <div class="home_dest_card">
            <div class="dest_card">
                <a href="{{ route('post.show') }}"></a>
                <img src="" alt="">
                <div class="dest_card_info">
                    <h4>Nombre producto</h4>
                    <div class="cards_info_stars">
                        <i class="fi fi-sr-star"></i>
                        <i class="fi fi-sr-star"></i>
                        <i class="fi fi-sr-star"></i>
                        <i class="fi fi-sr-star"></i>
                        <i class="fi fi-sr-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Soluta illum modi
                        omnis temporibus. Quae praesentium
                        maiores aliquam, consequatur soluta
                        magnam!</p>
                </div>
                <div class="dest_cards_btn">
                    <a href="{{ route('post.show') }}">C$100</a>
                </div>

            </div>
        </div>

    </section>

    @include('components.post.exceptional')
</main>

@endsection

