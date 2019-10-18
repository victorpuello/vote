<!-- Start Modal Sufragio -->
<div id="modalSufragar" class="modal-block modal-block-warning mfp-hide">
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
                        <p>Estas seguro registrar este voto</p>
                    </div>
                </div>
            </div>
            <footer class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="{{ route('marcado') }}" class="btn btn-danger modal-dismiss">Cancelar</a>
                        {!! Form::open(['method' => 'GET', 'id' => "form-update" ,'style' => 'display: inline-block;']) !!}
                        <button type="submit" class="btn btn-warning">Confirmar</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </footer>
        </section>
    </div>
    <!-- End Modal Sufragio-->
