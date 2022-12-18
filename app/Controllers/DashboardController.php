<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{

    public function index()
    {
        $session = session();
        $data = [
            'title' => 'Dashboard',
            'name' => $session->get('name'),
        ];
        return view('template/header', $data)
            . view('page/dashboard')
            . view('template/footer');
    }

    // public function upload(Type $var = null)
    // {
        
	// 	$files = new ModelFile();

	// 	$data = $this->request->getFile('photo');
        
	// 	$fileName = $data->getRandomName();
	// 	$files->insert([
	// 		'photo' => $fileName,
	// 		'detail' => $this->request->getPost('detail')
	// 	]);
	// 	$data->move('uploads/photo/', $fileName);
	// 	return redirect()->to(base_url('files'))->with('success', 'Yay');;
    // }
}

