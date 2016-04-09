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
          $this->load->Model('Notification_Model');
          $this->load->Model('Upload_Model'); 
          $this->load->Model('Employee_Model');

	}
	public function index()
	{ $data ['data']= $this->Notification_Model->view_all();
		$this->load->view('home',$data);
	}
	public function about()
	{
		$data['gallery']=$this->Upload_Model->view();
		$data['employee']=$this->Employee_Model->view_all();
		$this->load->view('about',$data);
	}
	public function gallery()
	{
		$data['gallery']=$this->Upload_Model->view();
		$this->load->view('gallery',$data);
	}
	public function service()
	{
		$this->load->view('service');
	}
	public function death_certificate()
	{
		$this->load->view('add_birth_death_form');
	}
	public function add_pension()
	{
		$this->load->view('add_pension');
	}
	public function add_complaint()
	{
		$this->load->view('add_complaint');
	}
    public function add_marriage()
	{
		$this->load->view('add_marriage');
	}
	public function add_permit()
	{
		$this->load->view('add_permit');
	}
	public function add_license()
	{
		$this->load->view('add_licenses');
	}
}







 ?>