<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\ApartmentType;
use App\Attribute;
use App\City;
use App\Classes\Filter;
use App\Country;
use App\Favorite;
use App\Region;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function getApartments(Request $request)
    {
        $filter = isset($request->filter) ? $request->filter : null;
        $apartments = Apartment::apartmentFilter(new Filter($filter));

        return view('apartment.apartments', [
            'apartments'       => $apartments,
            'head_text'        => 'Каталог квартир',
            'filters'          => Attribute::all(),
            'apartments_types' => ApartmentType::all(),
            'countries'        => Country::all(),
            'regions'          => Region::all(),
            'cities'           => City::all(),
            'filter_param'     => $filter
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

    public function addFavorite(Request $request)
    {
        $favorite = Favorite::updateOrCreate([
            'apartment_id' => $request->id,
            'user_id'      => \Auth::id()
        ]);
        return redirect()->back();
    }

    public function getRegionsAjax($country_id)
    {
        $countries = Country::whereId($country_id)->first();
        return view('admin.apartment.cities',[
            'cities' => $countries->regions
        ]);
    }

    public function getCitiesAjax($region_id)
    {
        $countries = Region::whereId($region_id)->first();
        return view('admin.apartment.cities',[
            'cities' => $countries->cities
        ]);
    }

    public function getApartmentLocationAjax($apartment_id)
    {
        $apartment = Apartment::whereId($apartment_id)->first();
        return response()->json([
            'city' => $apartment->city_id
        ]);
    }
}
