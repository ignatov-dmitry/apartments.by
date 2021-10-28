<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;

class BlogController extends Controller
{
    public function getBlogPostsFromCategory ($categoryId)
    {
        $blogPosts = Blog::select(array('blogs.*','users.name as username'))
            ->leftJoin('users', 'blogs.user_id', 'users.id')
            ->where('category_id', '=', $categoryId);

        return view('blog.list', array(
            'head_text' => BlogCategory::whereId($categoryId)->first()->name,
            'blogPosts' => $blogPosts->distinct()->paginate()
        ));
    }

    public function getBlogPost($blogPostId)
    {
        $blogPost = Blog::whereId($blogPostId)->first();

        return view('blog.blogPost', array(
            'head_text'      => $blogPost->name,
            'blogCategories' => BlogCategory::all(),
            'blogPost'       => $blogPost,
            'latestPosts'    => Blog::take(3)->orderBy('id', 'desc')->get()
        ));
    }
}
