<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Owner;
use App\Models\Tag;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function index(){

        $nbreOwner= count(Owner::all());

        $nbreTenant=count(Tenant::all());

        $recenteHouses= House::with("owner")->latest()->paginate(5);

        $availableHouses=count(House::all());




        return view("admin.index",[
            'nbreOwner'=>$nbreOwner,
            'nbreTenant'=>$nbreTenant,
            'recenteHouses'=>$recenteHouses,
            'availableHouses'=>$availableHouses
        ]);
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

    public function owners(){
        $allOwner= Owner::with(['user'])->latest()->paginate(8);
        return view('admin.owners',[
            'allOwner'=>$allOwner,
        ]);
    }

    public function tenants(){
        $allTenant= Tenant::with('user')->latest()->paginate(8);
        return view('admin.tenants',[
            'allTenant'=>$allTenant
        ]);
    }

    public function delete_owner(Owner $owner){

        $owner->delete();

        session()->flash('success', 'Suppression effectuée avec succes');

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
