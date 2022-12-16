<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class SignupController extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [
            'title' => 'Sign Up',
        ];
        return view('template/header', $data)
            . view('page/signup')
            . view('template/footer');
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]',
        ];
          
        if($this->validate($rules)){
            $users = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'level'    => '1',
            ];
            $users->save($data);
            return redirect()->to('/signin');
        }else{
            $data['validation'] = $this->validator;
            return view('signup', $data);
        }
          
    }
}
