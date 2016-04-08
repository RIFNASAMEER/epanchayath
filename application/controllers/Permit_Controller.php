<?php 

/**
* 
*/
/**
* 
*/
class Permit_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library(['form_validation']);
		$this->load->helper(['url','form']);
		$this->load->model('Permit_Model');

	}
	public function add_permit()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('address','Address','required');
     	$this->form_validation->set_rules('email', 'email', 'required');
     	$this->form_validation->set_rules('name_development', 'email', 'required');
		$this->form_validation->set_rules('survey_no','survey','required');
		$this->form_validation->set_rules('extend','Extend','required');
		$this->form_validation->set_rules('nature','Nature','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('office','Office','required');
		$this->form_validation->set_rules('division','Division','required');
		$this->form_validation->set_rules('ward','Ward','required');
		$this->form_validation->set_rules('no_building','Building','required');
		$this->form_validation->set_rules('revenue','Revenue','required');
		$this->form_validation->set_rules('taluk','Taluk','required');
		$this->form_validation->set_rules('district','District','required');
		$this->form_validation->set_rules('govt_quasi','Govt','required');
		$this->form_validation->set_rules('plinth_area','Plinth','required');
		$this->form_validation->set_rules('basement_floor','Basement','required');
		$this->form_validation->set_rules('ground_floor','Ground','required');
		$this->form_validation->set_rules('first_floor','First','required');
		$this->form_validation->set_rules('second_floor','Second','required');
		$this->form_validation->set_rules('total_area','Total','required');
		$this->form_validation->set_rules('height','Height','required');
		$this->form_validation->set_rules('whether_completed_or_not','Whether','required');
		$this->form_validation->set_rules('stage', 'stage', 'required');
		$this->form_validation->set_rules('developer_details','Developer','required');
		$this->form_validation->set_rules('amount','Amount','required');
		$this->form_validation->set_rules('number_date','Number','required');
		$this->form_validation->set_rules('document_details','Details','required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('add_permit');
		}
		else{

			$name= $this->input->post('name');
			$address=$this->input->post('address');
			$email= $this->input->post('email');
			$survey_no=$this->input->post('survey_no');
			$extend=$this->input->post('extend');
			$nature=$this->input->post('nature');
			$date=$this->input->post('date');
			$office=$this->input->post('office');
			$division= $this->input->post('division');
			$ward=$this->input->post('ward');
			$no_building=$this->input->post('no_building');
			$revenue=$this->input->post('revenue');
			$taluk=$this->input->post('taluk');
			$district=$this->input->post('district');
			$govt_quasi=$this->input->post('govt_quasi');
			$plinth_area=$this->input->post('plinth_area');
			$basement_floor=$this->input->post('basement_floor');
			$ground_floor=$this->input->post('ground_floor');
			$first_floor=$this->input->post('fir9st_floor');
			$second_floor=$this->input->post('second_floor');
			$total_area=$this->input->post('total_area');
			$height=$this->input->post('height');
			$whether_completed_or_not=$this->input->post('whether_completed_or_not');
			$stage= $this->input->post('stage');
			$developer_details=$this->input->post('developer_details');
			$amount=$this->input->post('amount');
			$number_date=$this->input->post('number_date');
			$document_details=$this->input->post('document_details');
			$data = [
			'address'=> $address,
			'email'=>$email

			];
			$address = $this->Address_Model->add($data);
			if ($address==true)
			{
				$data = [
				'name'=>$name,
				'name_development'=>$name_development,
				'survey_no'=>$survey_no,
				'extend'=>$extend,
				'nature'=>$nature,
				'date'=>$date,
				'office'=>$office,
				'division'=>$division,
				'ward'=>$ward,
				'no_building'=>$no_building,
				'revenue'=>$revenue,
				'taluk'=>$taluk,
				'district'=>$district,
				'govt_quasi'=>$govt_quasi,
				'plinth_area'=>$plinth_area,
				'basement_floor'=>$basement_floor,
				'ground_floor'=>$ground_floor,
				'first_floor'=>$first_floor,
				'second_floor'=>$second_floor,
				'total_area'=>$total_area,
				'height'=>$height,
				'whether_completed_or_not'=>$whether_completed_or_not,
				'stage'=>$stage,
				'developer_details'=>$developer_details,
				'amount'=>$amount,
				'number_date'=>$number_date,
				'document_details'=>$document_details,

              ];
				
			}
			if($this->Permit_Model->add($data) !=FALSE)
			{
				redirect(base_url('Permit_Controller/view'));
			}
			else
				var_dump('failed');
		}
	}
	public function view()
	{
		$data['result'] = $this->Permit_Model->view_all();
		$data['address'] = $this->Address_Model->view();
		$this->load->view('admin/view_permit',$data);
	}
	public function delete($id)
	{
		$delete=$this->Permit_Model->delete($id);
		if($delete)
	{
		$delete=$this->Address_Model->delete($id);
		redirect(base_url('Permit_Controller/view'));

	}
}
}
			
			

		
    


		
?>

