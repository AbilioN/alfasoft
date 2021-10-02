<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name(5, 15),
        'contact' => $faker->randomNumber(9),
        'email' => $faker->email,
    ];
});