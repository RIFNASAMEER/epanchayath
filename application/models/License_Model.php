<?php 


/**
 * 
 */
 class License_Model extends CI_Model
 {
 	
 	public function __construct()
 	{  
 	 parent::__construct();
 	 $this->load->database();
 	}
 	public function add_license($data)
 	{
 		if ($this->db->insert('d_o_license',$data)===true)
 		{
 			return $this->db->insert_id();
 		}
 		else
 			return FALSE;
 	}
 	public function view_all()
 	{
 		$query=$this->db->get('d_o_license');
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
 		return $this->db->delete('d_o_license');
 	}
 }
?>

 