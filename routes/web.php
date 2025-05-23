<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
Route::get('/', function () {
    return view('home');
});

Route::get('/users', function () {
    return view(
        'users',
        [
            'users' => [
                [
                    'id' => 1,
                    'name' => 'John Doe',
                    'email' => 'john@example.com'
                ],
                [
                    'id' => 2,
                    'name' => 'Jane Doe',
                    'email' => 'jane@example.com'
                ],
                [
                    'id' => 3,
                    'name' => 'Jim Doe',
                    'email' => 'jim@example.com'
                ]
            ]
        ]
    );
});

Route::get('/user/{id}', function ($id) {

    $users = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ],
        [
            'id' => 2,
            'name' => 'Jane Doe',
            'email' => 'jane@example.com'
        ],
        [
            'id' => 3,
            'name' => 'Jim Doe',
            'email' => 'jim@example.com'
        ]
    ];

    $user = Arr::first($users, fn($user) => $user['id'] == $id);

    return view('user', ['user' => $user]);
});


Route::get('/about', function () {
    return view('about');
});
