<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetails;
use App\Models\Addresses;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersWithRelationsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)
        ->has(UserDetails::factory(), 'userDetails')
        ->has(Addresses::factory(), 'userAddress')
        ->create();

    }
}
