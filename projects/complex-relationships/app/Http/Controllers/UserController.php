<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //menampilkan daftar semua user dengan profile dan posts terkait
    public function index()
    {
        $users = User::with('profile', 'posts')->get();
        return view('users.index', compact('users'));
    }

    //menampilkan detaiil user tertentu

    public function show(User $user)
    {
        //Menggunakan route model biniding, laravel akan otomatis
        //mencari user berdasarkan ID yang diberiikan
        return view('users.show', compact('user'));
    }
}
