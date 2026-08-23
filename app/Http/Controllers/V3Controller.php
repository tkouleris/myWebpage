<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class V3Controller extends Controller
{
    public function index()
    {
        return view('v3.index');
    }

    public function about()
    {
        return view('v3.about');
    }

    public function resume()
    {
        return view('v3.resume');
    }

    public function projects()
    {
        return view('v3.projects');
    }


    public function blog()
    {
        $year_path = storage_path('data/blog/year');
        $posts = json_decode(file_get_contents($year_path."/data.json"), true);
        $current_year = date('Y');
        $current_data = $posts[$current_year]??[];
//        dd($current_data);
        return view('v3.blog')->with("current_data", $current_data);
    }
}
