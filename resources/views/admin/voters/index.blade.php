@extends('layouts.app')
@section('titulo', "Votantes")
@section('namePage', "Modulo: Votantes")
@section('styles')
    @include('partials.stilosdt')
@endsection
@section('content')
    {!! Alert::render() !!}
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <a href="{{route('voters.create')}}"  class="btn btn-primary on-default simple-ajax-modal ">Agregar <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped mb-0" id="voters">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Sector</th>
                <th>Lider</th>
                <th>Puesto</th>
                <th>Mesa</th>
                <th>Sufrago</th>
                <th>Acciones</th>
            </tr>
            </thead>
        </table>
        {!! Form::open(['method' => 'DELETE', 'id' => "delete-form" ,'style' => 'display: none;']) !!}{!! Form::close() !!}
    </div>
    <div id="inf" data-urltabla ="{{route('api.voters.index')}}"  data-url ="{{Config::get('app.url')}}"></div>
    @include('admin.voters.partials.modals')
@endsection
@section('script')
    @include('partials.scriptdt')
@endsection
@section('scriptfin')
    <script src="{{asset('js/examples/examples.modals.js')}}"></script>
    <script src="{{asset('js/examples/examples.notifications.js')}}"></script>
    <script src="{{asset('js/tablas/voters.js')}}"></script>
@endsection
