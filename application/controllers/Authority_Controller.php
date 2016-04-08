<?php 

/**
* 
*/
class Authority_Controller extends CI_Controller
{
	
	public function __construct()
	 {
		parent::__construct();
		$this->load->helper(['url','form','menu']);
		$this->load->library(['form_validation']);
		$this->load->model('Address_Model');
		$this->load->model('Authority_Model');
		$this->load->helper('security');
	 }
	public function index()
	{
		$this->load->view('admin/add_authority');
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
           		var_dump(validation_errors());
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
				$result = $this->Authority_Model->add($data);
				if ($result) 
				{
					$data['message'] = '<script type="text/javascript">
	                                    var r = alert("successful!");
	                                    if (r == true) {
	                                        window.location = "' . base_url('dashboard/authority') . '";
	                                    } else {
	                                        window.location = "' . base_url('dashboard/authority') . '";
	                                    }
	                                </script>';
	                $this->load->view('admin/add_authority',$data);                
				}
			}
        }
        public function view()
        {
        	/*$data['result'] = $this->Authority_Model->view_all();
			
			$this->load->view('admin/view_authority',$data);*/

			$data =$this->Authority_Model->view_all();
			$datas = $this->Address_Model->view();
			$this->load->library('table');
	 		$this->table->set_heading('Name',  'Description','ward' ,'DOB','Gender','Address','Place','mobile no','Remove',anchor(base_url('dashboard/authority/add'),'add',['class' => 'button normal-button']));
	 		
	 		/*$result = array_merge($data, $datas);
	 		var_dump($result);*/
	 		if(!empty($data))
	 		{
		 		foreach ($data as $key => $value)
		 		{
		 			foreach ($datas as $key => $values)
		 			{
		 				if($values->id == $value->id )
				 			$this->table->add_row
				 								(
								 					$value->name,
								 					$value->designation,
								 					$value->wardno,
								 					$values->dob,
													$values->gender,
													$values->address ,
													$values->place,
													$values->mobileno,
									 				'<a href="'. base_url('dashboard/authority/delete/'.$value->address_id).'">delete<i class="fa fa-trash-o"></i></a>'
				 		
				 								);
				 		}						
				 	
				 								
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
            $data['message'] = 'No data Found
                                    <a href="'.base_url('dashboard/authority/add').'">add</a>';
        }
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