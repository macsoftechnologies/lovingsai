<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		// is_logged_in();
		$this->load->model('UserModel','um');
		$this->load->model('AdminModel', 'am');
		if($this->session->userdata('adminId') == ''){
			redirect("adminlogin");
		}else { 
		}
		// if($this->session->userdata('role_id') == 1){
		// 	is_spad_logged_in();
		// }else if($this->session->userdata('role_id') == 2){
		// 	is_ad_logged_in();
		// }
	}
	
	public function index()
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Employee";
		$empData = ['admin_id' => $this->session->userdata('adminId')];
		$data_string = json_encode($empData);
		$url = SITEURL.'employee/employeeDetails';
		$method = "POST";
		$result = ProcessCurlPost($url,$method,$data_string);
		// echo "<pre>";
		// print_r($empData);
		// print_r($result);
		// exit;
		$data['employees'] = $result->employees;
		// $data['products'] = $this->am->getProductDetails("tbl_employee_details",[]);
		$this->settemplate->addashboard("employee/index",$data);
	}
	}

	public function create()
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Create employee";
		$this->settemplate->addashboard("employee/create",$data);
	}
	}

	public function insert()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required');
		$this->form_validation->set_rules('daily_wage', 'Daily Wage', 'trim|required');
		$this->form_validation->set_rules('minimum_wage_days', 'Minimum Wage Days', 'trim|required');
		$this->form_validation->set_rules('overtime_commission_per_hours', 'Over time commission', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->create();
		}		
		else	
		{
			$image_path = "";
			//insert Image here
			if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
				$getFlag = 0;
				$imgName = $_FILES['image']['name'];
				$file_size =$_FILES['image']['size'];
				$file_tmp =$_FILES['image']['tmp_name'];

				$temp_tr = explode(".", $_FILES["image"]["name"]);
				$file_ext = end($temp_tr);
				$expensions= array("jpeg","jpg","png");
				if(in_array($file_ext,$expensions)=== false){
					$getFlag = 1;
					$this->response(['status' => 401,'message' =>'Invalid File.Image']);
			  	}
			  	if($file_size > 4194304){
			  		$getFlag = 2;
			        $this->response(['status' => 401,'message' =>'File size must be excately 4 MB.']);
			    }

			    if($getFlag == 0){
			    	$file_name = round(microtime(true)) . '.' . end($temp_tr);

			    	$img_directory =  "assets/profiles";
			    	if (!file_exists($img_directory)) {
					    mkdir($img_directory, 0777, true);
					}
						$image_path = base_url().$img_directory."/".$file_name;
					move_uploaded_file($file_tmp,$img_directory."/".$file_name);
			    }
			}
			$empData = [
				'name' => $this->input->post('name'),
				'mobile_number' => $this->input->post('mobile_number'),
				'designation' => "testing",
				'aadhar_number' => $this->input->post('aadhar_number'),
				'image' => $image_path,
				'daily_wage' => $this->input->post('daily_wage'),
				'minimum_wage_days' => $this->input->post('minimum_wage_days'),
				'overtime_commission_per_hours' => $this->input->post('overtime_commission_per_hours'),
				'address' => $this->input->post('address'),
				'admin_id' => $this->input->post('admin_id')
			];

			$data_string = json_encode($empData);
			$url = SITEURL.'employee/create';
			$method = "POST";
			$result = ProcessCurlPost($url,$method,$data_string);

			if($result->status == 200){
				$this->session->set_flashdata('success_msg',  $result->message);
			}else{
				$this->session->set_flashdata('error_msg',  $result->message);
			}
			redirect('employee');
		}
	}

	public function show($employee_id)
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Employee Transations";
		$data['transactonTypes'] = $this->um->getTransactionTypes("tbl_mst_payment_types",['type' => 2]);
		$data['transactons'] = $this->um->getEmpTransactions("tbl_employee_account ea",['ea.employee_id' => $employee_id]);
		$data['emp_id'] = $employee_id;
		$this->settemplate->addashboard('employee/show',$data);
	}
	}

	public function attendlist($employee_id)
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Employee show";
		$data['employee_id'] = $employee_id;
		$data['from_dt'] = $data['to_dt'] = $from = $to = "" ;
		if($this->input->post('fromdate') != "" && $this->input->post('todate') != ""){
			$from = date('Y-m-d', strtotime($this->input->post('fromdate')));
			$to = date('Y-m-d', strtotime($this->input->post('todate')));

			$data['from_dt'] = $this->input->post('fromdate');
			$data['to_dt'] = $this->input->post('todate');
		}
		
		$whr = ['e.employee_id' =>$employee_id];
		$data['attendlist'] = $this->um->getAttendence("tbl_employee_attendence e", $whr, $from, $to);
		$this->settemplate->addashboard("employee/attendlist",$data);
	}
	}

	public function edit($employee_id)
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$employeeData = ['employee_id' => $employee_id];
		$data_string = json_encode($employeeData);
		$url = SITEURL.'employee/getemployeedetails';
		$method = "POST";
		$result = ProcessCurlPost($url,$method,$data_string);
		$data['employee'] = $result->result; 
		
		$this->settemplate->addashboard("employee/edit",$data);
	}
	}

	public function update($employee_id)
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required');
		$this->form_validation->set_rules('daily_wage', 'Daily Wage', 'trim|required');
		$this->form_validation->set_rules('minimum_wage_days', 'Minimum Wage Days', 'trim|required');
		$this->form_validation->set_rules('overtime_commission_per_hours', 'Over time commission', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->edit($employee_id);
		}			
		else	
		{
			$image_path = "";
			//insert Image here
			if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
				$getFlag = 0;
				$imgName = $_FILES['image']['name'];
				$file_size =$_FILES['image']['size'];
				$file_tmp =$_FILES['image']['tmp_name'];

				$temp_tr = explode(".", $_FILES["image"]["name"]);
				$file_ext = end($temp_tr);
				$expensions= array("jpeg","jpg","png");
				if(in_array($file_ext,$expensions)=== false){
					$getFlag = 1;
					$this->response(['status' => 401,'message' =>'Invalid File.Image']);
			  	}
			  	if($file_size > 4194304){
			  		$getFlag = 2;
			        $this->response(['status' => 401,'message' =>'File size must be excately 4 MB.']);
			    }

			    if($getFlag == 0){
			    	$file_name = round(microtime(true)) . '.' . end($temp_tr);

			    	$img_directory =  "assets/profiles";
			    	if (!file_exists($img_directory)) {
					    mkdir($img_directory, 0777, true);
					}
						$image_path = base_url().$img_directory."/".$file_name;
					move_uploaded_file($file_tmp,$img_directory."/".$file_name);
			    }
			}
			else{
				$getImg = $this->um->getemployeeImage("tbl_employee_details", ['employee_id' => $employee_id]);
				if($getImg['image'] != ""){
					$image_path = $getImg['image'];
				}else{
					$image_path = "";
				}
			}
			$empData = [
				'employee_id' => $employee_id,
				'name' => $this->input->post('name'),
				'mobile_number' => $this->input->post('mobile_number'),
				'designation' => "testing",
				'aadhar_number' => $this->input->post('aadhar_number'),
				'image' => $image_path,
				'daily_wage' => $this->input->post('daily_wage'),
				'minimum_wage_days' => $this->input->post('minimum_wage_days'),
				'overtime_commission_per_hours' => $this->input->post('overtime_commission_per_hours'),
				'address' => $this->input->post('address')
			];

			$data_string = json_encode($empData);
			$url = SITEURL.'employee/update';
			$method = "POST";
			$result = ProcessCurlPost($url,$method,$data_string);
			


			if($result->status == 200){
				$this->session->set_flashdata('success_msg',  $result->message);
			}else{
				$this->session->set_flashdata('error_msg',  $result->message);
			}
			redirect('employee');
		}
	}


	public function delete($employee_id)
	{
		$employeeData = ['employee_id' => $employee_id];
		$data_string = json_encode($employeeData);
		$url = SITEURL.'employee/delete';
		$method = "POST";
		$result = ProcessCurlPost($url,$method,$data_string);
		redirect('employee');
	}


	public function attendance()
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Employee Attendance";
		$data['cc_date'] = date('d-m-Y');
		$empData = ['admin_id' => $this->session->userdata('adminId')];
		$data_string = json_encode($empData);
		$url = SITEURL.'employee/employeeDetails';
		$method = "POST";
		$result = ProcessCurlPost($url,$method,$data_string);
		$data['employees'] = $result->employees;
		$this->settemplate->addashboard("employee/attendance",$data);
	}
	}

	public function insertAttendance()
	{
		$this->form_validation->set_rules('date', 'Date', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->attendance();
		}		
		else	
		{
			$url = SITEURL.'employee/employeeDetails';
			$method = "GET";
			$result = ProcessCurl($url,$method);
			$employees = $result->employees;

			$empData = array();
			$empMainData = array();
			if(count($employees) > 0){
				for ($i=0; $i < count($employees); $i++) { 
					$empId = $this->input->post('attendance_'.$i);
					$ee = explode("_", $empId);
					array_push($empData, array('employee_id' => $ee[1], 'attendence' => $ee[0]));
				}
			}
			$empMainData['date'] = $this->input->post('date');
			$empMainData['empData'] = $empData;

			$data_string = json_encode($empMainData);
			$url = SITEURL.'employee/attendence';
			$method = "POST";
			$resultt = ProcessCurlPost($url,$method,$data_string);

			if($resultt->status == 200){
				$this->session->set_flashdata('success_msg',  $resultt->message);
			}else{
				$this->session->set_flashdata('error_msg',  $resultt->message);
			}
			redirect('employee/attendance');
		}
	}


	public function searchAttdance()
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Employee";
		$empData = ['date' => $this->input->post('date_search')];
		$data['cc_date'] = $this->input->post('date_search');
		$data_string = json_encode($empData);
		$url = SITEURL.'employee/searchDetails';
		$method = "POST";
		$resultt = ProcessCurlPost($url,$method,$data_string);
		$data['employees'] = $resultt->employees;
		$this->settemplate->addashboard("employee/attendance",$data);
	}
	}

	public function maketransaction($employee_id)
	{
		$this->form_validation->set_rules('transaction_type', 'Transaction Type', 'trim|required');
		$this->form_validation->set_rules('txn_date', 'Date', 'trim|required');
		$this->form_validation->set_rules('amount', 'Amount', 'trim|required');
		$this->form_validation->set_rules('feedback', 'Feedback', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->show($employee_id);
		}		
		else	
		{
			$emp_txn = "TXN".time();
			$transactionObj = [
				'employee_id' => $employee_id,
				'transaction_id' => $emp_txn,
				'paymeny_type_id' => $this->input->post('transaction_type'),
				'txn_date' => date('Y-m-d',strtotime($this->input->post('txn_date'))),
				'amount' => $this->input->post('amount'),
				'feedback' => $this->input->post('feedback')
			];
			$lastId = $this->um->insertData("tbl_employee_account",$transactionObj);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg',  "Transaction Done successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Try again later");
			}
			redirect('employee/show/'.$employee_id);
		}
	}

	public function statusupdate($employee_id)
	{
			$whr = ['employee_id' => $employee_id];
			$settingsData = [
				'status' => 0
			];

			$settingId = $this->am->updateData("tbl_employee_details",$settingsData,$whr);
			if($settingId > 0){
				$this->session->set_flashdata('success_msg',  "Status Updated Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
			redirect('employee');
	}

	public function updatestatus($employee_id)
	{
			$whr = ['employee_id' => $employee_id];
			$settingsData = [
				'status' => 1
			];

			$settingId = $this->am->updateData("tbl_employee_details",$settingsData,$whr);
			if($settingId > 0){
				$this->session->set_flashdata('success_msg',  "Status Updated Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
			redirect('employee');
	}
}
