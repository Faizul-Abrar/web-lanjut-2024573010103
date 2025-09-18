<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        $massage = "Welcome to Laravel!";
        return view('mywelcome', ['massage' => $massage]);
    }
}
