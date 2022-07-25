<div class="box box-info padding-1">
    <div class="box-body">
        
        <style>
            #columnas{
            column-count:4;
            column-gap:20px;
            column-rule:4px dotted gray;
            }
            </style>
        <div class="form-group">
            <label for="">Nombre del Rol</label>
            {!! Form::text('name', null, array('class' => 'form-control'))!!}
        </div>
        <div>
            <label>Permisos para este rol</label>
        </div>
        <div class="form-group" id="columnas"> 
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name'))}}
                {{$value->name}}</label>
            <br/>                
            @endforeach           
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>