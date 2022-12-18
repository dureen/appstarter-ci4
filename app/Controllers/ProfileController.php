<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function index()
    {   
        $data['title'] = 'Profile';
        $users = new UserModel();
        $data['user'] = $users->find(session()->get('id'));
        return view('template/header', $data)
            . view('page/profile')
            . view('template/footer');
    }

    public function store($id=null)
    {  
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            // 'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email',
        ];
          
        if(! $this->validate($rules)) {
            return redirect()->back()->with('error1', $this->validator);
        }
        
        $users = new UserModel();
        $data = [
            'id'        => $id,
            'name'      => $this->request->getVar('name'),
            'email'     => $this->request->getVar('email'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ];
        $users->save($data);
        return redirect()->back();
    }

    public function update($id=null)
    {
        $rules = [
            'current_password'  => 'required',
            'new_password'      => 'required|min_length[4]|max_length[50]',
            'confirm_password'  => 'matches[new_password]',
        ];
          
        if(! $this->validate($rules)) {
            return redirect()->back()->with('error2', $this->validator);
        }

        $currentPassword = $this->request->getVar('current_password');
        $newPassword = $this->request->getVar('new_password');  
        $confirmPassword = $this->request->getVar('confirm_password');

        $users = new UserModel();

        $data = $users->find(session()->get('id'));
        if (! password_verify($currentPassword, $data['password'])) {
            return redirect()->back()->with('err2', 'The current password isn\'t correct.');
        }

        $new_data = [
            'id'     => $id,
            'password' => password_hash($this->request->getVar('new_password'), PASSWORD_DEFAULT),
        ];

        $users->save($new_data);
        session()->destroy();
        return redirect()->back();
    }

    public function destroy($id=null)
    {  
        $password = $this->request->getVar('password');

        $users = new UserModel();
        $data = $users->find(session()->get('id'));
        if (! password_verify($password, $data['password'])) {
            return redirect()->back()->with('err3', 'The password isn\'t correct.');
        }
        $users->delete(session()->get('id'));
        session()->destroy();
        return redirect()->to('/signin');
    }
}
