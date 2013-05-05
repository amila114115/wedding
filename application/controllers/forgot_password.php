<?php 
class Forgot_password extends CI_Controller{
	//function __construct(){
	//	parent::__construct();
		
	//}
    
        function f_password(){
             $msg = array('email_error' => "");
            $this->load->view('forgot_password',$msg);
        }
        function chicking(){
             $this->form_validation->set_rules('f_email','Email Address','trim|required|valid_email');
            // $this->form_validation->set_rules('f_password','Password','trim|required|min_length[4]|max_length[32]');
            //  $this->form_validation->set_rules('f_password2','Password Comfirmation','trim|required|matches[f_password]');
             
             if ($this->form_validation->run()== FALSE )
    {
        $this->load->view('forgot_password');
               
    }  else {
        
    $this->db->where('email',$this->input->post('f_email'));
   $this->db->where('confirmed','user=1' );
    $query1 =$this->db->get('user');
    
    
     $this->db->where('email',$this->input->post('f_email'));
   $this->db->where('confirmed','sp=1' );
    $query2 =$this->db->get('serviceprovider');
    
    if ($query1->num_rows == 1 ||$query2->num_rows == 1){
        if ($query1->num_rows == 1){
           foreach ($query1->result() as $row)
{
  $confirmcode = $row->confirm_code;
 $username =  $row->username;
 
} 

        }
         
 if ($query2->num_rows == 1){
           foreach ($query2->result() as $row)
{
  $confirmcode = $row->confirm_code;
 $username =  $row->username;
 
} 

        }
        
        
 $msg = "
 Confirm Your Email
 Click the link below to verify your account
 http://localhost/Wedding/index.php/forgot_password/confirmed?username=$username&code=$confirmcode
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
		$this->email->to($this->input->post('f_email'));
		$this->email->subject('Forgot Password');
		$this->email->message($msg);

		if ($this->email->send()) {
		  	echo '<br><br>';
		  	echo 'To reset your Passwors please visit your Email <br> ';
                       
                        echo '<a href=\'https://'.$this->input->post('f_email').'\'> click here to goto mail Address</a>';
                        $this->load->view('main');
                      
                     
                        return TRUE;
		  }  
		  else{
                      
		  	show_error($this->email->print_debugger());
		  }
	}
  else{
      $msg = array('email_error' => "your Email not exsest. please enter correct email");
      $this->load->view('forgot_password',$msg);
      
  }
        }
    
    
 

}



function confirmed(){
    
    
           $username_c = $_GET['username'];
           $code_c = $_GET['code'];
            
            $this->session->set_flashdata('username', $username_c);
                 
    $this->db->where('username', $_GET['username']);
       $this->db->where('confirmed','user=1' );
        $qq = $this->db->get('user');
        if ($qq->num_rows == 1){
         
            $this->db->where('username',$username_c);
                        $query =$this->db->get('user');

                       foreach ($query->result() as $row)
                    {
                      $db_code =  $row->confirm_code;


                    }  
                    if($code_c==$db_code)
                    {
                        $data = array(
               'username' => $_GET['username']
           );
                        

                        
                        $this->load->view('reenter_password',$data);

                            }
            
            
           
        }         
            
            
                        
 else {
                            $this->db->where('username',$username_c);
                           $query =$this->db->get('serviceprovider');

                          foreach ($query->result() as $row)
                       {
                         $db_code =  $row->confirm_code;


                       }  
                       if($code_c==$db_code)
                       {
                           
                           $data = array(
               'username' => $_GET['username'],
                'name' => 'sp'
           );

                           $this->load->view('reenter_password',$data);

                        }else{

     
                                         echo 'Your User name and code not match'; 
                                }
 }
        
        
}


function password_view(){
    $this->load->view('reenter_password');
       }
       
       function enter_password(){
           
       
      $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('password2','Password Comfirmation','trim|required|matches[password]');
    
    if ($this->form_validation->run()== FALSE )
    {
         $data = array(
               'username' => $_GET['username']
                
           );
        $this->load->view('reenter_password',$data);
               
    }
 else {
     
     
           
            $data = array(
               'password' => md5(sha1(md5($this->input->post('password')))),
              
            );
           // $username = $this->session->flashdata('username');
            
            $this->db->where('username', $_GET['username']);
      $this->db->where('confirmed','user=1' );
        $qq = $this->db->get('user');
        if ($qq->num_rows == 1){
          $username_c = $_GET['username'];
                   $this->db->where('username',$username_c);
                   $this->db->update('user', $data);     


                       redirect('main_page/login_view');
           
        }  else {
             $username_c = $_GET['username'];
                   $this->db->where('username',$username_c);
                   $this->db->update('serviceprovider', $data);     


                       redirect('main_page/login_view');
        }
            
            
            
                                  
            
           
 
       }
       } 
        }
   
