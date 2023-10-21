@extends('layouts.panel')

@section('content')
    <div class="category-container">
        <h1 class="category-title">Categorías</h1>
        <div class="category-list">
            @foreach ($categories as $category)
                <div class="category-card">
                    <a href="{{ route('category/show', $category->name) }}">
                        <div class="category-img-container">
                            <img src="{{ asset($category->picture) }}" alt="{{ $category->name }}" class="category-img">

                            <div class="category-name">{{ $category->name }}</div>
                            {{-- <div class="category-name" style="margin-left: 260px">
                                {{ htmlspecialchars($categoryCounts[$category->name]) }}</div> --}}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
