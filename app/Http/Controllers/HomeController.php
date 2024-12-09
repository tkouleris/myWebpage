<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blog_files = scandir(storage_path().'/data/', SCANDIR_SORT_DESCENDING);
        $blog_data = [];
        foreach ($blog_files as $file){
            if (strlen($file) < 9) continue;
            $blog_data[str_replace('.json', '', $file)] = json_decode(file_get_contents( storage_path()."/data/$file"), true);
        }
        $current_year = date('Y');
        $current_data = json_decode(file_get_contents( storage_path()."/data/$current_year.json"), true);
        return view('welcome')->with("current_data", $current_data)
            ->with("blog_data", $blog_data);
    }

    public function blog(Request $request, $page)
    {
        $blog_files = scandir(storage_path().'/data/', SCANDIR_SORT_DESCENDING);
        $blog_data = [];
        foreach ($blog_files as $file){
            if (strlen($file) < 9) continue;
            $blog_data[str_replace('.json', '', $file)] = json_decode(file_get_contents( storage_path()."/data/$file"), true);
        }
        $current_year = date('Y');
        $current_data = json_decode(file_get_contents( storage_path()."/data/$current_year.json"), true);
//        $year = $request->input('y');
        $raw_blog_content =  json_decode(file_get_contents( storage_path()."/data/blog/page/data.json"), true);
        $blog_content = $raw_blog_content[$page];


        return view('blog')->with("current_data", $current_data)
            ->with("blog_data", $blog_data)
            ->with("post", $blog_content);
    }
}
