<?php

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

$factory->define(App\Usuario::class, function (Faker $faker) {
    return [
   		'CURP' => $faker->numerify('###############'),
      'Nombre_Usuario' => $faker->firstName,
      'Apellido_Paterno' => $faker->lastName,
      'Apellido_Materno' => $faker->lastName,
      'Correo' => $faker->email,
      'Genero' => $faker->randomElement(['F', 'M']),
    	'Fecha_Nacimiento' => $faker->dateTime(),
      'Telefono' => $faker->tollFreePhoneNumber,
      'Celular' => $faker->tollFreePhoneNumber,
      'Contrasena' => "contraseña",
    ];
});
