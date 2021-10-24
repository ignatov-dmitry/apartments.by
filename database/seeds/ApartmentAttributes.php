<?php

use App\Apartment;
use App\ApartmentAttribute;
use App\Attribute;
use Illuminate\Database\Seeder;

class ApartmentAttributes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = Apartment::all();

        foreach ($apartments as $apartment){
            $attributeIds = array_column(Attribute::all()->toArray(), 'id');
            $countAttributeIds = count($attributeIds);
            $countAttributes = rand(0, $countAttributeIds);

            for ($i = 0; $i < $countAttributes; $i++) {
                $attributeArrayKey = array_rand($attributeIds, 1);
                $randAttributeId = $attributeIds[$attributeArrayKey];
                unset($attributeIds[$attributeArrayKey]);
                ApartmentAttribute::create(array(
                    'apartment_id' => $apartment->id,
                    'attribute_id' => $randAttributeId
                ));
            }
        }
    }
}
