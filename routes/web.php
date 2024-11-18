<?php

use Illuminate\Support\Facades\Route;

// https://ultra.realhomes.io/vacation-rentals/
// dating app
// https://pixner.net/peyamba/peyamba-dark/index.html
// https://preview.themeforest.net/item/qiupid-wordpress-dating-theme/full_screen_preview/43264057?_ga=2.190846190.571435626.1731914852-1656982860.1731914852&_gac=1.258067192.1731914852.CjwKCAiAxea5BhBeEiwAh4t5K6qRNBn8XPqRsDN0tFC1PggwGqjcjIj2B_Skft1g6EtKqNg44qohRxoCh4UQAvD_BwE

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
