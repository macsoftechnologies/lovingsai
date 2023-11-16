<?php 

class EmployeeModel extends CI_Model
{
	public function __construct()
	{
        parent::__construct();
       /* header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");*/
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    }

    var $auth_key       = "ordmangRestApi";

    public function check_auth_client(){
        $auth_key  = $this->input->get_request_header('Auth-Key', TRUE);

        if($auth_key == $this->auth_key){
            return true;
        } else {
        	return false;
        }
    }

	public function insertData($tablename,$data)
	{
		$this->db->insert($tablename,$data);
		return $this->db->insert_id();
	}

	public function updateData($tablename,$set,$whr)
	{
		$this->db->set($set)->where($whr)->update($tablename);
		return true;
	}
	
	public function deleteData($tablename,$data)
	{
		$this->db->where($data)->delete($tablename);
		return true;
	}

	public function getEmployeeData($tableName,$whr)
	{
		$this->db->select("*");
		$this->db->from($tableName);
		$this->db->where($whr);
		$response = $this->db->get()->row_array();
		return $response;
	}

	public function getAllempData($tableName,$whr)
	{
		$this->db->select("employee_id, name, admin_id, mobile_number, aadhar_number,image, designation, address, daily_wage, minimum_wage_days, overtime_commission_per_hours, status");
		$this->db->from($tableName);
		$this->db->where($whr);
		$response = $this->db->get();
		return $response;
	}

	public function getAttendaceData($tableName,$whr)
	{
		$res = 0;
		$this->db->select("attendence");
		$this->db->from($tableName);
		$this->db->where($whr);
		$response = $this->db->get()->row_array();
		if($response['attendence'] !="" ){
			$res = $response['attendence'];
		}
		return $res;
	}

	public function checkUserAttendace($tableName,$whr)
	{
		$res = 0;
		$this->db->select("emp_attendence_id");
		$this->db->from($tableName);
		$this->db->where($whr);
		$response = $this->db->get()->row_array();
		if($response['emp_attendence_id'] !="" ){
			$res = $response['emp_attendence_id'];
		}
		return $res;
	}

	public function getEmployeeId($tableName,$whr)
	{
		$this->db->select('employee_id, name, mobile_number, aadhar_number, image, daily_wage, minimum_wage_days, overtime_commission_per_hours, address');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get()->row_array();
		return $result;
	}

	public function getEmployeeTxn($tableName,$whr)
	{
		$this->db->select('emp_account_id, employee_id, amount, paymeny_type_id');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function checkUserTransaction($tableName,$whr)
	{
		$res = 0;
		$this->db->select("emp_account_id");
		$this->db->from($tableName);
		$this->db->where($whr);
		$response = $this->db->get()->row_array();
		if($response['emp_account_id'] !="" ){
			$res = $response['emp_account_id'];
		}
		return $res;
	}


}