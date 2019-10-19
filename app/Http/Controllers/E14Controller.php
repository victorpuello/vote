<?php

namespace App\Http\Controllers;

use App\E14;
use App\Point;
use App\Table;
use Illuminate\Http\Request;

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
    public function create()
    {
        $tables = Table::pluck('name','id');
        
        return view('admin.formato.ajax.create',compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\E14  $e14
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, E14 $e14)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\E14  $e14
     * @return \Illuminate\Http\Response
     */
    public function destroy(E14 $e14)
    {
        //
    }
}