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
		$data['address'] = $this->Address_Model->view();
		$this->load->view('admin/view_employees',$data);
	}
	public function edit_data($id)
	{
		
		$data['id'] =$id; 
		$data['address'] =$this->Address_Model->get($id);
		$data['result'] =$this->Employee_Model->get($id);
		
		$this->load->view('admin/edit_employee',$data);
	}
	public function edit()
	{
		$this->form_validation->set_rules('name', 'Name','required');
		$this->form_validation->set_rules('gender', 'Gender','required');
		$this->form_validation->set_rules('designation', 'Desigantion','required');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('place', 'Place','required');
        $this->form_validation->set_rules('mobileno', 'Mobile no','required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/edit_employee');
		}
		else
		{
			$id = $this->input->post('id');
			var_dump($id);
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
			$address = $this->Address_Model->edit($data,$id);
			if ($address==true)
			 {

				$data = [
					'name' => $name,
					'designation' => $designation, 
					'address_id' => $id
				];
			}
			if($this->Employee_Model->edit($data,$id) != FALSE)
				{
					redirect(base_url('Employee_Controller/view'));
				}
				else
					var_dump('failed');
			}
			
		}
		public function delete($id)
		{
			$delete=$this->Employee_Model->delete($id);
			if($delete)
			{
				$delete=$this->Address_Model->delete($id);
				redirect(base_url('Employee_Controller/view'));

			}
		}
    

	
}
?>
