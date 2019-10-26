@extends('layouts.app')
@section('titulo', "Mesas")
@section('namePage', "Modulo: Testigos - Mesas")
@section('styles')
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/pnotify/pnotify.custom.css')}}" />
@endsection
@section('content')
    {!! Alert::render() !!}
    <div class="card card-transparent">
        <div class="row" id="ControlPanel">
            <div class="col-sm-1">
                <div class="mb-3">
                    <a href="{{route('testigos.index')}}"  class="btn btn-info on-default ">Regresar <i class="fas fa-backward"></i></a>
                </div>
            </div>
            <div class="col-sm-1">
                <div class="mb-3">
                    <a href="{{route('asignacions.create',$testigo->id)}}"  class="btn btn-primary on-default simple-ajax-modal ">Agregar <i class="fas fa-plus"></i></a>
                </div>
            </div>

        </div>
        <div class="row">
            @foreach($tables as $table)
                <div class="col-lg-3">
                    <section class="card">
                        <header class="card-header bg-{{Config::get('varios.fondos.2')}}">
                            <div class="card-header-profile-picture">
                                <img src="{{url('/img')}}/{{$table->number}}.jpg">
                            </div>
                        </header>
                        <div class="card-body">
                            <h4 class="font-weight-semibold mt-3">{{$table->point->name}}</h4>
                            <p><strong>Número de votantes: </strong>{{$table->nvoters}} </p>
                            <hr class="solid short">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <p class="mb-1"><a href="#modalEliminar" data-nsl ="{{$table->number}}" data-url="{{route('asignacions.destroy',$table->asignacion->id)}}" class="btn btn-danger deleted modal-basic" ><i class="fas fa-trash-alt mr-1"></i> Eliminar</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            @endforeach
        </div>
    </div>
    @include('admin.asignacions.partials.modals')
@endsection
@section('script')
    <script src="{{asset('vendor/select2/js/select2.js')}}"></script>
    <script src="{{asset('vendor/pnotify/pnotify.custom.js')}}"></script>
    <script src="{{asset('js/examples/examples.notifications.js')}}"></script>
    <script src="{{asset('js/examples/examples.modals.js')}}"></script>
    <script>
        $(".deleted").click(function (e) {
            $("#form-delete").attr('action', $(this).data('url') );
            $("#NombreGrado").text( $(this).data('nasg') );
        });
    </script>
@endsection
