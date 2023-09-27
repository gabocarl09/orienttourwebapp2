@extends('layouts.app')

@section('template_title')
    {{ $craft->name ?? "{{ __('Show') Craft" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Craft</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('crafts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Craft Name:</strong>
                            {{ $craft->craft_name }}
                        </div>
                        <div class="form-group">
                            <strong>Craft Image:</strong>
                            {{ $craft->craft_image }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $craft->price }}
                        </div>
                        <div class="form-group">
                            <strong>Categories Id:</strong>
                            {{ $craft->categories_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
