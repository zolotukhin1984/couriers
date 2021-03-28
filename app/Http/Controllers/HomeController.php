<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home Page | 1-st Courier Company';
        return view('home', compact('title'));
    }
}
