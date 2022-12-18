<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Members';

        $model = model(UserModel::class);

        $data['users'] = $model->getUser();
        
        return view('template/header', $data)
            . view('page/users')
            . view('template/footer');
    }

    public function view($id = null)
    {
        if(! $id) return 0;
        $data['title'] = 'User';

        $model = model(UserModel::class);

        $data['users'] = $model->getUser();
        
        return view('template/header', $data)
            . view('page/users')
            . view('template/footer');
    }
}
