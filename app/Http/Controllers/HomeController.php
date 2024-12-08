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

    public function blog(Request $request)
    {
        $blog_files = scandir(storage_path().'/data/', SCANDIR_SORT_DESCENDING);
        $blog_data = [];
        foreach ($blog_files as $file){
            if (strlen($file) < 9) continue;
            $blog_data[str_replace('.json', '', $file)] = json_decode(file_get_contents( storage_path()."/data/$file"), true);
        }
        $current_year = date('Y');
        $current_data = json_decode(file_get_contents( storage_path()."/data/$current_year.json"), true);
        $year = $request->input('y');
        $raw_blog_content =  json_decode(file_get_contents( storage_path()."/data/blog/blog$year.json"), true);
        $blog_content = [];
        foreach ($raw_blog_content as $blog){
            $blog_content[$blog['page']] = $blog;
        }
        $page = $request->input('page');


        return view('blog')->with("current_data", $current_data)
            ->with("blog_data", $blog_data)
            ->with("post", $blog_content[$page]);
    }
}
