<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getPage($id)
    {
        return view('admin.page.add', array(
            'head_title' => 'Добавить страницу',
            'page'       => Page::findOrFail($id)
        ));
    }
}
