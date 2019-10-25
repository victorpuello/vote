@extends('layouts.app')
@section('titulo', "E14")
@section('namePage', "Modulo: Votacion - E14")
@section('styles')
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />
@endsection
@section('content')
    {!! Alert::render() !!}
    {!! Form::open(['route' => 'e14.store', 'method' => 'post','files' => true,'class' => 'form-horizontal form-bordered']) !!}
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <a href="{{route('e14.index')}}"  class="btn btn-warning on-default  ">Regresar <i class="fas fa-backspace"></i></a>
                    </div>
                </div>
            </div>
            @include('admin.formato.partials.fields')
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    {!! Form::close() !!}
@endsection
@section('script')
@endsection
@section('scriptfin')
    <script src="{{asset('vendor/autosize/autosize.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
    <script src="{{asset('js/examples/examples.notifications.js')}}"></script>
@endsection
