<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Mengambil semua post
        $posts = Post::with('comments')->get();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        // Menyimpan post baru
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    public function show($id)
    {
        // Menampilkan post dengan comments
        $post = Post::with('comments')->find($id);
        return response()->json($post);
    }
    public function showPosts()
{
    $posts = Post::with('comments')->get();
    return view('post', compact('posts'));
}

}