<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact_us(){
        $data['title'] = "Contact US";
        return view("contactus", $data);
    }
}
