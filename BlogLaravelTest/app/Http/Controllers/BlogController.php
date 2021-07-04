<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;



class BlogController extends Controller
{
    public function index(){
        $categories = Category::orderBy('title')->get();
        $posts = Post::paginate(5);
        $scores = $posts->reverse();
        return view('pages.index', [
            'posts' => $scores,
            'categories' => $categories,
        ]);
    }

    public function getPostByCategory($slug){
        $categories = Category::orderBy('title')->get();
        $current_category = Category::where('slug', $slug)->first();
        return view('pages.index', [
            'posts' => $current_category->posts()->paginate(2),
            'categories' => $categories,
        ]);
    }

    public function getPost($slug_category, $slug_post){
        $post = Post::where('slug', $slug_post)->first();
        $categories = Category::orderBy('title')->get();
        return view('pages.show_post', [
            'post' => $post,
            'categories' => $categories,
            'slug_category' => $slug_category,
        ]);
    }
}
