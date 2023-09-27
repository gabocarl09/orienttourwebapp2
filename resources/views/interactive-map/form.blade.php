<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('shop_names') }}
            {{ Form::text('shop_names', $interactiveMap->shop_names, ['class' => 'form-control' . ($errors->has('shop_names') ? ' is-invalid' : ''), 'placeholder' => 'Shop Names']) }}
            {!! $errors->first('shop_names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location') }}
            {{ Form::text('location', $interactiveMap->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
            {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_of_shop') }}
            {{ Form::text('type_of_shop', $interactiveMap->type_of_shop, ['class' => 'form-control' . ($errors->has('type_of_shop') ? ' is-invalid' : ''), 'placeholder' => 'Type Of Shop']) }}
            {!! $errors->first('type_of_shop', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('homepages_id') }}
            {{ Form::text('homepages_id', $interactiveMap->homepages_id, ['class' => 'form-control' . ($errors->has('homepages_id') ? ' is-invalid' : ''), 'placeholder' => 'Homepages Id']) }}
            {!! $errors->first('homepages_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>