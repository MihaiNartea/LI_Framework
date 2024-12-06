<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('category')
            ->latest('published_at')
            ->paginate(10);

        $categories = Category::all();

        return view('posts.index', compact('posts', 'categories'));
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function filterByCategory(Category $category)
{
    $posts = $category->posts()->paginate(10);

    $categories = Category::all();

    return view('posts.index', compact('posts', 'categories', 'category'));
}

}
