<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'type'=>fake()->randomElement(['1-Truong phong', '2-Nhan vien']),
            'dob'=>fake()->date(),
            'phone'=>fake()->phoneNumber(),
            'address'=>fake()->address(),
            'image'=>fake()->imageUrl(),
        ];
    }
}
