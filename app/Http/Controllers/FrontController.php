<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data["title"] = "Ceramic Gallery";
        return view("index", $data);
    }
}
