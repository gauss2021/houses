<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class LoginController extends Controller
{
    //

    public function create(){

        return view('login');
    }

    public function store(){

        request()->validate(
            [
                'tel'=>['required'],
                'password'=>['required']
            ]
        );

        
        if(!Auth::attempt(['tel' => request('tel'), 'password' => request('password')])){

            throw ValidationException::withMessages([
                "password"=>"Identifiants incorrects"
            ]);

        }


        request()->session()->regenerate();


        return redirect('/');




    }

    public function destroy(){
        
        Auth::logout();

        return redirect('/connexion');
        
    }
}
