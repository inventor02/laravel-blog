<?php

namespace Blog\Http\Controllers\Home;

use Illuminate\Http\Request;
use Blog\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }
}
