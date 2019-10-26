@extends('layouts.app')
@section('titulo', "Seguimiento")
@section('styles')
    <link rel="stylesheet" href="{{asset('vendor/morris/morris.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/chartist/chartist.min.css')}}"/>
@stop
@section('content')
    <div class="row p-0">
        <div class="col-lg-3">
            <section class="card card-featured-left card-featured-primary mb-4">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-primary">
                                <i class="fas fa-vote-yea" data-appear-animation="bounceIn" data-appear-animation-delay="0"
                                   data-appear-animation-duration="1s"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col mt-3">
                            <div class="summary" style="min-height: 48px;">
                                <h2 class="title">Votos Registrados</h2>
                                <div class="info mt-3">
                                    <strong style="font-size: 38px;" class="timer amount tex count-title count-number" data-to="{{$nVotes}}"
                                            data-speed="3500"></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-3">
            <section class=" card card-featured-left card-featured-secondary mb-4">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-secondary">
                                <i class="fas fa-file-invoice" data-appear-animation="bounceIn"
                                   data-appear-animation-delay="0" data-appear-animation-duration="1s"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col  mt-3">
                            <div class="summary" style="min-height: 48px;">
                                <h4 class="title">E-14 Cargados</h4>
                                <div class="info mt-3">
                                    <strong style="font-size: 38px;" class="timer amount count-title count-number" data-to="{{$nE14}}"
                                            data-speed="3500"></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-3">
            <section class=" card card-featured-left card-featured-tertiary mb-4">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-tertiary">
                                <i class="fas fa-box" data-appear-animation="bounceIn"
                                   data-appear-animation-delay="0" data-appear-animation-duration="1s"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col mt-3">
                            <div class="summary" style="min-height: 48px;">
                                <h4 class="title">Confirmados</h4>
                                <div class="info mt-3">
                                    <strong style="font-size: 38px;" class="timer amount count-title count-number" data-to="{{$count}}"
                                            data-speed="3500"></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-3">
            <section class=" card card-featured-left card-featured-quaternary mb-4">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-quaternary">
                                <i class="fas fa-question" data-appear-animation="bounceIn" data-appear-animation-delay="0"
                                   data-appear-animation-duration="1s"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col mt-3">
                            <div class="summary" style="min-height: 48px;">
                                <h4 class="title">Votos faltantes</h4>
                                <div class="info mt-3">
                                    <strong  style="font-size: 38px;" class="timer amount count-title count-number" data-to="{{$faltantes}}"
                                            data-speed="3500"></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="row p-0">
        <div class="col-xl-6">
            <section class="card card-warning">
                <header class="card-header ">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>

                    <h2 class="card-title">Líderes alto rendimiento</h2>
                </header>
                <div class="card-body">
                    <table class="table table-responsive-md table-striped mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Votantes Registrados</th>
                            <th>Votantes Faltantes</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bestLeaders as $key => $leader)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$leader->full_name}}</td>
                                <td>{{$leader->sufragio_count}}</td>
                                <td>
                                    {{difVoters($leader->voters_count,$leader->sufragio_count)}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('tracking.leaders')}}" class="btn btn-primary">Ver todos</a>
                </div>
            </section>
        </div>
        <div class="col-xl-6">
            <section class="card card-success">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>

                    <h2 class="card-title">Líderes bajo rendimiento</h2>
                </header>
                <div class="card-body">
                    <table class="table table-responsive-md table-striped mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Votantes Registrados</th>
                            <th>Votantes Faltantes</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($badLeaders as $key => $leader)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$leader->full_name}}</td>
                                <td>{{$leader->sufragio_count}}</td>
                                <td>
                                    {{difVoters($leader->voters_count,$leader->sufragio_count)}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('tracking.leaders')}}" class="btn btn-primary">Ver todos</a>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('script')

@endsection
@section('scriptfin')
    <script src="{{asset('js/count.js')}}"></script>
    <script src="{{asset('vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendor/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendor/flot.tooltip/jquery.flot.tooltip.js')}}"></script>
    <script src="{{asset('vendor/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('vendor/flot/jquery.flot.resize.js')}}"></script>
    <!--end::Page Scripts -->
    <script src="{{asset('js/examples/examples.charts.js')}}"></script>
@endsection
