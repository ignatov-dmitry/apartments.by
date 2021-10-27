<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
