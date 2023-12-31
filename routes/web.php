<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('personajes', PersonajeController::class);

Route::get('/get-subrazas/{razaId}', 'PersonajeController@getSubrazas');
Route::get('personajes/{id}/restore', 'PersonajeController@restore')->name('personajes.restore');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile',[UsuarioController::class,'profile']);
    //Route::resource('personajes', PersonajeController::class);
    Route::resource('/personajes', PersonajeController::class)->names('personajes');
});
