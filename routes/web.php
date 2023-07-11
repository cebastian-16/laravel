<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','index')->name('index');
Route::view('/about','about')->name('about');
Route::view('/services','services')->name('services');
Route::view('/contact','contact')->name('contact');

#('mi/ruta', vista)->name('para dar un nombre a la ruta');
// Route::get();#('mi/ruta', vista)
// Route::post();#('mi/ruta', vista)
// Route::put();#('mi/ruta', vista)
// Route::delete();#('mi/ruta', vista)
// Route::patch();#('mi/ruta', vista)