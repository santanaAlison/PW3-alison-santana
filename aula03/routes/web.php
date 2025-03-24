<?php

use Illuminate\Support\Facades\Route;

Route::get('/usuarios','App\Http\Controllers\UsuariosController@index');
Route::post('/usuarios','App\Http\Controllers\UsuariosController@store');
Route::delete('/usuarios','App\Http\Controllers\UsuariosController@destroy');