<?php

use Illuminate\Support\Facades\Route;

// https://ultra.realhomes.io/vacation-rentals/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/maisons', function () {
    return view('houses');
});

Route::get('/maison/{id}', function ($id) {

    return view('house');
});

Route::get('/inscription/',function(){

    return view("register");

});

Route::get('/connexion/',function(){

    return view("connexion");

});



Route::get('/abonnement/',function(){

    return view("abonnement");

});
