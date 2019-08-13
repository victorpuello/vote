@if ($errors->any())
{{--    <input type="text" style="display: none" data-errores="{{$errors}}" id="errores">--}}
{{--    {!! Alert::message('Por favor corrige estos errores','danger')->items($errors) !!}--}}
@endif
@if (isset($data))
    <input type="text" style="display: none" data-success="{{ dd($data) }}" id="success">
@endif
