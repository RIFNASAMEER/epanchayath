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
		$query = $this->db->get('users');

		if ($query->num_rows() >= 1) {
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}
}

 ?>