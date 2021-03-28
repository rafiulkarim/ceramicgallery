<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesDisplayController extends Controller
{
    public function hatirpool_branch(){
        $data['title'] = "Hatirpool Branch";
        return view("hatirpool", $data);
    }

    public function uattra_branch(){
        $data['title'] = "Uttara Branch";
        return view("uttara", $data);
    }

    public function chattagram_branch(){
        $data['title'] = "Chattagram Branch";
        return view("chattagram", $data);
    }
}
