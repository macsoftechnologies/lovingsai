<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Employee extends REST_Controller {
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('EmployeeModel','em');
		$this->date = date('Y-m-d H:i:s');
	}

	public function mainFunction($method)
	{
		if($method != 'POST'){
			$this->response(['status' => 400,'message' =>'Bad request.']);
		}else{
			$check_auth_client = $this->em->check_auth_client();
			if($check_auth_client == true){
				return true;
			}else{
				return false;
			}
		}
	}

	public function create_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);
     	if($res == 1){
			if(!$this->post('name') && !$this->post('mobile_number') && !$this->post('designation') && !$this->post('aadhar_number')  && !$this->post('image')&& !$this->post('daily_wage') && !$this->post('minimum_wage_days')){
				$this->response(['status'=> 404,'message' =>"Some Perameters Are Missing!"]);
			}else{

				$empDetails = [
					'name' => $this->post('name'),
					'mobile_number' => $this->post('mobile_number'),
					'designation' => $this->post('designation'),
					'address' => $this->post('address'),
					'aadhar_number' => $this->post('aadhar_number'),
					'image' => $this->post('image'),
					'daily_wage' => $this->post('daily_wage'),
					'minimum_wage_days' => $this->post('minimum_wage_days'),
					'overtime_commission_per_hours' => $this->post('overtime_commission_per_hours'),
					'status' => 1,
					'created_at' => $this->date
				];

				$lastId = $this->em->insertData("tbl_employee_details",$empDetails);
				if($lastId > 0){
					$empDetails['employee_id'] = $lastId;
					$this->response(['status'=> 200,'message' =>"Employee created Successfully.",'emplyeeData' => $empDetails]);
				}else{
					$this->response(['status'=> 404,'message' =>"Failed, please try again."]);
				}
			}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}

	public function attendence_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);
     	if($res == 1){
			if(!$this->post('date') && !$this->post('empData')){
				$this->response(['status'=> 404,'message' =>"Some Perameters Are Missing!"]);
			}else{
				$attd_date = date('Y-m-d', strtotime($this->post('date')));
				$employeeDetails = $this->post('empData');
				if(count($employeeDetails) > 0){
					for ($i=0; $i < count($employeeDetails); $i++) { 
						//check record exist or not
						$awhr = ['employee_id' => $employeeDetails[$i]['employee_id'], 'date' => $attd_date];
						$chk_attndace = $this->em->checkUserAttendace("tbl_employee_attendence",$awhr);
						if($chk_attndace == 0){
							$empform = [
								'date' => $attd_date,
								'employee_id' => $employeeDetails[$i]['employee_id'],
								'attendence' => $employeeDetails[$i]['attendence'],
								'status' => 1,
								'created_at' => $this->date
							];
							$lastId = $this->em->insertData("tbl_employee_attendence",$empform);
							if($lastId > 0){
								//get Dailywage 
								$whr = ['employee_id' => $employeeDetails[$i]['employee_id']];
								$getemployee = $this->em->getEmployeeId("tbl_employee_details",$whr);
								
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
							$chk_account = $this->em->checkUserTransaction("tbl_employee_account",$txn_whr);
							$whr = ['employee_id' => $employeeDetails[$i]['employee_id']];
							if($chk_account == 0){
								//$whr = ['employee_id' => $employeeDetails[$i]['employee_id']];
								$getemployee = $this->em->getEmployeeId("tbl_employee_details",$whr);
								
								//make transaction
								if($employeeDetails[$i]['attendence'] == 1){
									$employeeTxn = $this->makeEmpTransaction($employeeDetails[$i]['employee_id'], $getemployee['daily_wage']);

									$updat =  $this->em->updateData("tbl_employee_attendence", ['attendence' => $employeeDetails[$i]['attendence']],$whr );

								}else if($employeeDetails[$i]['attendence'] == 2 || $employeeDetails[$i]['attendence'] == 3){
									$dailyWage = $getemployee['daily_wage']/2;

									$employeeTxn = $this->makeEmpTransaction($employeeDetails[$i]['employee_id'], $dailyWage);
									$updat =  $this->em->updateData("tbl_employee_attendence", ['attendence' => $employeeDetails[$i]['attendence']],$whr );
								}
							}else{
								
								$getemployee = $this->em->getEmployeeId("tbl_employee_details",$whr);

								if($employeeDetails[$i]['attendence'] == 1){
									$updat =  $this->em->updateData("tbl_employee_attendence", ['attendence' => $employeeDetails[$i]['attendence']],$whr );
									//update
									$updateAt = $this->em->updateData("tbl_employee_account", ['amount' => $getemployee['daily_wage']],$whr );
								}else if($employeeDetails[$i]['attendence'] == 2 || $employeeDetails[$i]['attendence'] == 3){
									$dailyWage = $getemployee['daily_wage']/2;
									//update
									$updat =  $this->em->updateData("tbl_employee_attendence", ['attendence' => $employeeDetails[$i]['attendence']],$whr );
									$updateAt = $this->em->updateData("tbl_employee_account", ['amount' => $dailyWage],$whr );
								}else{
									//delete

									$deleteId =$this->em->deleteData("tbl_employee_account", $whr);
									$updat =  $this->em->updateData("tbl_employee_attendence", ['attendence' => $employeeDetails[$i]['attendence']],$whr );

									print_r($updat);
								}
							}
						}
					}
				}
				$this->response(['status'=> 200,'message' =>"Employee attendance updated Successfully.",'emplyeeData' =>null]);
			}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
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
		$txnId = $this->em->insertData("tbl_employee_account",$transactionObj);
		return $txnId;
	}

	public function accountTransaction_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);
     	if($res == 1){
			if(!$this->post('employeeId') && !$this->post('advance') && !$this->post('overtime')){
				$this->response(['status'=> 404,'message' =>"Some Perameters Are Missing!"]);
			}else{

				$employeeId = $this->post('employeeId');
				$overtime = $this->post('overtime');
				$advance = $this->post('advance');
				$empDetails = $this->em->getEmployeeData("tbl_employee_details", ['employee_id' => $employeeId]);

				//caluculate employee wage
				$empWage = $empDetails['daily_wage'] * $empDetails['minimum_wage_days'];

				$overtime_amount =  $overtime * $empDetails['overtime_commission_per_hours'];

				$total_amount = $empWage + $overtime_amount;

				$balance_amount =  $total_amount - $advance;

				$emp_account = [
					'employee_id' => $employeeId,
					'advance_payment' => $advance,
					'overtime_amout' => $overtime_amount,
					'total_wage' => $total_amount,
					'balance_wage' => $balance_amount,
					'status' => 1,
					'created_at' => $this->date
				];

				$lastId = $this->em->insertData("tbl_employee_account", $emp_account);
				$emp_account['emp_account_id'] = $lastId;
				$this->response(['status'=> 200,'message' =>"Employee account details.",'accountDetails' =>$emp_account]);
			}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}

	//get Employees Data
	public function employeeDetails_get()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			$this->response(['status' => 400,'message' =>'Bad request.']);
		} else {
			$check_auth_client = $this->em->check_auth_client();
			if($check_auth_client == true){
				$empArr = array();
				$balance_amt = 0;
				$empDetails = $this->em->getAllempData("tbl_employee_details",['status' => 1]);
				if($empDetails->num_rows() > 0){
					foreach ($empDetails->result() as $emp) {
						$attendace = 0;
						$adv_amt = 0;
						$daily_amt = 0;

						//check balance amout
						$getTxndetails = $this->em->getEmployeeTxn("tbl_employee_account", ['employee_id' => $emp->employee_id]);

						if($getTxndetails->num_rows() > 0){
							foreach ($getTxndetails->result() as $txn) {
								if($txn->paymeny_type_id == 3){
									$adv_amt = $adv_amt + $txn->amount;
								}else if($txn->paymeny_type_id == 4){
									$daily_amt = $daily_amt + $txn->amount;
								}
							}
						}
						$balance_amt = $daily_amt - $adv_amt;
						$employee = array('employee_id' => $emp->employee_id , 'name' => $emp->name, 'mobile_number' => $emp->mobile_number, 'aadhar_number' => $emp->aadhar_number, 'image' => $emp->image,'designation' => $emp->designation, 'address' => $emp->address, 'daily_wage' => $emp->daily_wage, 'minimum_wage_days' => $emp->minimum_wage_days, 'overtime_commission_per_hours' => $emp->overtime_commission_per_hours, 'status' => $emp->status, 'attendence' => $attendace, 'balance' => $balance_amt);
						array_push($empArr, $employee);
						$balance_amt = 0;
					}
				}
				$this->response(['status'=> 200,'message' =>"Employee Details",'employees' =>$empArr]);
			}else{
				$this->response(['status' => 401,'message' =>'Unauthorized.']);
			}
		}
	}

	public function searchDetails_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);
     	if($res == 1){
			if(!$this->post('date')){
				$this->response(['status'=> 404,'message' =>"Some Perameters Are Missing!"]);
			}else{
				$empArr = array();
				$attDate = date('Y-m-d',strtotime($this->post('date')));
				$empDetails = $this->em->getAllempData("tbl_employee_details",['status' => 1]);

				if($empDetails->num_rows() > 0){
					foreach ($empDetails->result() as $emp) {
						$attendace = $this->em->getAttendaceData("tbl_employee_attendence",['employee_id' => $emp->employee_id,'date' =>$attDate ]);

						$employee = array('employee_id' => $emp->employee_id , 'name' => $emp->name, 'mobile_number' => $emp->mobile_number, 'aadhar_number' => $emp->aadhar_number, 'image' => $emp->image,'designation' => $emp->designation, 'address' => $emp->address, 'daily_wage' => $emp->daily_wage, 'minimum_wage_days' => $emp->minimum_wage_days, 'overtime_commission_per_hours' => $emp->overtime_commission_per_hours, 'status' => $emp->status, 'attendence' => $attendace);
						array_push($empArr, $employee);
					}
				}
				$this->response(['status'=> 200,'message' =>"Employee Details",'employees' =>$empArr]);
			}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}


	public function getemployeedetails_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		$res = $this->mainFunction($method);
		if($res == 1){
			if(!$this->post('employee_id')){
				$this->response(['status'=> 405,'message' =>"Some Perameters Are Missing!"]);
			}else{
				$whr = ['employee_id' => $this->post('employee_id')];
				$getemployee = $this->em->getEmployeeId("tbl_employee_details",$whr);
				if($getemployee){
					$this->response(['status'=> 200,'message' =>"Success",'result'=> $getemployee]);
				}else{
					$this->response(['status'=> 404,'message' =>"Failed,please try again",'result'=> null]);
				}
			}
		}
			else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	  
	}

	public function update_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);
     	if($res == 1){
			if(!$this->post('name') && !$this->post('mobile_number') && !$this->post('designation') && !$this->post('aadhar_number') && !$this->post('daily_wage') && !$this->post('minimum_wage_days')){
				$this->response(['status'=> 404,'message' =>"Some Perameters Are Missing!"]);
			}else{
                $whr = ['employee_id' => $this->post('employee_id')];
				$empDetails = [
					'name' => $this->post('name'),
					'mobile_number' => $this->post('mobile_number'),
					'aadhar_number' => $this->post('aadhar_number'),
					'image' => $this->post('image'),
					'daily_wage' => $this->post('daily_wage'),
					'minimum_wage_days' => $this->post('minimum_wage_days'),
					'overtime_commission_per_hours' => $this->post('overtime_commission_per_hours'),
					'address' => $this->post('address'),
					'status' => 1,
					'created_at' => $this->date
				];

				$updateId = $this->em->updateData("tbl_employee_details",$empDetails,$whr);
				if($updateId > 0){
					// $empDetails['employee_id'] = $updateId;
					$this->response(['status'=> 200,'message' =>"Employee Updated Successfully.",'emplyeeData' => $updateId]);
				}else{
					$this->response(['status'=> 404,'message' =>"Failed, please try again."]);
				}
			}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}

	public function delete_post()
    {
    	$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);
 		if($res == 1){
        $whr = ['employee_id' => $this->post('employee_id')];
        $delete = $this->em->deleteData("tbl_employee_details",$whr);
        if($delete > 0){
        	$this->response(['status'=> 200,'message' =>"Employee Deleted Successfully."]);
        }else{
        	$this->response(['status'=> 404,'message' =>"Failed, please try again."]);
        }
        }else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
    }
}
