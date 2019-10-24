<div id="modalHeaderColorPrimary" class="modal-block modal-header-color modal-block-primary ">
    <section class="card">
        {!! Form::open(['route' => 'votations.create', 'method' => 'GET','class' => 'form-horizontal form-bordered']) !!}
        <header class="card-header">
            <h2 class="card-title">Puestos </h2>
        </header>
        <div class="card-body">
            <div class="form-group row ml-4 mr-4">
                {!! Form::label('name', 'Puestos de Votación: ',['class'=>'control-label']) !!}
                {!! Form::select('point_id',$points, null, ['class' => 'form-control mb-3','placeholder'=>'Seleccione un Puesto', 'id'=>'point_id','required']) !!}
            </div>
        </div>
        <footer class="card-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button  class="btn btn-danger ml-3 modal-dismiss">Cancelar</button>
                    <button  type="submit" class="btn btn-primary ">Filtrar</button>
                </div>
            </div>
        </footer>
        {!! Form::close() !!}
    </section>
</div>
