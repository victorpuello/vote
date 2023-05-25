<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Clases\SMS;
use App\Http\Requests\CreateLeaderRequest;
use App\Http\Requests\UpdateLeaderRequest;
use App\Leader;
use App\Sector;
use App\Voter;
use Styde\Html\Facades\Alert;
class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.leaders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors = Sector::pluck('name','id');
        $candidates =  Candidate::pluck('name','id');
        return view('admin.leaders.ajax.create',compact('sectors','candidates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLeaderRequest $request)
    {
       // dd($request->all());
        $leader = Leader::create($request->all());
        $msg = "Bienvenind@ ".$request->name." a nuestro proyecto politico SBDV 2024-2027";
        $sms = new SMS();
        $sms->sendSms($request->phone,$msg);
        Alert::message('Líder: '.$leader->full_name.', Guardado con exito','success');
        return redirect()->route('leaders.index');
    }


    /**
     * @param Leader $leader
     */
    public function show(Leader $leader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit(Leader $leader)
    {
        $sectors = Sector::pluck('name','id');
        $candidates =  Candidate::pluck('name','id');
        return view('admin.leaders.ajax.edit',compact('sectors','leader','candidates'));
    }


    /**
     * @param UpdateLeaderRequest $request
     * @param Leader $leader
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateLeaderRequest $request, Leader $leader)
    {
        $leader->update($request->all());
        Alert::message('Líder: '.$leader->full_name.', actualizado con exito','success');
        return redirect()->route('leaders.index');
    }


    /**
     * @param Leader $leader
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Leader $leader)
    {
        $count = count($leader->voters);
        $leader->delete();
        Alert::message('Líder: '.$leader->full_name.', y sus '.$count.' votantes, se han eliminado con exito','warning');
        return redirect()->route('leaders.index');
    }
}
