<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use App\ApartmentAttribute;
use App\ApartmentType;
use App\Attribute;
use App\Country;
use App\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApartmentController extends Controller
{
    public function getApartment($id){
        $apartment = Apartment::findOrFail($id);

        if (!\Gate::allows('show-apartment', $apartment)) {
            abort(403, 'У вас нет прав редактировать эту запись');
        }


        $apartmentAttributes = array();

        foreach ($apartment->attributes as $apartmentAttribute) {
            $apartmentAttributes[] = $apartmentAttribute->attribute_id;
        }


        return view('admin.apartment.update',[
            'head_text'          => 'Редактировать квартиру',
            'apartment'          => $apartment,
            'countries'          => Country::all(),
            'types'              => ApartmentType::all(),
            'attributes'         => Attribute::all(),
            'checked_attributes' => $apartmentAttributes
        ]);
    }

    public function getApartments(){
        $apartment = Apartment::distinct();
        if (\Auth::user()->isUser()){
            $apartment = $apartment->where('user_id' , \Auth::user()->id);
        }

        return view('admin.apartment.list', [
            'head_text' => 'Список квартир',
            'apartments' => $apartment->paginate()
        ]);
    }

    public function updateApartment(Request $request){
        $attribute_ids = array();
        $apartment = Apartment::whereId($request->id)->first();
        $apartment->imageSave($request);
        $apartment->update($request->all());
        $attribute_ids = $request->get('attribute_id');
        if ($attribute_ids){
            foreach ($attribute_ids as $key => $value){
                $apartmentAttribute = new ApartmentAttribute();
                if ($value !== null && $value !== ""){
                    $apartmentAttribute->apartment_id = $apartment->id;
                    $apartmentAttribute->attribute_id = $value;
                    $apartmentAttribute->save();
                }

            }
        }
        return redirect()->route('getApartment', $apartment);
    }

    public function deleteApartment(Request $request){
        $apartment = Apartment::whereId($request->id)->first();
        $apartment->delete();
        return redirect()->route('list');
    }

    public function getAddForm(){
        return view('admin.apartment.add', [
            'head_text'  => 'Добавить квартиру',
            'countries'  => Country::all(),
            'types'      => ApartmentType::all(),
            'attributes' => Attribute::all()
        ]);
    }

    public function addApartment(Request $request){
        $apartment = new Apartment($request->all());
        $apartment->imageSave($request);
        $attribute_ids = $request->get('attribute_id');
        $apartment->save();

        //Завернуть в транзакцию
        foreach ($attribute_ids as $key => $value){
            $apartmentAttribute = new ApartmentAttribute();
            if ($value !== null && $value !== ""){
                $apartmentAttribute->apartment_id = $apartment->id;
                $apartmentAttribute->attribute_id = $key;
                $apartmentAttribute->save();
            }

        }


        return redirect()->route('getApartment', $apartment);
    }

    public function getRegionsAjax($country_id){
        $countries = Country::whereId($country_id)->first();
        return view('admin.apartment.cities',[
            'cities' => $countries->regions
        ]);
    }

    public function getCitiesAjax($region_id){
        $countries = Region::whereId($region_id)->first();
        return view('admin.apartment.cities',[
            'cities' => $countries->cities
        ]);
    }

    public function getApartmentLocationAjax($apartment_id){
        $apartment = Apartment::whereId($apartment_id)->first();
        return response()->json([
            'city' => $apartment->city_id
        ]);
    }
}
