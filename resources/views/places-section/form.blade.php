<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('place_image') }}
            {{ Form::text('place_image', $placesSection->place_image, ['class' => 'form-control' . ($errors->has('place_image') ? ' is-invalid' : ''), 'placeholder' => 'Place Image']) }}
            {!! $errors->first('place_image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_of_place') }}
            {{ Form::text('type_of_place', $placesSection->type_of_place, ['class' => 'form-control' . ($errors->has('type_of_place') ? ' is-invalid' : ''), 'placeholder' => 'Type Of Place']) }}
            {!! $errors->first('type_of_place', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('homepages_id') }}
            {{ Form::text('homepages_id', $placesSection->homepages_id, ['class' => 'form-control' . ($errors->has('homepages_id') ? ' is-invalid' : ''), 'placeholder' => 'Homepages Id']) }}
            {!! $errors->first('homepages_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>