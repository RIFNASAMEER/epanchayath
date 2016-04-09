<?php 

/**
* 
*/
class Upload_Model extends CI_Model
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
		if ($this->db->insert('files', $data)) {
			return $this->db->insert_id();
		}
		else
			return FALSE;
	}
	public function view()
	{
		$query = $this->db->get('files');
		if($query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}
	
	public function get($id)
	{
		$this->db->where('id',$id);
		$query =$this->db->get('files');
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
		$this->db->query('SET FOREIGN_KEY_CHECKS=0');
		$this->db->where('id',$id);
		$values=$this->db->delete('files');
		if ($values==TRUE) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}