<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * App\Page
 *
 * @property int $id
 * @property string $name
 * @property string|null $content
 * @property string $slug
 * @property int $show_menu
 * @property int $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereShowMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereSlug($value)
 * @mixin \Eloquent
 */
class Page extends Model
{
    use Sluggable;

    protected $guarded = [
        '_token',
        'files',
        'image'
    ];

    public static $imgPath = '';

    public $timestamps = false;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function imageSave(Request $request, $field = null) {
        $fileSystem = new Filesystem();
        if(!is_null($field) && $request->file($field)){
            $file = $request->file($field);
            $img = Image::make($file);
            $img->resize(750,451, function($image) {
                $image->aspectRatio();
                $image->upsize();
            });
            $path = 'uploads/pages/' . \Auth::user()->id;
            $fileSystem->makeDirectory($path, 0755, true, true);
            $imgName = uniqid() . '.' . $file->extension();
            $img->save($path .'/' .$imgName);
            return self::$imgPath = '/' . $path .'/' .$imgName;
        }

        return '';
    }
}
