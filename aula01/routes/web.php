<?php

use Illuminate\Support\Facades\Route;

Route::get('/entrada', function () {
    return view('entrada');
});

Route::get('/luigi-lindo', function () {
    return view('luigi');
});


