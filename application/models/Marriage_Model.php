<?php


/**
* 
*/
class Marriage_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function add($data)
	{
		if ($this->db->insert('marriage_certificate', $data)===true)
		{
			return $this->db->insert_id();
		}
		else
			return FALSE;
	}
	public function view_all()
	{
		$query = $this->db->get('marriage_certificate');
		if($query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}
	public function delete($id)

	{
		$this->db->where('address_id',$id);
		return	$this->db->delete('marriage_certificate');
	}
}
?>