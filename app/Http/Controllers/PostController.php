<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Menampilkan data dari database
    public function index()
    {
        $post = Post::all();
  
        return view('post.index', compact('post'));
    }
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
  
        return view('post.show', compact('post'));
    }
}
