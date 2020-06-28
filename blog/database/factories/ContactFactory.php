<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'user_id'=> $faker->numberBetween(39,46),
        'phone_number'=> $faker->phoneNumber,
    ];
});
