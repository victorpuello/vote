@extends('layouts.app')
@section('titulo', "Escrutinos")
@section('namePage', "Modulo: Votacion - Escrutinios")
@section('styles')
@endsection
@section('content')
    {!! Alert::render() !!}
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <a href="{{route('votations.getfiltro')}}"  class="btn btn-primary on-default simple-ajax-modal ">Agregar <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        {!! Form::model($votation,['route'=>['votations.update',$votation],'method' => 'PUT','class' => 'form-horizontal form-bordered', 'id'=>'form-edit']) !!}
           <div class="form-group row pt-0">
            <div class="col-lg-4">
                {!! Form::label('table_id', 'Mesa',['class'=>'control-label']) !!}
                {!! Form::select('table_id',$tables, null,['placeholder' =>'Selecciona una mesa de votación','class' => 'form-control mb-3', 'id'=>'table','required']) !!}
            </div>
            <div class="col-lg-4">
                {!! Form::label('candidate_id', 'Candidato',['class'=>'control-label']) !!}
                {!! Form::select('candidate_id', $candidates,null, ['class' => 'form-control mb-3','id'=>'inputDefault', 'placeholder' => 'Selecciona un Candidato','required']) !!}
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    {!! Form::label('votes', 'N° de Votos: ',['class'=>'control-label']) !!}
                    {!! Form::text('votes',null,['class' => 'form-control','id'=>'votes', 'placeholder' => 'Votos','required'])!!}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('votations.index')}}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
@section('script')
@endsection
@section('scriptfin')
    <script src="{{asset('js/examples/examples.notifications.js')}}"></script>
@endsection
