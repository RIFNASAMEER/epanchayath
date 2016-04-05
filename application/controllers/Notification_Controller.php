<?php 

/**
* 
*/
class Notification_Controller extends CI_Controller
{
	
 public	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation']);
		
	    $this->load->Model('Notification_Model'); 
	}
	public function add_notification()
	{
		$this->load->view('admin/add_notification');
	}
  public function add()
    {
      
       $this->form_validation->set_rules('notification', 'Notification','required');
		if ($this->form_validation->run() === FALSE) {
			
			$this->load->view('admin/add_notification');
		}
		else
		{
	       $notification= $this->input->post('notification');
			$data = [
			    'notification'=>$notification
	
			];
			if($this->Notification_Model->add($data) != FALSE)
			    {
					redirect(base_url('Notification_Controller/view'));
			    }
				else
					$this->load->view('admin/add_notification');
			
		}
	}
	 public function view()
		{
           $data['result'] = $this->Notification_Model->view_all();

		   $this->load->view('admin/view_notification',$data);
		}
	 public function delete($id)
	    {
	    	var_dump($id);	
	    	
	    	$delete=$this->Notification_Model->delete($id);
	    	if ($delete) 
	    	{
	    		redirect(base_url('Notification_Controller/view'));
	    	}
	    }
}

 ?>
