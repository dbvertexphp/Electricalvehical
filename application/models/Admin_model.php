<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


    public function get_admin_data($id){

       $q=$this->db->select('*')
          ->from('db_users')
          ->where(['id'=>$id])
          ->get();
         return $q->row();
  }

  
  public function Vehicle_get_user_data(){
  
    $query = $this->db->order_by('id', 'desc')->get_where('db_report');
    return $query->result();
    
  }

  public function invoice_number(){

    $q=$this->db->select('*')
          ->from('db_report')
          ->order_by('policy_numbers',"desc")
          ->get();
         return $q->row('policy_numbers');
    
  }

  public function customer_id(){
    $q=$this->db->select('*')
          ->from('db_report')
          ->order_by('customer_id',"desc")
          ->get();
         return $q->row('customer_id');
    
  }
  
  public function invoice_no(){
    $q=$this->db->select('*')
          ->from('db_report')
          ->order_by('invoice_no',"desc")
          ->get();
         return $q->row('invoice_no');
    
  }


function insert($data){
    $this->db->insert('db_report',$data);
    return true;
}

public function selectquery($id){
  $q=$this->db->select('*')
  ->from('db_report')
  ->where('id',$id)
  ->get();
 
 return $q->row();
}

function visitor_count() {
  $query = $this->db->query("SELECT COUNT(*) FROM db_report");
  return $this->db->count_all('db_report');
}


  
public function Mobile_get_user_data(){
  $query = $this->db->order_by('id', 'desc')->get_where('db_mobile_report');
  return $query->result();
  
}

public function Mobile_invoice_number(){

  $q=$this->db->select('*')
        ->from('db_mobile_report')
        ->order_by('policy_numbers',"desc")
        ->get();
       return $q->row('policy_numbers');
  
}

public function Mobile_customer_id(){
  $q=$this->db->select('*')
        ->from('db_mobile_report')
        ->order_by('customer_id',"desc")
        ->get();
       return $q->row('customer_id');
  
}

public function Mobile_invoice_no(){
  $q=$this->db->select('*')
        ->from('db_mobile_report')
        ->order_by('invoice_no',"desc")
        ->get();
       return $q->row('invoice_no');
  
}


function Mobile_insert($data){
  $this->db->insert('db_mobile_report',$data);
  return true;
}

public function Mobile_selectquery($id){
$q=$this->db->select('*')
->from('db_mobile_report')
->where('id',$id)
->get();

return $q->row();
}

function Mobile_visitor_count() {
$query = $this->db->query("SELECT COUNT(*) FROM db_mobile_report");
return $this->db->count_all('db_report');
}

}