<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {    

	function __construct() 
	{
		parent::__construct();    
		if($this->session->userdata("user_id") == null) 
		{ 
			redirect("login");
        }   
        
        include APPPATH . 'third_party/PHPMailer-master/src/Exception.php';  
        include APPPATH . 'third_party/PHPMailer-master/src/PHPMailer.php';  
        include APPPATH . 'third_party/PHPMailer-master/src/SMTP.php';
	}

	public function index()
	{    
        $data = [];   
        $data['main_content'] = 'account_view';  
        $data['users'] = $this->process_model->get_users();   
        $this->load->view('template/content', $data);  
    }       
    
    public function delete() 
    { 
        $user_id = $this->input->get('user_id');  
        $delete_user = $this->process_model->delete_user($user_id);  
        $message = '
            <div class="col-xs-12 the_message error">
                <p>Selected Account deleted.</p>
            </div>
        ';   
		$this->session->set_flashdata("account_message", $message);  
        redirect('account');         
    }  

    public function approve() 
    {  
        $user_id = $this->input->get('user_id');       
        $email = $this->input->get('email');   
      
       
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        try {
            //Server settings
            //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'mark.boribor73@gmail.com';                 // SMTP username
            $mail->Password = 'patanoy@*_*master0505';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('danica.blason@gmail.com', 'WVSU Admin');
            $mail->addAddress($email, 'Recepient');     // Add a recipien
            $mail->addReplyTo('danica.blason@gmail.com', 'WVSU Admin');
           

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'WVSU Information System Account Approval';
            $mail->Body    = '<p>Your account is now approved. You can now login using your account credentials.</p>';
            $mail->AltBody = 'Your account is now approved. You can now login using your account credentials';

            $mail->send();  

            $approve_user = $this->process_model->approve_user($user_id);      
            $message = '
                <div class="col-xs-12 the_message success">
                    <p>Email sent to the account approved.</p>
                </div>
            ';   
            $this->session->set_flashdata("account_message", $message);    

            redirect('account');
            
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }       


    public function alumnis() 
    {  
        $data = array();   
        $data['main_content'] = 'alumni_view';  

        $this->load->view('template/content', $data);
    }


    
}




















