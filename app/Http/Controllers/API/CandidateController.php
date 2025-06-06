<?php

namespace App\Http\Controllers\API;

use App\Candidate;
use App\Clases\LeaderOperations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $length = $request->input('length');
//        $column = $request->input('column'); //Index
//        $orderBy = $request->input('dir', 'asc');
//        $searchValue = $request->input('search');
//
//        $query = Candidate::dataTableQuery($column, $orderBy, $searchValue);
//        $data = $query->paginate($length);
//
//        return new DataTableCollectionResource($data);
        return datatables()->eloquent(Candidate::query())->toJson();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
