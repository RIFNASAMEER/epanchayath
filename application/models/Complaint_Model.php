<?php 

/**
 * 
 */
 class Complaint_Model extends CI_Model
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
        $this->load->database();
 	}
 	public function add($data)
 	{
 		if($this->db->insert('complaints',$data))
 		{
 			return $this->db->insert_id();
 		}
 		else{
 			return FALSE;
 		}
 	}
 	public function view_all()
 	{
 		$query = $this->db->get('complaints');
		if($query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
	         echo 'There  is no Complaints';
		}
 	}
 	public function delete($id)
	   {	
	     $this->db->where('id',$id);
	     $value=$this->db->delete('complaints');
	     if($value==TRUE){
	     	return true;
	     }
	     else{
	     	return false;
	     }
	     
	   }
 	
 } 
 ?>
