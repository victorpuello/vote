@extends('layouts.app')
@section('titulo', "Lideres")
@section('namePage', "Modulo: Seguimiento - Lideres")
@section('styles')
    @include('partials.stilosdt')
@endsection
@section('content')
    {!! Alert::render() !!}
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <a href="#modalConfirmar"  class="btn btn-primary on-default modal-basic ">Notificar a todos <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped mb-0" id="datatable-default">
            <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th class="center d-lg-none" >Votantes</th>
                <th>Votantes Sufragados.</th>
                <th>Votantes Faltantes.</th>
                <th class="center d-lg-none" >Procentaje</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($leaders as $leader)
                <tr>
                    <td>{{$leader->name}}</td>
                    <td>{{$leader->lastname}}</td>
                    <td>{{$leader->phone}}</td>
                    <td class="center d-lg-none" >{{$leader->voters_count}}</td>
                    <td >{{$leader->sufragio_count}}</td>
                    <td >{{$leader->pending_sufragio_count}}</td>
                    <td class="center d-lg-none" >{{porcentajeCumplimineto($leader->voters_count,$leader->sufragio_count)}}</td>
                    <td >
                        <a href="{{route('tracking.leaders.notification',$leader)}}"  class="mb-1 mt-1 on-default edit-row btn btn-xs btn-success" ><i class="fas fa-sms"></i> Enviar Mensaje</a>
                        <a href="{{route('tracking.leaders.faltantes',$leader)}}"  class="mb-1 mt-1 on-default edit-row btn btn-xs btn-danger" ><i class="fas fa-meh-rolling-eyes"></i> Faltantes</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="inf" data-urltabla ="{{route('api.leaders.index')}}"  data-url ="{{Config::get('app.url')}}"></div>
    @include('admin.tracking.partials.modals')
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
