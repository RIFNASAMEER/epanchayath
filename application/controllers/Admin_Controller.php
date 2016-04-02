<?php 

/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');

class Admin_Controller extends Check_Logged
{

    function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation','session']);

		$this->load->model('User_Model');
		$this->load->model('Notification_Model');
		$this->load->model('Complaint_Model');

	}


	public function generate()
	{
		var_dump(APPPATH);
		var_dump(md5('admin'));
        var_dump(hash('sha152', 'admin'));
	}

	public function login()
	{
		if ($this->logged ==true) {
			$this->load->view('admin/dashboard');
		}
		else{
           $this->load->view('admin/login');
       }
	}


	public function verify()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
            $password= md5($password);

			if($this->User_Model->login($username,$password,'admin')){
				$userdata = [
				'username' =>$username,
				'logged_in' =>true
				];
				$this->session->set_userdata('logged_in',$userdata);
				redirect(base_url('Admin_Controller/login'));
			}
			else{
				$data['message']='invalid username or password';
				$this->load->view('admin/login',$data);
			}


		}

	}



	public function logout()
    {
		$this->session->set_userdata('logged_in',FALSE);
		$this->session->sess_destroy();

		redirect(base_url('Admin_Controller/login'));
	}
}
 ?>