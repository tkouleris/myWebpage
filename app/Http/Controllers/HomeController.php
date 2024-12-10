<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $year_path = storage_path('data/blog/year');
        $posts = json_decode(file_get_contents($year_path."/data.json"), true);
        $current_year = date('Y');
        $current_data = $posts[$current_year];
        return view('welcome')->with("current_data", $current_data);
    }

    public function blog(Request $request, $page)
    {
        $year_path = storage_path('data/blog/year');
        $posts = json_decode(file_get_contents($year_path."/data.json"), true);
        $current_year = date('Y');
        $current_data = $posts[$current_year];


        $raw_blog_content =  json_decode(file_get_contents( storage_path()."/data/blog/page/data.json"), true);
        $blog_content = $raw_blog_content[$page];


        return view('blog')->with("current_data", $current_data)
            ->with("post", $blog_content);
    }
}
