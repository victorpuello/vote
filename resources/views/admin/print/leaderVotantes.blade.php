<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Reporte Lideres - Votantes</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/invoice-print.css')}}" />
    <style>
        .table thead th{
            border-bottom: none;
        }
        .card-body{
            border-radius: 0;
        }
        .card{
            border-radius: 0;
        }

    </style>
</head>
<body>
<div class="invoice page">
    @include('admin.print.partials.header', ['nameReporte' => 'Sabana de notas'])
    <section>
        <table class="table" style="border: none; border-color: #ffffff;">
            <tbody>
            <tr>
                <td>Líder:  <strong>{{$leader->full_name}}</strong></td>
                <td>Sector:  <strong>{{$leader->sector->name}}</strong></td>
                <td>Votantes: <strong>{{count($leader->voters)}}</strong></td>
                <td>Fecha:  <strong>{{\Carbon\Carbon::now()->toDateString()}}</strong></td>
            </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <tbody>
            <tr class="text-center " >
                <td class="p-0"  style="vertical-align: middle"><strong>CEDULA</strong></td>
                <td class="p-0"  style="vertical-align: middle"><strong>APELLIDOS</strong></td>
                <td class="p-0"  style="vertical-align: middle"><strong>NOMBRE(S)</strong></td>
                <td class="p-0"  style="vertical-align: middle"><strong>TELFONO</strong></td>
                <td class="p-0"  style="vertical-align: middle"><strong>SECTOR</strong></td>
                <td class="p-0"  style="vertical-align: middle"><strong>PUESTO</strong></td>
            </tr>
            @foreach($leader->voters as $voter)
                <tr class="m-0 p-0">
                    <td class="text-center m-0 p-0">{{$voter->cedula}}</td>
                    <td class="m-0 pl-1 pt-0 pb-0 pr-0">{{$voter->lastname}}</td>
                    <td class="m-0 pl-1 pt-0 pb-0 pr-0">{{$voter->name}}</td>
                    <td class="m-0 pl-1 pt-0 pb-0 pr-0">{{$voter->phone}}</td>
                    <td class="m-0 pl-1 pt-0 pb-0 pr-0">{{$voter->sector->name}}</td>
                    <td class="m-0 pl-1 pt-0 pb-0 pr-0">{{$voter->point->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
</div>
</body>
</html>
