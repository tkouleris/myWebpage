<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blog_data = json_decode(file_get_contents( storage_path()."/data/2024.json"), true);
        return view('welcome')->with("blog_data", $blog_data);
    }
}
