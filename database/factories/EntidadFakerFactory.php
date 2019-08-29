<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\entidadFaker;
use Faker\Generator as Faker;

$factory->define(entidadFaker::class, function (Faker $faker) {
    return [
        "nombre"=>$faker->firstName(),
        "apellido"=>$faker->lastName(),
        "email_personal"=>$faker->freeEmail(),
        "email_establecimiento"=>$faker->companyEmail(),
        "password"=>$faker->password(),
        "fecha_nacimiento"=>$faker->date($format = 'Y-m-d', $max = 'now'),
        "telefono"=>$faker->phoneNumber(),
        "facebook"=>$faker->userName(),
        "instagram"=>$faker->userName(),
        "pregunta"=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        "respuesta"=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        "categoria"=>$faker->jobTitle(),
        "faq_pregunta"=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        "faq_respuesta"=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        "avatar"=>$faker->imageUrl($width=640, $height=480),
        "puntaje"=>$faker->randomDigitNotNull(),
        "nombre_establecimiento"=>$faker->company(),
        "direccion"=>$faker->address(),
        "nombre_premio"=>$faker->name(),
        "tipo_premio"=>$faker->word(),
        "descuento"=>$faker->randomDigitNotNull(),
        "correcto"=>$faker->boolean(),
    ];
});
