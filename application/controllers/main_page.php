<?php


class main_page extends CI_Controller {
    
    function index(){
        $title = "Home";
        $this->load->view('main',$title);
      
    }
    function contact_us(){
        $this->load->view('contact_us');
    }


    function userDash(){
        $title = "User Dash";
         $this->load->view('userDash',$title);
    }
    function spPage(){
        $this->load->view('spPage');
    }

    function register_user(){
         $msg = array('msg_for_database' => "",'msg_for_email' => "",'msg_for_username'=>''); 
         $this->load->view('register_user',$msg);
    }
    
    function register_sp(){
         $msg = array('msg_for_database' => "",'msg_for_email' => "",'msg_for_username'=>''); 
         $this->load->view('register_sp',$msg);
    }
    
    function login_view(){
             $msg = array('msg_for_login' => "");
            $this->load->view('login',$msg);
    }

    
    function create_user(){
        
        $this->load->library('form_validation');
     
    $this->form_validation->set_rules('fname','Frist name','trim|required');
    $this->form_validation->set_rules('lname','Last name','trim|required');
    $this->form_validation->set_rules('email','Email Address','trim|required|valid_email');
    $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
    $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('password2','Password Comfirmation','trim|required|matches[password]');
    $this->form_validation->set_rules('address_line1','Address','');
     $this->form_validation->set_rules('address_line2','Address','');
    $this->form_validation->set_rules('location','Location','trim|required');
    $this->form_validation->set_rules('contact_number','Contact number','numeric|max_length[12]');
    
    if ($this->form_validation->run()== FALSE )
    {
       $msg = array('msg_for_database' => "",'msg_for_email' => "",'msg_for_username'=>''); 
       $this->load->view('register_user',$msg);
               
    }
 else {
   
  
     $confirmcode = rand(1000,500000).'xyntax'.rand(1000,500000).time();
   
       $this->load->model('demo_model');  
   $chick_username_user = $this->demo_model->chick_username_user(); 
    $chick_email_user = $this->demo_model->chick_email_user();
    $chick_username_sp = $this->demo_model->chick_username_sp(); 
    $chick_email_sp = $this->demo_model->chick_email_sp();
     if ($chick_username_user && $chick_username_sp){
       if ($chick_email_user && $chick_email_sp) {
        if ($query = $this->demo_model->user($confirmcode))
        {
         $username = $this->input->post('username');
         $fname = $this->input->post('fname');
         $lname =  $this->input->post('lname');
         $email = $this->input->post('email');
          
           // $this->email_confirmation();
             $this->session->set_flashdata('confirmcode', $confirmcode);
              $this->session->set_flashdata('username', $username);
               $this->session->set_flashdata('fname', $fname);
                $this->session->set_flashdata('lname', $lname);
                 $this->session->set_flashdata('email', $email);
              redirect('email_confirmation_for_user/send'); 
           // $this->index();
          // $this->load->view('main');
          
        }
 else {
         $msg = array('msg_for_database' => "database problem",'msg_for_email' => "",'msg_for_username'=>''); 
     $this->load->view('register_user',$msg);
 }
 }
 else {
     $msg = array('msg_for_database' => "",'msg_for_email' => "<p>Email Address is  is alredy used. please use another Email</p>",'msg_for_username'=>''); 
 
    $this->load->view('register_user',$msg);
 }
   }  else {
       $msg = array('msg_for_database' => "",'msg_for_email' => "",'msg_for_username'=>'<p>user name is alredy exit</p>'); 
     
       $this->load->view('register_user',$msg);
       
   }
       
    }
    }   


