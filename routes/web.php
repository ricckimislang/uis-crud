<?php

use Illuminate\Support\Facades\Route;
use App\Models\Users;


Route::get('/', function () {
    return view('home');
});

Route::get('/users', function () {
    return view('users', ['users' => Users::all()]);
});

Route::get('/user/{id}', function ($id) {

    $user = Users::find($id);

    if (!$user) {
        abort(404);
    }

    return view('user', ['user' => $user]);
});


Route::get('/about', function () {
    return view('about');
});
