<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responder>
 */
class ResponderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'nim' => fake()->randomNumber(9),
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'birth' => fake()->date()
        ];
    }
}
