@extends('layouts.app')
@section('titulo', "Bienvenido")
@section('styles')
    <link rel="stylesheet" href="{{asset('vendor/morris/morris.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/chartist/chartist.min.css')}}"/>
    <link href="{{asset('/mapsvg/css/mapsvg.css')}}" rel="stylesheet">
    <link href="{{asset('/mapsvg/css/nanoscroller.css')}}" rel="stylesheet">
@stop
@section('content')
    @admin
        <div class="row p-0">
            <div class="col-lg-3">
                <section class="card card-featured-left card-featured-primary mb-4">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-users" data-appear-animation="bounceIn" data-appear-animation-delay="0"
                                       data-appear-animation-duration="1s"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col mt-3">
                                <div class="summary" style="min-height: 48px;">
                                    <h4 class="title">Votantes</h4>
                                    <div class="info">
                                        <strong class="timer amount count-title count-number" data-to="{{$nVoters}}"
                                                data-speed="3500"></strong>
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
                                    <i class="fas fa-people-carry" data-appear-animation="bounceIn"
                                       data-appear-animation-delay="0" data-appear-animation-duration="1s"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col  mt-3">
                                <div class="summary" style="min-height: 48px;">
                                    <h4 class="title">Líderes</h4>
                                    <div class="info">
                                        <strong class="timer amount count-title count-number" data-to="{{$nLeaders}}"
                                                data-speed="3500"></strong>
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
                                    <i class="fas fa-map-marked" data-appear-animation="bounceIn"
                                       data-appear-animation-delay="0" data-appear-animation-duration="1s"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col mt-3">
                                <div class="summary" style="min-height: 48px;">
                                    <h4 class="title">Sectores</h4>
                                    <div class="info">
                                        <strong class="timer amount count-title count-number" data-to="{{$nSectors}}"
                                                data-speed="3500"></strong>
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
                                    <i class="fas fa-money-bill" data-appear-animation="bounceIn" data-appear-animation-delay="0"
                                       data-appear-animation-duration="1s"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col mt-3">
                                <div class="summary" style="min-height: 48px;">
                                    <h4 class="title">Saldo en $ COP SMS</h4>
                                    <div class="info">
                                        <strong class="timer amount count-title count-number" data-to="{{$saldo}}"
                                                data-speed="3500">$ </strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a href="https://api.whatsapp.com/send?phone=573215496008&text=Necesito%20saldo%20para%20los%20SMS" target="_blank" class="text-muted text-uppercase">Solicitar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row p-0">
            <div class="col-xl-4">
                <section class="card card-dark">
                    <header class="card-header ">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div>
                        <h2 class="card-title">Mapa de Rendimiento</h2>
                    </header>
                    <div class="card-body">
                        <div id="mapsvg"></div>
                    </div>
                </section>
            </div>
            <div class="col-xl-4">
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
            <div class="col-xl-4">
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
    @endadmin
@endsection
@section('script')

