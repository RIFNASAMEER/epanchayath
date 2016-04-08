<?php 

/**
* 
*/
class Complaint_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','menu'));
        $this->load->library('form_validation');

		$this->load->Model('Complaint_Model');
	}
	public function add_complaint()
	{
		$data['data']= $this->Notification_Model->view_all();
		$this->load->view('add_complaint',$data);
	}
	public function add()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('complaint','Complaints','required');

		if($this->form_validation->run()===FAlSE)
		{
			
			$this->load->view('add_complaint');
		}
		else
		{
			
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$complaints=$this->input->post('complaint'); 
			$data=[
			       'name'=>$name,
			       'email'=>$email,
			       'complaints'=>$complaints
			];
			if($this->Complaint_Model->add($data) !=FAlSE)
			{
			 redirect(base_url('Home'));
			}
			else
				redirect(base_url('Complaint_Controller/add'));

		}
	}
	 public function view()
		{
            $data = $this->Complaint_Model->view_all();
			$this->load->library('table');
	 		$this->table->set_heading('Name','Email','Complaint','Remove');
	 		
	 		if(!empty($data))
	 		{
		 		foreach ($data as $key => $value)
		 		{
			
		 			$this->table->add_row
		 								(
						 					$value->name,
						 					$value->email,
						 					$value->complaints,
							 				'<a href="'. base_url('dashboard/complaint/delete/'.$value->id).'">delete<i class="fa fa-trash-o"></i></a>'
		 								);
		 		}
				$template = [
		          'table_open'            => '<table id="testimonial" class = "table">',
		          'thead_open'            => '<thead class="header">',
		          'thead_close'           => '</thead>',

		          'heading_row_start'     => '<tr>',
		          'heading_row_end'       => '</tr>',
		          'heading_cell_start'    => '<th>',
		          'heading_cell_end'      => '</th>',

		          'tbody_open'            => '<tbody>',
		          'tbody_close'           => '</tbody>',

		          'row_start'             => '<tr>',
		          'row_end'               => '</tr>',
		          'cell_start'            => '<td>',
		          'cell_end'              => '</td>',

		          'row_alt_start'         => '<tr>',
		          'row_alt_end'           => '</tr>',
		          'cell_alt_start'        => '<td>',
		          'cell_alt_end'          => '</td>',

		          'table_close'           => '</table>'
		        	];
      			$this->table->set_template($template);	 		
				$data['data'] = $this->table->generate();
 		
 			} else {
            $data['message'] = 'No data Found';
        }
		$this->load->view('admin/view_complaint',$data);
	}
	  public function delete($id)
	  {
	    	var_dump($id);	
	    	
	    	$delete=$this->Complaint_Model->delete($id);
	    	if ($delete) 
	    	{
	    		redirect(base_url('Complaint_Controller/view'));
	    	}
	   }
	
}
?>