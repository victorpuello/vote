<div class="form-group row">
    <div class="col-lg-6">
        {!! Form::label('name', 'Nombres',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('name', null, ['class' => 'form-control','id'=>'inputDefault', 'placeholder' => 'Por favor introduzca el nombre']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('email', 'E-Mail',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-6">
        {!! Form::label('type', 'Tipo de usuario',['class'=>'col-lg-12 control-label text-lg-left pt-2']) !!}
        {!! Form::select('type',[''=>'Seleccione Tipo','admin'=>'Administrador','auxiliar'=>'Auxiliar'], null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('username', 'Usuario',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => '']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-6">
        {!! Form::label('password', 'Contraseña',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        <input name="password" type="password"  class="form-control" >
    </div>
    <div class="col-lg-6">
        {!! Form::label('password-confirm', 'Confirmar contraseña',['class'=>'col-lg-8 control-label text-lg-left pt-2']) !!}
        <input name="password-confirm" type="password"  class="form-control">
    </div>
</div>
