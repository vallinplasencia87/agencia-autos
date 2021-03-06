<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tipo::class, function (Faker $faker) {
    $tipos = [
        'Pequeño', 'Medio', 'Medio -Confortable', 'Grande', 'Lujo'
    ];
    return [
        'tipo' => $faker->unique()->randomElement($tipos),
        'descripcion' => $faker->text(150)
    ];
});
