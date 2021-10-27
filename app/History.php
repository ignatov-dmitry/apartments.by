<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\History
 *
 * @property int $id
 * @property int $apartment_id
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History whereApartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\History whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Apartment $apartment
 */
class History extends Model
{
    public function apartment(){
        return $this->belongsTo('App\Apartment');
    }
}
