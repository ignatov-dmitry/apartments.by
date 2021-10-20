<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\ApartmentAttribute;
use App\ApartmentType;
use App\Attribute;
use App\Favorite;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function getApartments(Request $request)
    {
        $apartments = Apartment::all();
        return view('apartment.apartments',[
            'apartments'       => $apartments,
            'head_text'        => 'Каталог квартир',
            'filters'          => Attribute::all(),
            'apartments_types' => ApartmentType::all()
        ]);
    }

    public function getApartment($id)
    {
        $apartment = Apartment::find($id);

        $dynamic_attributes = array();
        $static_attributes = array();


        foreach ($apartment->attributes as $attribute){
            if (!$attribute->attribute->is_dynamic){
                $static_attributes[] = $attribute;
            }
            else{
                $dynamic_attributes[] = $attribute;
            }
        }
        return view('apartment.apartment', [
            'apartment'          => $apartment,
            'head_text'          => $apartment->name,
            'dynamic_attributes' => $dynamic_attributes,
            'static_attributes'  => $static_attributes
        ]);
    }


    public function filter(Request $request){

        if ($filter = $request->filter){
            $apartments = Apartment::select('apartments.*');

            if (isset($filter['price']) && $price = $filter['price']){
                !isset($price['min']) ? : $apartments->where('price', '>=', $price['min']);
                !isset($price['max']) ? : $apartments->where('price', '<=', $price['max']);
            }

            if ($area = $filter['area']){
                $apartments->where('area', '>=', (int) $area);
            }

            if ($type = $filter['type']){
                $apartments->where('type_id', '=', (int) $type);
            }


            if (isset($filter['static'])){
                $statics = $filter['static'];
                $joinCounter = 0;
                foreach ($statics as $key => $value) {
                    $apartments->leftJoin('apartment_attributes as attr' . $joinCounter, 'apartments.id', 'attr' . $joinCounter . '.apartment_id');
                    $apartments->where('attr' . $joinCounter . '.attribute_id', $value);
                    $joinCounter++;
                }

            }

            return view('apartment.filter',[
                'apartments'       => $apartments->distinct()->get(),
                'head_text'        => 'Каталог квартир',
                'filters'          => Attribute::all(),
                'apartments_types' => ApartmentType::all(),
                'filter_param'     => $filter
            ]);
        }
    }

    public function addFavorite(Request $request)
    {
        $favorite = Favorite::updateOrCreate([
            'apartment_id' => $request->id,
            'user_id'      => \Auth::id()
        ]);
        return redirect()->back();
    }

}
