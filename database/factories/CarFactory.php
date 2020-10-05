<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'province_id'=>11,
        'brand'=>$faker->name,
        'image'=>'http://lorempixel.com/400/200/transport/1',
        'body'=>$faker->name,
        'fuel_type'=>$faker->name,
        'seats'=>mt_rand(2,4),
        'date'=>mt_rand(1990,2020),
        'dor'=>mt_rand(2,4),
        'mileage'=>mt_rand(10000,200000),
        'engine'=>mt_rand(10000,200000),
        'price'=>mt_rand(100000,200000),
    ];
});
