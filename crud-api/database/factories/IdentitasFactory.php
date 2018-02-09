<?php

use Faker\Generator as Faker;

$factory->define(\App\Identitas::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence,
      'address' => $faker->text,
      'phone' => $faker->numberBetween(0,1000),
    ];
});
