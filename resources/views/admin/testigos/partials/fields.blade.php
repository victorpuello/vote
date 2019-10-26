<div class="form-group row">
    <div class="col-lg-6">
        {!! Form::label('cedula', 'N° de Cédula',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Cédula']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('phone', 'Telefono',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefono/Celular']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-6">
        {!! Form::label('name', 'Nombres',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('name', null, ['class' => 'form-control','id'=>'inputDefault', 'placeholder' => 'Por favor introduzca los nombres']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('lastname', 'Apellidos',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca los apellidos']) !!}
    </div>
</div>

