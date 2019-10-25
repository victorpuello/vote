<div class="form-group row pt-0">
    <div class="col-lg-12">
        {!! Form::label('table_id', 'Mesa',['class'=>'control-label']) !!}
        {!! Form::select('table_id',$tables, null,['placeholder' =>'Selecciona una mesa de votación','class' => 'form-control mb-3', 'id'=>'table','required']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-12">
        <div class="form-group">
            <label class=" control-label">Fotografia del E-14</label>
            <div >
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="input-append">
                        <div class="uneditable-input">
                            <i class="fas fa-file fileupload-exists"></i>
                            <span class="fileupload-preview"></span>
                        </div>
                        <span class="btn btn-default btn-file">
                            <span class="fileupload-exists">Cambiar</span>
                            <span class="fileupload-new">Selecionar archivo</span>
                            {!! Form::file('path')!!}
                        </span>
                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
