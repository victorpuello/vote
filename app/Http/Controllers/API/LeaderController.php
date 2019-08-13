<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\Leaders as LeadersResource;
use App\Http\Resources\Leader as LeaderResource;
use App\Leader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LeaderController extends Controller
{

    /**
     * @return LeadersResource
     */
    public function index()
    {
        return datatables()->eloquent(Leader::with('sector'))
            ->addColumn('sector',function (Leader $leader){
                return $leader->sector->name;
            })->orderColumn('sector', '-sector_id $1')->toJson();
    }

    /**
     * @param Request $request
     * @return LeaderResource
     */
    public function store(Request $request)
    {
        $leader = new Leader([
            'cedula' => $request->cedula,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'sector_id' => $request->sector_id,
        ]);
        $leader->save();
        return new LeaderResource($leader);
    }


    /**
     * @param $id
     * @return LeaderResource
     */
    public function show($id)
    {
        $leader = Leader::findOrFail($id);
        return new LeaderResource($leader);
    }


    /**
     * @param Request $request
     * @param $id
     * @return LeaderResource
     */
    public function update(Request $request, $id)
    {
        $leader = Leader::findOrFail($id);
        $leader->update($request->all());
        return new LeaderResource($leader);
    }


    /**
     * @param $id
     * @return LeaderResource
     * @throws \Exception
     */
    public function destroy($id)
    {
        $leader = Leader::findOrFail($id);
        $leader->delete();
        return new LeaderResource($leader);
    }
}
