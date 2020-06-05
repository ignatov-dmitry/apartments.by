<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Attribute
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute whereName($value)
 * @mixin \Eloquent
 * @property int $is_dynamic
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attribute whereIsDynamic($value)
 */
class Attribute extends Model
{
    protected $guarded = [
        '_token'
    ];
    public $timestamps = false;
}
