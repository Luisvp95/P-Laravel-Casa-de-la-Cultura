<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $curso->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha inicio') }}
            {{ Form::date('fecha_i', $curso->fecha_i, ['class' => 'form-control' . ($errors->has('fecha_i') ? ' is-invalid' : ''), 'placeholder' => 'Fecha I']) }}
            {!! $errors->first('fecha_i', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha fin') }}
            {{ Form::date('fecha_f', $curso->fecha_f, ['class' => 'form-control' . ($errors->has('fecha_f') ? ' is-invalid' : ''), 'placeholder' => 'Fecha F']) }}
            {!! $errors->first('fecha_f', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('costo', $curso->costo, ['class' => 'form-control' . ($errors->has('costo') ? ' is-invalid' : ''), 'placeholder' => 'Costo']) }}
            {!! $errors->first('costo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>