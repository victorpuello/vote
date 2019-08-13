<div class="form-group row">
    <div class="col-lg-6">
        {!! Form::label('cedula', 'N° de Cédula',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Cédula']) !!}
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
<div class="form-group row">
    <div class="col-lg-6">
        {!! Form::label('phone', 'Telefono',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefono/Celular']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('sector_id', 'Sector',['class'=>'col-lg-12 control-label text-lg-left pt-2']) !!}
        {!! Form::select('sector_id', $sectors,null,['placeholder' =>'Selecciona un sector','class' => 'form-control mb-3', 'id'=>'sector_id','required']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-6">
        {!! Form::label('leader_id', 'Líder',['class'=>'col-lg-12 control-label text-lg-left pt-2']) !!}
        {!! Form::select('leader_id', $leaders,null,['placeholder' =>'Selecciona un lider','class' => 'form-control mb-3', 'id'=>'sector_id','required']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('point_id', 'Puesto de Votación',['class'=>'col-lg-12 control-label text-lg-left pt-2']) !!}
        {!! Form::select('point_id', $points,null,['placeholder' =>'Selecciona un puesto','class' => 'form-control mb-3', 'id'=>'sector_id','required']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-6">
        {!! Form::label('table_number', 'Mesa',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('table_number', null, ['class' => 'form-control','id'=>'inputDefault', 'placeholder' => 'Por favor introduzca el número de la mesa']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('sufrago', 'Sufragó..?',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::radios('sufrago', ['0' => 'No', '1' => 'Si'],null,['classes' => 'pl-0 form-control mb-3','id'=>'sufrago']) !!}
    </div>
</div>
