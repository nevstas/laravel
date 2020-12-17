<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use App\User;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'status' => 'public',
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'phone' => '+1' . rand(9999999999, 1000000000),
        'address' => $faker->address,
        'avatar' => 'avatar/no-image.jpg',
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
