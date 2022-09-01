<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
	protected $table = 'tbl_login';
	protected $allowedFields = ['user_name', 'user_password', 'user_created_at']


	function(){
		
	}
}
	

?>