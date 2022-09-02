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
		$data['page'] = 'incident_list';
		if(!$this->session->has('isLogin')){
			return redirect()->to(base_url('Auth/login'));
		}

		echo view('layout', $data);
	}

}


?>