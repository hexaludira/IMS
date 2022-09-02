<?php namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model{
	protected $table = 'tbl_login';
	protected $primaryKey = 'user_id';
	protected $allowedFields = ['user_name', 'user_password','user_divisi','salt','role','user_created_at'];


	// function(){
		
	// }
}
	

?>