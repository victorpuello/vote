<?php

namespace App\Http\Controllers;

use App\Point;
use App\Table;
use Illuminate\Http\Request;

class E14JuradoController extends Controller
{
    public function index(){
        $points = Point::pluck('name','id');
        return view('testigos.votacion.index',compact('points'));
    }
    public function create(Request $request){
        $tables = Table::where('point_id','=',$request->point_id)->pluck('number','id');
        return view('testigos.votacion.create',compact('tables'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(E14 $e14)
    {
        //
    }

    public function edit(E14 $e14)
    {
        //
    }

    public function update(Request $request, E14 $e14)
    {
        //
    }

    public function destroy(E14 $e14)
    {
        //
    }
}
