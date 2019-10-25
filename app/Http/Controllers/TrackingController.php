<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Clases\LeaderOperations;
use App\Clases\SMS;
use App\E14;
use App\Leader;
use App\Votation;
use App\Voter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class TrackingController extends Controller
{
    public function index(){
        $nVotes = Voter::where('sufrago','=','1')->count();
        $nE14 = E14::count();
        $candidate = Candidate::first();
        $votations = Votation::where('candidate_id','=',$candidate->id)->get();
        $count =0;
        $operationLeader = New LeaderOperations();
        $bestLeaders = $operationLeader->bestLeaders();
        $badLeaders = $operationLeader->badLeaders();
        $faltantes = Voter::count() - $nVotes;
        foreach ($votations as $votation){
            $count += $votation->votes;
        }
        return view('admin.tracking.index',compact('nVotes','nE14','count','faltantes','bestLeaders','badLeaders'));
    }

    public function leaders(Request $request){
        $leadersOperations = New LeaderOperations();
        $leaders = $leadersOperations->allLeaders()->get();
        return view('admin.tracking.leaders',compact('leaders'));
    }

    public function sendNotification(Leader $leader){
        $leadersOperations = New LeaderOperations();
        $l = $leadersOperations->singleLeader($leader);
        $msg = "Sr.".' '.$leader->full_name.', nuestro sistema de informacion indica que tiene pendiente '.$l->pending_sufragio_count.' votantes por sufragar.  Ingrid Pestana - Concejo de Cerete - Partido alianza Verde 06.';
        $sms = new SMS($leader->phone,$msg,'NotificacionLeader');
        $sms->sendSms();
        Alert::message('Mensaje enviado con exito','success');
        return redirect()->back();
    }

    public function sendAllNotification(){

        $leadersOperations = New LeaderOperations();
        $leaders = $leadersOperations->allLeaders()->get();
        $count = 0;
        foreach ($leaders as $leader){
            if ($leader->pending_sufragio_count > 0){
                $msg = "Sr.".' '.$leader->full_name.', nuestro sistema de informacion indica que tiene pendiente '.$leader->pending_sufragio_count.' votantes por sufragar.  Ingrid Pestana - Concejo de Cerete - Partido alianza Verde 06.';
                $sms = new SMS($leader->phone,$msg,'NotificacionLeader');
                $sms->sendSms();
                $count += 1;
            }
        }
        Alert::message($count.' Mensajes enviado con exito','success');
        return redirect()->back();
    }
    public function reset(){
        $voters = Voter::all();
        $votations = Votation::all();
        $e14s = E14::all();
        foreach ($voters as $voter){
            $voter->update(['sufrago'=> 0]);
        }
        foreach ($votations as $votation){
            $votation->delete();
        }
        foreach ($e14s as $e14){
            $e14->delete();
        }
        Alert::message('Contadores reiniciados con exito','success');
        return redirect()->route('tracking.index');
    }
}
