<?php

namespace App\Http\Controllers;

use App\E14;
use App\Http\Requests\CreateE14Request;
use App\Http\Requests\FilterPointRequest;
use App\Http\Requests\UpdateE14Request;
use App\Point;
use App\Table;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class E14Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $e14 = E14::all();
        $points = Point::pluck('name','id');
        return view('admin.formato.index',compact('e14','points'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FilterPointRequest $request)
    {
        $tables = Table::where('point_id','=',$request->point_id)->pluck('number','id');
        return view('admin.formato.create',compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateE14Request $request)
    {
        E14::create($request->all());
        Alert::message('E14 creado con exito','success');
        return redirect()->route('e14.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\E14  $e14
     * @return \Illuminate\Http\Response
     */
    public function show(E14 $e14)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\E14  $e14
     * @return \Illuminate\Http\Response
     */
    public function edit(E14 $e14)
    {
        $tables = Table::where('point_id','=',$e14->table->point->id)->pluck('number','id');
        return view('admin.formato.ajax.edit',compact('tables','e14'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\E14  $e14
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateE14Request $request, E14 $e14)
    {
        $e14->update($request->all());
        Alert::message('E14 actualizado con exito','success');
        return redirect()->route('e14.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\E14  $e14
     * @return \Illuminate\Http\Response
     */
    public function destroy(E14 $e14)
    {
        $e14->delete();
        Alert::message('E14 Eliminado con exito','warning');
        return redirect()->route('e14.index');
    }
    public function getFiltro(){
        $points = Point::pluck('name','id');
        return view('admin.formato.ajax.filter',compact('points'));
    }
}
