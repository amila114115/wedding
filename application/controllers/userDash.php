<?php

class userDash extends CI_Controller {
public $load = "";
   
    
    
    function user() {
    $title = "User Dash";
    $this->load->view('userDash',$title);
    }   
    
     private function check_isvalidated(){
       $is_loggin = $this->session->userdata('user_is_loggin');
       if(!isset($is_loggin) || $is_loggin != TRUE ){
          echo 'You  can not access this page';
           redirect('demo/index');
         //   $this->load->view('login');
            //die();
    }
    }
    
}
