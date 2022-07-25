<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('persona') }}
            {{ Form::select('persona_id', $persona, $prestamo->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('libro') }}
            {{ Form::select('libro_id',$libro, $prestamo->libro_id, ['class' => 'form-control' . ($errors->has('libro_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar']) }}
            {!! $errors->first('libro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_prestamo') }}
            {{ Form::Date('fecha_prestamo', $prestamo->fecha_prestamo, ['class' => 'form-control' . ($errors->has('fecha_prestamo') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Prestamo']) }}
            {!! $errors->first('fecha_prestamo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_devolucion') }}
            {{ Form::Date('fecha_devolucion', $prestamo->fecha_devolucion, ['class' => 'form-control' . ($errors->has('fecha_devolucion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Devolucion']) }}
            {!! $errors->first('fecha_devolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>