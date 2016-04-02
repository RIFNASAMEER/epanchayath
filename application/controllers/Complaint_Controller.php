<?php 

/**
* 
*/
class Complaint_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

		$this->load->Model('Complaint_Model');
	}
	public function add_complaint()
	{
		$this->load->view('add_complaint');
	}
	public function add()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('complaint','Complaints','required');

		if($this->form_validation->run()===FAlSE)
		{
			
			$this->load->view('add_complaint');
		}
		else
		{
			
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$complaints=$this->input->post('complaint'); 
			$data=[
			       'name'=>$name,
			       'email'=>$email,
			       'complaints'=>$complaints
			];
			if($this->Complaint_Model->add($data) !=FAlSE)
			{
			 var_dump('success');
			}
			else
				redirect(base_url('Complaint_Controller/add'));

		}
	}
	 public function view()
		{
           $data['result'] = $this->Complaint_Model->view_all();

		   $this->load->view('admin/view_complaint',$data);
		}
	  public function delete($id)
	    {
	    	var_dump($id);	
	    	
	    	$delete=$this->Complaint_Model->delete($id);
	    	if ($delete) 
	    	{
	    		redirect(base_url('Complaint_Controller/view'));
	    	}
	    }
	
}
?>