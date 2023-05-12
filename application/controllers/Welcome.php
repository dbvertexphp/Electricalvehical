<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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




	
}

