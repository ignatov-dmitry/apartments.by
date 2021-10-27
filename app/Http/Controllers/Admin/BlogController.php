<?php

namespace App\Http\Controllers\Admin;

use App\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlogCategory($id)
    {
        $blogCategory = BlogCategory::findOrFail($id);

        return view('admin.blog.category.update',[
            'head_text'    => 'Редактировать категорию',
            'blogCategory' => $blogCategory,
        ]);
    }

    public function addBlogCategoryForm() {
        return view('admin.blog.category.add');
    }

    public function getBlogCategories()
    {
        $blogCategories = BlogCategory::distinct();

        return view('admin.blog.category.list', [
            'head_text'  => 'Список квартир',
            'categories' => $blogCategories->paginate()
        ]);
    }

    public function addBlogCategory(Request $request)
    {
        $blogCategory = new BlogCategory($request->all());
        $blogCategory->image = $blogCategory->imageSave($request, 'image');
        $blogCategory->save();

        return redirect()->route('getBlogCategory', $blogCategory);
    }

    public function updateBlogCategory(Request $request)
    {
        $blogCategory = BlogCategory::whereId($request->id)->first();
        $imgPath = $blogCategory->imageSave($request, 'image');
        $imgPath == "" ? : $blogCategory->image = $imgPath;
        $blogCategory->update($request->all());

        return redirect()->route('getBlogCategory', $blogCategory);
    }

    public function removeBlogCategory(Request $request)
    {
        $blogCategory = BlogCategory::whereId($request->id)->first();
        $blogCategory->delete();

        return redirect()->route('listBlogCategories');
    }
}
