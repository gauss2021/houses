<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function login(){

        return view('admin.login');
    }

    public function tag(){

        $tags= Tag::all();

        return view('admin.tag',[
            'tags'=>$tags
        ]);
    }

    public function create_tag(Request $request){

        $request->validate(
            [
                'name'=>['required','min:3']
            ]
        );

        Tag::create(
            [
                'name'=> $request->name
            ]
        );

        session()->flash('success', 'Tag a été ajouté avec succès!!!');

        return back();
        
    }

    public function edit_tag(){

    }

    public function delete_tag(){

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
