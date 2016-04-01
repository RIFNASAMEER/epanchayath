<?php 

/**
* 
*/
class Employee_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function add($data)
	{
		if ($this->db->insert('employees', $data))
		{
			return $this->db->insert_id();
		}
		else
			return FALSE;
	}


	public function view_all()
	{
		$query = $this->db->get('employees');
		if($query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}
	public function edit($data,$id)
	{
		var_dump($id);
		$this->db->where('id', $id);
        $query=$this->db->update('employees',$data);
        return  $query;
	}
	public function get($id)
	{
		$this->db->where('id',$id);
		$query =$this->db->get('employees');
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
		$this->db->where('id',$id);
		return	$this->db->delete('employees');
	/*f ($value==TRUE) {
		return true;
	}
	else
	{
		return false;
	}*/
	}
}
 ?>