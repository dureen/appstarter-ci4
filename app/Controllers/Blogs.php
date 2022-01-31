<?php

namespace App\Controllers;

class Blogs extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        return view('blog_master');
    }
}