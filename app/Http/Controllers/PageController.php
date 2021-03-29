<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show()
    {
        $title = 'About';
        return view('pages.about', compact('title'));
    }
}
