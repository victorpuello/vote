<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSectorRequest;
use App\Http\Requests\UpdateSectorRequest;
use App\Sector;
use App\Zone;
use Styde\Html\Facades\Alert;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sectors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = Zone::pluck('name','id');
        return view('admin.sectors.ajax.create',compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSectorRequest $request)
    {
        $sector = Sector::create($request->all());
        Alert::message('Sector: '.$sector->name.', Guardado con exito','success');
        return redirect()->route('sectors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function show(Sector $sector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function edit(Sector $sector)
    {
        $zones = Zone::pluck('name','id');
        return view('admin.sectors.ajax.edit',compact('sector','zones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSectorRequest $request, Sector $sector)
    {
        $sector->update($request->all());
        Alert::message('Sector: '.$sector->name.', actualizado con exito','success');
        return redirect()->route('sectors.index');
    }


    /**
     * @param Sector $sector
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Sector $sector)
    {
        $sector->delete();
        Alert::message('Sector: '.$sector->name.', se ha eliminado con exito','warning');
        return redirect()->route('sectors.index');
    }
}
