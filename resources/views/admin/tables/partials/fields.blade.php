<div class="form-group row">
    <div class="col-lg-12">
        {!! Form::label('number', 'Número de la Mesa',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('number', null, ['class' => 'form-control','id'=>'inputDefault', 'placeholder' => 'Por favor introduzca el número de la mesa']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-12">
        {!! Form::label('nvoters', 'Número de votantes',['class'=>'col-lg-6 control-label text-lg-left pt-2']) !!}
        {!! Form::text('nvoters', null, ['class' => 'form-control','id'=>'inputDefault', 'placeholder' => 'Por favor introduzca el número de votantes']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-12">
        {!! Form::label('point_id', 'Puestos de Votación: ',['class'=>'control-label']) !!}
        {!! Form::select('point_id',$points, null, ['class' => 'form-control mb-3','placeholder'=>'Seleccione un Puesto', 'id'=>'point_id','required']) !!}
    </div>
</div>
