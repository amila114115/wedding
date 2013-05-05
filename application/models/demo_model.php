<?php

class Demo_model extends CI_Model{
    
    
    # for user
     function validation_user()
    {
        $this->db->where('userName', $this->input->post('username'));
        $this->db->where('password',md5(sha1(md5($this->input->post('password')))));
        $this->db->where('confirmed','user=1' );
        $q = $this->db->get('user');
        
        if ($q->num_rows == 1){
            return TRUE;
        }
        
    }
    
    function user($confirmcode){
      
        $insert_data = array(
            'fName' => $this->input->post('fname'),
            'lName' => $this->input->post('lname'),
            'userName' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => md5(sha1(md5($this->input->post('password')))),
            'addressL1' => $this->input->post('address_line1'),
            'addressL2' => $this->input->post('address_line2'),
            'location' => $this->input->post('location'),
            'startDate' => $this->input->post('date_start'),
            'startMonth' => $this->input->post('month_start'),
            'startYear' => $this->input->post('year_start'),
            'endDate' => $this->input->post('date_end'),
            'endMonth' => $this->input->post('month_end'),
            'endYear' => $this->input->post('year_end'),
            'contactNo' => $this->input->post('contact_number'),
            'confirmed' => '0',
            'confirm_code' =>  $confirmcode,
        );
        
        $insert = $this->db->insert('user',$insert_data);
        return $insert;
        
    }
    
    
    function chick_username_user(){
         $this->db->where('username', $this->input->post('username'));
       $this->db->where('confirmed','user=1' );
        $qq = $this->db->get('user');
        if ($qq->num_rows == 0){
          //  echo 'amila';
            return TRUE;
        }
        
    }
    
     function chick_email_user(){
         $this->db->where('email', $this->input->post('email'));
      $this->db->where('confirmed','user=1' );
        $qq = $this->db->get('user');
        if ($qq->num_rows == 0){
          //  echo 'amila';
            return TRUE;
        }
        
    }
    
    
   # for servicr prividers 
    
     function validation_sp()
    {
        $this->db->where('userName', $this->input->post('username'));
        $this->db->where('password',md5(sha1(md5($this->input->post('password')))));
        $this->db->where('confirmed','sp=1' );
        $q = $this->db->get('serviceprovider');
        
        if ($q->num_rows == 1){
            return TRUE;
        }
        
    }
   
    
    function sp($confirmcode){
      
        $insert_data = array(
            'companyName' => $this->input->post('companyName'),
            'userName' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => md5(sha1(md5($this->input->post('password')))),
            'addressL1' => $this->input->post('address_line1'),
            'addressL2' => $this->input->post('address_line2'),
            'location' => $this->input->post('location'),
            'mobile' => $this->input->post('mobile_number'),
            'office' => $this->input->post('office_number'),
            'confirmed' => '0',
            'confirm_code' =>  $confirmcode,
        );
        
        $insert = $this->db->insert('serviceprovider',$insert_data);
        return $insert;
        
    }
    
    
    function chick_username_sp(){
         $this->db->where('username', $this->input->post('username'));
      // $this->db->where('confirmed','1' );
        $qq = $this->db->get('serviceprovider');
        if ($qq->num_rows == 0){
          //  echo 'amila';
            return TRUE;
        }
        
    }
    
     function chick_email_sp(){
         $this->db->where('email', $this->input->post('email'));
      $this->db->where('confirmed','sp=1' );
        $qq = $this->db->get('serviceprovider');
        if ($qq->num_rows == 0){
          //  echo 'amila';
            return TRUE;
        }
        
    }
    function contact_us_to_db(){
        $insert_data = array(
            'fName' => $this->input->post('fname'),
            'lName' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message')
            );
        
        $insert = $this->db->insert('contactus',$insert_data);
        return $insert;
    }
    
    
    
    
    
    
    
}
