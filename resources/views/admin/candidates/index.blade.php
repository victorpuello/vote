@extends('layouts.app')
@section('titulo', "Candidatos")
@section('namePage', "Candidatos")
@section('styles')
    @include('partials.stilosdt')
{{--<link rel="stylesheet" href="{{asset('css/app.css')}}" />--}}
@endsection
@section('content')
    {!! Alert::render() !!}
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <a href="{{route('candidates.create')}}"  class="btn btn-primary on-default simple-ajax-modal ">Agregar <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped mb-0" id="candidates">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            </thead>
        </table>
        {!! Form::open(['method' => 'DELETE', 'id' => "delete-form" ,'style' => 'display: none;']) !!}{!! Form::close() !!}
    </div>
    <div id="inf" data-urltabla ="{{route('api.candidates.index')}}"  data-url ="{{Config::get('app.url')}}"></div>
    @include('admin.candidates.partials.modals')
@endsection
@section('script')
    @include('partials.scriptdt')
@endsection
@section('scriptfin')
    <script src="{{asset('js/examples/examples.modals.js')}}"></script>
{{--    <script src="{{asset('js/app.js')}}"></script>--}}
    <script src="{{asset('js/examples/examples.notifications.js')}}"></script>
    <script src="{{asset('js/tablas/candidates.js')}}"></script>
@endsection
