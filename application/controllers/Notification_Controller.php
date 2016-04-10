<?php 

/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Notification_Controller extends Check_Logged
{
	
 public	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form','menu']);
		$this->load->library(['form_validation']);
		
	    $this->load->Model('Notification_Model'); 
	}
	public function index()
	{
		$this->load->view('admin/add_notification');
	}
  public function add()
    {
      
       $this->form_validation->set_rules('notification', 'Notification','required');
		if ($this->form_validation->run() === FALSE) {
			
			$this->load->view('admin/add_notification');
		}
		else
		{
	       $notification= $this->input->post('notification');
			$data = [
			    'notification'=>$notification
	
			];
			if($this->Notification_Model->add($data) != FALSE)
			    {
					redirect(base_url('Notification_Controller/view'));
			    }
				else
					$this->load->view('admin/add_notification');
			
		}
	}
	 public function view()
		{
           $data= $this->Notification_Model->view_all();

		   
			$this->load->library('table');
	 		$this->table->set_heading('Notification','Remove',anchor(base_url('dashboard/notification/add'),'add',['class' => 'button normal-button']));
	 		
	 		if(!empty($data))
	 		{
		 		foreach ($data as $key => $value)
		 		{
			
		 			$this->table->add_row
		 								(
						 					$value->notification,
							 				'<a href="'. base_url('dashboard/notification/delete/'.$value->id).'">delete<i class="fa fa-trash-o"></i></a>'
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
                                    <a href="'.base_url('dashboard/notification/add').'">add</a>';
        }
		$this->load->view('admin/view_notification',$data);
		}
	 public function delete($id)
	    {
	    	var_dump($id);	
	    	
	    	$delete=$this->Notification_Model->delete($id);
	    	if ($delete) 
	    	{
	    		redirect(base_url('Notification_Controller/view'));
	    	}
	    }
}

 ?>
