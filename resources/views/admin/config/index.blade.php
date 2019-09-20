@extends('layouts.app')
@section('titulo', "Configuración")
@section('content')
    {!! Alert::render() !!}
    <div class="row">
        <div class="col-6">
            <div class="card mb-4">
                <div class="card-body">
                    <section class="card mb-4">
                        <header class="card-header">
                            <div class="card-actions">
                                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                            </div>
                            <h2 class="card-title">Mensaje de Bienvenida</h2>
                        </header>
                        {!! Form::open(['route'=>'config.sms','method' => 'POST','style' => 'display: inline-block;']) !!}
                            <div class="card-body">
                                <div class="form-group row">
                                    {!! Form::textarea('message',$sms->message,['class'=>'form-control', 'rows' => 4, 'cols' => 40]) !!}
                                    {!! Form::hidden('type','welcome') !!}
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <p class="m-0 text-left"> - Agrega el siguiente tag {voter} para ingresar dinamicamente el nombre del votante.</p>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        {!! Form::close() !!}
                    </section>
                </div>
            </div>
        </div>
{{--        <div class="col-6">--}}
{{--            <div class="card mb-4">--}}
{{--                <div class="card-body">--}}
{{--                    conten--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@stop
