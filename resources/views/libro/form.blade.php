<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::select('autor_id',$autors, $libro->autor_id, ['class' => 'form-control' . ($errors->has('autor_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar autor']) }}
            {!! $errors->first('autor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::select('categoria_id',$categorias, $libro->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar categoria']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $libro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese nombre del libro']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial') }}
            {{ Form::text('editorial', $libro->editorial, ['class' => 'form-control' . ($errors->has('editorial') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese editorial']) }}
            {!! $errors->first('editorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('anyo', $libro->anyo, ['class' => 'form-control' . ($errors->has('anyo') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese año']) }}
            {!! $errors->first('anyo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $libro->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese cantidad']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>