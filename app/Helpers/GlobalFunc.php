<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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

function getCountVisitor(){
    $visitor = DB::table('visitor_count')->first();
    return $visitor;
}

function getNews(){
    $posts = Post::where('status', 'published')->orderBy('id','DESC')->limit(6)->get();
    return $posts;
}