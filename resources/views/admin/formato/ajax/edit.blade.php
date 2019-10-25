<link rel="stylesheet" href="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />
<div id="custom-content" class="modal-block modal-block-primary modal-header-color">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Editar candidato</h2>
        </header>
        <div class="card-body">
            {!! Form::model($e14,['route'=>['e14.update',$e14],'method' => 'PUT','files' => true,'class' => 'form-horizontal form-bordered', 'id'=>'form-edit']) !!}
            <div class="modal-wrapper">
                <div class="modal-text">
                    @include('admin.formato.partials.fields')
                </div>
            </div>
            <footer class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary editAsignatura">Guardar</button>
                        <button class="btn btn-default modal-dismiss">Cancelar</button>
                    </div>
                </div>
            </footer>
            {!! Form::close() !!}
        </div>
    </section>
</div>
<script src="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
