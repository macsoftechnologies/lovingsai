<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Laboratory extends CI_Controller {



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

		$data['laboratory'] = $this->um->getlaboratoryData("laboratory",[]);

		$this->settemplate->dashboard("laboratory/index",$data);
	}

	}

	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "laboratory Create";

		$data['laboratory'] = $this->um->getlaboratoryData("laboratory",['laboratory_type' => 'Test']);

		$this->settemplate->dashboard("laboratory/create",$data);
	}

	}





	public function insert()

	{
		$this->form_validation->set_rules('laboratory_type','Laboratory Type', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->create();

		}		

		else	

		{

			 
			$date = date('Y-m-d H:i:s');

			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
        	$randstring = '';
		    if($characters > 0){ 
				 for ($j = 0; $j < 6; $j++) {
		            $randstring .= $characters[rand(0, $charactersLength - 1)];
		        }

		        if($this->input->post('laboratory_type') == 'Package') {

                  $tests = implode(',', $this->input->post('testdata'));


		        	$userData = [

		        'package_name' => $this->input->post('package_name'),

				'laboratory_type' => $this->input->post('laboratory_type'),

				'test' => $tests,

				'code' => $this->input->post('code'),

				 
                'price' => $this->input->post('price'),

				 
                'discount' => $this->input->post('discount')

			];


		        }else {

		        	$userData = [

				'laboratory_type' => $this->input->post('laboratory_type'),

				'test' => $this->input->post('test'),

				'code' => $this->input->post('code'),

				 
                'price' => $this->input->post('price'),

				 
                'discount' => $this->input->post('discount')

			];


		        }


			$userId = $this->um->insertData("laboratory",$userData);




			if($userId > 0){

				$this->session->set_flashdata('success_msg',  "Test Created Successfully.");

				redirect('laboratory');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('laboratory');

			}
		}

			

		}

	}





	public function edit($laboratory_id)

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Rates Update";

		$data['laboratory'] = $this->um->getlaboratoryData("laboratory",['laboratory_id' => $laboratory_id])->row_array();

		$data['laboratorylist'] = $this->um->getlaboratoryData("laboratory",['laboratory_type' => 'Test']);

		$this->settemplate->dashboard("laboratory/edit",$data);
	}

	}



	public function update($laboratory_id)

	{

		$this->form_validation->set_rules('test',' test', 'trim|required');
		$this->form_validation->set_rules('laboratory_type','laboratory_type', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->edit($laboratory_id);

		}		

		else	

		{
         
			$whr = ['laboratory_id' => $laboratory_id];

			$date = date('Y-m-d H:i:s');

			if($this->input->post('laboratory_type') == 'Package') {

                  $tests = implode(',', $this->input->post('testdata'));


		        	$userData = [

				'laboratory_type' => $this->input->post('laboratory_type'),

				'test' => $tests,

				'code' => $this->input->post('code'),

				 
                'price' => $this->input->post('price'),

				 
                'discount' => $this->input->post('discount')

			];


		        }else {

		        	$userData = [

				'laboratory_type' => $this->input->post('laboratory_type'),

				'test' => $this->input->post('test'),

				'code' => $this->input->post('code'),

				 
                'price' => $this->input->post('price'),

				 
                'discount' => $this->input->post('discount')

			];


		        }



			$userId = $this->um->updateData("laboratory",$userData,$whr);

           

			if($userId > 0){

				$this->session->set_flashdata('success_msg',  "Updated Successfully.");

				redirect('laboratory');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('laboratory');

			}

			

		}

	}




	public function delete($laboratory_id)
	{
		$whr = ['laboratory_id' => $laboratory_id];
			$lastId = $this->um->deleteData("laboratory", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "Test Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('laboratory');
	}

	

}