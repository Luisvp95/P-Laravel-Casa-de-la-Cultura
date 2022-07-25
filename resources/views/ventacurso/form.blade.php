<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Estudiante') }}
            {{ Form::select('persona_id', $estudiantes, $ventacurso->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estudiante']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('curso') }}
            {{ Form::select('curso_id', $cursos, $ventacurso->curso_id, ['class' => 'form-control' . ($errors->has('curso_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar curso']) }}
            {!! $errors->first('curso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>