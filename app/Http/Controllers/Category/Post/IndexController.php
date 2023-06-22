<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke(Category $category)
    {
//        dd($category->posts()->paginate(6));
//        $posts = $category->posts()->paginate(6);
        $posts = $category->posts;
        return view('category.post.index', compact('posts'));
    }
}
