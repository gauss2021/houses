<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Owner;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;

class Register extends Controller
{
    //

    public function create(){

        return view("register");
    }   

    public function store(){

        DB::beginTransaction();

       
            //code...
        request()->validate(
            ["complete_name"=>['required', 'min:4'],
            "tel"=>['required'],
            "password"=>['required','confirmed'],
            ]
        );
    
        $all= request()->all();

        if(!array_key_exists("allow",$all) || $all["allow"]!='on'){
            
            throw ValidationException::withMessages([
                "allow"=>"Vous devez accepter les conditions d'utilisation"
            ]);

            DB::rollBack();
            
        }
    
            //Verification de l'unicité du numero de telephone
    
            $existUser= User::find(['tel'=>request('tel')]);
    
            if($existUser->count() >0){
                throw ValidationException::withMessages([
                    "tel"=>"Ce numero de téléphone existe déja"
                ]);

                DB::rollBack();
            }
    
            // dd($all);
    
            $user= User::create(
                [
                    'tel'=>request('tel'),
                    'password'=>request('password'),
                    'role'=> array_key_exists('owner',$all) && $all['owner']=='on' ? 'owner':'tenant',
                    "image"=>"https://via.placeholder.com/640x480.png/00ffbb?text=earum",
                ]
            );
    
            if(array_key_exists('owner',$all) && $all['owner']=='on'){
    
                // L'utilisateur est un propriétaire
    
                Owner::create(
                    [
                        'name'=>request('complete_name'),
                        'user_id'=>$user->id,
                    ]
                ) ;
    
    
            }else{
                // L'utilisateur est un locataire
    
                Tenant::create(
                    [
                        'name'=>request('complete_name'),
                        'user_id'=>$user->id
                    ]
                );
            }


            Auth::login($user);

            $currentUser= Auth::user();

            if($currentUser->role==='owner'){

                return redirect('/proprietaire/dashboard');

            }else{
                return redirect('/');
            }

            DB::commit();
       
       
    }
}
