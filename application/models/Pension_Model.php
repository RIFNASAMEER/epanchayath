<?php 

/**
 * 
 */
 class Pension_Model extends CI_Model
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
        $this->load->database();
 	}
 	public function add($data)
 	{
 		$this->db->query('SET FOREIGN_KEY_CHECKS=0');
 		if($this->db->insert('pensions',$data))
 		{
 			return $this->db->insert_id();
 		}
 		else{
 			return FALSE;
 		}
 	}
 	public function view_all()
 	{
 		$query = $this->db->get('pensions');
		if($query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
	         echo 'there is no pension application';
		}
 	}
 	public function delete($idpensions)
	   {	
	    
	     	$this->db->where('idpensions',$idpensions);
		return	$this->db->delete('pensions');
	     
	   }
 	
 } 
 ?>
