<?php

function currentUser(){
    return auth()->user();
}
function currentPerfil(){
    return auth()->user()->type;
}
