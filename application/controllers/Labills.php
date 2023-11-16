<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Labills extends CI_Controller {



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

		$data['page_title'] = "Lab Bills";
		$date = date('Y-m-d');
		$date1 = date("Y-m-d", strtotime("+1 day", strtotime($date)));
			 
        
		$data['labbills'] = $this->um->getLabBill("lab_bills",$date,$date1);

		//$data['labbills'] = $this->um->getLabBills("lab_bills",[]);

		$this->settemplate->dashboard("labbills/index",$data);
	}

	}


    public function setdate() {
        $data['page_title'] = "labbills";

        $created_at = $this->input->post('date');
        $date = date('Y-m-d', strtotime($created_at));
        $date1 = date("Y-m-d", strtotime("+1 day", strtotime($created_at)));
        // echo "<pre>";
        // print_r($date);
        // exit;

        $data['labbills'] = $this->um->getLabBill("lab_bills",$date,$date1);

        $this->settemplate->dashboard("labbills/index", $data);
    }


	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Presciption";

		$data['patient'] = $this->um->getDepartments("patient",[]);

		$data['medicine'] = $this->um->getmedicieData("medicine",[]);

		$data['laboratory'] = $this->um->getlaboratoryData("laboratory",[]);

		$this->settemplate->dashboard("labbills/create",$data);
	}

	}


	public function view($lab_bills_id)

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Presciption";

		$data['labbills'] = $this->um->getCOmpleteDetailsLabBills("lab_bills l",['l.lab_bills_id' => $lab_bills_id])->row_array();

		$data['tests'] = $this->um->getTestsDetails("lab_bills_assign a",['a.lab_bills_id' => $lab_bills_id]);

		// echo "<pre>";
		// print_r($data['tests']);
		// exit;

		$this->settemplate->dashboard("labbills/view",$data);
	}

	}


	public function insert()

	{

		$this->form_validation->set_rules('customer_name','Customer Name', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->create();

		}		

		else	

		{

			$characters = '0123456789';
	$charactersLength = strlen($characters);

    $randstring = '';
    	if($characters > 0){ 
		 for ($j = 0; $j < 6; $j++) {
            $randstring .= $characters[rand(0, $charactersLength - 1)];
        }

			$date = date('Y-m-d H:i:s');

			if($this->input->post('patient_code') == '') {
                 $codes = 0;
			}else {
                 $codes = $this->input->post('patient_code');
			}

			$patient = $this->um->getDepartments("patient",['patient_id' => $this->input->post('patient_id')])->row_array();

			$userData = [

				'receipt_no' => $randstring,

				'customer_name' => $this->input->post('customer_name'),

				'phone_number' => $this->input->post('phone_number'),

				'address' => $this->input->post('address'),

				'patient_id' => $this->input->post('patient_id'),

				'age' => $this->input->post('age'),

				'type_of_invoice' => $this->input->post('type_of_invoice'),

				'method_of_payment' => $this->input->post('method_of_payment'),

				'total_amount' => $this->input->post('total_amount'),

				'patient_code' => $codes,

				'status' => '1',

				'created_at' =>  $date

			];

			$userId = $this->um->insertData("lab_bills",$userData);

		}




			if($userId > 0){

				$laboratory_id = $this->input->post('laboratory_id');
				$price = $this->input->post('price');
				$discount = $this->input->post('discount_price');

				if(count($laboratory_id) > 0){
					for ($i=0; $i < count($laboratory_id); $i++) { 


						if($laboratory_id[$i] == '') {

						}else {

						

							$itObject = [
							'lab_bills_id' => $userId,
							'laboratory_id' => $laboratory_id[$i],
							'price' => $price[$i],
							'discount_price' => $discount[$i],
							'status' => 1,
							'created_at' => $date
						];


						$itLastId = $this->um->insertData("lab_bills_assign",$itObject);
					}
					
					}
				}

				
				$this->session->set_flashdata('success_msg',  "Lab Bills Created Successfully.");

				redirect('labills');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('labills');

			}
		}

			

		}


		public function getPricevalue($value='')
	{
		$response = array();
		// echo "<pre>";
		// print_r($this->input->post('name'));
		// exit;
		$checkUser = $this->um->getlaboratoryData("laboratory",['laboratory_id' => $this->input->post('laboratory_id')])->row_array();
		
		if($checkUser != ""){
			$response['res'] = "pass";
			$response['price'] = $checkUser['price'];
			$response['discount'] = $checkUser['discount'];
			
		}else{
			$response['res'] = "fail";
		}
		echo json_encode($response);
	}


		public function getajaxprice($value='')
	{
		$response = array();
		// echo "<pre>";
		// print_r($this->input->post('name'));
		// exit;
		$checkUser = $this->um->getlaboratoryData("laboratory",['laboratory_id' => $this->input->post('laboratory_id')])->row_array();
		
		if($checkUser != ""){
			$response['res'] = "pass";
			$response['price'] = $checkUser['price'];
			$response['discount'] = $checkUser['discount'];
			
		}else{
			$response['res'] = "fail";
		}
		echo json_encode($response);
	}



		public function delete($lab_bills_id)
	{
		$whr = ['lab_bills_id' => $lab_bills_id];
			$lastId = $this->um->deleteData("labills", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "labbills Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('labills');
	}

	

public function edit($lab_bills_id)

{
	if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

	}else {

	$data['page_title'] = "edit";

	    $data['labbills'] = $this->um->getLabBills("lab_bills",['lab_bills_id' => $lab_bills_id])->row_array();

		$data['tests'] = $this->um->getTestsDetails("lab_bills_assign a",['a.lab_bills_id' => $lab_bills_id]);

		$data['patient'] = $this->um->getDepartments("patient",[]);

		$data['medicine'] = $this->um->getmedicieData("medicine",[]);

		$data['laboratory'] = $this->um->getlaboratoryData("laboratory",[]);

		$this->settemplate->dashboard("labbills/edit",$data);
	}
 
}


 
public function update($lab_bills_id)
{
    $this->form_validation->set_rules('customer_name', 'Customer Name', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->edit($lab_bills_id); // Call the 'edit' method with the lab_bills_id to show the validation errors.
    } else {
        $whr = ['lab_bills_id' => $lab_bills_id];  
		$lastId = $this->um->deleteData("lab_bills_assign", $whr);

        $date = date('Y-m-d H:i:s');

        $patient_id = $this->input->post('patient_id');  

        $userData = [
            'customer_name' => $this->input->post('customer_name'),
            'phone_number' => $this->input->post('phone_number'),
            'address' => $this->input->post('address'),
            'patient_id' => $this->input->post('patient_id'),  
            'age' => $this->input->post('age'),
            'type_of_invoice' => $this->input->post('type_of_invoice'),
            'method_of_payment' => $this->input->post('method_of_payment'),
            'total_amount' => $this->input->post('total_amount'),
        ];

        $userId = $this->um->updateData("lab_bills", $userData, $whr);

        if ($userId > 0) {
            $laboratory_id = $this->input->post('laboratory_id');
            $price = $this->input->post('price');
            $discount = $this->input->post('discount_price');

            if (count($laboratory_id) > 0) {
                for ($i = 0; $i < count($laboratory_id); $i++) {
                    $itObject = [
                        'lab_bills_id' => $lab_bills_id,
                        'laboratory_id' => $laboratory_id[$i],
                        'price' => $price[$i],
                        'discount_price' => $discount[$i],
                        'status' => 1
                    ];

                    $itLastId = $this->um->insertData("lab_bills_assign", $itObject);                  }
            }

            $this->session->set_flashdata('success_msg', "Lab Bills updated Successfully.");
            redirect('labills');
        } else {
            $this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
            redirect('labills');
        }
    }
}

		}

