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
   		'CURP' => "ADMINCONEJO",
     	'Nombre_Usuario' => "Administrador",
      	'Apellido_Paterno' => "CuniControl",
      	'Apellido_Materno' => "BitBox",
      	'email' => "cunicontrol@gmail.com",
        'activated' => 1,
        'confirmacion_code' => "CrlsS45bWDxJluFgio3HgpyvL",
      	'Genero' => $faker->randomElement(['F', 'M']),
    	'Fecha_Nacimiento' => $faker->dateTime(),
   		'Telefono' => $faker->tollFreePhoneNumber,
     	'Celular' => $faker->tollFreePhoneNumber,
     	'password' => bcrypt("contraseña"),
    ];
});
