<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'contact' => fake()->phoneNumber(),
            'age' => fake()->numberBetween(18, 60),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'occupation' => fake()->jobTitle(),
        ];
    }
}
