@extends('layouts.panel')

@section('content')
@include('components.menuOption')

<main class="home_cont">

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
            <div class="cards">
                <div class="cards_filo"></div>
                <img src="" alt="">
                <div class="cards_info">
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

                <div class="cards_btn">
                    <button>C$100</button>
                </div>

            </div>
        </div>
    </section>



    <div class="home_cont_title">
        <h1>Para ti</h1>
    </div>

    <section class="forYou">

        <div class="cards">
            <div class="cards_filo"></div>
            <img src="" alt="">
            <div class="cards_info">
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
            <div class="cards_btn">
                <button>C$100</button>
            </div>
        </div>

    </section>
</main>

@endsection

