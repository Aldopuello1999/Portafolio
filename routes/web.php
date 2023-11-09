<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function() {
    return "hola mundo";
});


Route::get('contacto', function() {
    return "welcome my portafolio";
});


Route::get('saludo/{nombre?}', function($nombre = "Invitado") {
    return "Saludos " . $nombre;
});
