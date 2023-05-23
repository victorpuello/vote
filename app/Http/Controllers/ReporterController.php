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
    public function votersLeader(Leader $leader){
        $leader->load('voters.sector','voters.point','sector');
        return view('admin.print.leaderVotantes',compact('leader'));
        /*$pdf = PDF::loadView('admin.print.leaderVotantes', compact('leader'))
            ->setPaper('legal')
            ->setOrientation('portrait')
            ->setOption('margin-bottom', 15)
            ->setOption('encoding', 'UTF-8');
        return $pdf->download('Reporte'.$leader->full_name.'.pdf');*/
    }

}
