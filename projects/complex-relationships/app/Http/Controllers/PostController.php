<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // menamppilkan daftar semua posts dengan user dan tags terkait 

    public function index()
    {
        $posts = Post::with('user', 'tags')->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){

        //Menggunakan route model biniding, laravel akan otomatis
        //mencari user berdasarkan ID yang diberiikan
        return view('posts.show', compact('post'));
    }

}
