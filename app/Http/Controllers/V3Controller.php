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
        return view('v3.blog');
    }
}
