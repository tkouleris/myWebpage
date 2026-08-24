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

        return view('v3.blog')->with("current_data", $current_data);
    }

    public function post($page)
    {
        $raw_blog_content =  json_decode(file_get_contents( storage_path()."/data/blog/page/data.json"), true);
        $blog_content = $raw_blog_content[$page]??null;

        if(is_null($blog_content)){
            abort(404);
        }
        $blog_content['content'] = str_replace("<br/>", "", $blog_content['content']);

        return view('v3.post')->with("post", $blog_content);
    }

    public function tag($tag)
    {
        $tag_path = storage_path('data/blog/tags');
        $posts = json_decode(file_get_contents($tag_path."/data.json"), true);

        return view('v3.tags')->with("current_data", $posts[$tag])->with('tag', $tag);
    }

    public function year($year)
    {
        $year_path = storage_path('data/blog/year');
        $posts = json_decode(file_get_contents($year_path."/data.json"), true);
        if(!isset($posts[$year])){
            abort(404);
        }
        return view('v3.years')->with("current_data", $posts[$year])->with('year', $year);
    }

    public function archive()
    {
        $tag_path = storage_path('data/blog/tags');
        $posts = json_decode(file_get_contents($tag_path."/data.json"), true);
        $tags = array_keys($posts);

        $year_path = storage_path('data/blog/year');
        $posts = json_decode(file_get_contents($year_path."/data.json"), true);
        $years = array_keys($posts);
        return view('v3.archive')->with("tags", $tags)->with('years', $years);
    }
}
