<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * App\Apartment
 *
 * @property int $id
 * @property string $name
 * @property string|null $annotation
 * @property string|null $description
 * @property string $city
 * @property string $address
 * @property string|null $image
 * @property int $rooms
 * @property float $price
 * @property int $user_id
 * @property int $type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $options
 * @property int $city_id
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereAnnotation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereRooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\ApartmentType $type
 * @property int $country_id
 * @property int $moderated
 * @property int $lock
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereLock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereModerated($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ApartmentAttribute[] $attributes
 * @property-read int|null $attributes_count
 * @property float $area
 * @property-read \App\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereArea($value)
 */
class Apartment extends Model
{
    public static $imgPath = '';
    protected $guarded = [
        '_token',
        'attribute_id'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function type(){
        return $this->belongsTo('App\ApartmentType');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function city(){
        return $this->belongsTo('App\City');
    }

    public function attributes(){
        return $this->hasMany('App\ApartmentAttribute');
    }

    public function imageSave(Request $request){
        $fileSystem = new Filesystem();
        if($request->file('image')){
            $file = $request->file('image');
            $img = Image::make($file);
            $img->resize(750,451, function($image) {
                $image->aspectRatio();
                $image->upsize();
            });
            $path = 'uploads/apartments/' . \Auth::user()->id;
            $fileSystem->makeDirectory($path, 0755, true, true);
            $imgName = uniqid() . '.' . $file->extension();
            $img->save($path .'/' .$imgName);
            return self::$imgPath = '/' . $path .'/' .$imgName;
        }
    }


    public function attributesSave(Request $request, $apartment_id){
        $attribute_ids = $request->get('attribute_id');
        foreach ($attribute_ids as $key => $value){
            $apartmentAttribute = new ApartmentAttribute();
            if ($value !== null && $value !== ""){
                $apartmentAttribute->apartment_id = $apartment_id;
                $apartmentAttribute->attribute_id = $key;
                $apartmentAttribute->value = $value;
                $apartmentAttribute->save();
            }
        }
    }
}
