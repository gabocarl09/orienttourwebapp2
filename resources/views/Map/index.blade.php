@extends('layouts.panel')

@section('content')

    <!-- mapa xd -->
    <section class="map">
        <div class="map_cont">
            <div class="map_cont_info">
                <h3>Mapa</h3>
                <p>Con cada clic, conoce una tienda y descubre la historia de artesanía que se despliega, conectando personas y culturas a través de la belleza y la creatividad de manos expertas.</p>
            </div>
            <div class="map_cont_map">
                <img src="{{ asset('images/Mapa.png') }}" alt="">
            </div>
        </div>
    </section>


    <!-- Tiendas -->
    <section class="map_card_cont">
        <div class="map_card_title">
            <h3>Recomendaciones</h3>
        </div>
        <div class="map_card">
            <div class="map_card_img">
                <img src="" alt="">
            </div>
            <div class="map_card_info">
                <div class="map_card_info_name">
                    <img src="" alt="">
                    <h4>Nombre</h4>
                </div>
                <div class="map_card_info_desc">
                    <h4>Descripcion</h4>
                    <p>Lorem, ipsum dolor sit amet
                        consectetur adipisicing elit.
                        Quasi, placeat vel. Laudantium
                        eveniet officia pariatur odit
                        minus, quae tempore sapiente?</p>
                </div>
                <div class="map_card_info_btn">
                    <a href="">Visitar tienda</a>
                </div>
            </div>
        </div>
    </section>

@endsection
