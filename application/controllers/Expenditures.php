<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Expenditures extends CI_Controller {



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

		$data['expenditures'] = $this->um->getexpenditures("expenditures",[]);

		$this->settemplate->dashboard("expenditures/index",$data);
	}

	}

	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Expenditures Create";

		$this->settemplate->dashboard("expenditures/create",$data);
	}

	}





	public function insert()

	{

		$this->form_validation->set_rules('expenditure_type','expenditure type', 'trim|required');
		$this->form_validation->set_rules('amount',' Amount', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->create();

		}		

		else	

		{

			 
			$userData = [

				'expenditure_type' => $this->input->post('expenditure_type'),

				'date' => $this->input->post('date'),

                'amount' => $this->input->post('amount'),

				'paidto' => $this->input->post('paidto'),

                'description'=>$this->input->post('description')

 	 

			];



			$userId = $this->um->insertData("expenditures",$userData);




			if($userId > 0){

				$this->session->set_flashdata('success_msg',  " Expenditures Added Successfully.");

				redirect('expenditures');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('expenditures');

			}
		}

			

		}

	





	public function edit($expenditures_id )

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Rates Update";

		$data['expenditures'] = $this->um->getexpenditures("expenditures",['expenditures_id' => $expenditures_id ])->row_array();

		$this->settemplate->dashboard("expenditures/edit",$data);
	}

	}



	public function update($expenditures_id )

	{

        $this->form_validation->set_rules('expenditure_type','expenditure type', 'trim|required');
		$this->form_validation->set_rules('amount',' Amount', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->edit($expenditures_id );

		}		

		else	

		{
 
			$whr = ['expenditures_id' => $expenditures_id ];

			 

			$userData = [

				'expenditure_type' => $this->input->post('expenditure_type'),

				'date' => $this->input->post('date'),

                'amount' => $this->input->post('amount'),

				'paidto' => $this->input->post('paidto'),

                'description'=>$this->input->post('description')
			];



			$userId = $this->um->updateData("expenditures",$userData,$whr);

           

			if($userId > 0){

				$this->session->set_flashdata('success_msg',  "expenditures Updated Successfully.");

				redirect('expenditures');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('expenditures');

			}

			

		}

	}




	public function delete($expenditures_id)
	{
		$whr = ['expenditures_id' => $expenditures_id];
			$lastId = $this->um->deleteData("expenditures", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "expenditures Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('expenditures');
	}

	

}