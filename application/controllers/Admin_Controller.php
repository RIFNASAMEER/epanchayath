<?php 

/**
* 
*/
class Admin_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation']);

		$this->load->model('User_Model');

	}

	public function login()
	{
		$this->load->view('admin/login');
	}


	public function verify()
	{
		$this->form_validation->set_rules('username', 'User name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = ['username' => $username,'password' => $password];
				
			$this->User_Model->get_where($where);
		}
	}



	public function add_employee()
	{
		$this->load->view('admin/add_employee');
	}	
}
 ?>