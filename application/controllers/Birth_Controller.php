<?php


/**
* 
*/
class Birth_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation']);
        
        $this->load->model('Address_Model');
		$this->load->model('Birth_Model');

	}
	public function add()
	{
		$this->form_validation->set_rules('appliant_name', 'Name','required');
		$this->form_validation->set_rules('appliant_address', 'address','required');
		$this->form_validation->set_rules('house_no', 'House Number','required');
		$this->form_validation->set_rules('ward_no', 'Ward Number','required');
		$this->form_validation->set_rules('village', 'Village','required');
		$this->form_validation->set_rules('postoffice', 'postoffice','required');
		$this->form_validation->set_rules('pincode' 'pincode','required');
		$this->form_validation->set_rules('district', 'district','required');
		$this->form_validation->set_rules('name', 'Name','required');
		$this->form_validation->set_rules('father_mother', 'Father/Mother','required');
		$this->form_validation->set_rules('date', 'Date','required');
		$this->form_validation->set_rules('purpose', 'Purpose','required');
		$this->form_validation->set_rules('house_no', 'House Number','required');
	}
}