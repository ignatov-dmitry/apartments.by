<?php
namespace App\Observers;

class ApartmentObserve
{
    public function creating($apartment){
        $apartment->user_id = \Auth::user()->id;
        $apartment->image = $apartment::$imgPath;
    }

    public function deleting($apartment){
        $apartment->attributes()->delete();
    }

    public function saving($apartment){
        $apartment->attributes()->delete();
        $apartment::$imgPath !== "" ? $apartment->image = $apartment::$imgPath : false;
    }
}
