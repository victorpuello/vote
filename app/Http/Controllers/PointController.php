<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePointerRequest;
use App\Http\Requests\UpdatePointerRequest;
use App\Point;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.points.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.points.ajax.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePointerRequest $request)
    {
        $point = Point::create($request->all());
        Alert::message('Puesto de votacion: '.$point->name.', Guardado con exito','success');
        return redirect()->route('points.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function show(Point $point)
    {
        $tables = $point->tables;
        return view('admin.points.show',compact('tables','point'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function edit(Point $point)
    {
        return view('admin.points.ajax.edit',compact('point'));
    }


    /**
     * @param UpdatePointerRequest $request
     * @param Point $point
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePointerRequest $request, Point $point)
    {
        $point->update($request->all());
        Alert::message('Puesto de votación: '.$point->name.', actualizado con exito','success');
        return redirect()->route('points.index');
    }


    /**
     * @param Point $point
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Point $point)
    {
        $point->delete();
        Alert::message('Puesto de votación: '.$point->name.', se ha eliminado con exito','warning');
        return redirect()->route('points.index');
    }
}
