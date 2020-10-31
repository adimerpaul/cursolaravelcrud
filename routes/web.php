<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/persona', [\App\Http\Controllers\PersonaController::class,'index'])->name('listar');
Route::get('/persona/{id}', [\App\Http\Controllers\PersonaController::class,'show'])->name('modificar');
Route::put('/persona/{id}', [\App\Http\Controllers\PersonaController::class,'update'])->name('update');
Route::post('/persona', [\App\Http\Controllers\PersonaController::class,'store'])->name('guardar');
Route::delete('/persona/{id}', [\App\Http\Controllers\PersonaController::class,'destroy'])->name('eliminar');
