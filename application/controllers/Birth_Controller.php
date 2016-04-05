<?php


/**
* 
*/
class Birth_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation']);
        
        $this->load->model('Address_Model');
		$this->load->model('Birth_Model');

	}
	public function add()
	{
		$this->form_validation->set_rules('applicant_name', 'Name','required');
		$this->form_validation->set_rules('address', 'applicant address','required');
		$this->form_validation->set_rules('relationship', 'relationship','required');
		$this->form_validation->set_rules('place', 'place','required');
		$this->form_validation->set_rules('mobileno', 'mobileno','required');
		$this->form_validation->set_rules('email', 'email','required');
		$this->form_validation->set_rules('house_no', 'House Number','required');
        $this->form_validation->set_rules('ward_no', 'Ward Number','required');
		$this->form_validation->set_rules('village', 'Village','required');
		$this->form_validation->set_rules('postoffice', 'postoffice','required');
		$this->form_validation->set_rules('pincode','pincode','required');
		$this->form_validation->set_rules('district', 'district','required');
		$this->form_validation->set_rules('name', 'Name','required');
		$this->form_validation->set_rules('father_mother', 'Father_Mother','required');
		$this->form_validation->set_rules('date', 'Date','required');
		$this->form_validation->set_rules('purpose', 'Purpose','required');
		$this->form_validation->set_rules('registar_office', 'registar_office','required');
		$this->form_validation->set_rules('registration_no', 'registration_no','required');
		$this->form_validation->set_rules('localbodytype', 'localbodytype','required');
		$this->form_validation->set_rules('localbody', 'localbody','required');
		$this->form_validation->set_rules('gender', 'gender','required');
		$this->form_validation->set_rules('day_address', 'day_address','required');
         if($this->form_validation->run()===FALSE)
           {
         		$this->load->view('add_birth_death_form');
           }
         else
           {
         	$applicant_name = $this->input->post('applicant_name');
         	$address = $this->input->post('address');
         	$relationship = $this->input->post('relationship');
         	$place= $this->input->post('place');
         	$mobileno= $this->input->post('mobileno');
         	$email= $this->input->post('email');
			$house_no= $this->input->post('house_no');
			$ward_no=$this->input->post('ward_no');
			$village = $this->input->post('village');
			$postoffice=$this->input->post('postoffice');
			$pincode = $this->input->post('pincode');
			$district= $this->input->post('district');
			$name= $this->input->post('name');
			$father_mother= $this->input->post('father/mother');
			$date= $this->input->post('date');
			$purpose= $this->input->post('purpose');
			$registrar=$this->input->post('registrar_office');
			$registration_no= $this->input->post('registration_no');
			$localbodytype= $this->input->post('localbodytype');
			$localbody= $this->input->post('localbody');
			$gender= $this->input->post('gender');
			$daddress= $this->input->post('day_address');
			$data = [
			    'address'=> $address,
			    'place'=>$place,
			    'mobileno' => $mobileno,
				'email'=>$email
				
			];
			$address = $this->Address_Model->add($data);
			if ($address==true)
			 {

				$data = [
				'applicant_name'=>$applicant_name,
				'relationship'=>$relationship,
				'house_no'=>$house_no,
				'ward_no' =>$ward_no,
				'village' =>$village,
				'postoffice' =>$postoffice,
				'pincode' =>$pincode,
				'district' =>$district,
				'name' =>$name,
				'father_mother' =>$father_mother,
				'date' => $date,
				'purpose' => $purpose,
				'registrar_office' =>$registar_office,
				'registration_no' => $registration_no,
				'localbodytype' => $localbodytype,
				'localbody' => $localbody,
				'gender' => $gender,
				'day_address'=>$day_address,
				'address_id' => $address,
				];
			 }
			if($this->Birth_Model->add($data) != FALSE)
				{
				redirect(base_url('Birth_Controller/view'));
				}
				else
					var_dump('failed');
		}
	}
	 public function view()
        {
        	$data['result'] = $this->Birth_Model->view_all();
			$data['address'] = $this->Address_Model->view();
			$this->load->view('admin/view_birth',$data);
        }
        public function delete($id)
        {
        	$delete=$this->Birth_Model->delete($id);
			if($delete)
			{
				$delete=$this->Address_Model->delete($id);
				 redirect(base_url('Birth_Controller/view'));
                
			}
        }
}
?>