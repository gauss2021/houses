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

Route::get('/maison/{house}', function (House $house) {


    return view('house',['house'=>$house]);
});

Route::get('/inscription',[Register::class,"create"]);
Route::post('/inscription',[Register::class,'store']);

Route::get('/connexion',[LoginController::class,"create"])->name('login');
Route::post('/connexion',[LoginController::class,"store"]);
Route::post('/deconnexion',[LoginController::class,"destroy"]);

Route::get('/abonnement',function(){

    return view("abonnement");

});


// OWNER ROUTES

Route::get('/proprietaire/dashboard',[OwnerController::class,'index'])->middleware('auth')->can('is_owner');

Route::get('/ajouter/maison',[OwnerController::class,'add_house_get'])->middleware('auth')->can('is_owner');

Route::post('/ajouter/maison',[OwnerController::class,'add_house_post'])->middleware('auth')->can('is_owner');

Route::get('/detail/{house}',[OwnerController::class,'owner_see_detail_house'])->middleware('auth')->can('is_owner')->can('is_my_house','house');

Route::get('/modifier/detail/maison/{house}',[OwnerController::class,'edit_house_get'])->middleware('auth')->can('is_owner')->can('is_my_house','house');

Route::post('/modifier/detail/maison/{house}',[OwnerController::class,'edit_house_post'])->middleware('auth')->can('is_owner')->can('is_my_house','house');

Route::post('/supprimer/maison/{house}',[OwnerController::class,'delete_house'])->middleware('auth')->can('is_owner')->can('is_my_house','house');

Route::get('/proprietaire/profile',[OwnerController::class,'profile_get'])->middleware('auth')->can('is_owner');

Route::post('/proprietaire/profile',[OwnerController::class,'profile_post'])->middleware('auth')->can('is_owner');

// ADMIN ROUTES

Route::get('/admin/dashboard',[AdminController::class,'index'])->middleware('auth')->can('is_admin');

Route::get('/admin/tags',[AdminController::class,'tag'])->middleware('auth')->can('is_admin');

Route::get('/edit/tag/{tag}',[AdminController::class,'edit_tag_get'])->middleware('auth')->can('is_admin');

Route::post('/edit/tag/{tag}',[AdminController::class,'edit_tag_post'])->middleware('auth')->can('is_admin');

Route::post('/admin/tags',[AdminController::class,'create_tag'])->middleware('auth')->can('is_admin');

Route::post('/delete/tag/{tag}',[AdminController::class,'delete_tag'])->middleware('auth')->can('is_admin');

Route::get('/admin/proprietaires',[AdminController::class,'owners']);

Route::get('/admin/locataires',[AdminController::class,'tenants']);

Route::post('/admin/delete/owner/{owner}',[AdminController::class,'delete_owner']);

// Route::get('/admin/detail-owner/{owner}',[AdminController::class,'detail_owner']);
