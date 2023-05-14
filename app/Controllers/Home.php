<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function resume()
    {
        return view('resume');
    }
    public function contact()
    {
        return view('contact');
    }
}
