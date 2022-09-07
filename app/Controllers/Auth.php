<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\user_model;

class Auth extends BaseController
{
	public function __construct()
	{
		$this->userModel = new user_model();

		$this->validation = \Config\Services::validation();

		//$this->session = \Config\Services::session();

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
		

		//$this->validation->run($data, 'register');

		//$errors = $this->validation->getErrors();


		// if($errors) {
		// 	session()->setFlashdata('error', $errors);
		// 	return redirect()->to(base_url('Auth/register'));
		// }

		if (!$this->validate([
			'username' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			],
			'divisi' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			],
			'password' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			]
		])) {
			//echo view("vue3");
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		} else {

			$data = $this->request->getPost();
			
			$salt = uniqid('', true);

		//gabung password dengan salt
		$password = md5($data['password']).$salt;

		//input ke DB
		$this->userModel->save([
			'user_id' => '',
			'user_name' => $data['username'],
			'user_password' => $password,
			'user_divisi' => $data['divisi'],
			'salt' => $salt,
			'role' => 2
		]);

		//arahkan ke halaman login
		session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan Login');

		return redirect()->to(base_url('Auth/login'));
		};

		
	}

	public function valid_login(){
		$data = $this->request->getPost();

		$user = $this->userModel->where('user_name', $data['username'])->first();
		//$hash = md5($data['password']).$user['salt'];

		if($user){
			if($user['user_password'] != md5($data['password']).$user['salt']){
				session()->setFlashData('password', 'Password salah');
				return redirect()->to('Auth/login');
			}
			else {
				$sessLogin = [
					'isLogin' => true,
					'username' => $user['user_name'],
					'role' => $user['role']
				];

				$this->session->set($sessLogin);
				return redirect()->to('User');
				}
			}
			else {
				session()->setFlashdata('username', 'Username tidak ditemukan');
				//return redirect()->to(base_url('Auth/login'));
				return redirect()->to('Auth/login');
			}
		}

	public function logout(){
		$this->session->destroy();
		return redirect()->to(base_url('Auth/login'));
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