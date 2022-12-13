<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('templates/navbar')
            . view('pages/' . $page)
            . view('templates/footer');
    }

    public function blog($target = "posts")
    {

        echo 'haloo';
        // if($target=='announcements');
        // return view('home');
    }

    public function show()
    {
        
        return view('home');
    }

    public function tags()
    {
        return view('home');
    }

    public function about()
    {
        return view('home');
    }
}
