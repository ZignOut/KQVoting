<?php
use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    $stuid = Student::all()->pluck('studentid')->toArray();
    return [
        'studentid'=>$faker->randomElement($stuid),
        'v1'=>$faker->randomElement($selid),
        'v2'=>$faker->randomElement($selid),
        'v3'=>$faker->randomElement($selid),
        'v4'=>$faker->randomElement($selid),
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
    ];
});