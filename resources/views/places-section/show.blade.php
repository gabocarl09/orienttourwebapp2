@extends('layouts.app')

@section('template_title')
    {{ $placesSection->name ?? "{{ __('Show') Places Section" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Places Section</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('places-sections.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Place Image:</strong>
                            {{ $placesSection->place_image }}
                        </div>
                        <div class="form-group">
                            <strong>Type Of Place:</strong>
                            {{ $placesSection->type_of_place }}
                        </div>
                        <div class="form-group">
                            <strong>Homepages Id:</strong>
                            {{ $placesSection->homepages_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
