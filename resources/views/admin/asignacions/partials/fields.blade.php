<div class="form-group row">
    <div class="col-lg-12">
        {!! Form::label('table_id', 'Mesa',['class'=>'control-label']) !!}
        {!! Form::select('table_id',$tables, null,['placeholder' =>'Selecciona una mesa de votación','class' => 'form-control mb-3', 'id'=>'table','required']) !!}
        {{ Form::hidden('testigo_id', $testigo->id) }}
    </div>
</div>
