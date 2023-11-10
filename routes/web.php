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



// Route::get('/', function() {
//     return "hola mundo";
// });


Route::get('contactanos', function() {
    return "seccion de contacto";
})->name('contactos');


Route::get('/', function() {
    echo "<a href='". route('contactos') . "'>Contactos 1<a/><br>";
    echo "<a href='". route('contactos') . "'>Contactos 2<a/><br>";
    echo "<a href='". route('contactos') . "'>Contactos 3<a/><br>";
    echo "<a href='". route('contactos') . "'>Contactos 4<a/><br>";
    echo "<a href='". route('contactos') . "'>Contactos 5<a/><br>";
});

// Route::get('saludo/{nombre?}', function($nombre = "Invitado") {
//     return "Saludos " . $nombre;
// });
