<?php 

/**
* 
*/
class Employee_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->helper(['url','form']);
		$this->load->library(['form_validation']);


		$this->load->model('Address_Model');
		$this->load->model('Employee_Model');



	}



	public function add()
	{
		$this->form_validation->set_rules('name', 'Name','required');
		$this->form_validation->set_rules('gender', 'Gender','required');
		$this->form_validation->set_rules('designation', 'Desigantion','required');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('place', 'Place','required');
        $this->form_validation->set_rules('mobileno', 'Mobile no','required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/add_employee');
		}
		else
		{
			$name = $this->input->post('name');
			$gender = $this->input->post('gender');
			$designation = $this->input->post('designation');
			$address = $this->input->post('address');
			$place = $this->input->post('place');
            $phone= $this->input->post('mobileno');
			$data = [
			    'gender'=>$gender,
				'address'=> $address,
				'place' => $place,
				'mobileno'=>$phone
			];

			$address_id = $this->Address_Model->add($data);

			if ($address_id != FALSE) {
				
				$data = [
					'name' => $name,
					'designation' => $designation, 
					'address_id' => $address_id
				];
				if($this->Employee_Model->add($data) != FALSE)
				{
					var_dump('success');
				}
				else
					var_dump('failed');
			}
			else
				var_dump('failed');
		}


	}



	public function view()
	{

		$data['result'] = $this->Employee_Model->view_all();

		$this->load->view('admin/view_employees',$data);
	}
}
 ?>