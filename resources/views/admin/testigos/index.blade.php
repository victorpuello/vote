@extends('layouts.app')
@section('titulo', "Testigos")
@section('namePage', "Modulo: Testigos")
@section('styles')
    @include('partials.stilosdt')
@endsection
@section('content')
    {!! Alert::render() !!}
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <a href="{{route('testigos.create')}}"  class="btn btn-primary on-default simple-ajax-modal ">Agregar <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped mb-0" id="testigos">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
            </thead>
        </table>
        {!! Form::open(['method' => 'DELETE', 'id' => "delete-form" ,'style' => 'display: none;']) !!}{!! Form::close() !!}
    </div>
    <div id="inf" data-urltabla ="{{route('api.testigos.index')}}"  data-url ="{{Config::get('app.url')}}"></div>
    @include('admin.testigos.partials.modals')
@endsection
@section('script')
    @include('partials.scriptdt')
@endsection
@section('scriptfin')
    <script src="{{asset('js/examples/examples.notifications.js')}}"></script>
{{--    <script src="{{asset('js/examples/examples.datatables.tabletools.js')}}"></script>--}}
    <script src="{{asset('js/tablas/testigos.js')}}"></script>
@endsection
