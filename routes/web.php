<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index');
});

// Route::get('/', function(){
//     return Inertia::render('Testing');
// });
