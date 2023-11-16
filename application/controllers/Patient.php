<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Patient extends CI_Controller {



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

		$data['patient'] = $this->um->getDepartments123("patient",['date' => $date]);

		$data['patientcount'] = $this->um->getDepartmentsCount("patient",['date' => $date])->result_array();
		 
		$this->settemplate->dashboard("patient/index",$data);
	}

	}


	public function search()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Coupons";

		$date = date('Y-m-d');

		$search = $this->input->post('search');



		$patient = $this->um->getDepartments123("patient",['patient_code' => $search]);

		if($patient->num_rows() == 0){

			$data['patient'] = $this->um->getDepartments123Namesearch("patient",['name' => $search]);

		}else {

			$data['patient'] = $patient;

		}

		$data['patientcount'] = $this->um->getDepartmentsCount("patient",['date' => $date])->result_array();
		 
		$this->settemplate->dashboard("patient/index",$data);
	}

	}

	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "patient Create";

		$this->settemplate->dashboard("patient/create",$data);
	}

	}


	public function enter()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "patient Create";

		$date = date('Y-m-d');

		$data['patient'] = $this->um->getDepartmentsDare("patient",['date' => $date]);

		$this->settemplate->dashboard("patient/reregister",$data);
	}

	}

public function insert()
{

   		$this->form_validation->set_rules('name','name', 'trim|required');
		$this->form_validation->set_rules('age','age', 'trim|required');
		$this->form_validation->set_rules('mobile','mobile', 'trim|required');


		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->create();

		}		

		else	

		{

    $date = date('Y-m-d H:i:s');
    $onlydate = date('Y-m-d');
    $weight = $this->input->post('weight');
    $height = $this->input->post('height');
    $bmi = 0;
    // if($height == '') {
    //    $heightInMeters = 0; // Convert height to meters
	//    $bmi = 0;
    // }else {
    // Calculate BMI
       // $heightInMeters = $height / 100; // Convert height to meters
	   // $bmi = $weight / ($heightInMeters * $heightInMeters);
    //  	$meters =($height*12)*0.0254;
    // 	// $heightInMeters =  $this->input->post('$meters') * $this->input->post('$meters');
    // 	$bmi = ($weight/($meters*$meters)); 
    // }
	// elseif (strpos($height,'.')!==false) {
	// 	list($feet,$inches)=explode('.', $height);
	// 	$totalinches=($feet*12)+$inches;
	// 	$heightInMeters = $totalInches * 0.0254;
		
	// }


        if (!empty($height)) {
            if (strpos($height, '.') !== false) {
                 
                list($feet, $inches) = explode('.', $height);
                $totalInches = ($feet * 12) + $inches;
                $heightInMeters = $totalInches * 0.0254;
            } else {
              
                $heightInMeters = $height * 0.3048; // 1 foot = 0.3048 meters
            }

            // Calculate BMI
            if ($heightInMeters > 0) {
                $bmi = $weight / ($heightInMeters * $heightInMeters);
            }
        }




    $characters = '0123456789';
	$charactersLength = strlen($characters);

    $randstring = '';
    	if($characters > 0){ 
		 for ($j = 0; $j < 6; $j++) {
            $randstring .= $characters[rand(0, $charactersLength - 1)];
        }
    
      $birthDate = $this->input->post('birth_date');
    $birthDateTimestamp = strtotime($birthDate);
    $currentTimestamp = strtotime($date);
    $age = date('Y', $currentTimestamp) - date('Y', $birthDateTimestamp);
    
    $userData = [
        'name' => $this->input->post('name'),
        'age' => $this->input->post('age'),
        'birth_date' => $this->input->post('birth_date'),
        'sex' => $this->input->post('sex'),
        'phone' => $this->input->post('phone'),
        'address' => $this->input->post('address'),
        'mobile' => $this->input->post('mobile'),
		'address1' => $this->input->post('address1'),
		'address2' => $this->input->post('address2'),
		'pincode' =>$this->input->post('pincode'),
        'type_id' => $this->session->userdata('type_id'),
        'admin_id' => $this->session->userdata('admin_id'),
        'mobile' => $this->input->post('mobile'),
        'diabetes'=>$this->input->post('diabetes'),
        'hypertention'=>$this->input->post('hypertention'),
        
        'bp'=>$this->input->post('bp'),

        'height' => $height,
        'weight' => $weight,
        'bmi' => $bmi, // Insert the calculated BMI value here
        'alcohol' => $this->input->post('alcohol'),
        'smoking' => $this->input->post('smoking'),
        'occupation' => $this->input->post('occupation'),
 
        'patient_code' => 'LSM-'.$randstring,
        'created_at' => $date,
        'date' => $onlydate
    ];

    $userId = $this->um->insertData("patient", $userData);

}

    if ($userId > 0) {
        $this->session->set_flashdata('success_msg', "Patient Created Successfully.");
        redirect('patient');
    } else {
        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
        redirect('patient');
    }


 }
}


