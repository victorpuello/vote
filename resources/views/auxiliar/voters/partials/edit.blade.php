<div id="custom-content" class="modal-block modal-block-primary modal-header-color">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Registrar voto {{$voter->full_name}}</h2>
        </header>
        <div class="card-body">
            {!! Form::model($voter,['route'=>['voter.sufragar',$voter],'method' => 'PUT','class' => 'form-horizontal form-bordered', 'id'=>'form-edit']) !!}
            <div class="modal-wrapper">
                <div class="modal-text">
                        <p>El señor(a): <strong>{{$voter->full_name}}</strong>, vota en la mesa <strong>{{$voter->table_number}}</strong> - Puesto: <strong>{{$voter->point->name}}</strong> </p>
                        {!! Form::hidden('sufrago',1) !!}
                </div>
            </div>
            <footer class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button class="btn btn-default modal-dismiss">Cancelar</button>
                    </div>
                </div>
            </footer>
            {!! Form::close() !!}
        </div>
    </section>
</div>
