<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."libraries/vendor/razorpay/razorpay/Razorpay.php");
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
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
		$this->load->model('Website_user');
		$this->load->library('pagination');
		$this->load->helper('cookie');

		$key = "rzp_test_dfwGYguqxcme16"; 
		$key_secret = "d9WQOxajFVqojtWZzVPKgsRE";

	}
	public function index(){

		//    $appid ='com.ashomapp';
        //    $productID = ''; 
		//    $purchaseToken = 'hieigbemmjdjfdhiincgoehk.AO-J1OzLWJ9qkmAUQdyuSUi6THOj_OmtCd69AwH5jEDd_DZLkeAB9awrcJ4oL2FOodpHi9CsMh6h-i1KrK-uXdNMIF6wGPw5bg';
		//    $refreshToken = '';
		//    $clientSecret = '';
		//    $clientID = '109994979277836786776';
		//    $redirectUri = 'https://www.googleapis.com/robot/v1/metadata/x509/ashom-app%40pc-api-8344464139982480245-452.iam.gserviceaccount.com';
		   

		// 		$ch = curl_init();
		// 	     $TOKEN_URL = "https://oauth2.googleapis.com/token";
		// 	     $VALIDATE_URL = "https://www.googleapis.com/androidpublisher/v3/applications/".
		// 		 $appid."/purchases/subscriptions/".
		// 		 $productID."/tokens/".$purchaseToken;

		// 	$input_fields = 'refresh_token='.$refreshToken.
		// 		'&client_secret='.$clientSecret.
		// 		'&client_id='.$clientID.
		// 		'&redirect_uri='.$redirectUri.
		// 		'&grant_type=refresh_token';

		// 	//Request to google oauth for authentication
		// 	curl_setopt($ch, CURLOPT_URL, $TOKEN_URL);
		// 	curl_setopt($ch, CURLOPT_POST, 1);
		// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $input_fields);
		// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// 	$result = curl_exec($ch);
		// 	$result = json_decode($result, true);

		// 	if (!$result || !$result["access_token"]) {
		// 	//error   
		// 	return;
		// 	}

		// 	//request to play store with the access token from the authentication request
		// 	$ch = curl_init();
		// 	curl_setopt($ch,CURLOPT_URL,$VALIDATE_URL."?access_token=".$result["access_token"]);
		// 	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
		// 	$result = curl_exec($ch);
		// 	$result = json_decode($result, true);

		// 	if (!$result || $result["error"] != null) {
		// 		//error
		// 		return;
		// 	}

		// 	$expireTime = date('Y-m-d H:i:s', $result["expiryTimeMillis"]/1000. - date("Z")); 
		// 	//You get the purchase expire time, for example 2017-02-22 09:16:42

         // die();




	  $this->load->view('front/header'); 
	  $this->load->view('front/insurance');  
	  $this->load->view('front/footer');	 
	}
	
	
	public function login(){
	   $id = $this->session->userdata('vehical'); 
	   if(isset($id) == ''){
	    $this->load->view('front/header'); 
	      $this->load->view('front/login'); 
		  $this->load->view('front/footer');	   
	   }
	   else{
		$redirectUri = $this->session->userdata('pade_redirect'); 
		  if($redirectUri == 'products'){
            return redirect('Fornt/products'); 
			$this->session->unset_userdata('pade_redirect');
		  }
		  else if($redirectUri == 'buy_Premium' ){
			return redirect('Fornt/buy_Premium');
			$this->session->unset_userdata('pade_redirect');
		  }
		  else{
	       return redirect('Fornt/index'); 
		  }
	   }
	}
	
	
	 public function change_password(){
		$id = $this->session->userdata('vehical');
		if(!empty($id)){
			$this->load->view('front/header'); 
			$this->load->view('front/change_password');  
			$this->load->view('front/footer');	  
		}
		else{
			return redirect('Fornt/index'); 
		}
	 }
	
	
	public function singup(){
	  $this->load->view('front/header'); 
	  $this->load->view('front/registration');  
	  $this->load->view('front/footer');	
	 
	}
	
	public function Otp(){
	   $this->load->view('front/header'); 
	  $this->load->view('front/otp'); 
	  $this->load->view('front/footer');	
	}
	
	public function Calculator(){
	  $this->load->view('front/header');   
	  $this->load->view('front/Calculator'); 
	  $this->load->view('front/footer');	
	}
	
	public function products(){
	  $id = $this->session->userdata('vehical'); 
	  $this->session->set_userdata('pade_redirect','products');
	  if(isset($id) == ''){
		  $this->load->view('front/header'); 
		 $this->load->view('front/login'); 
		 $this->load->view('front/footer');	   
	  }
	  else{
		$this->load->view('front/header'); 
		$this->load->view('front/Products'); 
		$this->load->view('front/footer');	
	  }
	}
	
	
	public function forgot(){
	  $this->load->view('front/header');   
	  $this->load->view('front/forgot'); 
	  $this->load->view('front/footer');	
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
	      	   return redirect('Fornt/login');
        	 }
        		else{
                	$this->session->set_flashdata('login_error', 'Invalid User and password'); 
	         	 $this->session->set_flashdata('msg_class','alert-success');
	            	return redirect('Fornt/login');
                 
        	     }
        	     
               }else{
                   
             $this->session->set_userdata('mobile', $email_search->mobile);  
            $mobile =  $email_search->mobile;
            $email = $this->session->userdata('email');
	    
		$randCode = rand(1000,9999);

		$this->load->library('email');
	 
		 $this->email->set_newline("\r\n");
	 
		 $config['protocol'] = 'smtp';
		 $config['smtp_host'] = 'dbvertex.com';
		 $config['smtp_port'] = '465';
		 $config['smtp_user'] = 	'classified@dbvertex.com';
		 $config['smtp_from_name'] = 'Mobi Protect';
		 $config['smtp_pass'] = 'g+S7SHye4}eS';
		 $config['wordwrap'] = TRUE;
		 $config['newline'] = "\r\n"; 
		 $config['mailtype'] = 'html';  
		 $config['MAIL_ENCRYPTION'] = null;                      
	     $config['smtp_crypto'] = "ssl";


		 $this->email->initialize($config);
	 
		 $this->email->from($config['smtp_user'], $config['smtp_from_name']);
		 $this->email->to($email);
		 $this->email->subject('	Verify your OTP - Mobi Protect');
	 
		 $this->email->message("Verify your OTP - Mobi Protect Hello ".$email.", This is your OTP $randCode. <br> Do not share this OTP with anyone.");
		  $e = $this->email->send();
            
	       $this->session->set_userdata('randCode', $randCode);  
	     	$insert = $this->User_model->resand_otp($randCode,$mobile);  
	     	 return redirect('Fornt/Otp');
                   
               }
               
        	     
                }
             	else{
             $this->session->set_flashdata('login_error', 'Email is not exist'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	         	return redirect('Fornt/login');
                 $msg = "Email is not exist";
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
	    
				$randCode = rand(1000,9999);

				$this->load->library('email');
			 
				 $this->email->set_newline("\r\n");
			 
				 $config['protocol'] = 'smtp';
				 $config['smtp_host'] = 'dbvertex.com';
				 $config['smtp_port'] = '465';
				 $config['smtp_user'] = 	'classified@dbvertex.com';
				 $config['smtp_from_name'] = 'Mobi Protect';
				 $config['smtp_pass'] = 'g+S7SHye4}eS';
				 $config['wordwrap'] = TRUE;
				 $config['newline'] = "\r\n"; 
				 $config['mailtype'] = 'html';  
				 $config['MAIL_ENCRYPTION'] = null;                      
				 $config['smtp_crypto'] = "ssl";      
						   
							   $this->email->initialize($config);
						   
							   $this->email->from($config['smtp_user'], $config['smtp_from_name']);
							   $this->email->to($email);
							   $this->email->subject('	Verify your OTP - Mobi Protect');
						   
							   $this->email->message("Verify your OTP - Mobi Protect Hello ".$name.", This is your OTP $randCode. <br> Do not share this OTP with anyone.");
								$this->email->send();

								
	     $this->session->set_userdata('randCode', $randCode);  
	    $data = array(
			'email'  =>$email,
			'name ' => $name,
			'password'  => md5($password),
			'otp'  => $randCode,
			'mobile'  =>  $mobile
			
		); 
		$this->session->set_userdata('mobile', $mobile);
		$this->session->set_userdata('email', $email);
		$insert = $this->User_model->user_registration($data);
		 return redirect('Fornt/Otp');
         }
        else{
		       $this->session->set_flashdata('singup_error', 'Phone Number is Already exist'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	         	return redirect('Fornt/singup');
              } 
		 
      }
              else{
		       $this->session->set_flashdata('singup_error', 'Email is Already exist'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	         	return redirect('Fornt/singup');
              }
		 
		
	}
	
	public function resend_otp(){
	 
	    $mobile = $this->session->userdata('mobile');
		$email = $this->session->userdata('email');
	    
		$randCode = rand(1000,9999);

		$this->load->library('email');
	 
		 $this->email->set_newline("\r\n");
	 
		 $config['protocol'] = 'smtp';
		 $config['smtp_host'] = 'dbvertex.com';
		 $config['smtp_port'] = '465';
		 $config['smtp_user'] = 	'classified@dbvertex.com';
		 $config['smtp_from_name'] = 'Mobi Protect';
		 $config['smtp_pass'] = 'g+S7SHye4}eS';
		 $config['wordwrap'] = TRUE;
		 $config['newline'] = "\r\n"; 
		 $config['mailtype'] = 'html';  
		 $config['MAIL_ENCRYPTION'] = null;                      
	     $config['smtp_crypto'] = "ssl";


		 $this->email->initialize($config);
	 
		 $this->email->from($config['smtp_user'], $config['smtp_from_name']);
		 $this->email->to($email);
		 $this->email->subject('	Verify your OTP - Mobi Protect');
	 
		 $this->email->message("Verify your OTP - Mobi Protect Hello ".$email.", This is your OTP $randCode. <br> Do not share this OTP with anyone.");
		  $e = $this->email->send();
		
	    
	     $this->session->set_userdata('randCode', $randCode);  
	 
	    //	$this->session->set_userdata('otp', $mobile);
		$insert = $this->User_model->resand_otp($randCode,$mobile);
		
		return redirect('Fornt/Otp');
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
	         return redirect('Fornt/login');
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
	  $this->load->view('front/footer');	
		
	}
	
	public function forgot_password_otp(){
	    
	 $email =  $this->input->post('email');

	 $mobile_search = $this->db->get_where('Website_users', array('email' => $email))->row();

      if(!empty($mobile_search)){
	     $this->session->set_userdata('mobile', $mobile); 
	    
		 $randCode = rand(1000,9999);
 
		 $this->load->library('email');
	  
		  $this->email->set_newline("\r\n");
	  
		  $config['protocol'] = 'smtp';
		  $config['smtp_host'] = 'dbvertex.com';
		  $config['smtp_port'] = '465';
		  $config['smtp_user'] = 	'classified@dbvertex.com';
		  $config['smtp_from_name'] = 'Mobi Protect';
		  $config['smtp_pass'] = 'g+S7SHye4}eS';
		  $config['wordwrap'] = TRUE;
		  $config['newline'] = "\r\n"; 
		  $config['mailtype'] = 'html';  
		  $config['MAIL_ENCRYPTION'] = null;                      
		  $config['smtp_crypto'] = "ssl";
 
 
		  $this->email->initialize($config);
	  
		  $this->email->from($config['smtp_user'], $config['smtp_from_name']);
		  $this->email->to($email);
		  $this->email->subject('	Verify your OTP - Mobi Protect');
	  
		  $this->email->message("Verify your OTP - Mobi Protect Hello ".$email.", This is your OTP $randCode. <br> Do not share this OTP with anyone.");
		   $e = $this->email->send();


	    
	    $this->session->set_userdata('randCode', $randCode);   
	 
	   //	$this->session->set_userdata('otp', $mobile);
		$insert = $this->User_model->resand_otp($randCode,$mobile); 
	     return redirect('Fornt/forgot');	
	  }
	  else{
		$this->session->set_flashdata('forgot_password_otp', 'Email is not exist'); 
		$this->session->set_flashdata('msg_class','alert-success');
		  return redirect('Fornt/forgot_password_mobile');
		 
	  }
		
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
		$this->session->set_userdata('pade_redirect','buy_Premium');
		if(isset($id) == ''){
		    $this->load->view('front/header'); 
		   $this->load->view('front/login');  
		   $this->load->view('front/footer');	  
		}
		else{
			$this->load->view('front/header'); 
	       	$this->load->view('front/buy_Premium'); 
			   $this->load->view('front/footer');	
		}
	}

	public function policy_form(){

		$SumInsured = $this->input->post('SumInsured');
		$Business = $this->input->post('Business');
		$date = $this->input->post('date');
		$Business_Type = $this->input->post('Business_Type');
		$bank_name = 'Shop name';
		$premium = $this->input->post('premium'); 
     
		$Salutation = $this->input->post('Salutation');
		$Policy_Holder = $this->input->post('Policy_Holder');
		$Gender = $this->input->post('Gender');
		$Date_Birth = $this->input->post('Date_Birth');
		$Customer_iD = $this->input->post('Customer_iD');
		$Address_Line_1 = $this->input->post('Address_Line_1');
		$Address_Line_2 = $this->input->post('Address_Line_2');
		$Pincode = $this->input->post('Pincode');
		$State = $this->input->post('State');
		$City = $this->input->post('City');
		$Mobile = $this->input->post('Mobile');
		$Email = $this->input->post('email');
		$Make = $this->input->post('Make');
		$Model = $this->input->post('Model');
		$Tear_Manufacturing = $this->input->post('Tear_Manufacturing');
		$Battery_No = $this->input->post('Battery_No');
		$Chassis_No = $this->input->post('Chassis_No');
		$Addresss_Line_1 = $this->input->post('Addresss_Line_1');
		$Addresss_Line_2 = $this->input->post('Addresss_Line_2');
		$Pincodes = $this->input->post('Pincodes');
		$States = $this->input->post('States');
		$Citys = $this->input->post('Citys');
		$Nominee_Name = $this->input->post('Nominee_Name');
		$Relation = $this->input->post('Relation');
		$Date_Of_Birth = $this->input->post('Date_Of_Birth');
		$Genders = $this->input->post('Genders');
		$Financer_Name = $this->input->post('Financer_Name');
		$Address = $this->input->post('Address');
		$Financer_Type = $this->input->post('Financer_Type');
		$Battery_kw = $this->input->post('Battery_kw');

		$user_id= $this->session->userdata('vehical'); 
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
              $randomString = '';
		$n = 30;
         for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
         $randomString .= $characters[$index];
        }
		$Tokan = $randomString;



        $ODAmount = $premium;
		$GST = 0;
		$Final = $premium;

        $dateString =$date;
		$dt = new DateTime($dateString);
		$dt->modify('1 year');
		$exprie_date = $dt->format('Y-m-d');		

		$data['report'] = $this->Website_user->Mobile_invoice_number();  
		foreach($data as $policy_number);
		$last = $policy_number;
	     // This is fetched from database
		$last++;
		$policy_numbers = sprintf('%07d', $last);


	     $data['report'] = $this->Website_user->Mobile_customer_id();  
		foreach($data as $customer_id);

		$lasts = $customer_id; // This is fetched from database
		$lasts++;
		$costumer_ids = sprintf('%07d', $lasts);

		$data['report'] = $this->Website_user->Mobile_invoice_no();  
		foreach($data as $inv);
		$str = $inv;
		$trim = trim($str, "MB/MP/");
	
		$invoice =$trim;
	    $invoice++;
		$invoice_number = "MB/MP/".sprintf('%07d', $invoice);

        $_SESSION['premium_amount'] = $Final;
		$data = array(
			'salutation' => $Salutation,
			'name_policy_holder' =>$Policy_Holder,
			'policy_numbers' =>$policy_numbers,
			'invoice_no' =>$invoice_number,
			'gender' => $Gender,
			'date_birth' =>$Date_Birth,
			'customer_id' => $costumer_ids,
			'address_line_1' =>$Address_Line_1,
			'address_line_2' => $Address_Line_2,
			'pincode' =>$Pincode,
			'state' => $State,
			'city' =>$City,
			'mobile' => $Mobile,
			'email' =>$Email,
			'make' => $Make,
			'model' =>$Model,
			'tear_manufacturing' => $Tear_Manufacturing,
		
			'Battery_No' => $Battery_No,
			'Chassis_No' =>$Chassis_No,
			'Addresss_line_1' => $Addresss_Line_1,
			'Addresss_line_2' =>$Addresss_Line_2,
			'pincodes' => $Pincodes,
			'states' =>$States,
			'citys' => $Citys,
			'nomine_name' =>$Nominee_Name,
			'relation' => $Relation,
			'date_of_birth' =>$Date_Of_Birth,
			'genders' => $Genders,
			'finacer_name' =>$Financer_Name,
			'finacer_address' => $Address,
			'financer_type' =>$Financer_Type,
			'sum_insured' => $SumInsured,
			'policy_start' => $date,
			'GST' => $GST,
			'premium ' => $Final,
			'ODAmount ' => $ODAmount,
			'exprie_date'  =>$exprie_date,
			'business_type ' => $Business_Type,
			'bank_name'  =>$bank_name,
			'Battery_kw'  =>$Battery_kw,
			'user_id'  =>$user_id, 
			'token'  =>$Tokan
		
		); 
		
		$insert = $this->Website_user->insert($data);
		$insertId = $this->db->insert_id();
		$this->session->set_flashdata('policy_form', 'Thank you! Your policy form has been successfully submitted.'); 
		$this->session->set_flashdata('msg_class','alert-success');
		 $redirectUrl = 'Fornt/pay/' . $insertId;
          return redirect($redirectUrl);
    }	
	
	function website_mobile_pdf($id=0){
	
		
		$data['report'] = $this->Website_user->website_Mobile_selectquery($id); 
		foreach($data as $inv);
		require_once BASEPATH.'../vendor/autoload.php';
		
		$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
		
		$this->load->view('admin/mobile_pdf',$data);
		$hmt =  $this->output->get_output();
		$mpdf->WriteHTML($hmt);
		$mpdf->Output('Policy.pdf','D');
    }

	function clam(){
		$this->load->view('front/header'); 
		$this->load->view('front/clam'); 
		$this->load->view('front/footer');	
	}

	function about_us(){
		$this->load->view('front/header'); 
		$this->load->view('front/about_us'); 
		$this->load->view('front/footer');	 
	}

	function Terms_conditions(){
		$this->load->view('front/header'); 
		$this->load->view('front/Terms_&_conditions'); 
		$this->load->view('front/footer');	
	}

	function Contact_us(){
		$this->load->view('front/header'); 
		$this->load->view('front/Contact_us'); 
		$this->load->view('front/footer');	
	}


	function Contact_us_form(){
		$Name = $this->input->post('Name');
		$email = $this->input->post('email');
		$Mobile = $this->input->post('Mobile');
		$Message = $this->input->post('Message');

		$data = array(
			'name' => $Name,
			'email' =>$email,
			'mobile' =>$Mobile,
			'message' =>$Message
		);

		$insert = $this->Website_user->Contact_us($data);

		$this->session->set_flashdata('Contact_us_form', 'Contact Us Successfully Submit'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	      	return redirect('Fornt/Contact_us');
	}

	   function my_profil_view(){
		$this->load->view('front/header'); 
		$this->load->view('front/my_profile'); 
		$this->load->view('front/footer');	
	}


	public function uploadprofileimg(){  
      
		$user_id=$this->input->post('user_id');
	
		   if (!empty($_FILES['profile_img']['name'])) {
						$config['upload_path'] = './uplode/profile/';
						// $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf';
						$config['allowed_types'] = '*';
						$this->load->library('upload', $config);
						if (!$this->upload->do_upload('profile_img')) {
						   
						}else{
	
							//---- Successfully upload than add member-----
							$image_data = $this->upload->data();
							$filename = $image_data['file_name'];
	
						 $this->db->update("website_users", ["profile_images"=>$filename], "id=$user_id");
						 
						 return redirect('Fornt/my_profil_view');
						}
					  }
	}

	public function editprofile(){  

		$id = $this->session->userdata('vehical'); 

		$email = $this->input->post("email");
		$name = $this->input->post("name");
		$Mobile = $this->input->post("Mobile");
		
		$idata["id"]= $id;
		$idata["email"]=$email;
		$idata["name"]= $name;
		$idata["mobile"]= $Mobile;

		$result = $this->db->update("Website_users", $idata, ["id"=>$id]);

			$this->session->set_flashdata('edit_profile', 'Profile Successfully Update'); 
			$this->session->set_flashdata('msg_class','alert-success');

		return redirect('Fornt/my_profil_view');
		

	}


	function mobile_view(){
		$this->load->view('front/header'); 
		$this->load->view('front/mobile'); 
		$this->load->view('front/footer');	
	}
   

	function low_speed(){
		$this->load->view('front/header'); 
		$this->load->view('front/low_speed'); 
		$this->load->view('front/footer');	
	}

    
	public function pay($id)
	{
		$_SESSION['report_id'] = $id;
		$result = $this->db->where('id', $id)->get('website_mobile_report')->result();
		foreach($result as $dataji)
		$_SESSION['premium_amount'] = $dataji->premium;
		$RAZOR_KEY_ID = $this->config->item('RAZOR_KEY_ID');
		$RAZOR_KEY_SECRET = $this->config->item('RAZOR_KEY_SECRET');

	  $api = new Api("rzp_test_dfwGYguqxcme16", "d9WQOxajFVqojtWZzVPKgsRE");
	  /**
	   * You can calculate payment amount as per your logic
	   * Always set the amount from backend for security reasons
	   */

	  $razorpayOrder = $api->order->create(array(
		'receipt'         => rand(),
		'amount'          => $_SESSION['premium_amount'] * 100, // 2000 rupees in paise
		'currency'        => 'INR',
		'payment_capture' => 1 // auto capture
	  ));
	  $amount = $razorpayOrder['amount'];
	  $razorpayOrderId = $razorpayOrder['id'];
	  $_SESSION['amount'] = $_SESSION['amount'];
	  $_SESSION['razorpay_order_id'] = $razorpayOrderId;
	  $data = $this->prepareData($amount,$razorpayOrderId);
	  $this->load->view('rezorpay',array('data' => $data));
	}
	/**
	 * This function verifies the payment,after successful payment
	 */
	public function verify()
	{
		$RAZOR_KEY_ID = $this->config->item('RAZOR_KEY_ID');
		$RAZOR_KEY_SECRET = $this->config->item('RAZOR_KEY_SECRET');
	  $success = true;
	  $error = "payment_failed";
	  if (empty($_POST['razorpay_payment_id']) === false) {
		$api = new Api("rzp_test_dfwGYguqxcme16", "d9WQOxajFVqojtWZzVPKgsRE");
	  try {
		  $attributes = array(
			'razorpay_order_id' => $_SESSION['razorpay_order_id'],
			'razorpay_payment_id' => $_POST['razorpay_payment_id'],
			'razorpay_signature' => $_POST['razorpay_signature'],
			'amount' => $_SESSION['amount'],
			'report_id' => $_SESSION['report_id'],
			'user_id' => $this->session->userdata('vehical')
		  );
		  $api->utility->verifyPaymentSignature($attributes);
          $this->db->where('id', $_SESSION['report_id'])->update('website_mobile_report', ['pay_type' => 1]);
		  $insert = $this->Website_user->payment($attributes);
          
		} catch(SignatureVerificationError $e) {
		  $success = false;
		  $error = 'Razorpay_Error : ' . $e->getMessage();
		}
		
	  }
	  if ($success === true) {
		/**
		 * Call this function from where ever you want
		 * to save save data before of after the payment
		 */
		unset($_SESSION['premium_amount']); 
		unset($_SESSION['razorpay_order_id']);
		unset($_SESSION['amount']);
		$this->setRegistrationData();
		redirect(base_url().'Fornt/products');
	  }
	  else {
		
		redirect(base_url().'Fornt/products');
	  }

	}
	/**
	 * This function preprares payment parameters
	 * @param $amount
	 * @param $razorpayOrderId
	 * @return array
	 */
	public function prepareData($amount,$razorpayOrderId)
	{
		$RAZOR_KEY_ID = $this->config->item('RAZOR_KEY_ID');
		$RAZOR_KEY_SECRET = $this->config->item('RAZOR_KEY_SECRET');
	  $data = array(
		"key" => "rzp_test_dfwGYguqxcme16",
		"amount" => $amount,
		"name" => "Coding Birds Online",
		"description" => "Learn To Code",
		"image" => "https://demo.codingbirdsonline.com/website/img/coding-birds-online/coding-birds-online-favicon.png",
		"prefill" => array(
		  "name"  => $this->input->post('name'),
		  "email"  => $this->input->post('email'),
		  "contact" => $this->input->post('contact'),
		),
		"notes"  => array(
		  "address"  => "Hello World",
		  "merchant_order_id" => rand(),
		),
		"theme"  => array(
		  "color"  => "#F37254"
		),
		"order_id" => $razorpayOrderId,
	  );
	
	  return $data;
	}
	/**
	 * This function saves your form data to session,
	 * After successfull payment you can save it to database
	 */
	public function setRegistrationData()
	{
	  $name = $this->input->post('name');
	  $email = $this->input->post('email');
	  $contact = $this->input->post('contact');
	  $amount = $_SESSION['payable_amount'];
	  $registrationData = array(
		'order_id' => $_SESSION['razorpay_order_id'],
		'name' => $name,
		'email' => $email,
		'contact' => $contact,
		'amount' => $amount,
	  );
	  // save this to database
	}
	/**
	 * This is a function called when payment successfull,
	 * and shows the success message
	 */
	public function success()
	{
	  $this->load->view('success');
	}
	/**
	 * This is a function called when payment failed,
	 * and shows the error message
	 */
	public function paymentFailed()
	{
	  $this->load->view('error');
	}  
  


	
}
	?>