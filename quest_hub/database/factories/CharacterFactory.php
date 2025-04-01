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
        $classes=['Barbarian','Fighter','Ranger','Bard','Rogue','Cleric','Druid','Monk','Paladin','Sorcerer','Warlock','Wizard','Artificer'];
        $races=['Human','Dwarf','Elf','Halfling','Dragornborn','Gnome','Orc','Tiefling','Goliath','Aasimar'];

        return [
            'name' => fake()->name(),
            'class' => fake()->randomElement($classes),
            'race' => fake()->randomElement($races),
            'character_level'=>fake()->numberBetween(1,20),
        ];
    }
}
