<?php
use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'email'=> $faker->text,
        'rollno'=> $faker->randomDigit,
        'key'=> $faker->text,
        'is_voted'=> $faker->boolean,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
    ];
});