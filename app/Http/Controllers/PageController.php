<?php

namespace App\Http\Controllers;

use App\Page;

class PageController extends Controller
{
    public function getPage($slug)
    {
        $page = Page::whereSlug($slug)->first();

        return view('page.page', array(
            'head_text' => $page->name,
            'page'       => $page
        ));
    }
}
