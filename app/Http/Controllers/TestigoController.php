<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsignacionRequest;
use App\Http\Requests\CreateTestigoRequest;
use App\Http\Requests\UpdateAsignacionRequest;
use App\Http\Requests\UpdateTestigoRequest;
use App\Http\Requests\ValidateTestigoRequest;
use App\Testigo;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class TestigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testigos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testigos.ajax.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTestigoRequest $request)
    {
        $testigo = Testigo::create($request->all());
        Alert::message('Testigo:'.$testigo->name.' fue creado con exito','success');
        return redirect()->route('testigos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testigo  $testigo
     * @return \Illuminate\Http\Response
     */
    public function show(Testigo $testigo)
    {
        $tables = collect();
        foreach ($testigo->asignacions as $asignacion){
            $tables->push($asignacion->table);
        }
        return view('admin.testigos.show',compact('testigo','tables'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testigo  $testigo
     * @return \Illuminate\Http\Response
     */
    public function edit(Testigo $testigo)
    {
        return view('admin.testigos.ajax.edit',compact('testigo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testigo  $testigo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestigoRequest $request, Testigo $testigo)
    {
        $testigo->update($request->all());
        Alert::message('Testigo:'.$testigo->name.' fue modificado con exito','success');
        return redirect()->route('testigos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testigo  $testigo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testigo $testigo)
    {
        $testigo->delete();
        Alert::message('Testigo:'.$testigo->name.' fue creado con exito','success');
        return redirect()->route('testigos.index');
    }

    public function ValidateTestigo(ValidateTestigoRequest $request){
        $testigo = Testigo::where('cedula','=',$request->cedula)->first();
        $tables = collect();
        foreach ($testigo->asignacions as $asignacion){
            $tables->push($asignacion->table);
        }
        return view('front.index',compact('testigo','tables'));
    }
}
