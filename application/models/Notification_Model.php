<?php 

/**
 * 
 */
 class  Notification_Model extends CI_Model 
 {
 	
 	public function __construct()
 	{
 		parent::__construct();

 		$this->load->database();
 	}
 	
 	public function add($data)
 	{
		if ($this->db->insert('notifications', $data))

	 	{
	 	    return $this->db->insert_id();

	 	}
	 	else{
	 	 	return FALSE;
	 	}
   }
   public function view_all()
	{
		$query = $this->db->get('notifications');
		if($query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
	         echo 'The Notification Field is Empty';
		}
	}
	public function delete($id)
	   {	
	     $this->db->where('id',$id);
	     $value=$this->db->delete('notifications');
	     if($value==TRUE){
	     	return true;
	     }
	     else{
	     	return false;
	     }
	     
	   }
}
?>