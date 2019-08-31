<?php

namespace App\Http\Controllers;


use App\Leader;
use App\Sector;
use App\User;
use App\Voter;
use Illuminate\Http\Request;

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
        switch (currentPerfil()){
            case 'auxiliar':
                    return view('home');
            case 'admin':
                    $nUsers = User::count();
                    $nVoters = Voter::count();
                    $nLeaders = Leader::count();
                    $nSectors = Sector::count();
                    return view('home',compact('nLeaders','nSectors','nUsers','nVoters'));
                break;
            default:break;
        }
    }
}
