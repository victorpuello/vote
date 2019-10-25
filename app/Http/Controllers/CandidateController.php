<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Clases\LeaderOperations;
use App\Http\Requests\CreateCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::all();
        return view('admin.candidates.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.candidates.ajax.create');
    }

    /**
     * @param CreateCandidateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateCandidateRequest $request)
    {
        $candidate = Candidate::create($request->all());
        Alert::message('Candidato: '.$candidate->name.', Guardado con exito','success');
        return redirect()->route('candidates.index');
    }

    /**
     * @param Candidate $candidate
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        return view('admin.candidates.ajax.edit',compact('candidate'));
    }


    /**
     * @param UpdateCandidateRequest $request
     * @param Candidate $candidate
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCandidateRequest $request, Candidate $candidate)
    {
        $candidate->update($request->all());
        Alert::message('Candidato: '.$candidate->name.', actualizado con exito','success');
        return redirect()->route('candidates.index');
    }

    /**
     * @param Candidate $candidate
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();
        Alert::message('Candidato: '.$candidate->name.', se ha eliminado con exito','warning');
        return redirect()->route('candidates.index');
    }
}
