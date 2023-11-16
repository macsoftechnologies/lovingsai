<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class laboratorist extends CI_Controller {



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

		$data['laboratorist'] = $this->um->getDoctorsDetails("admin a",['a.type_id' => 6]);

		$this->settemplate->dashboard("laboratorist/index",$data);
	}

	}

	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "nurse Create";

		$this->settemplate->dashboard("laboratorist/create",$data);
	}

	}





 


	public function delete($laboratorist_id)
	{
		$whr = ['laboratorist_id' => $laboratorist_id];
			$lastId = $this->um->deleteData("laboratorist", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "laboratorist Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('laboratorist');
	}

	

}