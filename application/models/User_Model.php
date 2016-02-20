<?php 

/**
* 
*/
class User_Model extends CI_Model
{
	

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function get_where($where)
	{
		$this->db->where($where);
		$this->db->get('users');
		// var_dump($this->db->get_compiled_select('users'));
	}
}

 ?>