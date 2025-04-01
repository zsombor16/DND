<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAccount>
 */
class UserAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' =>fake()->userName(),
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'userpassword'=>fake()->password(),
            'birthdate'=>fake()->dateTimeAD(),
            'city'=>fake()->city(),
            'phone'=>fake()->phoneNumber(),
            'description'=>fake()->realText(400,3),
            'time_used'=>fake()->numberBetween(0,45) 
        ];
    }
}
