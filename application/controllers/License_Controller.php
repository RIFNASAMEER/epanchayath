<?php 

/**
* 
*/
/**
* 
*/
class License_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['url','form']);
		$this->load->model('License_Model');
		$this->load->model('Address_Model');
    }
	public function add_license()
     {
     	$this->form_validation->set_rules('name', 'Name', 'required');
     	$this->form_validation->set_rules('address', 'Address', 'required');
     	$this->form_validation->set_rules('mobileno', 'Mobileno', 'required');
     	$this->form_validation->set_rules('emailid', 'email', 'required');
     	$this->form_validation->set_rules('purpose_of_license', 'Purpose', 'required');
     	$this->form_validation->set_rules('name_and_address_of_building', 'building', 'required');
     	$this->form_validation->set_rules('village', 'Village', 'required');
     	$this->form_validation->set_rules('ward_no', 'Ward', 'required');
     	$this->form_validation->set_rules('survey_no', 'Survey', 'required');
     	$this->form_validation->set_rules('building_no', 'build', 'required');
     	$this->form_validation->set_rules('year_of_license_needed', 'Year', 'required');
     	$this->form_validation->set_rules('type_of_roof', 'Type', 'required');
     	$this->form_validation->set_rules('if_the_license_for_renewel', 'Renewel', 'required');
     	$this->form_validation->set_rules('nearest_place', 'Nearest place', 'required');
     	$this->form_validation->set_rules('if_the_license_for_renewel', 'nearest building', 'required');
     	$this->form_validation->set_rules('power', 'Power', 'required');
     	$this->form_validation->set_rules('boundaries', 'Boundaries', 'required');
     	$this->form_validation->set_rules('total_area_of_plant', 'Total', 'required');
     	$this->form_validation->set_rules('no_of_workers', 'Workers', 'required');
     	$this->form_validation->set_rules('reciept_no', 'Reciept', 'required');
     	$this->form_validation->set_rules('paid_amount', 'Paid', 'required');
     	$this->form_validation->set_rules('total_yield', 'yield', 'required');

		if($this->form_validation->run() === FALSE)
		{
			var_dump(validation_errors());
			$this->load->view('add_license');
		}
		else{
				$name= $this->input->post('name');
			$address=$this->input->post('address');
			$mobileno=$this->input->post('mobileno');
			$emailid=$this->input->post('emailid');
			$purpose_of_license=$this->input->post('purpose_of_license');
			$name_and_address_of_building=$this->input->post('name_and_address_of_building');
			$village=$this->input->post('village');
			$ward_no=$this->input->post('ward_no');
			$survey_no=$this->input->post('survey_no');
			$building_no=$this->input->post('building_no');
			$year_of_license_needed=$this->input->post('year_of_license_needed');
			$type_of_roof=$this->input->post('type_of_roof');
			$if_the_license_for_renewel=$this->input->post('if_the_license_for_renewel');
			$nearest_place=$this->input->post('nearest_place');
			$name_of_nearest_building=$this->input->post('name_of_nearest_building');
			$power=$this->input->post('power');
			$boundaries=$this->input->post('boundaries');
			$total_area_of_plant=$this->input->post('total_area_of_plant');
			$no_of_workers =$this->input->post('no_of_workers');
			$reciept_no=$this->input->post('reciept_no');
			$paid_amount=$this->input->post('paid_amount');
			$total_yield=$this->input->post('total_yield');
			$data = [
			'address'=> $address,
			'mobileno'=>$mobileno,
			'emailid'=>$emailid,

			];
			$address = $this->Address_Model->add($data);
			if ($address==true)
			{
				$data = [
				'name'=>$name,
				'purpose_of_license'=>$purpose_of_license,
				'name_and_address_of_building'=>$name_and_address_of_building,
				'village'=>$village,
				'survey_no'=>$ward_no,
				'building_no'=>$building_no,
				'year_of_license_needed'=>$year_of_license_needed,
				'type_of_roof'=>$type_of_roof,
				'if_the_license_for_renewel'=>$if_the_license_for_renewel,
				'nearest_place'=>$nearest_place,
				'name_of_nearest_building'=>$name_of_nearest_building,
				'power'=>$power,
				'boundaries'=>$boundaries,
				'total_area_of_plant'=>$total_area_of_plant,
				'no_of_workers'=>$no_of_workers,
				'reciept_no'=>$reciept_no,
				'paid_amount'=>$paid_amount,
				'total_yield'=>$total_yield,
				'address_id'=>$address,
				];
			}
			if($this->License_Model->add_license($data) != FALSE)
			{
				redirect(base_url('License_Controller/view'));
			}
			else
				redirect(base_url('License_Controller/add_license'));
		}
	}
	public function view()
	{
		$data['result'] = $this->License_Model->view_all();
		$data['address'] = $this->Address_Model->view();
		$this->load->view('admin/view_license',$data);
	}
	public function delete($id)
	{
		$delete=$this->License_Model->delete($id);
		if($delete)
	{
		$delete=$this->Address_Model->delete($id);
		redirect(base_url('License_Controller/view'));

	}
}
}
?>





			
     
      
