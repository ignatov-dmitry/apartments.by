<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    public function getAttributesList(){
        return view('admin.attributes.list', [
            'head_text' => 'Атрибуты',
            'attributes' => Attribute::all()
        ]);
    }

    public function addAttribute(Request $request){
        $attribute = new Attribute($request->all());
        $attribute->save();
        return redirect()->route('attributes');
    }

    public function getAttribute($id){
        return view('admin.attributes.update', [
            'head_text' => 'Редактирование атрибута',
            'attribute' => Attribute::whereId($id)->first()
        ]);
    }

    public function updateAttribute(Request $request){
        $attribute = Attribute::findOrFail($request->id);
        $attribute->update($request->all());
        return redirect()->route('attributes');
    }

    public function deleteAttribute($id){

    }
}
