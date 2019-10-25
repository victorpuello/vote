<?php

function currentUser(){
    return auth()->user();
}
function currentPerfil(){
    return auth()->user()->type;
}

function difVoters($nvoter,$nvoterR){
    return  intval($nvoter) - $nvoterR;
}

function porcentajeCumplimineto($nvoter,$nvoterR){
    return $nvoter === 0 ? '0%' :round((intval($nvoterR)*100)/$nvoter, 1).''.'%';
}
