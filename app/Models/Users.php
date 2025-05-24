<?php

namespace App\Models;
use Illuminate\Support\Arr;
class Users
{
    public static function all(): array
    {
        return [
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
            ],
        ];
    }

    public static function find(int $id): array
    {
        $user = Arr::first(static::all(), fn($user) => $user['id'] == $id);
        if (!$user) {
            abort(404);
        }
        return $user;
    }
}