<?php namespace App\Models;

use CodeIgniter\Model;

class Incident_Model extends Model{
	protected $table = 'tbl_incident_list';
	protected $primaryKey = 'incident_id';
	protected $allowedFields = ['incident_name', 'incident_date','incident_time_begin','incident_time_end','incident_location','incident_detail','incident_affected','incident_picture_name','incident_remark','incident_status','incident_created_at'];
	// function(){
		
	// }
}
	

?>