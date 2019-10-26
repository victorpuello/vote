@extends('layouts.app')
@section('titulo', "Lideres")
@section('namePage', "Modulo: Seguimiento - Lideres" )
@section('styles')
    @include('partials.stilosdt')
@endsection
@section('content')
    <header class="card-header">
        <h2 class="card-title">Líder:  <strong>{{$leader->full_name}}</strong> - Votantes faltantes: <strong>{{$voters->count()}}</strong> </h2>
    </header>
    {!! Alert::render() !!}
    <div class="card-body">
        <table class="table table-bordered table-striped mb-0" id="datatable-default">
            <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Sector</th>
                <th>Lider</th>
                <th>Puesto</th>
                <th>Mesa</th>
            </tr>
            </thead>
            <tbody>
            @foreach($voters as $voter)
                <tr>
                    <td>{{$voter->cedula}}</td>
                    <td>{{$voter->name}}</td>
                    <td>{{$voter->lastname}}</td>
                    <td>{{$voter->phone}}</td>
                    <td>{{$voter->sector->name}}</td>
                    <td >{{$voter->leader->full_name}}</td>
                    <td >{{$voter->point->name}}</td>
                    <td >{{$voter->table_number}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    @include('partials.scriptdt')
@endsection
@section('scriptfin')
    <script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('js/examples/examples.modals.js')}}"></script>
    <script src="{{asset('js/examples/examples.notifications.js')}}"></script>
    <script src="{{asset('js/examples/examples.datatables.default.js')}}"></script>
{{--    <script src="{{asset('js/tablas/trackingleaders.js')}}"></script>--}}
@endsection
