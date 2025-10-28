<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasarBladeController extends Controller
{
    public function showData()
    {
        $name = 'Faiz';
        $fruits = ['Apple', 'Banana', 'Cherry'];
        $user = [
            'name' => 'Abrar Society',
            'email' => 'abrar@pnl.ac.id',
            'is_active' => true,
        ];
        $product = (object) [
            'id' => 1,
            'name' => 'Laptop',
            'price' => 12000000
        ];
        
        return view('dasar', compact('name', 'fruits', 'user', 'product'));
    }

}

