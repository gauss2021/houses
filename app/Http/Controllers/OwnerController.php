<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class OwnerController extends Controller
{
    //

    public function index(){


        $user= Auth::user();

        // dd($user->owner->houses);

        $houses=$user->owner->houses;

        // dd($houses);

        // $houses = Auth::user();
        // dd(Auth::user()->name);
        // dd($houses);

        return view('owner.index',[
            'houses'=>$houses
        ]); 
    }

    public function add_house_get(){

        $tags= Tag::all();

        return view('owner.add_house',[
            'tags'=>$tags
        ]);

    }

    public function add_house_post(){

        try {
            //code...

            // dd(request()->all());

            request()->validate(
                [
                    "title"=> ['required'],
                    "address"=>['required'],
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
        
          $newHouse= House::create(
                [
                    'title'=> request('title'),
                    'address'=>request('address'),
                    'description'=>request('description'),
                    'rules'=>request('rules'),
                    'price'=>request('price'),
                    'quotient'=>request('quotient'),
                    'images'=>$imagesString,
                    'owner_id'=>Auth::user()->owner->id,
                ]
            );

            // Ici je gere la logique concernant les tags

            if( is_array(request('tags')) && count(request('tags')) > 0){

                foreach (request('tags') as $tag) {
                    # code...

                    $currentTag= Tag::where(['name'=>$tag])->first();

                    if($currentTag){
                      $newHouse->tags()->attach($currentTag->id);
                    }

                    

                }

            } 
            
            
        
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
            'house'=>$house,
        ]);
    }

    public function edit_house_get(House $house){
        $allTags = Tag::all();
        return view('owner.edit-detail-house',[
            'house'=>$house,
            'allTags'=>$allTags
        ]);
    }

    public function edit_house_post(House $house){

        try {
            //code...

            // dd(request()->all());

            request()->validate(
                [
                    "title"=> ['required'],
                    "address"=>['required'],
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

            $house->address=request('address');
    
            $house->description= request('description');
    
            $house->rules= request('rules');
    
            $house->price= request('price');
    
            $house->quotient= request('quotient');
    
            $house->images= $imagesString;
    
            $house->save();

            // Logique pour gerer un potentiel changement de tags

            if( is_array(request('tags')) && count(request('tags')) > 0){

                // Supprimer tous les tags qui lui sont associés dans house_tags
                $house->tags()->detach();

                // Ajouter les nouveaux tags
                $house->tags()->sync(request('tags'));

            }


        
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
