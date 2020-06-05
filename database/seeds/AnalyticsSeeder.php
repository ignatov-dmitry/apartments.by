<?php

use Illuminate\Database\Seeder;
use App\History;
use Faker\Generator as Faker;
class AnalyticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Faker();
        $history = factory(History::class, 3)->create([
            'apartment_id' => 1,
            'price' => $faker->numberBetween(50, 300),
            'created_at' => $faker->dateTimeBetween('-1 years'),
            'updated_at' => $faker->date()
        ]);
    }
}
