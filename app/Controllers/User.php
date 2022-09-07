<?php
namespace App\Controllers;

/**
 * 
 */
class User extends BaseController
{
	
	public function __construct()
	{
		$this->session = session();
	}

	public function index()
	{
		$data = array (
			'page' => 'incident_list',
			'session_name' => $this->session->get('username')
		);

		if(!$this->session->has('isLogin')){
			return redirect()->to(base_url('Auth/login'));
		}

		echo view('layout', $data);
	}

}


?>