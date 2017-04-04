<?php

//Customer
$factory->define(Bird\Customer::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'              => $faker->name,
        'city'              => $faker->city,
        'state'             => $faker->stateAbbr,
        'birthdate'         => $faker->datetime,
        'special_customer'  => $faker->boolean,
    ];
});