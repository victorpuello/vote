@extends('layouts.app')
@section('titulo', "Bienvenido")
@section('styles')
    <link rel="stylesheet" href="{{asset('vendor/morris/morris.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/chartist/chartist.min.css')}}" />
@stop
@section('content')
{{--    <div class="container">--}}
        @admin
        <div class="row p-0">
            <div class="col-lg-3">
                <section class="card card-featured-left card-featured-primary mb-4">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-users"  data-appear-animation="bounceIn" data-appear-animation-delay="0" data-appear-animation-duration="1s"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col mt-3">
                                <div class="summary" style="min-height: 48px;">
                                    <h4 class="title">Votantes</h4>
                                    <div class="info">
                                        <strong class="timer amount count-title count-number" data-to="{{$nVoters}}" data-speed="3500"></strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a href="{{route('voters.index')}}" class="text-muted text-uppercase">(Ver Todos)</a>
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
                                    <i class="fas fa-people-carry" data-appear-animation="bounceIn" data-appear-animation-delay="0" data-appear-animation-duration="1s"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col  mt-3">
                                <div class="summary" style="min-height: 48px;">
                                    <h4 class="title">Líderes</h4>
                                    <div class="info">
                                        <strong class="timer amount count-title count-number" data-to="{{$nLeaders}}" data-speed="3500"></strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a href="{{route('leaders.index')}}" class="text-muted text-uppercase">(Ver Todos)</a>
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
                                    <i class="fas fa-map-marked" data-appear-animation="bounceIn" data-appear-animation-delay="0" data-appear-animation-duration="1s"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col mt-3">
                                <div class="summary" style="min-height: 48px;">
                                    <h4 class="title">Sectores</h4>
                                    <div class="info">
                                        <strong class="timer amount count-title count-number" data-to="{{$nSectors}}" data-speed="3500"></strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="{{route('sectors.index')}}">(Ver Todos)</a>
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
                                    <i class="fas fa-user" data-appear-animation="bounceIn" data-appear-animation-delay="0" data-appear-animation-duration="1s"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col mt-3">
                                <div class="summary" style="min-height: 48px;">
                                    <h4 class="title">Usuarios</h4>
                                    <div class="info">
                                        <strong class="timer amount count-title count-number" data-to="{{$nUsers}}" data-speed="3500"></strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a href="{{route('users.index')}}" class="text-muted text-uppercase">(Ver Todos)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @endadmin
        <div class="row p-0">
            <div class="col-xl-6">
                <section class="card card-warning">
                    <header class="card-header ">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div>

                        <h2 class="card-title">Mejores Líderes</h2>
                    </header>
                    <div class="card-body">
                        <table class="table table-responsive-md table-striped mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Sector</th>
                                <th>Votantes</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($leaders as $key => $leader)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$leader->full_name}}</td>
                                    <td><span class="badge badge-success">{{$leader->sector->name}}</span></td>
                                    <td>
                                        {{$leader->voters_count}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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

                        <h2 class="card-title">Votantes por sectores</h2>
                    </header>
                    <div class="card-body">

                        <!-- Flot: Bars -->
                        <div class="chart chart-md" id="flotBars"></div>
                        <script type="text/javascript">

                            var flotBarsData = [
                                @foreach($sectors as $sector)
                                    ["{{$sector->short_name}}", {{$sector->voters_count}}],
                                @endforeach
                            ];
                        </script>

                    </div>
                </section>
            </div>

        </div>
{{--    </div>--}}
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
