<?php 

/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Employee_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->helper(['url','form','menu']);
		$this->load->library(['form_validation']);
		$this->load->model('Upload_Model');

		$this->load->model('Address_Model');
		$this->load->model('Employee_Model');



	}
	public function index()
	{
		$this->load->view('admin/add_employee');
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
			$config['upload_path'] = getcwd().'/upload/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['remove_spaces'] = true;
			$this->load->library('upload', $config);
		// checking news is upload or not
			if (!$this->upload->do_upload('myfiles')) 
			{ 
				$error = ['error' => $this->upload->display_errors()];
				$this->load->view('admin/add_employee', $error);
			}
			else
			{
				$datas = $this->upload->data();
			
			
				//passing name and type to the  model
				$data = [
							'name' => $datas['file_name'],
							'type' => $datas['file_type'],
						];
				$id =$this->Upload_Model->add($data);

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
					'mobileno'=>$phone,

				];

				$address_id = $this->Address_Model->add($data);

				if ($address_id != FALSE) {
					
					$data = [
						'name' => $name,
						'designation' => $designation, 
						'address_id' => $address_id,
						'files_id'=>$id
					];
						$result = $this->Employee_Model->add($data);
				if ($result) 
				{
					$data['message'] = '<script type="text/javascript">
	                                    var r = alert("successful!");
	                                    if (r == true) {
	                                        window.location = "' . base_url('dashboard/employee') . '";
	                                    } else {
	                                        window.location = "' . base_url('dashboard/employee') . '";
	                                    }
	                                </script>';
	                $this->load->view('admin/add_employee',$data);                
				}
			}
		}
	}


	}



	public function view()
	{

		/*$data['result'] = $this->Employee_Model->view_all();
		$data['address'] = $this->Address_Model->view();
		$this->load->view('admin/view_employees',$data);*/
		$data =$this->Employee_Model->view_all();
		$datas = $this->Address_Model->view();
		$this->load->library('table');
	 	$this->table->set_heading('Name','designation ','DOB','Gender','Address','Place','mobile no','Remove',anchor(base_url('dashboard/employee/add'),'add',['class' => 'button normal-button']));
	 		
	 		/*$result = array_merge($data, $datas);
	 		var_dump($result);*/
	 		if(!empty($data))
	 		{
		 		foreach ($data as $key => $value)
		 		{
		 			foreach ($datas as $key => $values)
		 			{
	 			//	var_dump($datas);
		 				if($values->id == $value->address_id ){
				 			$this->table->add_row
				 								(
								 					$value->name,
								 					$value->designation,
								 					$values->dob,
													$values->gender,
													$values->address ,
													$values->place,
													$values->mobileno,
									 				'<a href="'. base_url('dashboard/employee/delete/'.$value->id).'">delete<i class="fa fa-trash-o"></i></a>'
				 		
				 								);
				 		}	
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
                                    <a href="'.base_url('dashboard/employee/add').'">add</a>';
        }
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
