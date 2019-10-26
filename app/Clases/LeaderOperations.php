<?php


namespace App\Clases;


use App\Leader;
use Illuminate\Database\Eloquent\Builder;

class LeaderOperations
{
    protected $leaders;
    protected $bad;
    protected $best;
    /**
     * LeaderOperations constructor.
     */
    public function __construct()
    {
        $this->leaders = Leader::withCount([
            'voters',
            'voters as sufragio_count' => function(Builder $query){
                $query->where('sufrago','=',1);
            },
            'voters as pending_sufragio_count' => function(Builder $query){
                $query->where('sufrago','=',0);
            },
        ])->with('sector');
        $this->best = $this->leaders->orderByDesc('sufragio_count')->get();
    //    dd($this->leaders->orderByDesc('pending_sufragio_count')->get());
    }

    /**
     * @return Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function bestLeaders(){
        return $this->best->take(10);
    }


    /**
     * @return Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function badLeaders(){
       return Leader::withCount([
            'voters',
            'voters as sufragio_count' => function(Builder $query){
                $query->where('sufrago','=',1);
            },
            'voters as pending_sufragio_count' => function(Builder $query){
                $query->where('sufrago','=',0);
            },
        ])->with('sector')->orderByDesc('pending_sufragio_count')->get()->take(10);
    }

    public function allLeaders(){
        return $this->leaders;
    }

    public function singleLeader(Leader $leader){
        return $this->leaders->where('id','=',$leader->id)->first();
    }
}
