<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre y apellido') }}
            {{ Form::text('nombres', $persona->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese nombre y apellido']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>      
        <div class="form-group">
            {{ Form::label('carnet') }}
            {{ Form::text('carnet', $persona->carnet, ['class' => 'form-control' . ($errors->has('carnet') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese carnet']) }}
            {!! $errors->first('carnet', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('email', $persona->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese correo']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dirección') }}
            {{ Form::text('direccion', $persona->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese dirección']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::text('celular', $persona->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $persona->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>