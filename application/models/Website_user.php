<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website_user extends CI_Model {



public function Mobile_invoice_number(){

$q=$this->db->select('*')
      ->from('website_mobile_report')
      ->order_by('policy_numbers',"desc")
      ->get();
     return $q->row('policy_numbers');

}

public function Mobile_customer_id(){
$q=$this->db->select('*')
      ->from('website_mobile_report')
      ->order_by('customer_id',"desc")
      ->get();
     return $q->row('customer_id');

}

public function Mobile_invoice_no(){
$q=$this->db->select('*')
      ->from('website_mobile_report')
      ->order_by('invoice_no',"desc")
      ->get();
     return $q->row('invoice_no');

}

function insert($data){
    $this->db->insert('website_mobile_report',$data);
    return true;
}

public function website_Mobile_selectquery($id){
      $q=$this->db->select('*')
      ->from('website_mobile_report')
      ->where('id',$id)
      ->get();
      
      return $q->row();
      }
      

}