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
