<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Presciption extends CI_Controller {



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

		$data['page_title'] = "Presciption";

		$date = date('Y-m-d');

		$data['presciptions'] = $this->um->getPresciptionDetailsDistict("doctor_prescription p",['p.date' => $date]);

		
		$data['patientcount'] = $this->um->getDepartmentsCount("patient",['date' => $date]);

		$this->settemplate->dashboard("presciption/index",$data);
	}

	}


	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Presciption";

		$date = date('Y-m-d');

		$data['patient'] = $this->um->getDepartmentsCount("patient",[]);
		

		$data['medicine'] = $this->um->getmedicieData("medicine",[]);
		// echo "<pre>";
		// print_r($data['medicine']);
		// exit;

		// echo "<pre>";
		// print_r($data['patient']->result_array());
		// echo "<br>";
		// print_r($data['medicine']->result_array());
		// exit;

		$this->settemplate->dashboard("presciption/create",$data);
	}

	}


	public function add($patient_id)

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Presciption";

		$data['patient'] = $this->um->getDepartments("patient",['patient_id' => $patient_id])->row_array();

		$data['medicine'] = $this->um->getmedicieData("medicine",[]);

		$data['presciptions'] = $this->um->getPresciptionDetailsRecent("doctor_prescription p",['p.patient_id' => $patient_id])->row_array();
		if($data['presciptions'] == '') {
            $data['medicines'] = '';
		}else {
			$data['medicines'] = $this->um->getMedicineDetails("assign_medicine_patient a",['a.presciption_id' => $data['presciptions']['presciption_id']]);
		}

		



		$this->settemplate->dashboard("presciption/add",$data);
	}

	}


	public function edit($patient_id, $presciption_id)

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Presciption";


		$data['patient_id'] = $patient_id;

		$data['presciption_id'] = $presciption_id;

		$data['patient'] = $this->um->getDepartments("patient",['patient_id' => $patient_id])->row_array();

		$data['medicine'] = $this->um->getmedicieData("medicine",[]);

		$data['presciptions'] = $this->um->getPresciptionDetailsRecent("doctor_prescription p",['p.patient_id' => $patient_id])->row_array();

		$data['medicines'] = $this->um->getMedicineDetails("assign_medicine_patient a",['a.presciption_id' => $data['presciptions']['presciption_id']]);

		// echo "<pre>";
		// print_r($data['medicines']);
		// exit;

		$this->settemplate->dashboard("presciption/edit",$data);
	}

	}


	public function view($patient_id)

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Presciption";

		$data['presciptions'] = $this->um->getPresciptionDetailsRecent("doctor_prescription p",['p.patient_id' => $patient_id])->row_array();

		$data['medicines'] = $this->um->getMedicineDetails("assign_medicine_patient a",['a.presciption_id' => $data['presciptions']['presciption_id']]);

		$this->settemplate->dashboard("presciption/view",$data);
	}

	}


	public function insert()

	{

		$this->form_validation->set_rules('patient_id','Select Patient', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->create();

		}		

		else	

		{

			$date = date('Y-m-d H:i:s');

			$userData = [

				'doctor_id' => $this->session->userdata('admin_id'),

				'patient_id' => $this->input->post('patient_id'),

				'note1' => $this->input->post('note1'),

				'note2' => $this->input->post('note2'),

				'status' => '1',

				'created_at' =>  $date,

				'date' => date('Y-m-d'),

				'provisional_diagnostics' => $this->input->post('provisional_diagnostics'),

				'review_date' => $this->input->post('review_date'),

			];

			$userId = $this->um->insertData("doctor_prescription",$userData);

			$userIdpatient = $this->um->updateData("patient",['date' => date('Y-m-d'),'created_at' =>  $date],['patient_id' => $this->input->post('patient_id')]); 




			if($userId > 0){

				$medicine_id = $this->input->post('medicine_id');
				$morning = $this->input->post('morning');
				$afternoon = $this->input->post('afternoon');
				$night = $this->input->post('night');
				$after_food = $this->input->post('after_food');
				$before_food = $this->input->post('before_food');
				$no_of_days = $this->input->post('no_of_days');

				if(count($medicine_id) > 0){
					for ($i=0; $i < count($medicine_id); $i++) { 

						if($medicine_id[$i] == '') {

						}else {

							$medicinesdata = $this->um->getmedicieData("medicine",['name' => $medicine_id[$i]])->row_array();

							$itObject = [
							'presciption_id' => $userId,
							'medicine_id' => $medicinesdata['medicine_id'],
							'medicine_name' => $medicine_id[$i],
							'morning' => $morning[$i],
							'afternoon' => $afternoon[$i],
							'night' => $night[$i],
							'after_food' => $after_food[$i],
							'before_food' => $before_food[$i],
							'no_of_days' => $no_of_days[$i],
							'status' => 1,
							'created_at' => $date
						];


						$itLastId = $this->um->insertData("assign_medicine_patient",$itObject);
					}
					}
				}

				
				$this->session->set_flashdata('success_msg',  "Presciption Created Successfully.");

				redirect('presciption/view/'.$this->input->post('patient_id'));

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('presciption/create');

			}
		}

			

    }


		public function getCustomersvalue($value='')
	{
		$response = array();
		// echo "<pre>";
		// print_r($this->input->post('name'));
		// exit;
		$checkUser = $this->um->getDepartments("patient",['patient_id' => $this->input->post('patient_id')])->row_array();

		$medicines = $this->um->getPresciptionDetails("doctor_prescription p",['p.patient_id' => $this->input->post('patient_id')])->result_array();
		$medicinesdata = $this->um->getPresciptionDetailsRecent("doctor_prescription p",['p.patient_id' => $this->input->post('patient_id')])->row_array();

		if($medicinesdata == '') {
            $meds = '';
		}else {
			$meds = $medicinesdata['provisional_diagnostics'];
		}

		if($medicinesdata == '') {
            $notes = '';
		}else {
			$notes = $medicinesdata['note1'];
		}

		if($medicinesdata == '') {
            $note = '';
		}else {
			$note = $medicinesdata['note2'];
		}
		
		if($checkUser != ""){
			$response['res'] = "pass";
		
			$response['age'] = $checkUser['age'];
			$response['sex'] = $checkUser['sex'];
			$response['bmi'] = $checkUser['bmi'];
			$response['alcohol'] = $checkUser['alcohol'];
			$response['weight'] = $checkUser['weight'];
			$response['height'] = $checkUser['height'];
			$response['smoking'] = $checkUser['smoking'];
			$response['blood_group'] = $checkUser['blood_group'];
			$response['birth_date'] = $checkUser['birth_date'];
			$response['diabetes'] = $checkUser['diabetes'];
			$response['hypertention'] = $checkUser['hypertention'];
			$response['bp'] = $checkUser['bp'];
			$response['provisional_diagnostics'] = $meds;
			$response['note1'] = $notes;
			$response['note2'] = $note;
			$response['name'] = $checkUser['name'];
			$response['phone'] = $checkUser['phone'];
			$response['address'] = $checkUser['address'];
			$response['occupation'] = $checkUser['occupation'];
			$response['admin_id'] = $checkUser['admin_id'];
			$response['type_id'] = $checkUser['type_id'];
			$response['city'] = $checkUser['address1'];
			$response['district'] = $checkUser['address2'];
			$response['pincode'] = $checkUser['pincode'];
			$response['medicines'] = count($medicines);
			if(count($medicines) == 0) {
                  $response['list'] = 0;
			}else {
				$list = $this->um->getPresciptionDetailsRecent("doctor_prescription p",['p.patient_id' => $this->input->post('patient_id')])->row_array();
		        $assignmedicinelist = $this->um->getMedicineDetails("assign_medicine_patient a",['a.presciption_id' => $list['presciption_id']])->result_array();
				 $response['list'] = $assignmedicinelist;
			}
			
		}else{
			$response['res'] = "fail";
		}
		echo json_encode($response);
	}


	public function addinsert()

	{

		$this->form_validation->set_rules('patient_id','Select Patient', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->add($this->input->post('patient_id'));

		}		

		else	

		{

			$date = date('Y-m-d H:i:s');

			$userData = [

				'doctor_id' => $this->session->userdata('admin_id'),

				'patient_id' => $this->input->post('patient_id'),

				'note1' => $this->input->post('note1'),

				'provisional_diagnostics' => $this->input->post('provisionalDiagnosis'),

				'note2' => $this->input->post('note2'),

				'review_date' => $this->input->post('review_date'),

				'status' => '1',

				'created_at' =>  $date,

				'date' => date('Y-m-d')

			];

			$userId = $this->um->insertData("doctor_prescription",$userData);




			if($userId > 0){

				$medicine_id = $this->input->post('medicine_id');
				$morning = $this->input->post('morning');
				$afternoon = $this->input->post('afternoon');
				$night = $this->input->post('night');
				$after_food = $this->input->post('after_food');
				$before_food = $this->input->post('before_food');
				$no_of_days = $this->input->post('no_of_days');

				if(count($medicine_id) > 0){
					for ($i=0; $i < count($medicine_id); $i++) { 

						if($medicine_id[$i] == '') {

						}else {

							$medicinesdata = $this->um->getmedicieData("medicine",['name' => $medicine_id[$i]])->row_array();

							$itObject = [
							'presciption_id' => $userId,
							'medicine_id' => $medicinesdata['medicine_id'],
							'medicine_name' => $medicine_id[$i],
							'morning' => $morning[$i],
							'afternoon' => $afternoon[$i],
							'night' => $night[$i],
							'after_food' => $after_food[$i],
							'before_food' => $before_food[$i],
							'no_of_days' => $no_of_days[$i],
							'status' => 1,
							'created_at' => $date
						];


						$itLastId = $this->um->insertData("assign_medicine_patient",$itObject);
					}
					}
				}

				
				$this->session->set_flashdata('success_msg',  "Presciption Created Successfully.");

				redirect('presciption/view/'.$this->input->post('patient_id'));

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('presciption/add/'.$this->input->post('patient_id'));

			}
		}

			

    }


    public function update($presciption_id)

	{
		// echo "<pre>";
		// print_r($_POST);
		// exit;

		$whrasd = ['presciption_id' => $presciption_id];
			$lastId = $this->um->deleteData("assign_medicine_patient", $whrasd);

		$this->form_validation->set_rules('patient_id','Select Patient', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->edit($this->input->post('presciption_id'));

		}		

		else	

		{

			$date = date('Y-m-d H:i:s');

			$whr = ['presciption_id' => $presciption_id];

			$userData = [

				'note1' => $this->input->post('note1'),

				'note2' => $this->input->post('note2'),

				'provisional_diagnostics' => $this->input->post('provisionalDiagnosis'),

				'review_date' => $this->input->post('review_date'),

				'status' => '1',

				'created_at' =>  $date,

				'date' => date('Y-m-d')

			];

			$userId = $this->um->updateData("doctor_prescription",$userData,$whr);




			if($userId > 0){

				$medicine_id = $this->input->post('medicine_id');
				$morning = $this->input->post('morning');
				$afternoon = $this->input->post('afternoon');
				$night = $this->input->post('night');
				$after_food = $this->input->post('after_food');
				$before_food = $this->input->post('before_food');
				$no_of_days = $this->input->post('no_of_days');

				if(count($medicine_id) > 0){
					for ($i=0; $i < count($medicine_id); $i++) { 

						if($medicine_id[$i] == '') {

						}else {
							$medicinesdata = $this->um->getmedicieData("medicine",['name' => $medicine_id[$i]])->row_array();

							$itObject = [
							'presciption_id' => $presciption_id,
							'medicine_id' => $medicinesdata['medicine_id'],
							'medicine_name' => $medicine_id[$i],
							'morning' => $morning[$i],
							'afternoon' => $afternoon[$i],
							'night' => $night[$i],
							'after_food' => $after_food[$i],
							'before_food' => $before_food[$i],
							'no_of_days' => $no_of_days[$i],
							'status' => 1,
							'created_at' => $date
						];


						$itLastId = $this->um->insertData("assign_medicine_patient",$itObject);
					}
					}
				}

				
				$this->session->set_flashdata('success_msg',  "Presciption Created Successfully.");

				redirect('presciption/view/'.$this->input->post('patient_id'));

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('presciption/edit/'.$this->input->post('patient_id').'/'.$this->input->post('presciption_id'));

			}
		}

			

    }


	

}