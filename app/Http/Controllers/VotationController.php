<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Http\Requests\CreateVotationRequest;
use App\Http\Requests\FilterPointRequest;
use App\Http\Requests\UpdateVotationRequest;
use App\Point;
use App\Table;
use App\Votation;
use Illuminate\Http\Request;
use PHPUnit\Util\Filter;
use Styde\Html\Facades\Alert;

class VotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.votations.index');
    }


    /**
     * @param FilterPointRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(FilterPointRequest $request)
    {
        $tables = Table::where('point_id','=',$request->point_id)->pluck('number','id');
        $candidates = Candidate::pluck('name','id');
        return view('admin.votations.create',compact('tables','candidates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVotationRequest $request)
    {
        Votation::create($request->all());
        Alert::message('Votación Guardada con exito','success');
        return redirect()->route('votations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Votation  $votation
     * @return \Illuminate\Http\Response
     */
    public function show(Votation $votation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Votation  $votation
     * @return \Illuminate\Http\Response
     */
    public function edit(Votation $votation)
    {
        $tables = Table::where('point_id','=',$votation->table->point->id)->pluck('number','id');
        $candidates = Candidate::pluck('name','id');
        return view('admin.votations.edit', compact('votation','tables','candidates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Votation  $votation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVotationRequest $request, Votation $votation)
    {
        $votation->update($request->all());
        Alert::message('Votación Actualizada con exito','success');
        return redirect()->route('votations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Votation  $votation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Votation $votation)
    {
        $votation->delete();
        Alert::message('Votación eliminada con exito','success');
        return redirect()->route('votations.index');
    }

    public function getFiltro(){
        $points = Point::pluck('name','id');
        return view('admin.votations.ajax.filter',compact('points'));
    }
}
