<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * App\Blog
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property string|null $image
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\BlogCategory $blogCategory
 * @property int $user_id
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereUserId($value)
 */
class Blog extends Model
{
    protected $guarded = [
        '_token',
        'files',
        'image'
    ];

    public static $imgPath = '';

    public function blogCategory() {
        return $this->belongsTo(BlogCategory::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
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
            $path = 'uploads/blogs/' . \Auth::user()->id;
            $fileSystem->makeDirectory($path, 0755, true, true);
            $imgName = uniqid() . '.' . $file->extension();
            $img->save($path .'/' .$imgName);
            return self::$imgPath = '/' . $path .'/' .$imgName;
        }

        return '';
    }
}
