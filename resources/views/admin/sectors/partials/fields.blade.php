<div class="form-group row">
    <div class="col-lg-12">
        {!! Form::label('name', 'Nombre',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('name', null, ['class' => 'form-control','id'=>'inputDefault', 'placeholder' => 'Por favor introduzca el nombre']) !!}
    </div>
    <div class="col-lg-12">
        {!! Form::label('zone_id', 'Zona',['class'=>'col-lg-12 control-label text-lg-left pt-2']) !!}
        {!! Form::select('zone_id', $zones,null,['placeholder' =>'Selecciona una zona','class' => 'form-control mb-3', 'id'=>'zone_id','required']) !!}
    </div>
</div>
