<?php

use Illuminate\Support\Facades\Route;

// https://ultra.realhomes.io/vacation-rentals/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/maisons', function () {
    return view('houses');
});
