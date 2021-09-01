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
    return redirect('users');
});

Route::get('users',  [App\Http\Controllers\UsersController::class, 'index'])->name('users');
Route::get('register',  [App\Http\Controllers\UsersController::class, 'moveregister'])->name('moveregister');
Route::post('register',  [App\Http\Controllers\UsersController::class, 'register'])->name('register');
Route::get('edit/{id}' ,   [App\Http\Controllers\UsersController::class, 'moveedit'])->name('moveedit');
Route::post('edit',  [App\Http\Controllers\UsersController::class, 'edit'])->name('edit');
Route::delete('/edit/{user}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('/edit/{user}');