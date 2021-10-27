<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Region
 *
 * @property int $id
 * @property int $country_id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\City[] $cities
 * @property-read int|null $cities_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Region whereName($value)
 * @mixin \Eloquent
 */
class Region extends Model
{
    public function cities(){
        return $this->hasMany('App\City');
    }
}
