<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pharmacist extends CI_Controller {



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

		$data['page_title'] = "Coupons";

		$data['pharmacist'] = $this->um->getDoctorsDetails("admin a",['a.type_id' => 5]);

		$this->settemplate->dashboard("pharmacist/index",$data);
	}

	}

	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "pharmacist Create";

		$this->settemplate->dashboard("pharmacist/create",$data);
	}

	}





 


	public function delete($patient_id)
	{
		$whr = ['pharmacist_id' => $patient_id];
			$lastId = $this->um->deleteData("pharmacist", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "department Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('pharmacist');
	}

	

}