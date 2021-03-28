<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function about_ceramic_gallery(){
        $data['title'] = "About CERAMIC Gallery";
        return view("ceramicgallery", $data);
    }

    public function about_technology_and_design(){
        $data['title'] = "Technology and Design";
        return view("technology", $data);
    }
}
