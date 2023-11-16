<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Nurse extends CI_Controller {



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

		$data['nurse'] = $this->um->getDoctorsDetails("admin a",['a.type_id' => 4]);

		$this->settemplate->dashboard("nurse/index",$data);
	}

	}

	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "nurse Create";

		$this->settemplate->dashboard("nurse/create",$data);
	}

	}





 


	public function delete($nurse_id)
	{
		$whr = ['pharmacist_id' => $nurse_id];
			$lastId = $this->um->deleteData("nurse", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "nurse Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('nurse');
	}

	

}