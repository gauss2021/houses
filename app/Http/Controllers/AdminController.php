<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function index(){
        return view("admin.index");
    }

    public function tag(){

        $tags= Tag::all()->reverse();

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

    public function edit_tag_get(Tag $tag){

        return view('admin.edit_tag',[
            'tag'=>$tag
        ]);

    }

    public function delete_tag(Tag $tag){

        $tag->delete();

        session()->flash('success', 'Tag a été supprimé avec succes');

        return back();

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
