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
		$this->form_validation->set_rules('survey','Survey','required');
		$this->form_validation->set_rules('extend','Extend','required');
		$this->form_validation->set_rules('nature','Nature','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('office','Office','required');
		$this->form_validation->set_rules('division','Division','required');
		$this->form_validation->set_rules('ward','Ward','required');
		$this->form_validation->set_rules('building','Building','required');
		$this->form_validation->set_rules('revenue','Revenue','required');
		$this->form_validation->set_rules('taluk','Taluk','required');
		$this->form_validation->set_rules('district','District','required');
		$this->form_validation->set_rules('govt','Govt','required');
		$this->form_validation->set_rules('plinth','Plinth','required');
		$this->form_validation->set_rules('basement','Basement','required');
		$this->form_validation->set_rules('ground','Ground','required');
		$this->form_validation->set_rules('first','First','required');
		$this->form_validation->set_rules('second','Second','required');
		$this->form_validation->set_rules('total','Total','required');
		$this->form_validation->set_rules('height','Height','required');
		$this->form_validation->set_rules('whether','Whether','required');
		$this->form_validation->set_rules('not','Not','required');
		$this->form_validation->set_rules('developer','Developer','required');
		$this->form_validation->set_rules('amount','Amount','required');
		$this->form_validation->set_rules('number','Number','required');
		$this->form_validation->set_rules('details','Details','required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('add_permit');
		}
		else{

			$name = $this->input->post('name');
			$address=$this->input->post('address');
			$survey=$this->input->post('survey');
			$extend=$this->input->post('extend');
			$nature=$this->input->post('nature');
			$date=$this->input->post('date');
			$office=$this->input->post('office');
			$ward=$this->input->post('ward');
			$building=$this->input->post('building');
			$revenue=$this->input->post('revenue');
			$taluk=$this->input->post('taluk');
			$district=$this->input->post('district');
			$govt=$this->input->post('govt');
			$plinth=$this->input->post('plinth');
			$basement=$this->input->post('basement');
			$ground=$this->input->post('ground');
			$first=$this->input->post('first');
			$second=$this->input->post('second');
			$total=$this->input->post('total');
			$height=$this->input->post('height');
			$whether=$this->input->post('wehether');
			$not=$this->input->post('not');
			$developer=$this->input->post('developer');
			$amount=$this->input->post('amount');
			$number=$this->input->post('number');
			$details=$this->input->post('details');

		}


	
	}
}










 ?>