<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        $session = session();
        $data = [
            'title' => 'Sign Up',
            'name' => $session->get('name'),
        ];
        return view('template/header', $data)
            . view('page/profile')
            . view('template/footer');
    }
}
