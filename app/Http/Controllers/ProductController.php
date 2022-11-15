<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
        $videogames = Videogame::all();

        return view('product', compact('videogames'));
    }
}
