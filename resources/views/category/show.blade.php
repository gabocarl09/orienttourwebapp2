@extends('layouts.panel')

@section('title', $category->name)

@section('content')
    <h1>{{ $category->name }}</h1>
    @if (count($posts) == 0)
        <h2>No hay publicaciones en esta categoria</h2>
        <a href="{{ route('category') }}">Regresar</a>
    @else
    {{-- <div id="card-animated">
        <div class="card-resposive">
            <div class="card-area">
                @foreach ($posts as $post)
                    @include('components.posts.card')
                @endforeach
            </div>
        </div>
    </div> --}}
    @endif
@endsection
