<?php

namespace Database\Factories;

use App\Models\Account;
use Database\Seeders\AccountSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            'name' => fake()->name(),
            'character_level'=>fake()->numberBetween(1,20),
        ];
    }
}