    function login(){
    $this->load->model('demo_model');
$q = $this->demo_model->validation_user();
if ($q){
                $this->db->where('userName',$this->input->post('username'));
                 $query =$this->db->get('user');
    
   foreach ($query->result() as $row)
{
  $fname =  $row->fName;
  $lname =  $row->lName;
  
}  

$this->session->set_flashdata('username', $this->input->post('username'));
$this->session->set_flashdata('lname', $lname);
$this->session->set_flashdata('user_is_login', TRUE);
    $data = array(
        'userName' => $this->input->post('username'),
         'fname' => $fname,
        'lname' => $lname,
        'user_is_login' => TRUE
    );
    $this->session->set_userdata($data);
    redirect('main_page/userDash');
    
}  else {
    
                         $this->load->model('demo_model');
                        $q2 = $this->demo_model->validation_sp();
            if ($q2){
                        $this->db->where('userName',$this->input->post('username'));
                        $query =$this->db->get('serviceprovider');
    
                           foreach ($query->result() as $row)
                            {
                          $companyName =  $row->companyName;
               

                        }  
                            $data = array(
                                'companyName' => $companyName,
                               
                                'sp_is_login' => TRUE
                            );
                            $this->session->set_userdata($data);
                            redirect('main_page/spPage');


                            }else{
                                $msg = array('msg_for_login' => "<p>please enter correct username and password</p>");
                                 $this->load->view('login',$msg);
                                
                            }
  // echo '<br><br><div class="alert alert-block"> <h4>Wrong input<a href="" data-toggle="modal" class="btn btn-large pull-right">Continue</a> </h4><p>please enter correct username and password</p></div>';
   
}
     
    }
    
    function create_sp(){
        
        $this->load->library('form_validation');
     
    $this->form_validation->set_rules('companyName','Frist name','trim|required');
    $this->form_validation->set_rules('email','Email Address','trim|required|valid_email');
    $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
    $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('password2','Password Comfirmation','trim|required|matches[password]');
    $this->form_validation->set_rules('location','Location','trim|required');
    $this->form_validation->set_rules('office_number','Tell number','trim|required|numeric||max_length[12]');
     $this->form_validation->set_rules('mobile_number','Tell number','trim|numeric|max_length[12]');
     $this->form_validation->set_rules('address_line1','Address','');
     $this->form_validation->set_rules('address_line2','Address','');
    if ($this->form_validation->run()== FALSE )
    {
       $msg = array('msg_for_database' => "",'msg_for_email' => "",'msg_for_username'=>''); 
        $this->load->view('register_sp',$msg);
               
    }
 else {
   
  
     $confirmcode = rand(1000,500000).'xyntax'.rand(1000,500000).time();
   
       $this->load->model('demo_model');  
   $chick_username_sp = $this->demo_model->chick_username_sp(); 
    $chick_email_sp = $this->demo_model->chick_email_sp();
    $chick_username_user = $this->demo_model->chick_username_user(); 
    $chick_email_user = $this->demo_model->chick_email_user();
     if ($chick_username_sp && $chick_username_user){
       if ($chick_email_sp && $chick_email_user) {
        if ($query = $this->demo_model->sp($confirmcode))
        {
         $username = $this->input->post('username');
         $companyName = $this->input->post('companyName');
         $email = $this->input->post('email');
          
           // $this->email_confirmation();
             $this->session->set_flashdata('confirmcode', $confirmcode);
              $this->session->set_flashdata('username', $username);
               $this->session->set_flashdata('companyName', $companyName);
                 $this->session->set_flashdata('email', $email);
              redirect('email_confirmation_for_sp/send'); 
           // $this->index();
          // $this->load->view('main');
          
        }
 else {
         $msg = array('msg_for_database' => "database problem",'msg_for_email' => "",'msg_for_username'=>''); 
     $this->load->view('register_user',$msg);
 }
 }
 else {
     $msg = array('msg_for_database' => "",'msg_for_email' => "<p>Email Address is  is alredy used. please use another Email</p>",'msg_for_username'=>''); 
 
    $this->load->view('register_sp',$msg);
 }
   }  else {
       $msg = array('msg_for_database' => "",'msg_for_email' => "",'msg_for_username'=>'<p>user name is alredy exit</p>'); 
     
       $this->load->view('register_sp',$msg);
       
   }
       
    }
    } 
    
  
    public function logout(){
       //  echo '<br><br><br><br><br>amila';
         $this->session->set_userdata('is_login',FALSE);
     $this->session->sess_destroy();
       redirect('main_page/index');

    }
  
     function contact_us_to_db(){
     $this->load->model('demo_model');
     
     $q = $this->demo_model->contact_us_to_db();
     if ($q){
     redirect('main_page/index');
    }
    
    
}
}