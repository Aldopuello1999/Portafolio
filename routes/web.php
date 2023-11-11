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

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portafolio', 'portafolio')->name('portafolio');
Route::view('/contact', 'contact')->name('contact');


// Route::get('/', function () {
//     $nombre = "Aldo";
//     return view('home',compact('nombre'));
// })->name('home');

