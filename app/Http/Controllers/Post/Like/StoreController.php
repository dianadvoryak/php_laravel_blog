<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        if (Auth::user() == null)
            return redirect()->back();
        auth()->user()->likedPosts()->toggle($post->id);
        return redirect()->back();
    }
}
