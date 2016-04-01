<?php 


/**
* 
*/
class Birth_Model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

}

public function view()
	{
		$query = $this->db->get('birth_certificates');
		if($query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}
 ?>