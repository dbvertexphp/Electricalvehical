<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."libraries/vendor/razorpay/razorpay/Razorpay.php");
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
class Welcome extends CI_Controller {

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
		$this->load->model('admin_model');
		$this->load->library('pagination');

	}
	public function index(){

		if($this->input->post()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$result = $this->db->get_where('db_users' , array('email'=>$email, 'password'=>$password))->result_array();
         
		  
			 $uid = @$result[0]['id'];
			$name = @$result[0]['name'];
			$emails = @$result[0]['email'];
			$passwords = @$result[0]['password'];

			$this->session->set_userdata('admin_uid',$uid);
			$this->session->set_userdata('name',$name);
			$this->session->set_userdata('email',$emails);
			$this->session->set_userdata('password',$passwords);
		}

		$data['h']= $this->admin_model->Mobile_visitor_count(); 
		$data['user']= $this->admin_model->website_user_count();
		
		if(@$this->session->userdata['admin_uid']){
			$this->load->view('admin/dashbord',$data);
		}
		
      else{
		$this->load->view('admin/login');
	  }
	
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}

	public function product(){
		$session_id = $this->session->userdata('admin_uid');
		
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);


		    $Business_Type =  $this->input->post('Business_Type');
			$date =  $this->input->post('Policy_Start');
			$BUSINESS_int =  $this->input->post('Business');
		    $SumInsured_int =  $this->input->post('SumInsured');
			$bank_name =  $this->input->post('bank');
			
			$SumInsureds = $this->session->set_userdata('SumInsured',$SumInsured_int);
			$BUSINESSS = $this->session->set_userdata('Business',$BUSINESS_int);
			$Business_type = $this->session->set_userdata('Business_Type',$Business_Type);
			$Bank_name = $this->session->set_userdata('bank_name',$bank_name);
			$date = $this->session->set_userdata('date',$date);
			$SumInsured = (int)$SumInsured_int;
			$BUSINESS = (int)$BUSINESS_int;
			
			$ODAmount = round($SumInsured  *  $BUSINESS / 100);
			$GST = round($ODAmount * 18/100);
		    $Final = $ODAmount+$GST;
		   $this->load->view('admin/products');
		 

		}
		else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
	}
	
	
	public function report(){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->Vehicle_get_user_data();   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/report',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}

	public function secoundpage(){
        $session_id = $this->session->userdata('admin_uid');
		$SumInsured = $this->session->userdata('SumInsured');
		$Business = $this->session->userdata('Business');
		$date = $this->session->userdata('date');
		$data = array(
			'sum_insured' => $SumInsured,
			'policy_start' => $date,
              'Business'   => $Business
		);
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/secoundpage',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}
    
	public function dashbord(){
   
        $session_id = $this->session->userdata('admin_uid');

		$data['h']= $this->admin_model->visitor_count();
		$data['user']= $this->admin_model->website_user_count();
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);

		   $this->load->view('admin/dashbord',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}

	function user(){
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('Salutation', 'Salutation', 'required');
		$this->form_validation->set_rules('Policy_Holder','Policy_Holder','required');
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Date_Birth','Date_Birth','required');
		$this->form_validation->set_rules('Address_Line_1', 'Address_Line_1', 'required');
		$this->form_validation->set_rules('Address_Line_2', 'Address_Line_2', 'required');
		$this->form_validation->set_rules('Pincode','Pincode','required');
		$this->form_validation->set_rules('State', 'State', 'required');
		$this->form_validation->set_rules('City', 'City', 'required');
		$this->form_validation->set_rules('Mobile','Mobile','required');
		$this->form_validation->set_rules('Make', 'Make', 'required');
		$this->form_validation->set_rules('Model', 'Model', 'required');
		$this->form_validation->set_rules('Tear_Manufacturing','Tear_Manufacturing','required');
		$this->form_validation->set_rules('Type_Body', 'Type_Body', 'required');
		$this->form_validation->set_rules('Battery_No', 'Battery_No', 'required');
		$this->form_validation->set_rules('Chassis_No', 'Chassis_No', 'required');
		$this->form_validation->set_rules('Addresss_Line_1','Addresss_Line_1','required');
		$this->form_validation->set_rules('Addresss_Line_2', 'Addresss_Line_2', 'required');
		$this->form_validation->set_rules('Pincodes', 'Pincodes', 'required');
		$this->form_validation->set_rules('States','States','required');
		$this->form_validation->set_rules('Citys', 'Citys', 'required');
		$Financer_Type = $this->input->post('Financer_Type');
		if($Financer_Type == 'HYPOTHECATED'){
		$this->form_validation->set_rules('Financer_Name', 'Financer_Name', 'required');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		}
		$this->form_validation->set_rules('Financer_Type','Financer_Type','required');
		$this->form_validation->set_rules('Battery_kw', 'Battery_kw', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo validation_errors();
		} 
		else{
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
		$Type_Body = $this->input->post('Type_Body');
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
		
        
        $SumInsured = $this->session->userdata('SumInsured');
		$Business = $this->session->userdata('Business');
		$date = $this->session->userdata('date');
		$Business_Type = $this->session->userdata('Business_Type');
		$bank_name = $this->session->userdata('bank_name');


		$ODAmount = round($SumInsured*$Business/100);
		$GST = round($ODAmount*18/100);
		$Final = $ODAmount+$GST;


        $dateString =$date;
		$dt = new DateTime($dateString);
		$dt->modify('1 year');
		$exprie_date = $dt->format('Y-m-d');		

		$data['report'] = $this->admin_model->invoice_number();  
		foreach($data as $policy_number);
		$last = $policy_number;
	     // This is fetched from database
		$last++;
		$policy_numbers = sprintf('%07d', $last);


	     $data['report'] = $this->admin_model->customer_id();  
		foreach($data as $customer_id);

		$lasts = $customer_id; // This is fetched from database
		$lasts++;
		$costumer_ids = sprintf('%07d', $lasts);

		$data['report'] = $this->admin_model->invoice_no();  
		foreach($data as $inv);
		$str = $inv;
		$trim = trim($str, "MET");
		$invoice =$trim;
	    $invoice++;
		$invoice_number = "MET".sprintf('%07d', $invoice);

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
			'type_body' =>$Type_Body,
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
			
		); 
		
		$insert = $this->admin_model->insert($data);
	}
	}

	function pdf($id=0){
		
		$data['report'] = $this->admin_model->selectquery($id); 
		foreach($data as $inv);
		require_once BASEPATH.'../vendor/autoload.php';
		
		$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
		
		$this->load->view('admin/pdf',$data);
		$hmt =  $this->output->get_output();
		$mpdf->WriteHTML($hmt);
		$mpdf->Output('Policy.pdf','D');
    }
	
	function viewpdf($id=0){
		
		$data['report'] = $this->admin_model->selectquery($id); 
		foreach($data as $inv);
	   

		require_once BASEPATH.'../vendor/autoload.php';
		
		$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
		
		$this->load->view('admin/pdf',$data);
		$hmt =  $this->output->get_output();
		$mpdf->WriteHTML($hmt);
		
		$mpdf->Output();
		exit();

	
    }
	
   

	public function mobile_product(){
		$session_id = $this->session->userdata('admin_uid');
		
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		    $Business_Type =  $this->input->post('Business_Type');
			$date =  $this->input->post('Policy_Start');
			$BUSINESS_int =  $this->input->post('Business');
		    $SumInsured_int =  $this->input->post('SumInsured');
			$bank_name =  $this->input->post('bank');
			$premium =  $this->input->post('premium');
	
			$SumInsureds = $this->session->set_userdata('SumInsured',$SumInsured_int);
			$BUSINESSS = $this->session->set_userdata('Business',$BUSINESS_int);
			$Business_type = $this->session->set_userdata('Business_Type',$Business_Type);
			$Bank_name = $this->session->set_userdata('bank_name',$bank_name);
			$premiums = $this->session->set_userdata('premium',$premium);
			$date = $this->session->set_userdata('date',$date);
			$SumInsured = (int)$SumInsured_int;
			$BUSINESS = (int)$BUSINESS_int;
			
			$ODAmount = round($SumInsured  *  $BUSINESS / 100);
			$GST = round($ODAmount * 18/100);
		    $Final = $ODAmount+$GST;
		   $this->load->view('admin/mobile_product');
		 

		}
		else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
	}
	

	public function mobile_report(){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->Mobile_get_user_data();   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/Mobile_report',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}


	public function mobile_secoundpage(){
        $session_id = $this->session->userdata('admin_uid');
		$SumInsured = $this->session->userdata('SumInsured');
		$Business = $this->session->userdata('Business');
		$date = $this->session->userdata('date');
		$data = array(
			'sum_insured' => $SumInsured,
			'policy_start' => $date,
              'Business'   => $Business
		);
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/mobile_secoundpage',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}

	function mobile_user(){
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('Salutation', 'Salutation', 'required');
		$this->form_validation->set_rules('Policy_Holder','Policy_Holder','required');
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Date_Birth','Date_Birth','required');
		$this->form_validation->set_rules('Address_Line_1', 'Address_Line_1', 'required');
		$this->form_validation->set_rules('Address_Line_2', 'Address_Line_2', 'required');
		$this->form_validation->set_rules('Pincode','Pincode','required');
		$this->form_validation->set_rules('State', 'State', 'required');
		$this->form_validation->set_rules('City', 'City', 'required');
		$this->form_validation->set_rules('Mobile','Mobile','required');
		$this->form_validation->set_rules('Make', 'Make', 'required');
		$this->form_validation->set_rules('Model', 'Model', 'required');
		$this->form_validation->set_rules('Tear_Manufacturing','Tear_Manufacturing','required');
		$this->form_validation->set_rules('Battery_No', 'Battery_No', 'required');
		$this->form_validation->set_rules('Chassis_No', 'Chassis_No', 'required');
		$this->form_validation->set_rules('Addresss_Line_1','Addresss_Line_1','required');
		$this->form_validation->set_rules('Addresss_Line_2', 'Addresss_Line_2', 'required');
		$this->form_validation->set_rules('Pincodes', 'Pincodes', 'required');
		$this->form_validation->set_rules('States','States','required');
		$this->form_validation->set_rules('Citys', 'Citys', 'required');
		$Financer_Type = $this->input->post('Financer_Type');
		if($Financer_Type == 'HYPOTHECATED'){
		$this->form_validation->set_rules('Financer_Name', 'Financer_Name', 'required');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		}
		$this->form_validation->set_rules('Financer_Type','Financer_Type','required');
		$this->form_validation->set_rules('Battery_kw', 'Battery_kw', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo validation_errors();
		} 
		else{
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
		
        
        $SumInsured = $this->session->userdata('SumInsured');
		$Business = $this->session->userdata('Business');
		$date = $this->session->userdata('date');
		$Business_Type = $this->session->userdata('Business_Type');
		$bank_name = $this->session->userdata('bank_name');
		
		$premium = $this->session->userdata('premium');  
		
       
		$ODAmount = $premium;
		$GST = 0;
		$Final = $premium;

        $dateString =$date;
		$dt = new DateTime($dateString);
		$dt->modify('1 year');
		$exprie_date = $dt->format('Y-m-d');		

		$data['report'] = $this->admin_model->Mobile_invoice_number();  
		foreach($data as $policy_number);
		$last = $policy_number;
	     // This is fetched from database
		$last++;
		$policy_numbers = sprintf('%07d', $last);


	     $data['report'] = $this->admin_model->Mobile_customer_id();  
		foreach($data as $customer_id);

		$lasts = $customer_id; // This is fetched from database
		$lasts++;
		$costumer_ids = sprintf('%07d', $lasts);

		$data['report'] = $this->admin_model->Mobile_invoice_no();  
		foreach($data as $inv);
		$str = $inv;
		$trim = trim($str, "MB/MP/");
	
		$invoice =$trim;
	    $invoice++;
		$invoice_number = "MB/MP/".sprintf('%07d', $invoice);
		

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
		
		); 
		
		$insert = $this->admin_model->Mobile_insert($data);
	}
	}

	function mobile_pdf($id=0){
		
		$data['report'] = $this->admin_model->Mobile_selectquery($id); 
		foreach($data as $inv);
		require_once BASEPATH.'../vendor/autoload.php';
		
		$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
		
		$this->load->view('admin/mobile_pdf',$data);
		$hmt =  $this->output->get_output();
		$mpdf->WriteHTML($hmt);
		$mpdf->Output('Policy.pdf','D');
    }
	
	function mobile_viewpdf($id=0){
		
		$data['report'] = $this->admin_model->Mobile_selectquery($id); 
		foreach($data as $inv);
	   

		require_once BASEPATH.'../vendor/autoload.php';
		
		$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
		
		$this->load->view('admin/mobile_pdf',$data);
		$hmt =  $this->output->get_output();
		$mpdf->WriteHTML($hmt);
		
		$mpdf->Output();
		exit();

	
    }

	function fetch(){
		$this->load->view('admin/dashbord');
		
	}

	public function user_report(){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->Website_get_user_report();   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/user_report',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}

	public function user_list(){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->Website_get_user_data();   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/user_list',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}


	function website_pdf($id=0){
		
		$data['report'] = $this->admin_model->website_selectquery($id); 
		foreach($data as $inv);
		require_once BASEPATH.'../vendor/autoload.php';
		
		$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
		
		$this->load->view('admin/mobile_pdf',$data);
		$hmt =  $this->output->get_output();
		$mpdf->WriteHTML($hmt);
		$mpdf->Output('Policy.pdf','D');
    }
	
	function website_viewpdf($id=0){
		
		$data['report'] = $this->admin_model->website_selectquery($id); 
		foreach($data as $inv);
	   

		require_once BASEPATH.'../vendor/autoload.php';
		
		$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
		
		$this->load->view('admin/mobile_pdf',$data);
		$hmt =  $this->output->get_output();
		$mpdf->WriteHTML($hmt);
		
		$mpdf->Output();
		exit();

	
    }

	function add_agent(){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->Website_get_user_data();   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/add_agent',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
	}

	function add_agent_form(){
		$Name = $this->input->post('Name');
		$email = $this->input->post('email');
		$Mobile = $this->input->post('Mobile');
		$Address = $this->input->post('Address');

		$data['report'] = $this->admin_model->agent_code();  
		foreach($data as $inv);
		$str = $inv;
		$trim = trim($str, "AG");
	
		$invoice =$trim;
	    $invoice++;
		$invoice_number = "AG".sprintf('%03d', $invoice);

		

		$data = array(
			'name' => $Name,
			'email' =>$email,
			'mobile' =>$Mobile,
			'address' =>$Address,
			'agent_code' =>$invoice_number
		);

		$insert = $this->admin_model->agent_insert($data);

		$this->session->set_flashdata('Contact_us_form', 'Contact Us Successfully Submit'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	      	return redirect('Welcome/agent_list');
	}

	public function agent_list(){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->agent_list_get();   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/agent_list',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}


	function edit_agent($id = 0 ){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->edit_agent($id);   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/edit_agent',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
	}

	function edit_agent_form(){
		$Name = $this->input->post('Name');
		$email = $this->input->post('email');
		$Mobile = $this->input->post('Mobile');
		$Address = $this->input->post('Address');
		$id = $this->input->post('id');

	

		$data = array(
			'name' => $Name,
			'email' =>$email,
			'mobile' =>$Mobile,
			'address' =>$Address,
		);

		$insert = $this->admin_model->agent_update($data,$id);

		$this->session->set_flashdata('Contact_us_form', 'Contact Us Successfully Submit'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	      	return redirect('Welcome/agent_list');
	}

	function delete_agent(){
		$pid = $this->input->post('pid');
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->agent_delete($pid);   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/edit_agent',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
	}

	function add_shop($id=0){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->Website_get_user_data();   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/add_shop',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
	}

	function add_shop_form(){
		$Name = $this->input->post('Name');
		$email = $this->input->post('email');
		$Mobile = $this->input->post('Mobile');
		$Address = $this->input->post('Address');
		$owner_Name = $this->input->post('owner_Name');
		$GST = $this->input->post('GST');
		$id = $this->input->post('id');
		
		$data['report'] = $this->admin_model->shop_code();  
		foreach($data as $inv);
		$str = $inv;
		$trim = trim($str, "SP");
	
		$invoice =$trim;
	    $invoice++;
		$invoice_number = "SP".sprintf('%03d', $invoice);

		

		$data = array(
			'name' => $Name,
			'email' =>$email,
			'mobile' =>$Mobile,
			'address' =>$Address,
			'shop_code' =>$invoice_number,
			'shop_owner' => $owner_Name,
			'GST' =>$GST,
			'agent_id' =>$id
		);

		$insert = $this->admin_model->shop_insert($data);
		$insert_id = $this->db->insert_id();

		if (!empty($_FILES['shop_img']['name'][0])) {
			$config['upload_path'] = './uplode/shop/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
		
			// Iterate through each uploaded file
			foreach ($_FILES['shop_img']['name'] as $key => $value) {
				$_FILES['file']['name'] = $_FILES['shop_img']['name'][$key];
				$_FILES['file']['type'] = $_FILES['shop_img']['type'][$key];
				$_FILES['file']['tmp_name'] = $_FILES['shop_img']['tmp_name'][$key];
				$_FILES['file']['error'] = $_FILES['shop_img']['error'][$key];
				$_FILES['file']['size'] = $_FILES['shop_img']['size'][$key];
		
				// Check if the upload is successful
				if (!$this->upload->do_upload('file')) {
					$upload_error = $this->upload->display_errors();
					echo "Upload Error: " . $upload_error;
				} else {
					$image_data = $this->upload->data();
					$filename = $image_data['file_name'];
		
					// Update the database with the filename
					$this->db->where('id', $insert_id);
					$this->db->update('shop', ['shop_images' => $filename]);
				}
			}
		}
		
		$this->session->set_flashdata('Contact_us_form', 'Contact Us Successfully Submit'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
	      	return redirect('Welcome/agent_list');
	}

	public function shop_list($agent_id = 0){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->shop_list_get($agent_id);   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/shop_list',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}

	function edit_shop($id = 0 ){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->edit_shop($id);   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/edit_shop',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
	}

	function edit_shop_form(){
		$Name = $this->input->post('Name');
		$email = $this->input->post('email');
		$Mobile = $this->input->post('Mobile');
		$Address = $this->input->post('Address');
		$owner_Name = $this->input->post('owner_Name');
		$GST = $this->input->post('GST');
		$id = $this->input->post('id');

		$data['report'] = $this->admin_model->edit_shop($id);   
		$agent_id = $data['report']->agent_id;
		$data = array(
			'name' => $Name,
			'email' =>$email,
			'mobile' =>$Mobile,
			'address' =>$Address,
			'shop_owner' => $owner_Name,
			'GST' =>$GST,
		);

		$insert = $this->admin_model->shop_update($data,$id);

		$this->session->set_flashdata('Contact_us_form', 'Contact Us Successfully Submit'); 
	      	 $this->session->set_flashdata('msg_class','alert-success');
			   return redirect('Welcome/shop_list/'.$agent_id);
	}

	function delete_shop(){
		$pid = $this->input->post('pid');
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->shop_delete($pid);   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/edit_agent',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
	}

	public function agent_product(){
		$session_id = $this->session->userdata('admin_uid');
		
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);


		    $Business_Type =  $this->input->post('Business_Type');
			$date =  $this->input->post('Policy_Start');
			$BUSINESS_int =  $this->input->post('Business');
		    $SumInsured_int =  $this->input->post('SumInsured');
			$bank_name =  $this->input->post('bank');
			$premium =  $this->input->post('premium');
			
			$SumInsureds = $this->session->set_userdata('SumInsured',$SumInsured_int);
			$BUSINESSS = $this->session->set_userdata('Business',$BUSINESS_int);
			$Business_type = $this->session->set_userdata('Business_Type',$Business_Type);
			$Bank_name = $this->session->set_userdata('bank_name',$bank_name);
			$date = $this->session->set_userdata('date',$date);
			$premium = $this->session->set_userdata('premium',$premium);
			$SumInsured = (int)$SumInsured_int;
			$BUSINESS = (int)$BUSINESS_int;
			
			$ODAmount = round($SumInsured  *  $BUSINESS / 100);
			$GST = round($ODAmount * 18/100);
		    $Final = $ODAmount+$GST;

		   $this->load->view('admin/agent_product');
		 

		}
		else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
	}

	public function agent_secoundpage($shop_id= 0){
        $session_id = $this->session->userdata('admin_uid');
		$SumInsured = $this->session->userdata('SumInsured');
		$Business = $this->session->userdata('Business');
		$date = $this->session->userdata('date');
		$data = array(
			'sum_insured' => $SumInsured,
			'policy_start' => $date,
              'Business'   => $Business
		);
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/agent_secoundpage',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}


	function agent_mobile_user(){
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('Salutation', 'Salutation', 'required');
		$this->form_validation->set_rules('Policy_Holder','Policy_Holder','required');
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Date_Birth','Date_Birth','required');
		$this->form_validation->set_rules('Address_Line_1', 'Address_Line_1', 'required');
		$this->form_validation->set_rules('Address_Line_2', 'Address_Line_2', 'required');
		$this->form_validation->set_rules('Pincode','Pincode','required');
		$this->form_validation->set_rules('State', 'State', 'required');
		$this->form_validation->set_rules('City', 'City', 'required');
		$this->form_validation->set_rules('Mobile','Mobile','required');
		$this->form_validation->set_rules('Make', 'Make', 'required');
		$this->form_validation->set_rules('Model', 'Model', 'required');
		$this->form_validation->set_rules('Tear_Manufacturing','Tear_Manufacturing','required');
		$this->form_validation->set_rules('Battery_No', 'Battery_No', 'required');
		$this->form_validation->set_rules('Chassis_No', 'Chassis_No', 'required');
		$this->form_validation->set_rules('Addresss_Line_1','Addresss_Line_1','required');
		$this->form_validation->set_rules('Addresss_Line_2', 'Addresss_Line_2', 'required');
		$this->form_validation->set_rules('Pincodes', 'Pincodes', 'required');
		$this->form_validation->set_rules('States','States','required');
		$this->form_validation->set_rules('Citys', 'Citys', 'required');

		
		$Financer_Type = $this->input->post('Financer_Type');
		if($Financer_Type == 'HYPOTHECATED'){
		$this->form_validation->set_rules('Financer_Name', 'Financer_Name', 'required');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		}
		$this->form_validation->set_rules('Financer_Type','Financer_Type','required');
		$this->form_validation->set_rules('Battery_kw', 'Battery_kw', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo validation_errors();
		} 
		else{
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
		$shop_code = $this->input->post('shop_code');
		$agent_code = $this->input->post('agent_code');
		

        $SumInsured = $this->session->userdata('SumInsured');
		$Business = $this->session->userdata('Business');
		$date = $this->session->userdata('date');
		$Business_Type = $this->session->userdata('Business_Type');
		$bank_name = $this->session->userdata('bank_name');
		
		$premium = $this->session->userdata('premium');  
		
		$ODAmount = $premium;
		$GST = 0;
		$Final = $premium;

        $dateString =$date;
		$dt = new DateTime($dateString);
		$dt->modify('1 year');
		$exprie_date = $dt->format('Y-m-d');		

		$data['report'] = $this->admin_model->Mobile_invoice_number();  
		foreach($data as $policy_number);
		$last = $policy_number;
	     // This is fetched from database
		$last++;
		$policy_numbers = sprintf('%07d', $last);


	     $data['report'] = $this->admin_model->Mobile_customer_id();  
		foreach($data as $customer_id);

		$lasts = $customer_id; // This is fetched from database
		$lasts++;
		$costumer_ids = sprintf('%07d', $lasts);

		$data['report'] = $this->admin_model->Mobile_invoice_no();  
		foreach($data as $inv);
		$str = $inv;
		$trim = trim($str, "MB/MP/");
	
		$invoice =$trim;
	    $invoice++;
		$invoice_number = "MB/MP/".sprintf('%07d', $invoice);
		

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
			'shop_code'  =>$shop_code,
			'agent_code'  =>$agent_code,
		
		); 
		
	
		$insert = $this->admin_model->agent_Mobile_insert($data);
		$insertId = $this->db->insert_id();
        $redirectUrl = 'welcome/pay/' . $insertId;
		return redirect($redirectUrl);
	}
	}

	public function agent_mobile_report(){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->agent_Mobile_get_user_data();   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/agent_report',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}

	public function agent_policy_list($agent_id = 0){
		$session_id = $this->session->userdata('admin_uid');

		$data['report'] = $this->admin_model->agent_policy_list_get($agent_id);   
		//return the data in view  
		if($session_id)
		{
		   $admin_detail = $this->admin_model->get_admin_data($session_id);
		   $this->load->view('admin/agent_report',$data);
		}else{
		  $this->session->set_flashdata('Login_failed','Please login!');
		   $this->session->set_flashdata('msg_class','alert-danger');
			 return redirect('/');
		}
		
	}


	public function pay($id)
{
	
$_SESSION['report_id'] = $id;
$result = $this->db->where('id', $id)->get('db_mobile_report')->result();
foreach ($result as $dataji) {
    $_SESSION['premium_amount'] = $dataji->premium;
    $_SESSION['name_policy_holder'] = $dataji->name_policy_holder;
    $_SESSION['emails'] = $dataji->email;
    $_SESSION['mobiles'] = $dataji->mobile;
    $_SESSION['bank_names'] = $dataji->bank_name;
    $_SESSION['policy_numberss'] = $dataji->policy_numbers;
}

$api = new Api("rzp_test_dfwGYguqxcme16", "d9WQOxajFVqojtWZzVPKgsRE");

$prefix = "TSsd1183";
$randomNumber = $prefix . rand();

$currentDate = date('Y-m-d');
$currentDateString = strval($currentDate);

// Calculate the date after 6 months
$nextDate = date('Y-m-d', strtotime('+6 months'));
$nextDateString = strtotime($nextDate);
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.razorpay.com/v1/payment_links',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
	"amount": ' . ($_SESSION['premium_amount'] * 100) . ',
	"currency": "INR",
	"accept_partial": false,
	"expire_by": '.$nextDateString.',
	"reference_id": "' . $randomNumber . '",
	"description": "Payment for policy no ' . $_SESSION['policy_numberss'] . '",
	"customer": {
	  "name": "' . $_SESSION['name_policy_holder'] . '",
	  "contact": "+91'.$_SESSION['mobiles'] . '",
	  "email": "' . $_SESSION['emails'] . '"
	},
	"notify": {
	  "sms": true,
	  "email": true
	},
	"reminder_enable": false, 
	"notes": {
	  "policy_name": "' . $_SESSION['bank_names'] . '"
	},
	"callback_url": "https://dbvertex.com/Electricalvehical",
	"callback_method": "get"
  }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Basic cnpwX3Rlc3RfZGZ3R1lndXF4Y21lMTY6ZDlXUU94YWpGVnFvanRXWnpWUEtnc1JF'
    ),
));

$response = curl_exec($curl);
curl_close($curl);

// Convert the JSON response to an array
$responseArray = json_decode($response, true);

if ($responseArray) {
    // Access the desired data from the array
    $shortUrl = $responseArray['short_url'];

    // Update the database with the short URL
    $this->db->where('id', $_SESSION['report_id'])->update('db_mobile_report', ['payment_link' => $shortUrl]);
  
} 
unset($_SESSION['policy_numberss']);
unset($_SESSION['premium_amount']);
unset($_SESSION['emails']);
unset($_SESSION['mobiles']);
unset($_SESSION['bank_names']);
}

}

