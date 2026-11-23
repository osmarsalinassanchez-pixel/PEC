<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/Inicio', function () {
    return view('Inicio');
})->name('Inicio');


Route::get('/Reforestacion', function () {
    return view('Reforestacion');
})->name('Reforestacion');

Route::get('/Beneficios', function () {
    return view('Beneficios');
})->name('Beneficios');

Route::get('/Arboles', function () {
    return view('Arboles');
})->name('Arboles');    

Route::get('/Caracteristicas', function () {
    return view('Caracteristicas');
})->name('Caracteristicas');

Route::get('/Plantacion', function () {
    return view('Plantacion');
})->name('Plantacion');

Route::get('/Especies', function () {
    return view('Especies');
})->name('Especies');