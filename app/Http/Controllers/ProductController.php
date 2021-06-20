<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function wall(){
        $title = "Wall Tiles";
        return view("wall", compact('title'));
    }
}
