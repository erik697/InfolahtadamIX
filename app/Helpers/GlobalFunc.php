<?php

use Illuminate\Support\Facades\Auth;


function checkPermission($permission){
    $userPermission = Auth::user()->role->rolePermission->pluck('permission.name')->toArray();
     if(in_array($permission,$userPermission)){
           return true;
        }
        else{
            return false;
        }
}

function userWherehouse(){
    $userWherehouse = Auth::user()->wherehouses->pluck('id')->toArray();
    return $userWherehouse;
}