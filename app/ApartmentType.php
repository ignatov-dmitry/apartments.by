<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ApartmentType
 *
 * @property int $id
 * @property string $type_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType whereTypeText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Apartment[] $apartments
 * @property-read int|null $apartments_count
 */
class ApartmentType extends Model
{
    public function apartments(){
        return $this->hasMany('App\Apartment');
    }
}
