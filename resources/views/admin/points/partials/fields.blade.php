<div class="form-group row">
    <div class="col-lg-6">
        {!! Form::label('name', 'Nombres',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('name', null, ['class' => 'form-control','id'=>'inputDefault', 'placeholder' => 'Por favor introduzca los nombres']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('address', 'Dirección',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca la dirección']) !!}
    </div>
</div>
