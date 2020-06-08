<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str as Str;

/*
    |--------------------------------------------------------------------------
    | Model Factories
    |--------------------------------------------------------------------------
    |
    | This directory should contain each of the model factory definitions for
    | your application. Factories provide a convenient way to generate new
    | model instances for testing / seeding your application's database.
    |
*/

/** @var \Faker\Factory $factory */

$factory->define(
    App\Property::class,
    function (Faker $faker) {
        $city      = $faker->city;
        $city_slug = Str::slug($city);
        $title     = $faker->unique()->text(40);
        $slug      = Str::slug($title);
        $image     = 'house-asasasa-2020-06-03-5ed7da6410686.jpg';

        return [
            'title'              => $title,
            'slug'               => $slug,
            'price'              => $faker->randomNumber(6),
            'featured'           => $faker->boolean(10),
            'purpose'            => $faker->randomElement(['sale', 'rent']),
            'type'               => $faker->randomElement(['house', 'apartment']),
            'image'              => $image,
            'bedroom'            => $faker->randomDigit(),
            'bathroom'           => $faker->randomDigit(),
            'city'               => $city,
            'city_slug'          => $city_slug,
            'address'            => $faker->address,
            'area'               => $faker->randomDigitNotNull,
            'agent_id'           => 1,
            'description'        => $faker->randomHtml(),
            'location_latitude'  => $faker->latitude,
            'location_longitude' => $faker->longitude,
        ];
    }
);
