<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * App\BlogCategory
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $description
 * @property string|null $image
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BlogCategory extends Model
{
    protected $guarded = [
        '_token',
        'files',
        'image'
    ];

    public $timestamps = false;

    public static $imgPath = '';

    public function imageSave(Request $request, $field = null) {
        $fileSystem = new Filesystem();
        if(!is_null($field) && $request->file($field)){
            $file = $request->file($field);
            $img = Image::make($file);
            $img->resize(750,451, function($image) {
                $image->aspectRatio();
                $image->upsize();
            });
            $path = 'uploads/categories/' . \Auth::user()->id;
            $fileSystem->makeDirectory($path, 0755, true, true);
            $imgName = uniqid() . '.' . $file->extension();
            $img->save($path .'/' .$imgName);
            return self::$imgPath = '/' . $path .'/' .$imgName;
        }

        return '';
    }
}
