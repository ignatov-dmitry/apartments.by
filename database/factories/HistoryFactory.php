<?php

use Faker\Generator as Faker;


$apartments = \App\Apartment::all();

$apartments_array = array();

foreach ($apartments as $apartment){
    $apartments_array[$apartment->id] = array(
        'type_id' => $apartment->type_id,
        'area'    => $apartment->area
    );
}

function getTypeApartment($apartments_array, $id){
   return $apartments_array[$id]['type_id'];
}

function getAreaApartment($apartments_array, $id){
    return $apartments_array[$id]['area'];
}


$factory->define(App\History::class, function (Faker $faker) use ($apartments_array) {
    return [
        'apartment_id' => $id = $faker->randomElement(array_keys($apartments_array)),
        'price' => getTypeApartment($apartments_array, $id) == 1 ? $faker->randomFloat(3,2746, 3780) * getAreaApartment($apartments_array, $id) : $faker->randomFloat(3,8, 15) * getAreaApartment($apartments_array, $id),
        'created_at' => $date =  $faker->dateTimeBetween('2017-01-01', '2019-12-31'),
        'updated_at' => $date
    ];
});
