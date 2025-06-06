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
        $current_data = $posts[$current_year]??[];
        return view('welcome')->with("current_data", $current_data);
    }

    public function blog(Request $request, $page)
    {
        $year_path = storage_path('data/blog/year');
        $posts = json_decode(file_get_contents($year_path."/data.json"), true);
        $current_year = date('Y');
        $current_data = $posts[$current_year]??[];


        $raw_blog_content =  json_decode(file_get_contents( storage_path()."/data/blog/page/data.json"), true);
        $blog_content = $raw_blog_content[$page]??null;

        if(is_null($blog_content)){
            abort(404);
        }

        return view('blog')->with("current_data", $current_data)
            ->with("post", $blog_content);
    }

    public function tag($tag)
    {
        $tag_path = storage_path('data/blog/tags');
        $posts = json_decode(file_get_contents($tag_path."/data.json"), true);

        return view('tags')->with("current_data", $posts[$tag])->with('tag', $tag);
    }

    public function year($year)
    {
        $year_path = storage_path('data/blog/year');
        $posts = json_decode(file_get_contents($year_path."/data.json"), true);
        return view('years')->with("current_data", $posts[$year])->with('year', $year);
    }

    public function archive()
    {
        $tag_path = storage_path('data/blog/tags');
        $posts = json_decode(file_get_contents($tag_path."/data.json"), true);
        $tags = array_keys($posts);

        $year_path = storage_path('data/blog/year');
        $posts = json_decode(file_get_contents($year_path."/data.json"), true);
        $years = array_keys($posts);
        return view('archive')->with("tags", $tags)->with('years', $years);
    }
}
