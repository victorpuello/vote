<?php

namespace App\Http\Controllers;

use App\Exports\LeadersExport;
use App\Exports\VotersExport;
use App\Leader;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ReporterController extends Controller
{
    public function index(){
        return view('admin.print.index');
    }

    public function voters(){
        return Excel::download(new VotersExport,'Lista_de_votantes.xlsx');
    }

    public function leaderVoters(){
        return Excel::download(new LeadersExport,'Reporte de Lideres.xlsx');
    }

}
