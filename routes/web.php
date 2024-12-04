<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\Register;
use App\Models\House;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

// https://ultra.realhomes.io/vacation-rentals/
// dating app
// https://pixner.net/peyamba/peyamba-dark/index.html
// https://preview.themeforest.net/item/qiupid-wordpress-dating-theme/full_screen_preview/43264057?_ga=2.190846190.571435626.1731914852-1656982860.1731914852&_gac=1.258067192.1731914852.CjwKCAiAxea5BhBeEiwAh4t5K6qRNBn8XPqRsDN0tFC1PggwGqjcjIj2B_Skft1g6EtKqNg44qohRxoCh4UQAvD_BwE

Route::get('/', function () {
    $houses=House::with("owner")->latest()->paginate(6);
    return view('accueil',[
        "houses"=>$houses,
    ]);
});

Route::get('/maisons', function () {

    $houses=House::with("owner")->paginate(9);


    return view('houses',[
        'houses'=>$houses
    ]);
});

Route::get('/maison/{id}', function ($id) {

    return view('house');
});

Route::get('/inscription',[Register::class,"create"]);
Route::post('/inscription',[Register::class,'store']);

Route::get('/connexion',[LoginController::class,"create"]);
Route::post('/connexion',[LoginController::class,"store"]);
Route::post('/deconnexion',[LoginController::class,"destroy"]);

Route::get('/abonnement',function(){

    return view("abonnement");

});


Route::get('/admin/dashboard',function(){

    return view("admin.index");
});

Route::get('/proprietaire/dashboard',function (){

    $houses = House::where('owner_id', 1)->get();

    return view('owner.index',[
        'houses'=>$houses
    ]);
});

Route::get('/ajouter/maison',function(){
   
    return view('owner.add_house');
});

Route::post('/ajouter/maison',function(){

    // dd(request()->all());
    

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

    

});

Route::get('/detail/{house}',function(House $house){


    return view('owner.show-detail',[
        'house'=>$house
    ]);

});

Route::get('/modifier/detail/maison/{house}',function(House $house){

    return view('owner.edit-detail-house',[
        'house'=>$house
    ]);
});

Route::post('/modifier/detail/maison/{house}',function(House $house){

    // dd(request()->all());

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
});

Route::post('/supprimer/maison/{house}',function(House $house){

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

});

Route::get('/proprietaire/profile',function(){

    $user= Auth::user();

    return view('owner.profile',['user'=>$user]);
});

Route::post('/proprietaire/profile',function(){

});

Route::get('/admin/connexion',[AdminController::class,'login']);

Route::get('/admin/tags',[AdminController::class,'tag']);

Route::post('/admin/tags',[AdminController::class,'create_tag']);
