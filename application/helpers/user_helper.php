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
