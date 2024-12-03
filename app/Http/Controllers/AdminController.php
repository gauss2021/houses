<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function login(){

        return view('admin.login');
    }

    // public function store(Request $request){
        
    //     dd($request->all());

    //     $request->validate([
    //         'tel'=>['required'],
    //         'password'=>['required']
    //     ]);

    //     if(!Auth::attempt(['tel' => request('tel'), 'password' => request('password')])){

    //         throw ValidationException::withMessages([
    //             "password"=>"Identifiants incorrects"
    //         ]);

    //     }


    //     request()->session()->regenerate();


    //     return redirect('/');


        
    // }
}
