<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Post;
class BlogController extends Controller
{
    public function index()
    {
    	$posts = Post::paginate(config('blog.posts_per_page'));
        return view('blog.index', ['posts'=>$posts]);
    }

    public function showPost($id)
    {
        $post = Post::find($id);
        return view('blog.post',['post'=>$post]);
    }
}