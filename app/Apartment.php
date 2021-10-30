<?php

namespace App;

use App\Classes\Filter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
 * @property int $region_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Apartment whereRegionId($value)
 */
class Apartment extends Model
{
    public static $imgPath = '';
    protected $guarded = [
        '_token',
        'attribute_id'
    ];


    public function user() {
        return $this->belongsTo('App\User');
    }

    public function type() {
        return $this->belongsTo('App\ApartmentType');
    }

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function city() {
        return $this->belongsTo('App\City');
    }

    public function attributes() {
        return $this->hasMany('App\ApartmentAttribute');
    }

    public function histories() {
        return $this->hasMany(History::class);
    }

    public function imageSave(Request $request) {
        $fileSystem = new Filesystem();
        if($request->file('image')){
            $file = $request->file('image');
            $img = Image::make($file);
            $img->resize(750,451, function($image) {
                $image->aspectRatio();
                $image->upsize();
            });
            $path = 'uploads/apartments/' . Auth::user()->id;
            $fileSystem->makeDirectory($path, 0755, true, true);
            $imgName = uniqid() . '.' . $file->extension();
            $img->save($path .'/' .$imgName);
            return self::$imgPath = '/' . $path .'/' .$imgName;
        }

        return '';
    }

    public static function addFavorite($apartmentId, $userId) {
        $favorite = Favorite::select('*')
                        ->where('user_id', '=', $userId)
                        ->where('apartment_id', '=', $apartmentId)
                        ->distinct()->get()->first();

        isset($favorite->id) ?
            Favorite::whereId($favorite->id)->first()->delete() :
            Favorite::create(array('apartment_id' => $apartmentId, 'user_id' => Auth::id()));
    }

    public function isFavorite() {
        return (bool) Favorite::select('COUNT(*)')
            ->where('user_id', '=', Auth::id())
            ->where('apartment_id', '=', $this->id)->count();
    }

    public static function apartmentFilter(Filter $filter) {
        $apartments = Apartment::select(array('apartments.*','users.name as username'))->leftJoin('users', 'apartments.user_id', 'users.id');

        if ($country = $filter->country_id) {
            $apartments->where('country_id', '=', $country);
        }

        if ($region = $filter->region_id) {
            $apartments->where('region_id', '=', $region);
        }

        if ($city = $filter->city_id) {
            $apartments->where('city_id', '=', $city);
        }

        if ($price = $filter->price){
            !isset($price['min']) ? : $apartments->where('price', '>=', $price['min']);
            !isset($price['max']) ? : $apartments->where('price', '<=', $price['max']);
        }

        if ($area = $filter->area){
            $apartments->where('area', '>=', (int) $area);
        }

        if ($type = $filter->type){
            $apartments->where('type_id', '=', (int) $type);
        }


        if ($filter->attributes){
            $attributes = $filter->attributes;
            $joinCounter = 0;
            foreach ($attributes as $key => $value) {
                $apartments->leftJoin('apartment_attributes as attr' . $joinCounter, 'apartments.id', 'attr' . $joinCounter . '.apartment_id');
                $apartments->where('attr' . $joinCounter . '.attribute_id', $value);
                $joinCounter++;
            }
        }

        return $apartments->distinct()->paginate();
    }

    public function attributesSave(Request $request, $apartment_id) {
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
