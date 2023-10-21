@extends('layouts.panel')

@section('content')
    <!-- preview car -->
    <section class="show_card_cont">
        <div class="show_card">
            <div class="show_card_img">
                <img src="{{ asset('images/Jarrón 2.png') }}" alt="">
            </div>
            <div class="show_card_info">
                <h3>Nombre</h3>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Inventore rem culpa
                    facilis sed totam. Nesciunt architecto
                    consequuntur dolores eius voluptas.

                </p>
                <p>C$200</p>
                <div class="show_card_info_btn">
                    <button>Añadir a la bolsa</button>
                    <i class="fi fi-rr-heart icon-list"></i>
                </div>
            </div>
        </div>
    </section>

@endsection
