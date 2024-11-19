<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Register;
use App\Models\House;
use Illuminate\Support\Facades\Route;

// https://ultra.realhomes.io/vacation-rentals/
// dating app
// https://pixner.net/peyamba/peyamba-dark/index.html
// https://preview.themeforest.net/item/qiupid-wordpress-dating-theme/full_screen_preview/43264057?_ga=2.190846190.571435626.1731914852-1656982860.1731914852&_gac=1.258067192.1731914852.CjwKCAiAxea5BhBeEiwAh4t5K6qRNBn8XPqRsDN0tFC1PggwGqjcjIj2B_Skft1g6EtKqNg44qohRxoCh4UQAvD_BwE

Route::get('/', function () {
    $houses=House::with("owner")->paginate(6);
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
Route::get('/deconnexion',[LoginController::class,"destroy"]);





Route::get('/abonnement/',function(){

    return view("abonnement");

});
