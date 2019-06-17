<?php
use Faker\Generator as Faker;

$factory->define(App\Selection::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'age'=> $faker->randomDigit,
        'email'=> $faker->text,
        'address'=> $faker->text,
        'hobby'=> $faker->text,
        'description' => $faker->text,
        'fblink'=> $faker->text,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
    ];
});