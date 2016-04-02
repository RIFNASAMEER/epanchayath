<?php 

/**
* 
*/
class Authority_Controller extends CI_Controller
{
	
	public function __construct()
	 {
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation']);
		$this->load->model('Address_Model');
		$this->load->model('Authority_Model');
		$this->load->helper('security');
	 }

     public function add()
      {
         $this->form_validation->set_rules('name', 'Name','required');
         $this->form_validation->set_rules('address', 'Address','required');
         $this->form_validation->set_rules('gender', 'Gender','required');
         $this->form_validation->set_rules('dob', 'DOB','required');
         $this->form_validation->set_rules('place', 'place','required');
         $this->form_validation->set_rules('ward_no', 'ward number','required');
         $this->form_validation->set_rules('designation', 'position','required');
         $this->form_validation->set_rules('mobileno', 'mobile number','required');
         if($this->form_validation->run()===fALSE)
           {
         		$this->load->view('admin/add_authority');
           }
         else
           {
         	$name = $this->input->post('name');
         	$address = $this->input->post('address');
			$gender = $this->input->post('gender');
			$dob=$this->input->post('dob');
			$place = $this->input->post('place');
			$ward_no=$this->input->post('ward_no');
			$designation = $this->input->post('designation');
			$phone= $this->input->post('mobileno');
			$data = [
			    'gender'=>$gender,
				'address'=> $address,
				'place' => $place,
				'mobileno'=>$phone,
				'dob'=>$dob
			];
			$address = $this->Address_Model->add($data);
			if ($address==true)
			 {

				$data = [
				'name'=>$name,
				'wardno'=> $ward_no,
				'designation' => $designation,
				'address_id' => $address,
				];
			 }
			if($this->Authority_Model->add($data) != FALSE)
				{
					redirect(base_url('Authority_Controller/view'));
				}
				else
					var_dump('failed');
			}
        }
        public function view()
        {
        	$data['result'] = $this->Authority_Model->view_all();
			$data['address'] = $this->Address_Model->view();
			$this->load->view('admin/view_authority',$data);
        }
        public function delete($id)
        {
        	$delete=$this->Authority_Model->delete($id);
			if($delete)
			{
				$delete=$this->Address_Model->delete($id);
				 redirect(base_url('Authority_Controller/view'));
                
			}
        }
}

 ?>