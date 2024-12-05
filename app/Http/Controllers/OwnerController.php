<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class OwnerController extends Controller
{
    //

    public function index(){
        $houses = House::where('owner_id', 1)->get();

        return view('owner.index',[
            'houses'=>$houses
        ]); 
    }

    public function add_house_get(){

        return view('owner.add_house');

    }

    public function add_house_post(){

        try {
            //code...
            request()->validate(
                [
                    "title"=> ['required'],
                    "price"=>['required'],
                    "quotient"=>['required'],
                    "description"=>['required'],
                    "rules"=>['required'],
                    'images.*' => ['required',File::types(['jpg,png,jpeg'])],
                ]
            );
        
            //    $imagePath= request()->images->store('images');
        
            $imagePaths = [];
    
            
        
        
             // Parcourir et stocker chaque chemin d'image
            foreach (request()->file('images') as $file) {
               $path=$file->store('uploads/houses','public');
               $imagePaths[] = $path;
        
            }
        
            // Joindre les chemins par un point-virgule
            $imagesString = implode(';', $imagePaths);
        
            House::create(
                [
                    'title'=> request('title'),
                    'description'=>request('description'),
                    'rules'=>request('rules'),
                    'price'=>request('price'),
                    'quotient'=>request('quotient'),
                    'images'=>$imagesString,
                    'owner_id'=>1,
                ]
            );
        
            session()->flash('success', 'Votre Maison a été ajouté avec succès!');
        
            return redirect('/proprietaire/dashboard');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            
            
            return back();
        }
    }

    public function owner_see_detail_house(House $house){
        return view('owner.show-detail',[
            'house'=>$house
        ]);
    }

    public function edit_house_get(House $house){
        return view('owner.edit-detail-house',[
            'house'=>$house
        ]);
    }

    public function edit_house_post(House $house){

        try {
            //code...
            request()->validate(
                [
                    "title"=> ['required'],
                    "price"=>['required'],
                    "quotient"=>['required'],
                    "description"=>['required'],
                    "rules"=>['required'],
                    'images.*' => ['required',File::types(['jpg,png,jpeg'])],
                ]
            );
    
    
            //Detruire toutes les images associés à cette maison avant
    
            // dd($house);
    
            $images = explode(';', $house->images);
    
             // Supprimer chaque image
            foreach ($images as $image) {
                if (Storage::exists($image)) {
                    Storage::delete($image);
                }
            }
        
            //    $imagePath= request()->images->store('images');
        
            
    
            
        // A Patir d'ici on commence la logique pour la modification
    
            $imagePaths = [];
        
             // Parcourir et stocker chaque chemin d'image
            foreach (request()->file('images') as $file) {
               $path=$file->store('uploads/houses','public');
               $imagePaths[] = $path;
        
            }
        
            // Joindre les chemins par un point-virgule
            $imagesString = implode(';', $imagePaths);
    
            $house->title= request('title');
    
            $house->description= request('description');
    
            $house->rules= request('rules');
    
            $house->price= request('price');
    
            $house->quotient= request('quotient');
    
            $house->images= $imagesString;
    
            $house->rules=  request('rules');
    
            $house->save();
        
            session()->flash('success', 'Modification reussie');
        
            return redirect('/proprietaire/dashboard');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            
            
            
        }
    }

    public function delete_house(House $house){
        $images = explode(';', $house->images);

        // Supprimer chaque image
            foreach ($images as $image) {
                if (Storage::exists($image)) {
                    Storage::delete($image);
                }
            }

        // Supprimer la maison
        $house->delete();

        session()->flash('success', 'Suppression effectué avec succes');

        return redirect('/proprietaire/dashboard');
    }

    public function profile_get(){
        
        $user= Auth::user();
        
        return view('owner.profile',['user'=>$user]);
        
    }

    public function profile_post(){
        
        dd("On modifie le profile");
    }


}
