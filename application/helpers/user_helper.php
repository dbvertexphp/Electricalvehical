<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
function get_user($user_id)
{
  //get main CodeIgniter object
       $ci =& get_instance();
  //load databse library
       $ci->load->database();
 $query="SELECT * FROM Website_users WHERE  id=".$user_id;
  $category_data = $ci->db->query($query);        
  if($category_data-> num_rows()>0)
  return $category_data->row(); 
  else
  return null;
}
function get_user_policy($user_id)
{
  $ci =& get_instance();
  //load databse library
       $ci->load->database();
 $query="SELECT * FROM website_mobile_report WHERE user_id=".$user_id;
  $category_data = $ci->db->query($query);        
  return $category_data->result(); 
}

function get_user_vehicle_policy($user_id)
{
  $ci =& get_instance();
  //load databse library
       $ci->load->database();
 $query="SELECT * FROM website_vehicle_report WHERE user_id=".$user_id;
  $category_data = $ci->db->query($query);        
  return $category_data->result(); 
}


function get_user_policy_count($user_id)
{
  $ci =& get_instance();
  //load databse library
       $ci->load->database();
 $query="SELECT * FROM website_mobile_report WHERE user_id=".$user_id;
  $category_data = $ci->db->query($query);        
  $category_data = $ci->db->query($query);        
  if($category_data-> num_rows()>0)
  return $category_data->row(); 
  else
  return null;
}

function get_user_vehicle_policy_count($user_id)
{
  $ci =& get_instance();
  //load databse library
       $ci->load->database();
 $query="SELECT * FROM website_vehicle_report WHERE user_id=".$user_id;
  $category_data = $ci->db->query($query);        
  $category_data = $ci->db->query($query);        
  if($category_data-> num_rows()>0)
  return $category_data->row(); 
  else
  return null;
}

function check_policy_data($user_id)
{
    $ci =& get_instance();
    $ci->load->database();

    $mobile_report_query = "SELECT * FROM website_mobile_report WHERE user_id = " . $user_id;
    $mobile_report_data = $ci->db->query($mobile_report_query);
    
    $vehicle_report_query = "SELECT * FROM website_vehicle_report WHERE user_id = " . $user_id;
    $vehicle_report_data = $ci->db->query($vehicle_report_query);

    $mobile_report_count = $mobile_report_data->num_rows();
    $vehicle_report_count = $vehicle_report_data->num_rows();
    
    if ($mobile_report_count > 0 && $vehicle_report_count > 0) {
        return "Both tables have data.";
    } else if ($mobile_report_count > 0) {
      return $mobile_report_data->row(); 
    } else if ($vehicle_report_count > 0) {
      return $vehicle_report_data->row(); 
    } else {
      return null;
    }
}


function shop_get($id) {
  return get_instance()->db->select('*')->from('shop')->where('id', $id)->get()->row();
}
function agent_get($id) {
  return get_instance()->db->select('*')->from('agent')->where('id', $id)->get()->row();
}
