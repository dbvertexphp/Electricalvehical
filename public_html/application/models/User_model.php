<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    
    
    
    function user_registration($data){
    $this->db->insert('Website_users',$data);
    return true;
   }
   function resand_otp($data,$mobile){
       $this->db->set('otp', $data); 
        $this->db->where('mobile', $mobile); 
        $this->db->update('Website_users');  
        return true;
   } 
   
   
    function varify_otp($data,$mobile){
        $array = array('otp' => $data, 'mobile' => $mobile);
         $this->db->select('*');
        $this->db->from('Website_users');
        $this->db->where($array);
       $query = $this->db->get();
       $result = $query->result();
       if ($result == Array ( )) {
       $result = "";
       }
   
      return $result;
    
    }
    
}