<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::view('/', 'home');
Route::view('/about', 'about');

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::get('/users/create', 'create');
    Route::get('/user/{user}', 'show');
    Route::get('/user/{user}/edit', 'edit');
    Route::patch('/user/{user}', 'update');
    Route::post('/users', 'store');
    Route::delete('/user/{user}', 'destroy');
});
