<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Table;
use App\Testigo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Styde\Html\Facades\Alert;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.asignacions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $testigo = Testigo::findOrFail($request->id);
        $ts = Table::doesntHave('asignacion')->get();
        foreach ($ts as $t){
            $t->setAttribute('name', $t->full_name);
        }
        $tables = $ts->pluck('name','id');
        return view('admin.asignacions.ajax.create',compact('tables','testigo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignacion = Asignacion::create($request->all());
        Alert::message('Asignacion creada con exito','success');
        return redirect()->route('testigos.show',$asignacion->testigo->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function show(Asignacion $asignacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignacion $asignacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignacion $asignacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignacion $asignacion)
    {
        $asignacion->delete();
        Alert::message('Asignacion eliminada con exito','success');
        return redirect()->route('testigos.show',$asignacion->testigo->id);
    }
}
