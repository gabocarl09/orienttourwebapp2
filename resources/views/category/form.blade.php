<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('category_name') }}
            {{ Form::text('category_name', $category->category_name, ['class' => 'form-control' . ($errors->has('category_name') ? ' is-invalid' : ''), 'placeholder' => 'Category Name']) }}
            {!! $errors->first('category_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pictures') }}
            {{ Form::text('pictures', $category->pictures, ['class' => 'form-control' . ($errors->has('pictures') ? ' is-invalid' : ''), 'placeholder' => 'Pictures']) }}
            {!! $errors->first('pictures', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('homepages_id') }}
            {{ Form::text('homepages_id', $category->homepages_id, ['class' => 'form-control' . ($errors->has('homepages_id') ? ' is-invalid' : ''), 'placeholder' => 'Homepages Id']) }}
            {!! $errors->first('homepages_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>