<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Incident_Model;

class Process extends BaseController {
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

			$this->Incident_Model->save([

			]);
		}
	}

}



?>