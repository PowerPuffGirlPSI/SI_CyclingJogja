<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Pendaftar;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'id_user' => $faker->numberBetween($min = 1, 100),
        'id_event' => $faker->numberBetween($min = 4, 9),
        'token' => $faker->str_random(10),
        'jumlah_barang_pesan' => $faker->numberBetween($min = 1, 1),
    ];
});
