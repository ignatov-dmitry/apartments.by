<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Категории блога
    public function getBlogCategory($id)
    {
        $blogCategory = BlogCategory::findOrFail($id);

        return view('admin.blog.category.update',[
            'head_text'    => 'Редактировать категорию',
            'blogCategory' => $blogCategory,
        ]);
    }

    public function addBlogCategoryForm()
    {
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

    // Блог
    public function getBlogPost ($id)
    {
        $blogPost = Blog::findOrFail($id);
        $blogCategories = BlogCategory::all();

        return view('admin.blog.update',[
            'head_text'      => 'Редактировать категорию',
            'blogPost'       => $blogPost,
            'blogCategories' => $blogCategories
        ]);
    }

    public function getBlogPosts()
    {
        $blogPost = Blog::distinct();

        return view('admin.blog.list', [
            'head_text'  => 'Список квартир',
            'blogPosts'  => $blogPost->paginate()
        ]);
    }

    public function addBlogPostForm()
    {
        $blogCategories = BlogCategory::all();
        return view('admin.blog.add', array(
            'blogCategories' => $blogCategories
        ));
    }

    public function addBlogPost(Request $request)
    {
        $blogPost = new Blog($request->all());
        $blogPost->image = $blogPost->imageSave($request, 'image');
        $blogPost->save();

        return redirect()->route('getBlogPost', $blogPost);
    }

    public function updateBlogPost(Request $request)
    {
        $blogPost = Blog::whereId($request->id)->first();
        $imgPath = $blogPost->imageSave($request, 'image');
        $imgPath == "" ? : $blogPost->image = $imgPath;
        $blogPost->update($request->all());

        return redirect()->route('getBlogPost', $blogPost);
    }

    public function removeBlogPost(Request $request)
    {
        $blogPost = Blog::whereId($request->id)->first();
        $blogPost->delete();

        return redirect()->route('listBlogPosts');
    }
}
