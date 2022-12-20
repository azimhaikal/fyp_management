<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\project;
use App\Models\detail;

class homeCtrl extends Controller
{
    function index(){
        return view('home');
    }

    function redirectFunct(){
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1'){
            $member = project::all();
            return view('/viewproject',['www'=>$member]);
        }
        else{
            $member = project::all();
            return view('/viewprojectsv',['www'=>$member]);
        }
    }
}
