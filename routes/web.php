<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index');
});

Route::get('/contact-us', function(){
    return Inertia::render('Pages/Contact-Us/Index');
});
