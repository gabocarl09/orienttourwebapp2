<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('plan_name') }}
            {{ Form::text('plan_name', $premiumPlan->plan_name, ['class' => 'form-control' . ($errors->has('plan_name') ? ' is-invalid' : ''), 'placeholder' => 'Plan Name']) }}
            {!! $errors->first('plan_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $premiumPlan->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('characteristics') }}
            {{ Form::text('characteristics', $premiumPlan->characteristics, ['class' => 'form-control' . ($errors->has('characteristics') ? ' is-invalid' : ''), 'placeholder' => 'Characteristics']) }}
            {!! $errors->first('characteristics', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('text') }}
            {{ Form::text('text', $premiumPlan->text, ['class' => 'form-control' . ($errors->has('text') ? ' is-invalid' : ''), 'placeholder' => 'Text']) }}
            {!! $errors->first('text', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('homepages_id') }}
            {{ Form::text('homepages_id', $premiumPlan->homepages_id, ['class' => 'form-control' . ($errors->has('homepages_id') ? ' is-invalid' : ''), 'placeholder' => 'Homepages Id']) }}
            {!! $errors->first('homepages_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>