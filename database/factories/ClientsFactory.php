<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Clients::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'rg' => $faker->rg,
        'cpf' => $faker->cpf,
        'phone' => $faker->phone,
        'cel' => $faker->cel,
        'email' => $faker->email,
        'birth' => $faker->birth,
        'gender' => $faker->gender,
        'description' => $faker->description,
        'income' => $faker->income
    ];
});
