<?php

use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Messages\MessageController;
use App\Http\Messages\MessagesController;
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
 // el metodo magico __invoke nos permite llamar o utilizar los objetos o clase como si fueran una funcion.
// Route::get('/usuario', [UserController::class, 'index'])->name('usuario.index');  guia



Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/{id}', [ProjectController::class, 'show'])->name('projects.show');


Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class , 'store'])->name('messages.store');

// Route::resource('projects', [PortafolioController::class]);
// Route::get('/', function () {
//     $nombre = "Aldo";
//     return view('home',compact('nombre'));
// })->name('home');

