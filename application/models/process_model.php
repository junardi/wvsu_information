<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process_model extends CI_Model { 

    function __construct() 
    {
		parent::__construct();
    }  
    
    function sign_up($data) 
    {
        $query = $this->db->insert('users', $data);   
        if($query) 
        {
            return true;
        } 
        else 
        {
            return false;
        }
    }   

    public function check_login($username, $password)  
    {  
		$this->db->where('username', $username);	  
		$this->db->where('password', $password);  

		$query = $this->db->get("users");  
		return $query->result_array();
    }   
    
    public function get_users() 
    {  
        $this->db->where('role', 'user');  
        $this->db->where('approve', 0); 
        $query = $this->db->get("users");   
        return $query->result();
    }   

    public function delete_user($user_id) 
    { 
        $this->db->where('user_id', $user_id);    
        $query = $this->db->delete('users');  
        if($query) 
        { 
            return true;
        } else 
        {   
            return false;
        }
    }   
      
    public function approve_user($user_id) 
    {  
        $this->db->where('user_id', $user_id);   
        $this->db->set('approve', 1);  
        $query = $this->db->update('users');  
        if($query) 
        { 
            return true;
        } else 
        {   
            return false;
        }
    }  

    public function create_event($data) 
    {
        $query = $this->db->insert('events', $data);   
        if($query) 
        { 
            return true;
        } 
        else 
        {
            return false;
        }
    }   

    public function get_all_events() 
    {  
        $this->db->select('*');  
        $this->db->from('events');  
        $this->db->join('users', 'users.user_id = events.user_id');
        $query = $this->db->get();     
        return $query->result_array();
    }   

    public function create_event_comment($data) 
    { 
        $query = $this->db->insert('event_comments', $data);   
        if($query)  
        {
            return true;
        } 
        else 
        {
            return false;
        }
    }   

    public function get_all_event_comments_by_event_id($event_id) 
    {
        $this->db->select('*');
        $this->db->where('event_id', $event_id);  
        $this->db->from('event_comments');   
        $this->db->join('users', 'users.user_id = event_comments.user_id');   
        $query = $this->db->get();   
        return $query->result_array();
    }    


    public function delete_event($event_id) 
    {
        $query1 = $this->db->delete('events', array('event_id' => $event_id)); 
        $query2 = $this->db->delete('event_comments', array('event_id' => $event_id)); 
        if($query1 && $query2) {   
            return true;
        } else { 
            return false;
        }
    }   

    public function delete_event_comment($event_comment_id) 
    { 
        $query = $this->db->delete('event_comments', array('event_comment_id' => $event_comment_id));  
        if($query) {   
            return true;
        } else {   
            return false;
        }
    }   

    public function create_project($data) 
    {
        $query = $this->db->insert('projects', $data);   
        if($query) 
        { 
            return true;
        } 
        else 
        {
            return false;
        }
    }     

    public function get_all_projects() 
    {  
        $this->db->select('*');  
        $this->db->from('projects');  
        $this->db->join('users', 'users.user_id = projects.user_id');
        $query = $this->db->get();     
        return $query->result_array();
    }   

    public function create_project_comment($data) 
    { 
        $query = $this->db->insert('project_comments', $data);   
        if($query)  
        {
            return true;
        } 
        else 
        {
            return false;
        }
    }     

    public function get_all_project_comments_by_project_id($project_id) 
    {
        $this->db->select('*');
        $this->db->where('project_id', $project_id);  
        $this->db->from('project_comments');   
        $this->db->join('users', 'users.user_id = project_comments.user_id');   
        $query = $this->db->get();   
        return $query->result_array();
    }    

    public function delete_project($project_id) 
    {
        $query1 = $this->db->delete('projects', array('project_id' => $project_id)); 
        $query2 = $this->db->delete('project_comments', array('project_id' => $project_id)); 
        if($query1 && $query2) {   
            return true;
        } else { 
            return false;
        }
    }   

    public function delete_project_comment($project_comment_id) 
    { 
        $query = $this->db->delete('project_comments', array('project_comment_id' => $project_comment_id));  
        if($query) {   
            return true;
        } else {   
            return false;
        }
    }    
    
}   







