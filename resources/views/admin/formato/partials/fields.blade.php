<div class="form-group row">
    {!! Form::label('', 'Municipio de nacimiento',['class'=>'control-label']) !!}
    {!! Form::select('birthcity', $municipios,null,['placeholder' =>'Selecciona un Municipio','class' => 'form-control mb-3', 'id'=>'birthcity','required']) !!}
</div>
