@extends('layouts.app')
@section('titulo', "Lideres")
@section('namePage', "Modulo: Lideres")
@section('styles')
    @include('partials.stilosdt')
@endsection
@section('content')
    {!! Alert::render() !!}
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <a href="{{route('leaders.create')}}"  class="btn btn-primary on-default simple-ajax-modal ">Agregar <i class="fas fa-plus"></i></a>
                    @admin
                    <a href="{{route('reports.leaders')}}"  class="btn btn-success on-default ">Reporte <i class="fas fa-print"></i></a>
                    @endadmin
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped mb-0" id="leaders">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Sector</th>
                <th>Acciones</th>
            </tr>
            </thead>
        </table>
        {!! Form::open(['method' => 'DELETE', 'id' => "delete-form" ,'style' => 'display: none;']) !!}{!! Form::close() !!}
    </div>
    <div id="inf" data-urltabla ="{{route('api.leaders.index')}}"  data-url ="{{Config::get('app.url')}}"></div>
    @include('admin.leaders.partials.modals')
@endsection
@section('script')
    @include('partials.scriptdt')
@endsection
@section('scriptfin')
    <script src="{{asset('js/examples/examples.modals.js')}}"></script>
    <script src="{{asset('js/examples/examples.notifications.js')}}"></script>
    <script src="{{asset('js/tablas/leaders.js')}}"></script>
@endsection
