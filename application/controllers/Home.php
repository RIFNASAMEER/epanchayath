<?php 


/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

	}
	public function index()
	{
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function service()
	{
		$this->load->view('service');
	}
	public function death_certificate()
	{
		$this->load->view('add_birth_death_form');
	}
}







 ?>