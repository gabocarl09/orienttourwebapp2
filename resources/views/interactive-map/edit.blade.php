@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Interactive Map
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Interactive Map</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('interactive-maps.update', $interactiveMap->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('interactive-map.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
