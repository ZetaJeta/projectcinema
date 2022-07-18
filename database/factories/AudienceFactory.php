<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AudienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $faker = \Faker\Factory::create('id_ID');
        return [
            'name' => $faker->name,
            'phone_number' => $faker->phoneNumber
        ];
    }
}
