<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateVoterRequest;
use App\Http\Requests\UpdateVoterRequest;
use App\Leader;
use App\Point;
use App\Sector;
use App\Voter;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class VoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.voters.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leaders = Leader::pluck('name','id');
        $points = Point::pluck('name', 'id');
        $sectors = Sector::pluck('name','id');
        return view('admin.voters.ajax.create', compact('leaders','points','sectors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVoterRequest $request)
    {
        $voter = Voter::create($request->all());
        Alert::message('Votante: '.$voter->full_name.', Guardado con exito','success');
        return redirect()->route('voters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function show(Voter $voter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function edit(Voter $voter)
    {
        $leaders = Leader::pluck('name','id');
        $points = Point::pluck('name', 'id');
        $sectors = Sector::pluck('name','id');
        return view('admin.voters.ajax.edit', compact('leaders','points','sectors','voter'));
    }


    /**
     * @param UpdateVoterRequest $request
     * @param Voter $voter
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateVoterRequest $request, Voter $voter)
    {
        $voter->update($request->all());
        Alert::message('Votante: '.$voter->full_name.', actualizado con exito','success');
        return redirect()->route('voters.index');
    }

    /**
     * @param Voter $voter
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Voter $voter)
    {
        $voter->delete();
        Alert::message('Votante: '.$voter->full_name.', se ha eliminado con exito','warning');
        return redirect()->route('voters.index');
    }
}
