<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Customers extends CI_Controller {



	public function __Construct(){

		parent::__Construct();

		$this->load->model('UserModel', 'um');

		$this->admin = $this->session->userdata('adminId');

		// is_logged_in();

	}



	public function index()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Categories";

	    $data['users'] = $this->um->getCustomersData("users",['status' => 'Y']);

		$this->settemplate->dashboard("customers/index",$data);
	}

	}



	public function delete($user_id)
	{
		$whr = ['user_id' => $user_id];
			$lastId = $this->um->deleteData("users", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "User Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('customers');
	}

	

}