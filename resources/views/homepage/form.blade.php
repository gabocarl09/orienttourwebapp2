<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('crafts_recommendation') }}
            {{ Form::text('crafts_recommendation', $homepage->crafts_recommendation, ['class' => 'form-control' . ($errors->has('crafts_recommendation') ? ' is-invalid' : ''), 'placeholder' => 'Crafts Recommendation']) }}
            {!! $errors->first('crafts_recommendation', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('login') }}
            {{ Form::text('login', $homepage->login, ['class' => 'form-control' . ($errors->has('login') ? ' is-invalid' : ''), 'placeholder' => 'Login']) }}
            {!! $errors->first('login', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('register') }}
            {{ Form::text('register', $homepage->register, ['class' => 'form-control' . ($errors->has('register') ? ' is-invalid' : ''), 'placeholder' => 'Register']) }}
            {!! $errors->first('register', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('premium_plan') }}
            {{ Form::text('premium_plan', $homepage->premium_plan, ['class' => 'form-control' . ($errors->has('premium_plan') ? ' is-invalid' : ''), 'placeholder' => 'Premium Plan']) }}
            {!! $errors->first('premium_plan', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('places_section') }}
            {{ Form::text('places_section', $homepage->places_section, ['class' => 'form-control' . ($errors->has('places_section') ? ' is-invalid' : ''), 'placeholder' => 'Places Section']) }}
            {!! $errors->first('places_section', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categories') }}
            {{ Form::text('categories', $homepage->categories, ['class' => 'form-control' . ($errors->has('categories') ? ' is-invalid' : ''), 'placeholder' => 'Categories']) }}
            {!! $errors->first('categories', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('interactive_maps') }}
            {{ Form::text('interactive_maps', $homepage->interactive_maps, ['class' => 'form-control' . ($errors->has('interactive_maps') ? ' is-invalid' : ''), 'placeholder' => 'Interactive Maps']) }}
            {!! $errors->first('interactive_maps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('crafts') }}
            {{ Form::text('crafts', $homepage->crafts, ['class' => 'form-control' . ($errors->has('crafts') ? ' is-invalid' : ''), 'placeholder' => 'Crafts']) }}
            {!! $errors->first('crafts', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>