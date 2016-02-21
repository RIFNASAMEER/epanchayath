<?php 
/**
* 
*/
class Complaint_Controller extends Complaint_Controller
{
	
	public function __construct()
	{
		parent::__construct()
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation']);

	}
	public function complaint()
	{
		$this->load->view('admin/complaint');
	}
}
 ?>