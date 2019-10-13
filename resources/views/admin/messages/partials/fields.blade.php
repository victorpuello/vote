<div class="form-group row p-2">
    {!! Form::label('name', 'Nombre',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
    {!! Form::text('name', null, ['class' => 'form-control','id'=>'inputDefault', 'placeholder' => 'Por favor introduzca el nombre']) !!}
</div>
<div class="form-group row p-2">
    {!! Form::label('message', 'Mensaje',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
    {!! Form::textarea('message',null,['class'=>'form-control', 'rows' => 4, 'cols' => 40]) !!}
</div>
<div class="form-group row p-2">
    {!! Form::label('type', 'Tipo de usuario',['class'=>'col-lg-12 control-label text-lg-left pt-2']) !!}
    {!! Form::select('type',[''=>'Seleccione Tipo','welcome'=>'Bienvenida','campaign'=>'Campaña','information'=>'Información'], null, ['class' => 'form-control']) !!}
</div>

