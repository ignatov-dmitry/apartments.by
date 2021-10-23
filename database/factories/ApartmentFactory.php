<?php

use App\User;
use Faker\Generator as Faker;
use App\City;
use App\Region;


$factory->define(App\Apartment::class, function (Faker $faker) {
    $cities = City::select('id')->distinct()->get()->toArray();
    $users = User::select('id')->distinct()->get()->toArray();
    $usersIds = array();
    $cityIds = array();

    foreach ($cities as $city){
        $cityIds[] = $city['id'];
    }

    foreach ($users as $user) {
        $usersIds[] = $user['id'];
    }


    $cityArrayKey = array_rand($cityIds, 1);
    $randCityId = $cityIds[$cityArrayKey];
    $regionId = City::find($randCityId)->region_id;
    $countryId = Region::find($regionId)->country_id;
    //$image = '/assets/images/' . $faker->image('public/assets/images', 750, 450, null, false);

    $image = '';

    $userArrayKey = array_rand($usersIds, 1);
    $userId = $usersIds[$userArrayKey];


    return [
        'user_id'     => $userId,
        'name'        => 'Квартира в ' . City::find($randCityId)->name,
        'description' => $faker->text,
        'address'     => $faker->address,
        'price'       => rand(70, 500),
        'city_id'     => $randCityId,
        'region_id'   => $regionId,
        'country_id'  => $countryId,
        'lock'        => 0,
        'type_id'     => rand(1, 2),
        'area'        => rand(23, 80),
        'moderated'   => 1,
        'rooms'       => rand(1, 4),
        'annotation'  => $faker->text,
        'image'       => $image,
        'created_at'  => $faker->dateTimeBetween('2017-01-01')
    ];
});
