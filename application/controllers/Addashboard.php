<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addashboard extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		// is_logged_in();
	}

	public function index()
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Admin";
		$data['drug'] = $this->um->getOffersData("medicine",[])->result_array();
		$data['doctor'] = $this->um->getAdminDetails("admin",['type_id' => 3])->result_array();
		$data['patient'] = $this->um->getDepartments("patient",[])->result_array();
		$data['nurse'] = $this->um->getAdminDetails("admin",['type_id' => 4])->result_array();
		$data['department'] = $this->um->getDepartments("department",[])->result_array();
		$data['pharmacist'] = $this->um->getAdminDetails("admin",['type_id' => 5])->result_array();
		$data['laboratories'] = $this->um->getAdminDetails("admin",['type_id' => 6])->result_array();
		$data['presciptions'] = $this->um->getPresciptionDetails("doctor_prescription p",[])->result_array();
		$data['sales'] = $this->um->getlaboratoryData("sales",[])->result_array();
		$data['laboratory'] = $this->um->getlaboratoryData("laboratory",[])->result_array();
		$data['appointment'] = $this->um->getDepartments123("patient",['appointment' => 1])->result_array();
		$data['labbills'] = $this->um->getLabBills("lab_bills",[])->result_array();
		$data['purchase'] = $this->um->getlaboratoryData("purchase",[])->result_array();
		$data['expenditures'] = $this->um->getexpenditures("expenditures",[])->result_array();
		$data['accountant'] = $this->um->getAdminDetails("admin",[])->result_array();
		
		

		
		$this->settemplate->dashboard("admin/dashboard",$data);
	}
	}

	public function changePassword()
	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {
		$data['page_title'] = "Change Password";
		$data['adminId'] = $this->admin;
		$this->settemplate->dashboard("admin/changePassword",$data);
	}
	}

	public function update($adminId)
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
       	$this->form_validation->set_rules('new_pasword', 'New Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->index();
		}		
		else	
		{
			$whr = ['admin_id'=> $adminId];
			$userData = [
				'password' => md5[($this->input->post('password'))]
			];
			
			$lastId = $this->um->updateData("admin",$userData,$whr);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg', "Password Updated successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please try again.");
			}
			redirect('addashboard/changePassword');
		}
	}
	
}