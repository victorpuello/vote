<?php

namespace App\Http\Controllers;

use App\Voter;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $voter = Voter::where('cedula','=',$request->cedula)->first();
        if(! is_null($voter)){
            $data = [
                'voter'=>$voter,
                'messaje' => 'encontrado'
                ];
            return response()->json($data,200);
        }
        return response()->json(['error' => 'No encontrado']);
    }
}
