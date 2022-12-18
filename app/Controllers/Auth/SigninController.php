<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class SigninController extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [
            'title' => 'Sign In',
        ];
        return view('template/header', $data)
            . view('page/signin')
            . view('template/footer');
    } 
  
    public function loginAuth()
    {
        $session = session();
        $users = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $users->where('email', $email)->first();
        
        if(! $data){
            return redirect()->back()->with('error', 'The email address doesn\'t exist.');
        }

        if(! password_verify($password, $data['password'])) {
            return redirect()->back()->with('error', 'The password isn\'t correct.');
        }

        $session_data = [
            'id' => $data['id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'level' => $data['level'],
            'isLoggedIn' => TRUE,
        ];
        
        $session->set($session_data);
        return redirect()->to('/dashboard');
    }

    public function destroy()
    {
        session()->destroy();
        return redirect()->to('/signin');
    }
}
