<?php

/**
* 
*/
class Marriage_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form','menu']);
		$this->load->library(['form_validation']);

		$this->load->model('Address_Model');
		$this->load->model('Marriage_Model');
		$this->load->helper('security');
	}
	public function add()
	{
		
		$this->form_validation->set_rules('date', 'Date','required');
		$this->form_validation->set_rules('ma_place', 'place of marriage','required');
		$this->form_validation->set_rules('hus_name', 'husband name','required');
		$this->form_validation->set_rules('address', 'address','required');
		$this->form_validation->set_rules('dob', 'dob','required');
		$this->form_validation->set_rules('emailid', 'email','required');
		$this->form_validation->set_rules('citizen', 'citizen','required');
        $this->form_validation->set_rules('job', 'job','required');
		$this->form_validation->set_rules('h_first_married_or_not', 'first married or not','required');
		$this->form_validation->set_rules('hno_spouse', 'husband no_spouse','required');
		$this->form_validation->set_rules('f_name','father_name','required');
		$this->form_validation->set_rules('f_age', 'father_age','required');
		$this->form_validation->set_rules('f_address', 'father_address','required');
		$this->form_validation->set_rules('m_name', 'mother name','required');
		$this->form_validation->set_rules('m_age', 'mother age','required');
		$this->form_validation->set_rules('m_address', 'mother address','required');
		$this->form_validation->set_rules('v1_name', 'name of first vitness','required');
		$this->form_validation->set_rules('v1_address', 'vitness address','required');
		$this->form_validation->set_rules('w_name', 'wife name','required');
		$this->form_validation->set_rules('w_address', 'wife address','required');
		$this->form_validation->set_rules('w_dob', 'dob','required');
		$this->form_validation->set_rules('w_citizen', 'citizenship','required');
		$this->form_validation->set_rules('w_job', 'wife job','required');
		$this->form_validation->set_rules('w_first_married_or_not', 'first married or not','required');
		$this->form_validation->set_rules('w_no_spouse', 'number of spouse','required');
		$this->form_validation->set_rules('wf_name', 'father name','required');
		$this->form_validation->set_rules('wf_age', 'father age','required');
		$this->form_validation->set_rules('wf_address', 'father address','required');
		$this->form_validation->set_rules('wm_name', 'mother name','required');
		$this->form_validation->set_rules('wm_age', 'mother age','required');
		$this->form_validation->set_rules('wm_address', 'mother address','required');
		$this->form_validation->set_rules('v2_name', 'name of second vitness','required');
		$this->form_validation->set_rules('v2_address', 'vitness address','required');
         if($this->form_validation->run()===FALSE)
           {
           	    var_dump(validation_errors());
         		$this->load->view('add_marriage');
           }
         else
           {
         	$date = $this->input->post('date');
         	$ma_place = $this->input->post('ma_place');
         	$hus_name = $this->input->post('hus_name');
            $address = $this->input->post('address');
            $dob = $this->input->post('dob');
            $emailid = $this->input->post('emailid');
         	$citizen= $this->input->post('citizen');
         	$job= $this->input->post('job');
         	$h_first_married_or_not= $this->input->post('h_first_married_or_not');
			$hno_spouse= $this->input->post('hno_spouse');
			$f_name=$this->input->post('f_name');
			$f_age= $this->input->post('f_age');
			$f_address=$this->input->post('f_address');
			$m_name = $this->input->post('m_name');
			$m_age= $this->input->post('m_age');
			$m_address= $this->input->post('m_address');
			$v1_name= $this->input->post('v1_name');
			$v1_address= $this->input->post('v1_address');
			$w_name= $this->input->post('w_name');
			$w_address=$this->input->post('w_address');
			$w_dob = $this->input->post('w_dob');
			$w_citizen= $this->input->post('w_citizen');
			$w_job= $this->input->post('w_job');
			$w_first_married_or_not= $this->input->post('w_first_married_or_not');
			$w_no_spouse= $this->input->post('w_no_spouse');
			$wf_name= $this->input->post('wf_name');
			$wf_age= $this->input->post('wf_age');
			$wf_address= $this->input->post('wf_address');
			$wm_name= $this->input->post('wm_name');
			$wm_age= $this->input->post('wm_age');
			$wm_address= $this->input->post('wm_address');
			$v2_name= $this->input->post('v2_name');
			$v2_address= $this->input->post('v2_address');
			$data = [
			    'address'=> $address,
			    'dob'=>$dob,
				'emailid'=>$emailid,
				
			];
			$address = $this->Address_Model->add($data);
			if ($address==true)
			 {

				$data = [
				'date'=>$date,
				'ma_place'=>$ma_place,
				'hus_name'=>$hus_name,
				'citizen' =>$citizen,
				'job' =>$job,
				'h_first_married_or_not' =>$h_first_married_or_not,
				'hno_spouse' =>$hno_spouse,
				'f_name' =>$f_name,
				'f_age' =>$f_age,
				'f_address' =>$f_address,
				'm_name' => $m_name,
				'm_age' => $m_age,
				'm_address' =>$m_address,
				'v1_name' => $v1_name,
				'v1_address' => $v1_address,
				'w_name' => $w_name,
				'w_address' => $w_address,
				'w_dob'=>$w_dob,
				'w_citizen'=>$w_citizen,
				'w_job'=>$w_job,
				'w_first_married_or_not'=>$w_first_married_or_not,
				'w_no_spouse'=>$w_no_spouse,
				'wf_name'=>$wf_name,
				'wf_age'=>$wf_age,
				'wf_address'=>$wf_address,
				'wm_name'=>$wm_name,
				'wm_age'=>$wm_age,
				'wm_address'=>$wm_address,
				'v2_name'=>$v2_name,
                 'v2_address'=>$v2_address,
				'address_id' => $address,
				];
			 }
			if($this->Marriage_Model->add($data) != FALSE)
				{
			
				 redirect(base_url('service'));
				}
				else
		            redirect(base_url('Marriage_Controller/add'));
	    }
	}
	public function view()
        {
        	$data['result'] = $this->Marriage_Model->view_all();
			$data['address'] = $this->Address_Model->view();
			//var_dump($data);
			$this->load->view('admin/view_marriage',$data);
        }
        public function delete($id)
        {
        	$delete=$this->Marriage_Model->delete($id);
			if($delete)
			{
				$delete=$this->Address_Model->delete($id);
				 redirect(base_url('Marriage_Controller/view'));
                
			}
        }

}
?>