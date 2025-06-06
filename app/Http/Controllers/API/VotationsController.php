<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Votation;
use Illuminate\Http\Request;

class VotationsController extends Controller
{

    public function index()
    {
        return datatables()->eloquent(Votation::with('table.point','candidate'))->toJson();
    }

    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
