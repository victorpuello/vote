@extends('front.layout')
@section('content')
    <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
        <div class="container container-xl py-3">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-normal mb-5">Mesas <strong class="font-weight-extra-bold">Asignadas</strong></h2>
                </div>
            </div>
            <div class="row mb-5">
                @foreach($tables as $table)
                    <div class="col-lg-3">
                        <section class="card">
                            <header class="card-header bg-{{Config::get('varios.fondos.2')}}">
                                <div class="card-header-profile-picture">
                                    <img src="{{url('/img')}}/{{$table->number}}.jpg">
                                </div>
                            </header>
                            <div class="card-body">
                                <h4 class="font-weight-semibold mt-3">{{$table->point->name}}</h4>
                                <p><strong>Número de votantes: </strong>{{$table->nvoters}} </p>
                                <hr class="solid short">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <p class="mb-1"><a href="#modalEliminar" data-nsl ="{{$table->number}}" data-url="{{route('asignacions.destroy',$table->asignacion->id)}}" class="btn btn-danger deleted modal-basic" ><i class="fas fa-trash-alt mr-1"></i> Eliminar</a></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2">VIEW MORE</a>
                </div>
            </div>
        </div>
    </section>
@stop
