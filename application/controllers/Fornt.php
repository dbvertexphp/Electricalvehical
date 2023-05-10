<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornt extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
       
        $this->load->helper('url');
        $this->load->helper('form');
        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');
        $this->load->library('email');
        /* $this->load->library('csvimport');*/ 
        $this->load->helper('file');
        $this->load->helper('user_helper');
        /* $this->load->helper('pdf2text');*/
		$this->load->model('User_model');
		$this->load->library('pagination');
		$this->load->helper('cookie');

	}
	public function index(){
	  $this->load->view('front/header'); 
	  $this->load->view('front/insurance');   
	}
	
	
	public function login(){
	   $id = $this->session->userdata('vehical'); 
	   if(isset($id) == ''){
	    $this->load->view('front/header'); 
	      $this->load->view('front/login');    
	   }
	   else{
	       return redirect('Fornt/index'); 
	   }
	}
	
	
	 public function change_password(){
		$id = $this->session->userdata('vehical');
		if(!empty($id)){
			$this->load->view('front/header'); 
			$this->load->view('front/change_password');    
		}
		else{
			return redirect('Fornt/index'); 
		}
	 }
	
	
	public function singup(){
	  $this->load->view('front/header'); 
	  $this->load->view('front/registration');  
	 
	}
	
	public function Otp(){
	   $this->load->view('front/header'); 
	  $this->load->view('front/otp'); 
	}
	
	public function Calculator(){
	  $this->load->view('front/header');   
	  $this->load->view('front/Calculator'); 
	}
	
	public function products(){
	   $this->load->view('front/header'); 
	  $this->load->view('front/Products'); 
	}
	
	
	public function forgot(){
	  $this->load->view('front/header');   
	  $this->load->view('front/forgot'); 
	}
	
	 public function userlogin(){
      
         $email = $this->input->post('email');
		 $pass = $this->input->post('password');
		 $remember = $this->input->post('Remember');
	 
		 
		  $email_search = $this->db->get_where('Website_users', array('email' => $email))->row();
             if(!empty($email_search)){
               if($email_search->user_verified == 1){   
		      if($email_search->password ==  md5($pass) && $email_search->email == $email){
		         
		        if(!empty($remember)) {
                //COOKIES for username
                setcookie ("email",$email,time()+ (10 * 365 * 24 * 60 * 60));
                //COOKIES for password
                setcookie ("userpassword",$pass,time()+ (10 * 365 * 24 * 60 * 60));
                
                setcookie ("user_login",'checked',time()+ (10 * 365 * 24 * 60 * 60));
                }
                else {
                }
                
		      $login_id=$email_search->id;
	          $this->session->set_userdata('vehical',$login_id);
		      $msg = "Login successfull";
	      	   return redirect('Fornt/index');
        	 }
        		else{
                	$this->session->set_flashdata('login_error', 'Invalid User and password'); 
	         	 $this->session->set_flashdata('msg_class','alert-success');
	            	return redirect('Fornt/login');
                 
        	     }
        	     
               }else{
                   
             $this->session->set_userdata('mobile', $email_search->mobile);  
            $mobile =  $email_search->mobile;
            $size = 4;
            $alpha_key = '';
            $keys = range('0', '9');
            for ($i = 0; $i < 4; $i++) {
              $alpha_key .= $keys[array_rand($keys)];
            }
            $randCode = $alpha_key;
            $numberss = "91" . $mobile; // A single number or a comma-seperated list of numbers
            $messages = "You verification otp for PAHADi UNCLE is " . $randCode;

            $apiKey = urlencode('');

            $numbers = array($mobile);
            $sender = urlencode('UPAHAD');
            $message = rawurlencode($messages);

            $numbers = implode(',', $numbers);

            $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

            // Send the POST request with cURL
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            //print_r($response);

            curl_close($ch);
            
	       $this->session->set_userdata('randCode', $randCode);  
	     	$insert = $this->User_model->resand_otp($randCode,$mobile);  
	     	 return redirect('Fornt/Otp');
                   
               }
               
        	     
                }
             	else{
             $this->session->set_flashdata('login_error', 'Email is not exit'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	         	return redirect('Fornt/login');
                 $msg = "Email is not exit";
                    echo $msg;
        	     }        
        	         
        
     }
	
	public function registration(){
	    $email = $this->input->post('email');
	    $name = $this->input->post('name');
	    $password = $this->input->post('password');
	    $mobile = $this->input->post('Mobile');
	    
	      $email_search = $this->db->get_where('Website_users', array('email' => $email))->row();
	        $mobile_numbers = $this->db->get_where('Website_users', array('mobile' => $mobile))->row();
             if(empty($email_search)){
              if(empty($mobile_numbers)){   
	    
	        $size = 4;
            $alpha_key = '';
            $keys = range('0', '9');
            for ($i = 0; $i < 4; $i++) {
              $alpha_key .= $keys[array_rand($keys)];
            }
            $randCode = $alpha_key;
            $numberss = "91" . $mobile; // A single number or a comma-seperated list of numbers
            $messages = "You verification otp for PAHADi UNCLE is " . $randCode;

            $apiKey = urlencode('');

            $numbers = array($mobile);
            $sender = urlencode('UPAHAD');
            $message = rawurlencode($messages);

            $numbers = implode(',', $numbers);

            $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

            // Send the POST request with cURL
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            //print_r($response);

            curl_close($ch);
	    
	     $this->session->set_userdata('randCode', $randCode);  
	    $data = array(
			'email'  =>$email,
			'name ' => $name,
			'password'  => md5($password),
			'otp'  => $randCode,
			'mobile'  =>  $mobile
			
		); 
		$this->session->set_userdata('mobile', $mobile);
		$insert = $this->User_model->user_registration($data);
		 return redirect('Fornt/Otp');
         }
        else{
		       $this->session->set_flashdata('singup_error', 'Phone Number is Alerdy exit'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	         	return redirect('Fornt/singup');
              } 
		 
      }
              else{
		       $this->session->set_flashdata('singup_error', 'Email is Alerdy exit'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	         	return redirect('Fornt/singup');
              }
		 
		
	}
	
	public function resend_otp(){
	 
	    $mobile = $this->session->userdata('mobile');
	    
	        $size = 4;
            $alpha_key = '';
            $keys = range('0', '9');
            for ($i = 0; $i < 4; $i++) {
              $alpha_key .= $keys[array_rand($keys)];
            }
            $randCode = $alpha_key;
            $numberss = "91" . $mobile; // A single number or a comma-seperated list of numbers
            $messages = "You verification otp for PAHADi UNCLE is " . $randCode;

            $apiKey = urlencode('');

            $numbers = array($mobile);
            $sender = urlencode('UPAHAD');
            $message = rawurlencode($messages);

            $numbers = implode(',', $numbers);

            $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

            // Send the POST request with cURL
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            //print_r($response);

            curl_close($ch);
	    
	     $this->session->set_userdata('randCode', $randCode);  
	 
	    //	$this->session->set_userdata('otp', $mobile);
		$insert = $this->User_model->resand_otp($randCode,$mobile);
		
		
	}
	
	public function verify_otp(){
	    
	     $otp1 = $this->input->post('otp-1');
	      $otp2 = $this->input->post('otp-2');
	       $otp3 = $this->input->post('otp-3');
	        $otp4 = $this->input->post('otp-4');
	     $otp = $_POST['otp-1'] . $_POST['otp-2'] . $_POST['otp-3'] . $_POST['otp-4'];
	     
	     $mobile = $this->session->userdata('mobile');
	     
	     $insert = $this->User_model->varify_otp($otp,$mobile);
	     
	     if($insert == ''){
	      	$this->session->set_flashdata('otp_verify_message', 'Otp Not Match'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	      	return redirect('Fornt/Otp');
	     }
	     else{
	        foreach($insert as $id)
	        $this->session->set_userdata('vehical', $id->id); 
	        $this->db->set('user_verified', 1)->where('id', $id->id)->update('Website_users');
	         return redirect('Fornt/index');
	     }
	     
	}
	
    public function logout(){
      $u_rec_id = $this->session->userdata('vehical');
      
     $id = $this->session->unset_userdata('vehical');
  
			$this->session->set_flashdata('logut_success','You are succesfully loged out');
			return redirect('Fornt/index');
    }
  
  	public function forgot_password_mobile(){
	  $this->load->view('front/header');   
	  $this->load->view('front/forgot_password_mobile'); 
		
	}
	
	public function forgot_password_otp(){
	    
	 $mobile =  $this->input->post('Mobile');
	 $this->session->set_userdata('mobile', $mobile); 
	        $size = 4;
            $alpha_key = '';
            $keys = range('0', '9');
            for ($i = 0; $i < 4; $i++) {
              $alpha_key .= $keys[array_rand($keys)];
            }
            $randCode = $alpha_key;
            $numberss = "91" . $mobile; // A single number or a comma-seperated list of numbers
            $messages = "You verification otp for PAHADi UNCLE is " . $randCode;

            $apiKey = urlencode('');

            $numbers = array($mobile);
            $sender = urlencode('UPAHAD');
            $message = rawurlencode($messages);

            $numbers = implode(',', $numbers);

            $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

            // Send the POST request with cURL
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            //print_r($response);

            curl_close($ch);
	    
	    $this->session->set_userdata('randCode', $randCode);   
	 
	   //	$this->session->set_userdata('otp', $mobile);
		$insert = $this->User_model->resand_otp($randCode,$mobile); 
	     return redirect('Fornt/forgot');	
	  	
		
		
	}	
	
	public function forgot_password_verify_otp(){
	    
	    
	     $otp1 = $this->input->post('otp');
	      $Password = $this->input->post('Password');
	  
	      
	     $mobile = $this->session->userdata('mobile');
	     
	     $insert = $this->User_model->varify_otp($otp1,$mobile);
	    
	     if($insert == ''){
	      	$this->session->set_flashdata('otp_verify_message', 'Otp Not Match'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	      	return redirect('Fornt/forgot');
	     }
	     else{
	        foreach($insert as $id)
	        $this->db->set('password', md5($Password))->where('id', $id->id)->update('Website_users');
	         return redirect('Fornt/index');
	     }
	    
	}
	
	public function change_password_user(){
	    
	    $oldpass =  $this->input->post('oldpassword');
	    $newpass =  $this->input->post('password');
	     $id = $this->session->userdata('vehical');
	     
	     $id = $this->db->get_where('Website_users', array('id' => $id))->row();
	     if($id->password == md5($oldpass)){
	       $this->db->set('password', md5($newpass))->where('id', $id->id)->update('Website_users');  
	       	$this->session->set_flashdata('Password_change', 'Password Succesfully Update'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	      	return redirect('Fornt/change_password');
	     }
	     else{
	        $this->session->set_flashdata('old_password', 'Old Password Not Match'); 
	      	 $this->session->set_flashdata('msg_class','alert-danger');
	      	return redirect('Fornt/change_password'); 
	     }
	  
	}


	
	public function buy_Premium(){
		$id = $this->session->userdata('vehical'); 
		if(isset($id) == ''){
		    $this->load->view('front/header'); 
		   $this->load->view('front/login');    
		}
		else{
			$this->load->view('front/header'); 
	       	$this->load->view('front/buy_Premium'); 
		}
	}
	
	
	
	
	}?>