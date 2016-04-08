<?php


/**
* 
*/
class Pension_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation']);
        
     
		$this->load->model('Pension_Model');

	}
	public function add()
	{
		$this->form_validation->set_rules('name', 'Name','required');
		$this->form_validation->set_rules('houseno', 'houseno','required');
		$this->form_validation->set_rules('landmark', 'landmark','required');
		$this->form_validation->set_rules('majorplace', 'majorplace','required');
		$this->form_validation->set_rules('postoffice', 'postoffice','required');
		$this->form_validation->set_rules('pincode', 'pincode','required');
		$this->form_validation->set_rules('gender', 'gender','required');
        $this->form_validation->set_rules('disease', 'disease','required');
		$this->form_validation->set_rules('no_ofyears_inkerala', 'no_ofyears_inkerela','required');
		$this->form_validation->set_rules('rationcardno', 'rationcardno','required');
		$this->form_validation->set_rules('bplcardno','bplcardno','required');
		$this->form_validation->set_rules('idcardno', 'id card no','required');
		$this->form_validation->set_rules('wardcouncilor', 'name of ward councilor','required');
		$this->form_validation->set_rules('intigently', 'integently','required');
		$this->form_validation->set_rules('begger', 'begger','required');
		$this->form_validation->set_rules('marcialstatus', 'marcialstatus','required');
		$this->form_validation->set_rules('husbend_wife', 'husbend/wife name','required');
		$this->form_validation->set_rules('annualincome', 'annualincome','required');
		$this->form_validation->set_rules('contact', 'contact','required');
         if($this->form_validation->run()===FALSE)
           {
           	var_dump(validation_errors());
         		$this->load->view('add_pension');
           }
         else
           {
         	$name = $this->input->post('name');
         	$houseno = $this->input->post('houseno');
         	$landmark = $this->input->post('landmark');
         	$majorplace= $this->input->post('majorplace');
         	$postoffice= $this->input->post('postoffice');
         	$pincode= $this->input->post('pincode');
			$gender= $this->input->post('gender');
			$disease=$this->input->post('disease');
			$no_ofyears_inkerala = $this->input->post('no_ofyears_inkerala');
			$rationcardno=$this->input->post('rationcardno');
			$bplcardno = $this->input->post('bplcardno');
			$idcardno= $this->input->post('idcardno');
			$wardcouncilor= $this->input->post('wardcouncilor');
			$intgently= $this->input->post('intigently');
			$begger= $this->input->post('begger');
			$marcialstatus= $this->input->post('marcialstatus');
			$husbend_wife=$this->input->post('husbend_wife');
			$annualincome= $this->input->post('annualincome');
			$contact= $this->input->post('contact');
			$data = [
		
			       'name'=>$name,
			       'houseno'=>$houseno,
			       'landmark'=>$landmark,
			       'majorplace'=>$majorplace,
			       'postoffice'=>$postoffice,
			       'pincode'=>$pincode,
			       'gender'=>$gender,
			       'disease'=>$disease,
			       'no_ofyears_inkerala'=>$no_ofyears_inkerala,
			       'rationcardno'=>$rationcardno,
			       'bplcardno'=>$bplcardno,
			       'idcardno'=>$idcardno,
			       'wardcouncilor'=>$wardcouncilor,
			       'intigently'=>$intgently,
			       'begger'=>$begger,
			      'marcialstatus'=>$marcialstatus,
			      'husbend_wife'=>$husbend_wife,
                   'contact'=>$contact,
			];
			if($this->Pension_Model->add($data) !=FAlSE)
			{
			 redirect(base_url('Pension_Controller/view'));
			}
			else
				redirect(base_url('Pension_Controller/add'));

		}
	}
	 public function view()
		{
           $data['result'] = $this->Pension_Model->view_all();

		   $this->load->view('admin/view_pension',$data);
		}
	  public function delete($idpensions)
	    {
	    	var_dump($id);	
	    	
	    	$delete=$this->Pension_Model->delete($idpensions);
	    	if ($delete) 
	    	{
	    		redirect(base_url('Pension_Controller/view'));
	    	}
	    }
	
}
?>	    