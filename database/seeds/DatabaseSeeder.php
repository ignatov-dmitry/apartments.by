<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = ['Гродно', 'Брест', 'Гомель', 'Могилев', 'Витебск', 'Минск'];
        // $this->call(UsersTableSeeder::class);
        DB::table('apartment_types')->insert([
            'type_text' => "Продажа"
        ]);
        DB::table('apartment_types')->insert([
            'type_text' => "Аренда"
        ]);

        DB::table('countries')->insert([
            'name' => 'Беларусь'
        ]);

        foreach ($cities as $city){
            DB::table('cities')->insert([
                'name' => $city,
                'country_id' => 1
            ]);
        }

        DB::table('users')->insert([
            'name' => 'Дмитрий',
            'email' => 'ignatov.d43@gmail.com',
            'password' => bcrypt('qwerty'),
            'role' => 1,
            'status' => 1
        ]);
        DB::table('apartments')->insert([
            'name'        => 'Квартира 1',
            'annotation'  => 'вфывфыв',
            'description' => 'авыаываыв',
            'address'     => 'Мицкевича 13',
            'image'       => '/uploads/apartments/1/5ed00f518495a.jpeg',
            'rooms'       => 2,
            'price'       => 1600,
            'user_id'     => 1,
            'type_id'     => 1,
            'created_at'  => '2020-05-28 19:21:53',
            'updated_at'  => '2020-05-28 19:31:29',
            'city_id'     => 3,
            'country_id'  => 1,
            'moderated'   => 0,
            'lock'        => 0,
            'area'        => 45.2
        ]);
    }
}
