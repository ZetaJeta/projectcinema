<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('id_ID');
        // $faker->addProvider(new \Bluemmb\Faker\PicsumPhotosProvider($faker));
        $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker));
        return [
            'name' => $faker->sentence(),
            'cover' => $faker->imageUrl(500, 500, ['cinema']),
        ];
    }
}
