<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends Controller
{
	public function __construct()
	{
		$this->userModel = new UserModel();

		$this->validation = \Config\Services::validation();

	}

	// public function index(){
	// 	helper(['form']);
	// 	echo view('login');
	// }

	public function login()
	{
		return view('login');
	}

	public function register()
	{
		return view('register');
	}

	public function valid_register(){
		$data = $this->request->getPost();

		$this->validation->run($data, 'register');

		$errors = $this->validation->getErrors();

		if($errors) {
			session()->setFlashdata('error', $errors);
		}
	}

	public function valid_login(){
		$data = $this->request->getPost();

		$user = $this->userModel->where('user_name', $data['username'])->first();

		if($user){
			if($user['password'] != md5($data['user_password']))
		}
	}

	// public function auth(){
	// 	$session = session();
	// 	$model = new UserModel();
	// 	$username = $this->request->getVar('username');
	// 	$password = $this->request->getVar('password');

	// 	$data = $model->where('user_name', $username)->first();
	// 	if($data){
	// 		$pass = $data['user_password'];
			
	// 	}
	// }
}


?>