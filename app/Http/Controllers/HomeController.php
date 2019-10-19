<?php

namespace App\Http\Controllers;


use App\Clases\SMS;
use App\Leader;
use App\Sector;
use App\User;
use App\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nUsers = User::count();
        $nVoters = Voter::count();
        $nLeaders = Leader::count();
        $nSectors = Sector::count();
        $leaders = Leader::withCount('voters')->orderByDesc('voters_count')->take(10)->get();
        $leaders->load('sector');
        $saldo = (new SMS('3215496008','hola','wellcome'))->saldo();
        //dd($saldo);
        $sectors = Sector::withCount('voters')->orderByDesc('voters_count')->take(10)->get();
        switch (currentPerfil()){
            case 'auxiliar':
                return view('home',compact('nLeaders','nSectors','nUsers','nVoters','leaders','sectors','saldo'));
            case 'admin':
                return view('home',compact('nLeaders','nSectors','nUsers','nVoters','leaders','sectors','saldo'));
                break;
            default:break;
        }
    }

    private function getporcentaje($voters_count,$nvoters)
    {
        return round(($voters_count*100)/$nvoters);
    }

    private function getcolor(int $key)
    {
        $colors = Config::get('colors');
        return $colors[$key];
    }
}
