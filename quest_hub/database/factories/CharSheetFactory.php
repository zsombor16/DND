<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CharSheet>
 */
class CharSheetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Strength' => fake()->numberBetween(1,20),
            'Dexterity' => fake()->numberBetween(1,20),
            'Constitution' => fake()->numberBetween(1,20),
            'Intelligence' => fake()->numberBetween(1,20),
            'Wisdom' => fake()->numberBetween(1,20),
            'Charisma' => fake()->numberBetween(1,20),
            'Proficiency' => fake()->numberBetween(1,5),
            'Walkingspeed'=>fake()->numberBetween(30,60),
            'Initiative'=>fake()->numberBetween(0,5),
            'Armorclass'=>fake()->numberBetween(14,16),
            'Maxhealth'=>36,
            'Currenthealth'=>fake()->numberBetween(1,36)
        ];
    }
}
