<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrivateController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('private', [
            'posts' => $posts,
        ]);
    }

    public function addPost(Request $request){
        $formFields = $request->only(['post_title', 'post_text', 'category', 'post_desc']);
        DB::table('posts')->insert([
            'title' => $formFields['post_title'],
            'description' => $formFields['post_desc'],
            'slug' => 'post-'. date('U'),
            'text' => $formFields['post_text'],
            'category_id' => $formFields['category'],
            'created_at' => date('Y-m-d H:i'),
            'author_id' => auth()->user()->name . ' ' . auth()->user()->surname
//            'author_id' => auth()->user()->id
        ]);
        return redirect('private');
    }

    public function addPostPage(){
        $categories = Category::orderBy('title')->get();
        return view('addPost', [
            'categories' => $categories,
        ]);
    }

    public function deletePost($slug_post){
        Post::where('slug', $slug_post)->delete();
        return redirect('private');
    }

    public function editPost($slug_post, Request $request){
        $formFields = $request->only(['post_title', 'post_text']);
        Post::where('slug', $slug_post)->update(['title' => $formFields['post_title'], 'description' => $formFields['post_text']]);
        return redirect('private');
    }
}
