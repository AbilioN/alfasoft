<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contract;
use Faker\Generator as Faker;

$factory->define(Contract::class, function (Faker $faker) {
    return [
        'name' => $faker->name(5, 15),
        'contract' => $faker->randomNumber(9),
        'email' => $faker->email,
    ];
});