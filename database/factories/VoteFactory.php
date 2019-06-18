<?php
use Faker\Generator as Faker;

$factory->define(App\Vote::class, function (Faker $faker) {
    $stuid = DB::table('students')->pluck('stuid');
    $selid = DB::table('selections')->pluck('selid');
    return [
        'stuid'=>$faker->randomElement($stuid),
        'v1'=>$faker->randomElement($selid),
        'v2'=>$faker->randomElement($selid),
        'v3'=>$faker->randomElement($selid),
        'v4'=>$faker->randomElement($selid),
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
    ];
});