<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {  

	function __construct() 
	{
		parent::__construct();    
		if($this->session->userdata("user_id") != null) { 
			redirect("home");
		} 
	}   

	public function index()
	{
		$this->load->view('login_view'); 
	}  
	
	public function process_login() 
	{
		$username = $this->input->post("username");  
		$password = md5($this->input->post("password"));    

		$check_login = $this->process_model->check_login($username, $password);  

		if($check_login != null) { 
			$this->session->set_userdata($check_login[0]);	   
			redirect('home');	
		} else { 
			$error = ' 
				<div class="error_login">  
					<p>Username or password is incorrect</p>
				</div>
			';   

			$this->session->set_flashdata("error", $error);  

			redirect("login");

		}      
	}  

	function hashing() 
	{
		echo md5("danica@*05");
	}   




}
