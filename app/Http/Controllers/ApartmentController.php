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
            $attributes_ids = array();
            $apartments = Apartment::
                    select('apartments.*')
                    ->join('apartment_attributes as attr', 'apartments.id', 'attr.apartment_id');

            $attributes = Attribute::select('id')->get();

            foreach ($attributes as $attribute){
                $attributes_ids[] = $attribute->id;
            }


            if ($price = $filter['price']){
                $apartments->whereBetween('price', array($price['min'], $price['max']));
            }

            if ($area = $filter['area']){
                $apartments->where('area', '>=', $area);
            }

            if ($type = $filter['type']){
                $apartments->where('type_id', '=', $type);
            }


            if ($static = $filter['static']){
                if ($filter['exact'] = true){
                    $apartments->whereNotIn('attr.attribute_id', array_diff($attributes_ids, $static))->whereIn('attr.attribute_id', $static);
                }
                else{
                    $apartments->whereIn('attr.attribute_id', $static);
                }

            }

            //dd($apartments->get());

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
