<?php
namespace App\Observers;

use App\History;

class ApartmentObserve
{
    public function creating($apartment){
        //$apartment->user_id = \Auth::user()->id;
        //$apartment->image = $apartment::$imgPath;
    }

    public function created($apartment) {
        History::insert(array(
            'apartment_id' => $apartment->id,
            'price'        => $apartment->price,
            'created_at'   => $apartment->created_at,
        ));
    }

    public function deleting($apartment){
        $apartment->attributes()->delete();
    }

    public function saving($apartment){
        $apartment->attributes()->delete();
        $apartment::$imgPath !== "" ? $apartment->image = $apartment::$imgPath : false;
    }

    public function saved($apartment) {
        History::insert(array(
            'apartment_id' => $apartment->id,
            'price'        => $apartment->price,
            'created_at'   => $apartment->created_at,
        ));
    }
}
