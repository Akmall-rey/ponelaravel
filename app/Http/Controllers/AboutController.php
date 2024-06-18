<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    Public function profile(){
        return view('about', [
            "title" => "About",
            "active"=>"about",
            "name" => "Patrick Star",
            "email" => "patrick@gmail.com",
            "image" => "patrick.jpg"
        ]);
    }
}
