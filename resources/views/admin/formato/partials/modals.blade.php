<!-- Start Modal Eliminar -->
<div id="modalEliminar" class="modal-block modal-block-warning mfp-hide">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Alerta!!</h2>
        </header>
        <div class="card-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="modal-text">
                    <p>Estas seguro que deseas eliminar el usuario: <strong id="Nombreasg"></strong></p>
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-danger modal-dismiss">Cancelar</button>
                    {!! Form::open(['method' => 'DELETE', 'id' => "form-delete" ,'style' => 'display: inline-block;']) !!}
                    <button type="submit" class="btn btn-warning">Confirmar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </footer>
    </section>
</div>
<!-- End Modal Eliminar-->
<div id="modalFilter" class="modal-block modal-header-color modal-block-success mfp-hide">
     <section class="card">
        <header class="card-header">
            <h2 class="card-title">Selecciona el puesto!!</h2>
        </header>
        {!! Form::open(['route' => 'e14.store','method' => 'GET', 'id' => "form-delete" ,'style' => 'display: inline-block;']) !!}
        <div class="card-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="modal-text">
                    {!! Form::label('', 'Puesto de Votación',['class'=>'control-label']) !!}
                    {!! Form::select('birthcity', $points,null,['placeholder' =>'Selecciona un Puesto','class' => 'form-control mb-3', 'id'=>'birthcity','required']) !!}
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-danger modal-dismiss">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Confirmar</button>
                </div>
            </div>
        </footer>
        {!! Form::close() !!}
    </section>
</div>