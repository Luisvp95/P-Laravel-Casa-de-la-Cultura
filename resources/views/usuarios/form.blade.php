<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="name">Nombre</label>
            {!! Form::text('name', null, array('class' => 'form-control'))!!}
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            {!! Form::text('email', null, array('class' => 'form-control'))!!}
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            {!! Form::password('password', array('class' => 'form-control'))!!}
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirmar Password</label>
            {!! Form::password('confirm-password', array('class' => 'form-control'))!!}
        </div>
        <div class="form-group">
            <label for="">Rol</label>
            {!! Form::select('roles[]',$roles,[],array('class' => 'form-control'))!!}
        </div>   
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>