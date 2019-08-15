<?php

namespace App\Http\Controllers;

use App\Exports\VotersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReporterController extends Controller
{
    public function index(){
        return view('admin.print.index');
    }

    public function voters(){
        return Excel::download(new VotersExport,'Lista_de_votantes.xlsx');
    }

}
