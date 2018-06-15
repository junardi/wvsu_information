<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {  

	function __construct() 
	{
		parent::__construct();    
		if($this->session->userdata("user_id") != null) { 
			redirect("home");
		} 
	}  

	public function index()
	{
		$this->load->view('signup_view');
	}   

	public function process_signup() 
	{   
		
		// echo "<pre>";
		// 	print_r($this->input->post());
		// echo "</pre>";
		
		$data = array();   

		$user_data = [];   
		$user_data['email'] = $this->input->post('email');     
		$user_data['username'] = $this->input->post('username');     
		$user_data['password'] = md5($this->input->post('password'));  
		$user_data['full_name'] = $this->input->post('full_name');
		$user_data['date_of_birth'] = $this->input->post('date_of_birth'); 
		$user_data['gender'] = $this->input->post('gender');   
		$user_data['civil_status'] = $this->input->post('civil_status');  
		$user_data['occupation'] = $this->input->post('occupation');
		$user_data['contact_no']	= $this->input->post('contact_no');  
		$user_data['year_graduated'] = $this->input->post('year_graduated');  
		$user_data['course'] = $this->input->post('course');   
		$user_data['role'] = 'user';  
		$user_data['approve'] = 0;     

		$sign_up = $this->process_model->sign_up($user_data);   

		if($sign_up) 
		{   
			$this->session->set_flashdata("signup_message", "<div class='container-fluid signup_confirmation'><div class='col-xs-12 success'><p>Successfully created your account. Will sent you an email once approved.</p></div></div>");
		} 
		else 
		{
			$this->session->set_flashdata("signup_message", "<div class='container-fluid signup_confirmation'><div class='col-xs-12 error'><p>Failed creation.</p></div></div>");
		}   

		redirect('login');

	}   

}
