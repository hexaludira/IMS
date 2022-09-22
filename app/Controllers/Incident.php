<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Incident_Model;

class Incident extends ResourceController {
	use ResponseTrait;

	//get all data
	public function index()
	{
		$model = new Incident_Model();
		$data = $model->findAll();
		return $this->respond($data, 200);
	}

	//get single data
	public function show($id = null)
	{
		$model = new Incident_Model();
		$data = $model->getWhere(['incident_id'])
	}
}


?>