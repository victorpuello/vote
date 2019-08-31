@extends('layouts.app')
@section('titulo', "Bienvenido")
@section('content')
    <div class="container">
        @admin
        <div class="row">
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
    </div>
@endsection
@section('script')

@endsection
        @section('scriptfin')
            <script src="{{asset('js/count.js')}}"></script>
            <script src="{{asset('js/examples/examples.charts.js')}}"></script>
    <!--end::Page Scripts -->
@endsection
