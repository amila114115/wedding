<?php 
class Email_confirmation_for_sp extends CI_Controller{
	//function __construct(){
	//	parent::__construct();
		
	//}
    
	function send(){
           $confirmcode = $this->session->flashdata('confirmcode');
           $username = $this->session->flashdata('username');
            $fname = $this->session->flashdata('companyName');
         $email = $this->session->flashdata('email');
             $msg = "
                 Confirm Your Email
                 Click the link below to verify your account
                 http://localhost/Wedding/index.php/email_confirmation_for_sp/confirmed?username=$username&code=$confirmcode
                 ";
		$config = Array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'tmsrtk5@gmail.com',
		'smtp_pass' => 'kalani90'
		);

		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");

		$this->email->from('tmsrtk5@gmail.com','xyntax');
		$this->email->to($email);
		$this->email->subject('Email Confirm');
		$this->email->message($msg);

		if ($this->email->send()) 
                    {
		  	
                          echo '<br><br>';
		  	  echo 'Account is sucsesfully created.....<br>  please Confirmed the account. <br> ';
                          echo '<a href=\'https://'.$email.'\'> click here to goto mail Address</a>';
                            $this->load->view('main');
                       
                        return TRUE;
		    }  

		  else{
                    //  echo '<br> <br>Email can not send please check email address';
                      $msg = array('msg_for_database' => "",'msg_for_email' => "Email can not send please check email address",'msg_for_username'=>''); 
                         $this->load->view('register_sp',$msg);
		  	//show_error($this->email->print_debugger());
		      }
	}
        
        function confirmed(){
            $username_c = $_GET['username'];
            $code_c = $_GET['code'];
            
             $this->db->where('username',$username_c);
                $query =$this->db->get('serviceprovider');
    
                    foreach ($query->result() as $row)
{
  $db_code =  $row->confirm_code;
  $companyName =  $row->companyName;
  
}  
if($code_c==$db_code)
{
    $data = array(
               'confirmed' => 'sp=1',
              
            );

$this->db->where('username', $username_c);
$this->db->update('serviceprovider', $data);     
    
$msg = array('msg_for_login' => "account is successfully. please login again !!!");
 $this->load->view('login',$msg);
 
 }
 else {
     echo 'Your User name and code not match'; 
     
 }
        
        
}
}