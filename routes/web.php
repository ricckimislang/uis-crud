<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;



Route::get('/', function () {
    return view('home');
});

Route::get('/users', function () {
    $users = User::orderBy('name', 'asc')
    ->paginate(10);

    return view('users/index', [
        'users' => $users
    ]);
});

Route::get('/user/create', function () {
    dd('Welcome to create user page');
});


Route::get('/user/{id}', function ($id) {

    $user = User::with('userDetails', 'userAddress')->find($id);

    if (!$user) {
        abort(404);
    }

    return view('users/show', ['user' => $user]);
});



Route::get('/about', function () {
    return view('about');
});
