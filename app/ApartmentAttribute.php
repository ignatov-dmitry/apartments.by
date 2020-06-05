<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ApartmentAttribute
 *
 * @property int $id
 * @property int $apartment_id
 * @property int $attribute_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute whereApartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute whereId($value)
 * @mixin \Eloquent
 * @property string|null $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ApartmentAttribute whereValue($value)
 * @property-read \App\Attribute $attribute
 */
class ApartmentAttribute extends Model
{
    protected $guarded = [
        '_token'
    ];
    public $timestamps = false;

    public function attribute() {
        return $this->belongsTo('App\Attribute');
    }
}
