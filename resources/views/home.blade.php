@extends('layouts.app')
@section('titulo', "Bienvenido")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scriptMedio')
    <script src="{{asset("vendors/custom/fullcalendar/fullcalendar.bundle.js")}}" type="text/javascript"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
    <script src="{{asset("vendors/custom/gmaps/gmaps.js")}}" type="text/javascript"></script>
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset("js/demo1/pages/dashboard.js")}}" type="text/javascript"></script>
    <!--end::Page Scripts -->
@endsection
