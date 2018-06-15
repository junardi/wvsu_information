<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {    

	function __construct() 
	{
		parent::__construct();    
		if($this->session->userdata("user_id") == null) 
		{ 
			redirect("login");
		} 
	}

	public function index()
	{
		$data = array();
		$data['main_content'] = 'home_view';
 		$this->load->view('template/content', $data);
	}   

	public function view_session() 
	{   

		echo "<pre>"; 
			print_r($this->session->userdata()); 
		echo "</pre>";
	}   

	public function create_event() 
	{  
		$data = [];   

		$datestring = "%Y-%m-%d %h:%i:%s";
		$time = time();
		$date_now = mdate($datestring, $time);      

		$event_data = array( 
			'event' => $this->input->post('event'), 
			'user_id' => $this->session->userdata("user_id"), 
			'date_created' => $date_now
		);  

		$create_event = $this->process_model->create_event($event_data);   

		if($create_event) { 
			$data['status'] = true;
		}  else { 
			$data['status'] = false;
		}  

		echo json_encode($data);
	}   

	public function get_wall() 
	{    

		$wall_data = array();

		// below for wall events
		$get_all_events = $this->process_model->get_all_events();          
		for($i = 0; $i < count($get_all_events); $i++) { 
			
			$get_all_events[$i]['wall_type'] = "Event";      
			if($get_all_events[$i]['user_id'] == $this->session->userdata('user_id')) {   
				$get_all_events[$i]['is_current_user'] = true;
			} else { 
				$get_all_events[$i]['is_current_user'] = false;
			}  

			$event_id = $get_all_events[$i]['event_id'];   
			$get_all_event_comments_by_event_id = $this->process_model->get_all_event_comments_by_event_id($event_id);			
			$get_all_events[$i]['comments'] = $get_all_event_comments_by_event_id;  
			for($a = 0; $a < count($get_all_events[$i]['comments']); $a++) { 
				if($get_all_events[$i]['comments'][$a]['user_id'] == $this->session->userdata('user_id')) { 
					$get_all_events[$i]['comments'][$a]['is_current_user'] = true;
				} else {  
					$get_all_events[$i]['comments'][$a]['is_current_user'] = false;
				}
			}   
		}       

		// below for wall projects 
		$get_all_projects = $this->process_model->get_all_projects();
		for($i = 0; $i < count($get_all_projects); $i++) { 
			$get_all_projects[$i]['wall_type'] = "Project";      
			if($get_all_projects[$i]['user_id'] == $this->session->userdata('user_id')) {   
				$get_all_projects[$i]['is_current_user'] = true;
			} else { 
				$get_all_projects[$i]['is_current_user'] = false;
			}		   

			$project_id = $get_all_projects[$i]['project_id'];   
			$get_all_project_comments_by_project_id = $this->process_model->get_all_project_comments_by_project_id($project_id);			
			$get_all_projects[$i]['comments'] = $get_all_project_comments_by_project_id;  
			for($a = 0; $a < count($get_all_projects[$i]['comments']); $a++) { 
				if($get_all_projects[$i]['comments'][$a]['user_id'] == $this->session->userdata('user_id')) { 
					$get_all_projects[$i]['comments'][$a]['is_current_user'] = true;
				} else {  
					$get_all_projects[$i]['comments'][$a]['is_current_user'] = false;
				}
			}   	
		}          
		
		// merge 
		$wall_data = array_merge($get_all_events, $get_all_projects);

		// echo "<pre>";
		// 	print_r($get_all_projects);  
		// echo "</pre>";

		echo json_encode($wall_data);
	}     

	public function create_event_comment() 
	{ 
		$data = array();   
		$event_comment_data = array( 
			'comment' => $this->input->post('comment'), 
			'event_id' => $this->input->post('event_id'), 
			'user_id' => $this->session->userdata("user_id")
		);   

		$create_event_comment = $this->process_model->create_event_comment($event_comment_data);   
		if($create_event_comment) {
			$data['status'] = true;
		} else { 
			$data['status'] = false;
		} 

		echo json_encode($data);
	}  

	public function delete_event() 
	{   

		$data = array();
		$event_id = $this->input->get('event_id');      
		$delete_event = $this->process_model->delete_event($event_id);   

		if($delete_event) 
		{ 
			$data['status'] = true;      
		} else {
			$data['status'] = false;
		}       

		echo json_encode($data);
	}    

	public function delete_event_comment() 
	{
		$data = array();    
		$event_comment_id = $this->input->get('event_comment_id');   
		$delete_event_comment = $this->process_model->delete_event_comment($event_comment_id);   

		if($delete_event_comment) 
		{
			$data['status'] = true;
		} else 
		{
			$data['status'] = false;
		}   

		echo json_encode($data);
	}      

	public function create_project() 
	{
		$data = array();   

		$data = [];   

		$datestring = "%Y-%m-%d %h:%i:%s";
		$time = time();
		$date_now = mdate($datestring, $time);      

		$project_data = array( 
			'project' => $this->input->post('project'), 
			'user_id' => $this->session->userdata("user_id"), 
			'date_created' => $date_now
		);  

		$create_project = $this->process_model->create_project($project_data);   

		if($create_project) { 
			$data['status'] = true;
		}  else { 
			$data['status'] = false;
		}  

		echo json_encode($data);  
	}

	public function create_project_comment() 
	{ 
		
		$data = array();       
		$project_comment_data = array( 
			'comment' => $this->input->post('comment'), 
			'project_id' => $this->input->post('project_id'), 
			'user_id' => $this->session->userdata("user_id")
		);   

		$create_project_comment = $this->process_model->create_project_comment($project_comment_data);     
		if($create_project_comment) {
			$data['status'] = true;
		} else { 
			$data['status'] = false;
		} 

		echo json_encode($data);
	}  

	public function delete_project() 
	{   

		$data = array();
		$project_id = $this->input->get('project_id');      
		$delete_project = $this->process_model->delete_project($project_id);   

		if($delete_project) 
		{ 
			$data['status'] = true;      
		} else {
			$data['status'] = false;
		}       

		echo json_encode($data);
	}    

	public function delete_project_comment() 
	{
		$data = array();    
		$project_comment_id = $this->input->get('project_comment_id');   
		$delete_project_comment = $this->process_model->delete_project_comment($project_comment_id);   

		if($delete_project_comment) 
		{
			$data['status'] = true;
		} else 
		{
			$data['status'] = false;
		}   

		echo json_encode($data);
	}   
		

}  







