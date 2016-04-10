<?php 


/**
 * 
 */
 class Permit_Model extends CI_Model
 {
 	
 	public function __construct()
 	{  
 	 parent::__construct();
 	 $this->load->database();
 	}
 	public function add_permit($data)
 	{
 		if ($this->db->insert('permit',$data)===true)
 		{
 			return $this->db->insert_id();
 		}
 		else
 			return FALSE;
 	}
 	public function view_all()
 	{
 		$query=$this->db->get('permit');
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
 		return $this->db->delete('permit');
 	}
 }
?>

 