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

function website_user_count() {
  $query = $this->db->query("SELECT COUNT(*) FROM website_users");
  return $this->db->count_all('website_users');
  }



public function Website_get_user_data(){
  $query = $this->db->order_by('id', 'desc')->get_where('website_users');
  return $query->result();
  
  }     


  public function Website_get_user_report(){
    $query = $this->db->order_by('id', 'desc')->where('pay_type', 1)->get('website_mobile_report');
    return $query->result();
    
    } 
    
    public function website_selectquery($id){
      $q=$this->db->select('*')
      ->from('website_mobile_report')
      ->where('id',$id)
      ->get();
      
      return $q->row();
      }

      
public function agent_code(){
  $q=$this->db->select('*')
        ->from('agent')
        ->order_by('agent_code',"desc")
        ->get();
       return $q->row('agent_code');
}
function agent_insert($data){
  $this->db->insert('agent',$data);
  return true;
}

public function agent_list_get(){
  $query = $this->db->order_by('id', 'desc')->get_where('agent');
  return $query->result();
  }   
  
  public function edit_agent($id){
    $q=$this->db->select('*')
    ->from('agent')
    ->where('id',$id)
    ->get();
    return $q->row();
    }

    function agent_update($data, $id){
      $this->db->where('id', $id);
      $this->db->update('agent', $data);
      return true;
    }

    function agent_delete($id){
      $this->db->where('id', $id);
      $this->db->delete('agent');
      return true;
    }

    public function shop_code(){
      $q=$this->db->select('*')
            ->from('shop')
            ->order_by('shop_code',"desc")
            ->get();
           return $q->row('shop_code');
    }

    function shop_insert($data){
      $this->db->insert('shop',$data);
      return true;
    }

    public function shop_list_get($agent_id) {
      $this->db->order_by('id', 'desc');
      $this->db->where('agent_id', $agent_id);
      $query = $this->db->get('shop');
      return $query->result();
  }

  public function edit_shop($id){
    $q=$this->db->select('*')
    ->from('shop')
    ->where('id',$id)
    ->get();
    return $q->row();
    }

    function shop_delete($id){
      $this->db->where('id', $id);
      $this->db->delete('shop');
      return true;
    }

  


}