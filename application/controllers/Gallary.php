<?php
require_once(APPPATH.'controllers/Check_Logged.php');
 class Gallary extends Check_Logged
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		//Automatic load model
 		$this->load->helper(['url','form','menu']);
 		$this->load->model('Upload_Model');
 		$this->load->helper('security');
 		$this->load->library(['form_validation']);
 	}
 	public function index()
 	{
 		$this->load->view('admin/add_gallary');
 	}
 	
	//gallery in admin said
	
	//show gallery
    public function view()
        {
        	/*$data['result'] = $this->gallary_Model->view_all();
			
			$this->load->view('admin/view_gallary',$data);*/

			$data =$this->Upload_Model->view();
			
			$this->load->library('table');
	 		$this->table->set_heading('Name','Photo name','Remove',anchor(base_url('dashboard/gallery/add'),'add',['class' => 'button normal-button']));
	 		
	 		/*$result = array_merge($data, $datas);
	 		var_dump($result);*/
	 		if(!empty($data))
	 		{
		 		foreach ($data as $key => $value)
		 		{
				 			$this->table->add_row
				 								(
								 					$value->name,
								 					$value->file_name,
									 				'<a href="'. base_url('dashboard/gallery/delete/'.$value->id).'">delete<i class="fa fa-trash-o"></i></a>'
				 		
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
            $data['message'] = 'No data Found
                                    <a href="'.base_url('dashboard/gallery/add').'">add</a>';
        }
		$this->load->view('admin/view_gallary',$data);
	}
		
	// insetrt news //
	public function image()
	{	//var_dump($_FILES);
		$this->form_validation->set_rules('name','Name','required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/add_gallary');
		}
		else
		{
			//configaration file uploading
			$config['upload_path'] = getcwd().'/upload/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['remove_spaces'] = true;
			$this->load->library('upload', $config);
			// checking news is upload or not
			if (!$this->upload->do_upload('myfiles')) 
			{ 
				$error = ['error' => $this->upload->display_errors()];
				$this->load->view('admin/add_gallary', $error);
			}
			else
			{
				//retrive image name and type
				$datas = $this->upload->data();
				$name = $this->input->post('name');
				
					//passing name and type to the  model
					$data = [
								'name' => $datas['file_name'],
								'type' => $datas['file_type'],
								'file_name'=>$name,
							];
					

					//	redirect(base_url('addNews'));
				
				$result =$this->Upload_Model->add($data);
				if ($result) 
					{
						$data['message'] = '<script type="text/javascript">
		                                    var r = alert("successful!");
		                                    if (r == true) {
		                                        window.location = "' . base_url('dashboard/gallery') . '";
		                                    } else {
		                                        window.location = "' . base_url('dashboard/gallery') . '";
		                                    }
		                                </script>';
		                $this->load->view('admin/add_gallary',$data);                
					}
			}
		}
	}
	
	
	public function delete($id)
	{  
		$id = $this->Upload_Model->delete($id);
		 redirect(base_url('Gallary/view'));;	
	}
	
	

} 
?>