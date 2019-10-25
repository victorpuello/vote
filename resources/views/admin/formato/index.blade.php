@extends('layouts.app')
@section('titulo', "E-14")
@section('namePage', "E-14")
@section('styles')
    @include('partials.stilosdt')
@endsection
@section('content')
    {!! Alert::render() !!}
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <a href="{{route('e14.getfiltro')}}"  class="btn btn-primary on-default simple-ajax-modal ">Agregar <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
      <table class="table table-bordered table-striped mb-0" id="e14">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Puesto</th>
                <th>Mesa</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
            </thead>
        </table>
        {!! Form::open(['method' => 'DELETE', 'id' => "delete-form" ,'style' => 'display: none;']) !!}{!! Form::close() !!}
    </div>
    <div id="inf" data-urltabla ="{{route('api.e14.index')}}"  data-url ="{{Config::get('app.url')}}"></div>
    @include('admin.formato.partials.modals')
@endsection
@section('script')
    @include('partials.scriptdt')
@endsection
@section('scriptfin')
    <script src="{{asset('js/examples/examples.modals.js')}}"></script>
    <script src="{{asset('js/examples/examples.notifications.js')}}"></script>
    <script src="{{asset('js/tablas/e14.js')}}"></script>
    <script src="{{asset('js/examples/examples.lightbox.js')}}"></script>
@endsection
