<?php

use Illuminate\Support\Facades\Auth;
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



Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios')->middleware('auth');
Route::get('/usuarios/new', [App\Http\Controllers\UsuariosController::class, 'new'])->name('usuarios')->middleware('auth');
Route::post('/usuarios/add', [App\Http\Controllers\UsuariosController::class, 'add'])->name('usuarios')->middleware('auth');
Route::get('usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->name('usuarios')->middleware('auth');
Route::post('usuarios/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->name('usuarios')->middleware('auth');
Route::delete('usuarios/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->name('usuarios')->middleware('auth');



