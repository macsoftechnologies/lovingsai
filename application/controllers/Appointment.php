<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Appointment extends CI_Controller {



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

			$date = date('Y-m-d');
	
			 
			$data['appointment'] = $this->um->getdateAppointment("patient", ['appointment_date' => $date,'appointment' => 1]);
	

		$this->settemplate->dashboard("appointment/index",$data);
	}



	}




	public function setdate()
			{
			    $data['page_title'] = "Appointments";

			    
			    $appointment_date = $this->input->post('appointment_date');
			    $formatted_date = date('Y-m-d', strtotime($appointment_date));

			     
			    $data['appointment'] = $this->um->getdateAppointment("patient",['appointment_date' => $formatted_date, 'appointment' => 1]);

			    $this->settemplate->dashboard("appointment/index", $data);
			}
				 
	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "appointment Create";

		$data['patient'] = $this->um->getDepartments("patient",[]);

		$this->settemplate->dashboard("appointment/create",$data);
	}

	}





	public function insert()

	{

		$this->form_validation->set_rules('Name','Name', 'trim|required');
		// $this->form_validation->set_rules('appointment_date','date', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->create();

		}		

		else	

		{


$date = date('Y-m-d H:i:s');
    $onlydate = date('Y-m-d');
			$characters = '0123456789';
	$charactersLength = strlen($characters);
			$randstring = '';
    	if($characters > 0){ 
		 for ($j = 0; $j < 6; $j++) {
            $randstring .= $characters[rand(0, $charactersLength - 1)];
        }

        

        $patientsystem = $this->um->getDepartments("patient",['patient_id' => $this->input->post('patient_id')])->row_array();
        if($patientsystem == '') {
            $patienid = 'LSM-'.$randstring;
        }else {
            $patienid = $patientsystem['patient_code'];
        }
 			$userData = [

				'name' => $this->input->post('Name'),

				'appointment_date' => $this->input->post('appointment_date'),

				'phone'=>$this->input->post('mobile'),

				'patient_code' => $patienid,

				'appointment' => 1,

				'created_at' => $date

				 

			];



			$userId = $this->um->insertData("patient",$userData);
		}




			if($userId > 0){

				$this->session->set_flashdata('success_msg',  "Appointment Created Successfully.");

				redirect('appointment');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('appointment');

			}
		}

			

		}

	





	public function edit($patient_id)

	{

		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Rates Update";

		$data['appointment'] = $this->um->getDepartments123("patient",['patient_id' => $patient_id])->row_array();

		$this->settemplate->dashboard("appointment/edit",$data);
	}

	}



	public function update($patient_id)

	{

	
		$this->form_validation->set_rules('Name','Name', 'trim|required');
		$this->form_validation->set_rules('appointment_date','appointment_date', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->edit($patient_id);

		}		

		else	

		{
 			$whr = ['patient_id' => $patient_id];

			// $date = date('Y-m-d H:i:s');

			$userData = [

				'name' => $this->input->post('Name'),

				'appointment_date' => $this->input->post('appointment_date'),

				'phone'=>$this->input->post('mobile'),
			];



			$userId = $this->um->updateData("patient",$userData,$whr);

           

			if($userId > 0){

				$this->session->set_flashdata('success_msg',  "appointment Updated Successfully.");

				redirect('appointment');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('appointment');

			}

			

		}

	}




	public function delete($patient_id)
	{
		$whr = ['patient_id' => $patient_id];
			$lastId = $this->um->deleteData("patient", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "appointment Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('appointment');
	}

	

}