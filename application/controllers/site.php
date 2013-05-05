<?php

class Site extends CI_Controller{

    public $load = "";
      function __construct()
    {
        parent::__construct();
       $this->check_isvalidated();
    }
    
    
     public function index(){
      if (isset($_SESSION['username'])) {
        redirect('main_page/index');
}
     //   $this->load->view('main');
  //  echo "<li><a href='site/logout'>Logout</a></li>";
        
    }
    
    function tem(){
        $this->load->view('tem');
    }


    
     public function logouts(){
        // echo '<br><br><br><br><br>amila';
        // $this->session->set_userdata('is_login',FALSE);
    $this->session->sess_destroy();
       redirect('main_page/login_view');

    }
    
    private function check_isvalidated(){
       $is_loggin = $this->session->userdata('is_loggin');
       if(!isset($is_loggin) || $is_loggin != TRUE ){
          echo 'You  can not access this page';
           redirect('demo/index');
         //   $this->load->view('login');
            //die();
    }
    }
    
    }