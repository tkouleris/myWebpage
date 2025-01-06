<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function index()
    {
        return Redirect::to('/', 301);
    }

    public function portfolio()
    {
        return Redirect::to('/#portfolio', 301);
    }

    public function cv()
    {
        return Redirect::to('/cv/T.Kouleris.pdf', 301);
    }
}
