<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('craft_name') }}
            {{ Form::text('craft_name', $craft->craft_name, ['class' => 'form-control' . ($errors->has('craft_name') ? ' is-invalid' : ''), 'placeholder' => 'Craft Name']) }}
            {!! $errors->first('craft_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('craft_image') }}
            {{ Form::text('craft_image', $craft->craft_image, ['class' => 'form-control' . ($errors->has('craft_image') ? ' is-invalid' : ''), 'placeholder' => 'Craft Image']) }}
            {!! $errors->first('craft_image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $craft->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categories_id') }}
            {{ Form::text('categories_id', $craft->categories_id, ['class' => 'form-control' . ($errors->has('categories_id') ? ' is-invalid' : ''), 'placeholder' => 'Categories Id']) }}
            {!! $errors->first('categories_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>