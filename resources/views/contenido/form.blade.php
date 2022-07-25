<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $contenido->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese nombre de contenido']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('curso') }}
            {{ Form::select('curso_id',$cursos, $contenido->curso_id, ['class' => 'form-control' . ($errors->has('curso_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar curso']) }}
            {!! $errors->first('curso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>