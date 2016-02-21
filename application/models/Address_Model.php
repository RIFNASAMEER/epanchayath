<?php 

/**
* 
*/
class Address_Model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}


	/**
	* add data to table
	* @param array $data
	* @return mixed ,if success last insert id,else false	
	*/

	public function add(array $data)
	{
		if ($this->db->insert('address', $data)) {
			return $this->db->insert_id();
		}
		else
			return FALSE;
	}
}
 ?>