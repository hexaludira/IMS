<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Incident_Model;

class Process extends BaseController {
	public function __construct(){
		$this->incidentModel = new Incident_Model();
	}

	public function insert_incident() {
		if(!$this->validate([
			'incident_name' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} cannot empty'
				]
			],
			'incident_date' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} cannot empty'
				]
			],
			'incident_time_begin' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} cannot empty'
				]
			],
			'incident_location' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} cannot empty'
				]
			],
			'incident_detail' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Please explain the {field}'
				]
			],
			'incident_affected' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} cannot empty'
				]
			],
		])){
			//tampilkan pesan error
			session()->setFlashData('error', $this->validator->listErrors());
			return redirect()->back()->withInput();

		} else {
			//proses ke DB
			$data = $this->request->getPost();

			//if($data['incident_status'])

			$this->incidentModel->save([
				'incident_name' => $data['incident_name'],
				'incident_date' => $data['incident_date'],
				'incident_time_begin' => $data['incident_time_begin'],
				'incident_time_end' => $data['incident_time_end'],
				'incident_location' => $data['incident_location'],
				'incident_detail' => $data['incident_detail'],
				'incident_affected' => $data['incident_affected'],
				'incident_remark' => $data['incident_remark'],
				'incident_status' => $data['incident_status'],
			]);



			//session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan Login');
		}
	}

}



?>