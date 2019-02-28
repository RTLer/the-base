<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->numberBetween(1,100),
        'user_id'=>null,
        'name'=> $faker->sentence,
        'code'=> $faker->numberBetween(100,9999),
        'price'=> $faker->numberBetween(100,99999),
        'description'=>$faker->paragraph,
        'image'=>$faker->imageUrl($width = 640, $height = 480),
    ];
});
