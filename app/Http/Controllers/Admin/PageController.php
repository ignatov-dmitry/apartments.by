<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getPage($id)
    {
        return view('admin.page.update', array(
            'head_title' => 'Добавить страницу',
            'page'       => Page::findOrFail($id)
        ));
    }

    public function addPageForm()
    {
        return view('admin.page.add');
    }

    public function addPage(Request $request)
    {
        $page = new Page($request->all());
        $page->show_menu = $request->show_menu != 1 ? 0 : 1;
        $page->save();

        return redirect()->route('getAdminPage', $page);
    }

    public function updatePage(Request $request)
    {
        $page = Page::whereId($request->id)->first();
        $page->update($request->all());

        return redirect()->route('getAdminPage', $page);
    }

    public function getPages()
    {
        return view('admin.page.list', array(
            'head_text'  => 'Список страниц',
            'pages'      => Page::distinct()->paginate()
        ));
    }

    public function removePage(Request $request)
    {
        $page = Page::whereId($request->id)->first();
        $page->delete();

        return redirect()->route('listAdminPages');
    }
}
