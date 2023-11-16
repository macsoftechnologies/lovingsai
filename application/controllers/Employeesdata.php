<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employeesdata extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');

		$this->admin = $this->session->userdata('admin_id');
	}
	
	public function index()
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Employee";
		$data['employees'] = $this->um->getEmployeeDetails("tbl_employee_details",[]);
		$this->settemplate->dashboard("employee/index",$data);
	}
	}

	public function create()
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Create employee";
		$this->settemplate->dashboard("employee/create",$data);
	}
	}

	public function view($employee_id)
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Employee";
		$data['employees'] = $this->um->getEmployeeId("tbl_employee_details",['employee_id' => $employee_id]);
		$data['leaves'] = $this->um->getemployeesLeavesData("employee_leaves",['employee_id' => $employee_id]);
		$this->settemplate->dashboard("employee/view",$data);
	}
	}

	public function leaves($employee_id)
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Employee";
		$data['employees'] = $this->um->getEmployeeDetails("tbl_employee_details",['employee_id' => $employee_id])->row_array();
		$data['leaves'] = $this->um->getemployeesLeavesData("employee_leaves",['employee_id' => $employee_id]);
		$this->settemplate->dashboard("employee/leaves",$data);
	}
	}

	public function insert()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required');
		// $this->form_validation->set_rules('daily_wage', 'Daily Wage', 'trim|required');
		// $this->form_validation->set_rules('minimum_wage_days', 'Minimum Wage Days', 'trim|required');
		// $this->form_validation->set_rules('overtime_commission_per_hours', 'Over time commission', 'trim|required');
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
				// 'daily_wage' => $this->input->post('daily_wage'),
				// 'minimum_wage_days' => $this->input->post('minimum_wage_days'),
				// 'overtime_commission_per_hours' => $this->input->post('overtime_commission_per_hours'),
				'address' => $this->input->post('address'),
				'admin_id' => $this->input->post('admin_id')
			];

			$userId = $this->um->insertData("tbl_employee_details", $empData);

			if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Employee Created Successfully.");
		        redirect('employeesdata');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('employeesdata');
		    }
			redirect('employeesdata');
		}
	}


	public function insertleaves($employee_id)

	{

			$date = date('Y-m-d H:i:s');

				$year = $this->input->post('year');
				$month = $this->input->post('month');
				$cl = $this->input->post('cl');
				$el = $this->input->post('el');

				if(count($year) > 0){
					for ($i=0; $i < count($year); $i++) { 

						

							$itObject = [
							'employee_id' => $employee_id,
							'year' => $year[$i],
							'month' => $month[$i],
							'cl' => $cl[$i],
							'el' => $el[$i],
							'status' => 1,
							'created_at' => $date
						];


						$itLastId = $this->um->insertData("employee_leaves",$itObject);
					
					}
				}

				
				$this->session->set_flashdata('success_msg',  "Employee Leaves Created Successfully.");

				redirect('employeesdata/view/'.$employee_id);

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
		$this->settemplate->dashboard('employee/show',$data);
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
		$this->settemplate->dashboard("employee/attendlist",$data);
	}
	}

	public function edit($employee_id)
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$employeeData = ['employee_id' => $employee_id];
		$data['employees'] = $this->um->getEmployeeDetails("tbl_employee_details",['employee_id' => $employee_id])->row_array();
		$this->settemplate->dashboard("employee/edit",$data);
	}
	}

	public function update($employee_id)
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required');
		// $this->form_validation->set_rules('daily_wage', 'Daily Wage', 'trim|required');
		// $this->form_validation->set_rules('minimum_wage_days', 'Minimum Wage Days', 'trim|required');
		// $this->form_validation->set_rules('overtime_commission_per_hours', 'Over time commission', 'trim|required');
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

			$whr = ['employee_id' => $employee_id];
			$empData = [
				'name' => $this->input->post('name'),
				'mobile_number' => $this->input->post('mobile_number'),
				'designation' => "testing",
				'aadhar_number' => $this->input->post('aadhar_number'),
				'image' => $image_path,
				// 'daily_wage' => $this->input->post('daily_wage'),
				// 'minimum_wage_days' => $this->input->post('minimum_wage_days'),
				// 'overtime_commission_per_hours' => $this->input->post('overtime_commission_per_hours'),
				'address' => $this->input->post('address')
			];

			$userId = $this->um->updateData("tbl_employee_details",$empData,$whr);
			

        if($userId > 0){

			$this->session->set_flashdata('success_msg',  "Employee Updated Successfully.");

			redirect('employeesdata');

		}else{

			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

			redirect('employeesdata');

		}
		}
	}


	 public function delete($employee_id)
	{
		$whr = ['employee_id' => $employee_id];
			$lastId = $this->um->deleteData("tbl_employee_details", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "Employee Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('employeesdata');
	}


	public function attendance()
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Employee Attendance";
		$data['cc_date'] = date('d-m-Y');
		$empDetails = $this->um->getAllempData("tbl_employee_details",[]);
		$empArr = [];
				if($empDetails->num_rows() > 0){
					foreach ($empDetails->result() as $emp) {
						$attendace = 0;
						$adv_amt = 0;
						$daily_amt = 0;
						$balance_amt = $daily_amt - $adv_amt;
						$attendace = $this->um->getAttendaceData("tbl_employee_attendence",['employee_id' => $emp->employee_id,'date' => date('Y-m-d')]);
						$employee = array('employee_id' => $emp->employee_id , 'name' => $emp->name, 'mobile_number' => $emp->mobile_number, 'aadhar_number' => $emp->aadhar_number, 'image' => $emp->image,'designation' => $emp->designation, 'address' => $emp->address, 'daily_wage' => $emp->daily_wage, 'minimum_wage_days' => $emp->minimum_wage_days, 'overtime_commission_per_hours' => $emp->overtime_commission_per_hours, 'status' => $emp->status, 'attendence' => $attendace['attendence']);
						array_push($empArr, $employee);
						$balance_amt = 0;
					}
				}
		$data['employees'] = $empArr;	
		$this->settemplate->dashboard("employee/attendance",$data);
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
			$employees = $this->um->getEmployeeDetails("tbl_employee_details",[])->result_array();
			$date = date('Y-m-d H:i:s');

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

			$attd_date = date('Y-m-d', strtotime($this->input->post('date')));
				$employeeDetails = $empData;
				if(count($employeeDetails) > 0){
					for ($i=0; $i < count($employeeDetails); $i++) { 
						//check record exist or not
						$awhr = ['employee_id' => $employeeDetails[$i]['employee_id'], 'date' => $attd_date];
						$chk_attndace = $this->um->checkUserAttendace("tbl_employee_attendence",$awhr);
						if($chk_attndace == 0){
							$empform = [
								'date' => $attd_date,
								'employee_id' => $employeeDetails[$i]['employee_id'],
								'attendence' => $employeeDetails[$i]['attendence'],
								'status' => 1,
								'created_at' => $date
							];
							$lastId = $this->um->insertData("tbl_employee_attendence",$empform);
							if($lastId > 0){
								//get Dailywage 
								$whr = ['employee_id' => $employeeDetails[$i]['employee_id']];
								$getemployee = $this->um->getEmployeeId("tbl_employee_details",$whr);
								
								//make transaction
								if($employeeDetails[$i]['attendence'] == 1){
									$employeeTxn = $this->makeEmpTransaction($employeeDetails[$i]['employee_id'], $getemployee['daily_wage']);
								}else if($employeeDetails[$i]['attendence'] == 2 || $employeeDetails[$i]['attendence'] == 3){
									$dailyWage = $getemployee['daily_wage']/2;

									$employeeTxn = $this->makeEmpTransaction($employeeDetails[$i]['employee_id'], $dailyWage);
								}
							}
						}else{
							$txn_whr = ['employee_id' => $employeeDetails[$i]['employee_id'], 'txn_date' => $attd_date];
							$chk_account = $this->um->checkUserTransaction("tbl_employee_account",$txn_whr);
							$whr = ['employee_id' => $employeeDetails[$i]['employee_id']];
							if($chk_account == 0){
								//$whr = ['employee_id' => $employeeDetails[$i]['employee_id']];
								$getemployee = $this->um->getEmployeeId("tbl_employee_details",$whr);
								
								//make transaction
								if($employeeDetails[$i]['attendence'] == 1){
									$employeeTxn = $this->makeEmpTransaction($employeeDetails[$i]['employee_id'], $getemployee['daily_wage']);

									$updat =  $this->um->updateData("tbl_employee_attendence", ['attendence' => $employeeDetails[$i]['attendence']],$whr );

								}else if($employeeDetails[$i]['attendence'] == 2 || $employeeDetails[$i]['attendence'] == 3){
									$dailyWage = $getemployee['daily_wage']/2;

									$employeeTxn = $this->makeEmpTransaction($employeeDetails[$i]['employee_id'], $dailyWage);
									$updat =  $this->um->updateData("tbl_employee_attendence", ['attendence' => $employeeDetails[$i]['attendence']],$whr );
								}
							}else{
								
								$getemployee = $this->um->getEmployeeId("tbl_employee_details",$whr);

								if($employeeDetails[$i]['attendence'] == 1){
									$updat =  $this->um->updateData("tbl_employee_attendence", ['attendence' => $employeeDetails[$i]['attendence']],$whr );
									//update
									$updateAt = $this->um->updateData("tbl_employee_account", ['amount' => $getemployee['daily_wage']],$whr );
								}else if($employeeDetails[$i]['attendence'] == 2 || $employeeDetails[$i]['attendence'] == 3){
									$dailyWage = $getemployee['daily_wage']/2;
									//update
									$updat =  $this->um->updateData("tbl_employee_attendence", ['attendence' => $employeeDetails[$i]['attendence']],$whr );
									$updateAt = $this->um->updateData("tbl_employee_account", ['amount' => $dailyWage],$whr );
								}else{
									//delete

									$deleteId =$this->um->deleteData("tbl_employee_account", $whr);
									$updat =  $this->um->updateData("tbl_employee_attendence", ['attendence' => $employeeDetails[$i]['attendence']],$whr );

									print_r($updat);
								}
							}
						}
					}
				}
				$this->session->set_flashdata('success_msg',"Employee attendance updated Successfully.");
			redirect('employeesdata/attendance');
		}
	}

	public function makeEmpTransaction($emp_id, $daily_wage)
	{
		$emp_txn = "TXN".time();
		$transactionObj = [
			'employee_id' => $emp_id,
			'transaction_id' => $emp_txn,
			'paymeny_type_id' => 4,
			'txn_date' => date('Y-m-d'),
			'amount' => $daily_wage,
		];
		$txnId = $this->um->insertData("tbl_employee_account",$transactionObj);
		return $txnId;
	}


	public function searchAttdance()
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Employee";
		$empData = ['date' => $this->input->post('date_search')];
		$data['cc_date'] = $this->input->post('date_search');

		$empArr = array();
				$attDate = date('Y-m-d',strtotime($this->input->post('date_search')));
				$empDetails = $this->um->getAllempData("tbl_employee_details",['status' => 1]);

				if($empDetails->num_rows() > 0){
					foreach ($empDetails->result() as $emp) {
						$attendace = $this->um->getAttendaceData("tbl_employee_attendence",['employee_id' => $emp->employee_id,'date' =>$attDate ]);

						$employee = array('employee_id' => $emp->employee_id , 'name' => $emp->name, 'mobile_number' => $emp->mobile_number, 'aadhar_number' => $emp->aadhar_number, 'image' => $emp->image,'designation' => $emp->designation, 'address' => $emp->address, 'daily_wage' => $emp->daily_wage, 'minimum_wage_days' => $emp->minimum_wage_days, 'overtime_commission_per_hours' => $emp->overtime_commission_per_hours, 'status' => $emp->status, 'attendence' => $attendace['attendence']);
						array_push($empArr, $employee);
					}
				}

				$data['employees'] = $empArr;
		$this->settemplate->dashboard("employee/attendance",$data);
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


	public function updateleaves($employee_leave_id,$employee_id)
	{
			$whr = ['employee_leave_id' => $employee_leave_id];
			$empData = [
				'cl_use' => $this->input->post('cl_use'),
				'el_use' => $this->input->post('el_use'),
			];

			$userId = $this->um->updateData("employee_leaves",$empData,$whr);
			

        if($userId > 0){

			$this->session->set_flashdata('success_msg',  "Leave Updated Successfully.");

			redirect('employeesdata/view/'.$employee_id);

		}else{

			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

			redirect('employeesdata/view/'.$employee_id);

		}
	}
}
