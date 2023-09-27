@extends('layouts.app')

@section('template_title')
    {{ $category->name ?? "{{ __('Show') Category" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Category</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Category Name:</strong>
                            {{ $category->category_name }}
                        </div>
                        <div class="form-group">
                            <strong>Pictures:</strong>
                            {{ $category->pictures }}
                        </div>
                        <div class="form-group">
                            <strong>Homepages Id:</strong>
                            {{ $category->homepages_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