@endsection
@section('scriptfin')
    <script type="text/javascript">
    var sector_data = new Array();
    @foreach($sectors as $sector)
        sector_data["{{$sector->name}}"] = "{{$sector->voters_count}}",
    @endforeach
    console.log(sector_data);
    jQuery(document).ready(function(){
    jQuery("#mapsvg").mapSvg({
        width: 336.51,
        height: 337,
        loadingText: "Cargando Mapa....",
        colors: {
            baseDefault: "#000000",
            background: "rgba(238,238,238,0)",
            selected: 40,
            hover: "#dbdbdb",
            directory: "#fafafa",
            status: {},
            base: "#ffffff"
        },
        regions: {
            pasonuevo: {
                id: "pasonuevo",
                    'id_no_spaces': 
                    "pasonuevo",
                fill: "rgba(13,110,253,1)",
                tooltip: "Paso Nuevo"+" "+sector_data['PASO NUEVO']+" Votantes",
                popover: "Corregimiento de Paso Nuevo",
                href: "#",
                data: {}
            },
            playasdelviento: {
                id: "playasdelviento",
                    'id_no_spaces': 
                    "playasdelviento",
                fill: "rgba(13,110,253,1)",
                tooltip: "Playas del Viento"+" "+sector_data['PLAYAS DEL VIENTO']+" Votantes",
                data: {}
            },
            elparaiso: {
                id: "elparaiso",
                    'id_no_spaces': 
                    "elparaiso",
                    fill: "rgba(13,110,253,1)",
                tooltip: "El Paraiso"+" "+sector_data['EL PARAISO']+" Votantes",
                popover: "Corregimiento El Paraiso",
                href: "#",
                data: {}
            },
            chiqui: {
                id: "chiqui",
                'id_no_spaces': "chiqui",
                fill: "rgba(13,110,253,1)",
                tooltip: "Chiquí"+" "+sector_data['CHIQUI']+" Votantes",
                popover: "Corregimiento Chiquí",
                href: "#",
                data: {}
            },
            castillo: {
                id: "castillo",
                'id_no_spaces': 
                "castillo",
                fill: "rgba(13,110,253,1)",
                tooltip: "El Castillo"+" "+sector_data['EL CASTILLO']+" Votantes",
                popover: "Corregimiento El Castillo",
                href: "#",
                data: {}
            },
            nuevaestrella: {
                id: "nuevaestrella",
                'id_no_spaces': 
                "nuevaestrella",
                fill: "rgba(13,110,253,1)",
                tooltip: "Nueva Estrella"+" "+sector_data['NUEVA ESTRELLA']+" Votantes",
                popover: "Corregimiento Nueva Estrella",
                href: "#",
                data: {}
            },
            barbascal: {
                id: "barbascal",
                'id_no_spaces': "barbascal",
                fill: "rgba(25,135,84,1)",
                tooltip: "Barbascal"+" "+sector_data['BARBASCAL']+" Votantes",
                popover: "Corregimiento Barbascal",
                href: "#",
                data: {}
            },
            villaclara: {
                id: "villaclara",
                'id_no_spaces': "villaclara",
                fill: "rgba(25,135,84,1)",
                tooltip: "Villa Clara"+" "+sector_data['VILLA CLARA']+" Votantes",
                popover: "Corregimiento Villa Clara",
                href: "#",
                data: {}
            },
            junin: {
                id: "junin",
                'id_no_spaces': "junin",
                fill: "rgba(25,135,84,1)",
                tooltip: "Junin"+" "+sector_data['JUNIN']+" Votantes",
                popover: "Corregimiento de Junin",
                href: "#",
                data: {}
            },
            barcelona: {
                id: "barcelona",
                'id_no_spaces': "barcelona",
                fill: "rgba(25,135,84,1)",
                tooltip: "Barcelona"+" "+sector_data['BARCELONA']+" Votantes",
                popover: "Corregimiento de Barcelona",
                href: "#",
                data: {}
            },
            lascanas: {
                id: "lascanas",
                'id_no_spaces': "lascanas",
                fill: "rgba(25,135,84,1)",
                tooltip: "Las Cañas"+" "+sector_data['LAS CAÑAS']+" Votantes",
                popover: "Corregimiento Chiquí",
                href: "#",
                data: {}
            },
            josemanuel: {
                id: "josemanuel",
                'id_no_spaces': "josemanuel",
                fill: "rgba(25,135,84,1)",
                tooltip: "José Manuel de Altamira"+" "+sector_data['JOSE MANUEL']+" Votantes",
                popover: "Corregimiento José Manuel de Altamira",
                href: "#",
                data: {}
            },
            pajonal: {
                id: "pajonal",
                'id_no_spaces': "pajonal",
                fill: "rgba(25,135,84,1)",
                tooltip: "Pajonal"+" "+sector_data['PAJONAL']+" Votantes",
                popover: "Corregimiento Pajonal",
                href: "#",
                data: {}
            },
            tementino: {
                id: "tementino",
                'id_no_spaces': "tementino",
                fill: "rgba(255,166,62,1)",
                tooltip: "Trementino"+" "+sector_data['TREMENTINO']+" Votantes",
                popover: "Corregimiento Trementino",
                href: "#",
                data: {}
            },
            sicara: {
                id: "sicara",
                'id_no_spaces': "sicara",
                fill: "rgba(255,166,62,1)",
                tooltip: "Sicará"+" "+sector_data['SICARA']+" Votantes",
                popover: "Corregimiento de Sicará",
                href: "#",
                data: {}
            },
            canogrande: {
                id: "canogrande",
                'id_no_spaces': "canogrande",
                fill: "rgba(255,166,62,1)",
                tooltip: "Caño Grande"+" "+sector_data['CAÑO GRANDE']+" Votantes",
                popover: "Corregimiento Caño Grande",
                href: "#",
                data: {}
            },
            tinajones: {
                id: "tinajones",
                'id_no_spaces': "tinajones",
                fill: "rgba(255,166,62,1)",
                tooltip: "Tinajones"+" "+sector_data['TINAJON COMPOSTELA']+" Votantes",
                popover: "Corregimiento de Tinajones",
                href: "#",
                data: {}
            },
            cascourbano: {
                id: "cascourbano",
                'id_no_spaces': "cascourbano",
                fill: "rgba(220,53,69,1)",
                tooltip: "Casco Urbano"+" "+sector_data['URBANO']+" Votantes",
                popover: "Zona Urbana",
                href: "#",
                data: {}
            }},
            viewBox: [-0.15485856610797555,0,536.8197171322159,537.31],
            cursor: "pointer",
            zoom: {
                on: true,
                limit: [0,10],
                delta: 2,
                buttons: {
                    on: true,
                    location: "right"
                },
                mousewheel: true
            },
            scroll: {
                on: true,
                limit: false,
                background: false,
                spacebar: false
            },
            tooltips: 
            {
                mode: "off",
                on: false,
                priority: "local",
                position: "bottom-right"
            },
            popovers: {
                mode: "off",
                on: false,
                priority: "local",
                position: "top",
                centerOn: true,
                width: 300,
                maxWidth: 50,
                maxHeight: 50,
                resetViewboxOnClose: true,
                mobileFullscreen: true
            },
            gauge: {
                on: false,
                labels: {
                    low: "low",
                    high: "high"
                },
                colors: {
                    lowRGB: {r: 85,g: 0,b: 0,a: 1},
                    highRGB: {r: 238,g: 0,b: 0,a: 1},
                    low: "#550000",
                    high: "#ee0000",
                    diffRGB: {r: 153,g: 0,b: 0,a: 0}
                },
                min: 0,
                max: false
            },
            source: "{{asset('/mapsvg/maps/user-uploads/mapa5.svg')}}",
            title: "Mapa5",
            responsive: true});
    });
    </script>

    
    
    <script src="{{asset('/mapsvg/js/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('/mapsvg/js/mapsvg.min.js')}}"></script>

    <script src="{{asset('js/count.js')}}"></script>
    <script src="{{asset('vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendor/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendor/flot.tooltip/jquery.flot.tooltip.js')}}"></script>
    <script src="{{asset('vendor/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('vendor/flot/jquery.flot.resize.js')}}"></script>
    <!--end::Page Scripts -->
    <script src="{{asset('js/examples/examples.charts.js')}}"></script>
@endsection
