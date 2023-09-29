<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contato;
use Faker\Generator as Faker;

$factory->define(Contato::class, function (Faker $faker) {
    return [
            'name'=>$faker->name,
            'telefone'=>$faker->tollFreePhoneNumber,
            'email'=>$faker->unique()->safeEmail,
            'motivo'=>$faker->text(100)
    ];
});
