<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Province;
use Faker\Generator as Faker;

$factory->define(Province::class, function (Faker $faker) {
    $name=$faker->city;
    $str=str_slug($name);
    return [
        'province'=>$name,
        'slug'=>$str
    ];
});
