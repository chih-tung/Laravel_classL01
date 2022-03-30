<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }

    public function store(Request $request){
        $credentials = $this->validate($request, [
            "email" =>  "required|email|max:255",
            "password"  =>  "required",
        ]);


        if(Auth::attempt($credentials)){
            echo "正確";
        }else{
            echo "錯誤";
        }
        return;
    }
}
