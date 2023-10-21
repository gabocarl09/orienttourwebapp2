<!-- for you -->
<section class="forYou">

    <div class="home_cont_title">
        <h2>Para ti</h2>
    </div>

    @foreach ($posts as $post)
        <div class="cards">
            <div class="cards_filo"></div>
            <a href="{{ route('post.show') }}"></a>
            <img src="" alt="">
            <div class="cards_info">
                <h4>{{ $post->name}}</h4>
                <div class="cards_info_stars">
                    <i class="fi fi-sr-star"></i>
                    <i class="fi fi-sr-star"></i>
                    <i class="fi fi-sr-star"></i>
                    <i class="fi fi-sr-star"></i>
                    <i class="fi fi-sr-star"></i>
                </div>
                <p>{{ $post->description}}</p>
            </div>
            <div class="cards_btn">
                <a href="{{ route('post.show') }}"><p>C$</p>${{ $post->price}}</a>
            </div>
        </div>
    @endforeach

</section>
