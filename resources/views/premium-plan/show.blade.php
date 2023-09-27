@extends('layouts.app')

@section('template_title')
    {{ $premiumPlan->name ?? "{{ __('Show') Premium Plan" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Premium Plan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('premium-plans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Plan Name:</strong>
                            {{ $premiumPlan->plan_name }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $premiumPlan->price }}
                        </div>
                        <div class="form-group">
                            <strong>Characteristics:</strong>
                            {{ $premiumPlan->characteristics }}
                        </div>
                        <div class="form-group">
                            <strong>Text:</strong>
                            {{ $premiumPlan->text }}
                        </div>
                        <div class="form-group">
                            <strong>Homepages Id:</strong>
                            {{ $premiumPlan->homepages_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
