@extends('layouts.app')

@section('template_title')
    {{ $homepage->name ?? "{{ __('Show') Homepage" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Homepage</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('homepages.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Crafts Recommendation:</strong>
                            {{ $homepage->crafts_recommendation }}
                        </div>
                        <div class="form-group">
                            <strong>Login:</strong>
                            {{ $homepage->login }}
                        </div>
                        <div class="form-group">
                            <strong>Register:</strong>
                            {{ $homepage->register }}
                        </div>
                        <div class="form-group">
                            <strong>Premium Plan:</strong>
                            {{ $homepage->premium_plan }}
                        </div>
                        <div class="form-group">
                            <strong>Places Section:</strong>
                            {{ $homepage->places_section }}
                        </div>
                        <div class="form-group">
                            <strong>Categories:</strong>
                            {{ $homepage->categories }}
                        </div>
                        <div class="form-group">
                            <strong>Interactive Maps:</strong>
                            {{ $homepage->interactive_maps }}
                        </div>
                        <div class="form-group">
                            <strong>Crafts:</strong>
                            {{ $homepage->crafts }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
