<?php

/**
* 
*/
class Marriage_Controller extends CI_Contrller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation']);

		$this->load->model('Address_Model');
		$this->load->model('Marriage_Model');
		$this->load->helper('security')
	}
	public function add()
	{
		
	}
}










  ?>