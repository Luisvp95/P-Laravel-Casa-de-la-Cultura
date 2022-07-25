<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Hora Inicio') }}
            {{ Form::time('hora_i', $horario->hora_i, ['class' => 'form-control' . ($errors->has('hora_i') ? ' is-invalid' : ''), 'placeholder' => 'Ingresar hora inicio']) }}
            {!! $errors->first('hora_i', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora Fin') }}
            {{ Form::time('hora_f', $horario->hora_f, ['class' => 'form-control' . ($errors->has('hora_f') ? ' is-invalid' : ''), 'placeholder' => 'Ingresar hora fin']) }}
            {!! $errors->first('hora_f', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('curso') }}
            {{ Form::select('curso_id', $cursos, $horario->curso_id, ['class' => 'form-control' . ($errors->has('curso_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar curso']) }}
            {!! $errors->first('curso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>