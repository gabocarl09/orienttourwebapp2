@extends('layouts.app')

@section('template_title')
    {{ $interactiveMap->name ?? "{{ __('Show') Interactive Map" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Interactive Map</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('interactive-maps.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Shop Names:</strong>
                            {{ $interactiveMap->shop_names }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $interactiveMap->location }}
                        </div>
                        <div class="form-group">
                            <strong>Type Of Shop:</strong>
                            {{ $interactiveMap->type_of_shop }}
                        </div>
                        <div class="form-group">
                            <strong>Homepages Id:</strong>
                            {{ $interactiveMap->homepages_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
