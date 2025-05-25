<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\User_details;
use App\Models\Addresses;


Route::get('/', function () {
    return view('home');
});

Route::get('/users', function () {
    return view('users', ['users' => User::orderBy('name', 'asc')
    ->get()
]);
});

Route::get('/user/{id}', function ($id) {

    $user = User::with('userDetails', 'userAddress')->find($id);

    if (!$user) {
        abort(404);
    }

    return view('user', ['user' => $user]);
});


Route::get('/about', function () {
    return view('about');
});
