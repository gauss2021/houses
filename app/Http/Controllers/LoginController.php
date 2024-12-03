<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Container\Attributes\CurrentUser;

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


        $currentUser= Auth::user();

        if($currentUser->role==='admin'){

            return redirect('/admin/dashboard');

        }elseif($currentUser->role==='owner'){
            return redirect('/proprietaire/dashboard');
        }else{
            return redirect('/');
        }


       




    }

    public function destroy(){
        
        Auth::logout();

        return redirect('/connexion');
        
    }
}