public function edit($patient_id)

{
	if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

	$data['page_title'] = "Update";

	$data['patient'] = $this->um->getDepartments("patient",['patient_id' => $patient_id])->row_array();

	$this->settemplate->dashboard("patient/edit",$data);
}

}



public function update($patient_id)

{

	// $this->form_validation->set_rules('name','name', 'trim|required');
	// $this->form_validation->set_rules('description','description', 'trim|required');

	// if ($this->form_validation->run() == FALSE)

	// {	

	// 	$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

	// 	$this->edit($accountant_id);

	// }		

	// else	

	// {


		$whr = ['patient_id' => $patient_id];

		// $date = date('Y-m-d H:i:s');
		 $weight = $this->input->post('weight');
        $height = $this->input->post('height');
    
    // Calculate BMI

        if($height == '') {
       $bmi = 0;
    }else {
    // Calculate BMI
       $bmi = ($weight / ($height * $height));
	}
         

		$userData = [
 		'name' => $this->input->post('name'),
        'age' => $this->input->post('age'),
        'birth_date' => $this->input->post('birth_date'),
        'sex' => $this->input->post('sex'),
        'phone' => $this->input->post('phone'),
        'address' => $this->input->post('address'),
        'mobile' => $this->input->post('mobile'),
		'address1' => $this->input->post('address1'),
		'address2' => $this->input->post('address2'),
		'pincode' =>$this->input->post('pincode'),
        'type_id' => $this->session->userdata('type_id'),
        'admin_id' => $this->session->userdata('admin_id'),
        'mobile' => $this->input->post('mobile'),
        'diabetes'=>$this->input->post('diabetes'),
        'hypertention'=>$this->input->post('hypertention'),
        
        'bp'=>$this->input->post('bp'),
        'height' => $height,
        'weight' => $weight,
        'bmi' => $bmi, // Insert the calculated BMI value here
        'occupation' => $this->input->post('occupation'),

        'alcohol' => $this->input->post('alcohol'),
        'smoking' => $this->input->post('smoking'),
        // 'patient_code' => 'LSM-'.$randstring
			 
		];



		$userId = $this->um->updateData("patient",$userData,$whr);

	   

		if($userId > 0){

			$this->session->set_flashdata('success_msg',  "patient Updated Successfully.");

			redirect('patient');

		}else{

			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

			redirect('patient');

		}

		

	}


   
	 public function delete($patient_id)
	{
		$whr = ['patient_id' => $patient_id];
			$lastId = $this->um->deleteData("patient", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "Patient Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('patient');
	}


		public function getCustomersvalue($value='')
	{
		$response = array();
		// echo "<pre>";
		// print_r($this->input->post('name'));
		// exit;
		$checkUser = $this->um->getDepartments("patient",['patient_id' => $this->input->post('patient_id')])->row_array();

		$medicines = $this->um->getPresciptionDetails("doctor_prescription p",['p.patient_id' => $this->input->post('patient_id')])->result_array();
		
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
			$response['diabetes'] = $checkUser['diabetes'];
			$response['hypertention'] = $checkUser['hypertention'];
			$response['bp'] = $checkUser['bp'];
			$response['provisionalDiagnosis'] = $checkUser['provisionalDiagnosis'];
			$response['name'] = $checkUser['name'];
			$response['phone'] = $checkUser['phone'];
			$response['address'] = $checkUser['address'];
			$response['occupation'] = $checkUser['occupation'];
			$response['admin_id'] = $checkUser['admin_id'];
			$response['type_id'] = $checkUser['type_id'];
			$response['city'] = $checkUser['address1'];
			$response['district'] = $checkUser['address2'];
			$response['pincode'] = $checkUser['pincode'];
			$response['birth_date'] = $checkUser['birth_date'];
			$response['date'] = $checkUser['date'];
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


public function reinsert()
{

	$patient = $this->um->getDepartments("patient",['patient_id' => $this->input->post('patient_id')])->row_array();

	$patient12 = $this->um->getDepartments("patient",['patient_id' => $this->input->post('patient_id'), 'status' => 1])->row_array();

	if($patient12 == '') {

		$date = date('Y-m-d H:i:s');
	    $onlydate = date('Y-m-d');
	    $weight = $this->input->post('weight');
	    $height = $this->input->post('height');

	        if($height == '') {
		       $heightInMeters = 0; // Convert height to meters
		       $bmi = 0;
		    }else {
			   $heightInMeters = $height / 100; // Convert height to meters
			   $bmi = $weight / ($heightInMeters * $heightInMeters);
			}
	    
	    // Calculate BMI
	       

	    
	      $birthDate = $this->input->post('birth_date');
	    $birthDateTimestamp = strtotime($birthDate);
	    $currentTimestamp = strtotime($date);
	    $age = date('Y', $currentTimestamp) - date('Y', $birthDateTimestamp);
	    
	    $userData = [
	        'name' => $this->input->post('name'),
	        'age' => $this->input->post('age'),
	        'birth_date' => $this->input->post('birth_date'),
	        'sex' => $this->input->post('sex'),
	        'phone' => $this->input->post('phone'),
	        'address' => $this->input->post('address'),
	        'phone' => $this->input->post('phone'),
			'address' => $this->input->post('address'),
	        'type_id' => $this->session->userdata('type_id'),
	        'admin_id' => $this->session->userdata('admin_id'),
	        'diabetes'=>$this->input->post('diabetes'),
	        'hypertention'=>$this->input->post('hypertention'),
	        'provisionalDiagnosis'=>$this->input->post('provisionalDiagnosis'),
	        'bp'=>$this->input->post('bp'),
	        'address1'=>$this->input->post('city'),
	        'address2'=>$this->input->post('district'),
	        'pincode'=>$this->input->post('pincode'),

	        'height' => $height,
	        'weight' => $weight,
	        'bmi' => $bmi, // Insert the calculated BMI value here
	        'alcohol' => $this->input->post('alcohol'),
	        'smoking' => $this->input->post('smoking'),
	        'patient_code' => $patient['patient_code'],
	        'created_at' => $date,
	        'date' => $onlydate
	    ];

	    $userId = $this->um->insertData("patient", $userData);

	    $whrsd = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'status' => 0
		    ];

		    $usersdreId = $this->um->updateData("patient",$set,$whrsd);

	    if ($userId > 0) {
	        $this->session->set_flashdata('success_msg', "Patient Created Successfully.");
	        redirect('patient');
	    } else {
	        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
	        redirect('patient');
	    }

	}else {


		$todaydate = date('Y-m-d');

		$start_date = $patient12['date'];

		$patientdate1 = date("Y-m-d", strtotime("+1 days", strtotime($start_date)));

		$patientdate2 = date("Y-m-d", strtotime("+2 days", strtotime($start_date)));

		$patientdate3 = date("Y-m-d", strtotime("+3 days", strtotime($start_date)));

		$patientdate4 = date("Y-m-d", strtotime("+4 days", strtotime($start_date)));

		$patientdate5 = date("Y-m-d", strtotime("+5 days", strtotime($start_date)));

		$patientdate6 = date("Y-m-d", strtotime("+6 days", strtotime($start_date)));

		$patientdate7 = date("Y-m-d", strtotime("+7 days", strtotime($start_date)));

		$patientdate8 = date("Y-m-d", strtotime("+8 days", strtotime($start_date)));

		$patientdate9 = date("Y-m-d", strtotime("+9 days", strtotime($start_date)));

		$patientdate10 = date("Y-m-d", strtotime("+10 days", strtotime($start_date)));

		if($todaydate == $patientdate1) {

			$whr = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'date' => date('Y-m-d'),
				'status' => 2
		    ];

		    $userId = $this->um->updateData("patient",$set,$whr);
		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    } 

		}else if($todaydate == $patientdate2){
			$whr = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'date' => date('Y-m-d'),
				'status' => 2
		    ];

		    $userId = $this->um->updateData("patient",$set,$whr);
		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    } 
		}else if($todaydate == $patientdate3){
			$whr = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'date' => date('Y-m-d'),
				'status' => 2
		    ];

		    $userId = $this->um->updateData("patient",$set,$whr);
		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    } 
		}else if($todaydate == $patientdate4){
			$whr = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'date' => date('Y-m-d'),
				'status' => 2
		    ];

		    $userId = $this->um->updateData("patient",$set,$whr); 
		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    } 
		}else if($todaydate == $patientdate5){
			$whr = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'date' => date('Y-m-d'),
				'status' => 2
		    ];

		    $userId = $this->um->updateData("patient",$set,$whr); 
		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    } 
		}else if($todaydate == $patientdate6){
			$whr = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'date' => date('Y-m-d'),
				'status' => 2
		    ];

		    $userId = $this->um->updateData("patient",$set,$whr);  
		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    } 
		}else if($todaydate == $patientdate7){
			$whr = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'date' => date('Y-m-d'),
				'status' => 2
		    ];

		    $userId = $this->um->updateData("patient",$set,$whr);
		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    }  
		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    } 
		}else if($todaydate == $patientdate8){
			$whr = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'date' => date('Y-m-d'),
				'status' => 2
		    ];

		    $userId = $this->um->updateData("patient",$set,$whr); 
		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    } 
		}else if($todaydate == $patientdate9){
			$whr = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'date' => date('Y-m-d'),
				'status' => 2
		    ];

		    $userId = $this->um->updateData("patient",$set,$whr);
		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    } 
		}else if($todaydate == $patientdate10){
			$whr = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'date' => date('Y-m-d'),
				'status' => 2
		    ];

		    $userId = $this->um->updateData("patient",$set,$whr);  

		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Consultation Fee Valid Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    }                    
	    }else {

			$date = date('Y-m-d H:i:s');
		    $onlydate = date('Y-m-d');
		    $weight = $this->input->post('weight');
		    $height = $this->input->post('height');

		    if($height == '') {
		       $heightInMeters = 0; // Convert height to meters
		       $bmi = 0;
		    }else {
			   $heightInMeters = $height / 100; // Convert height to meters
			   $bmi = $weight / ($heightInMeters * $heightInMeters);
			}
		    
		    // Calculate BMI
		       

		    
		      $birthDate = $this->input->post('birth_date');
		    $birthDateTimestamp = strtotime($birthDate);
		    $currentTimestamp = strtotime($date);
		    $age = date('Y', $currentTimestamp) - date('Y', $birthDateTimestamp);
		    
		    $userData = [
		        'name' => $this->input->post('name'),
		        'age' => $this->input->post('age'),
		        'birth_date' => $this->input->post('birth_date'),
		        'sex' => $this->input->post('sex'),
		        'phone' => $this->input->post('phone'),
		        'address' => $this->input->post('address'),
		        'phone' => $this->input->post('phone'),
				'address' => $this->input->post('address'),
		        'type_id' => $this->session->userdata('type_id'),
		        'admin_id' => $this->session->userdata('admin_id'),
		        'diabetes'=>$this->input->post('diabetes'),
		        'hypertention'=>$this->input->post('hypertention'),
		        'provisionalDiagnosis'=>$this->input->post('provisionalDiagnosis'),
		        'bp'=>$this->input->post('bp'),
		        'address1'=>$this->input->post('city'),
		        'address2'=>$this->input->post('district'),
		        'pincode'=>$this->input->post('pincode'),

		        'height' => $height,
		        'weight' => $weight,
		        'bmi' => $bmi, // Insert the calculated BMI value here
		        'alcohol' => $this->input->post('alcohol'),
		        'smoking' => $this->input->post('smoking'),
		        'patient_code' => $patient['patient_code'],
		        'created_at' => $date,
		        'date' => $onlydate
		    ];

		    $userId = $this->um->insertData("patient", $userData);

		    $whrsd = ['patient_id' => $this->input->post('patient_id')];
			$set = [
				'status' => 0
		    ];

		    $usersdreId = $this->um->updateData("patient",$set,$whrsd);

		    if ($userId > 0) {
		        $this->session->set_flashdata('success_msg', "Patient Created Successfully.");
		        redirect('patient');
		    } else {
		        $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
		        redirect('patient');
		    }

		}
	}
	    

	    
}


	
	 
}