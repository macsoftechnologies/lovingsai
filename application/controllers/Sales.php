<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Sales extends CI_Controller {



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

		$data['sales'] = $this->um->getlaboratoryData("sales",[]);

		$this->settemplate->dashboard("sales/index",$data);
	}

	}

	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "sales Create";
        $data['patients'] = $this->um->getPatientdata("patient",[]);
		$this->settemplate->dashboard("sales/create",$data);
	}

	}
 
	public function insert()
	{
		// echo "<pre>";
		// print_r($_POST);
		// exit;
		// $patient_id = $this->input->post('patient_id');
		// $patient = $this->um->getPatientName($patient_id);
	
		// if ($patient) {
		// 	$patientName = $patient->name;

			$date = date('Y-m-d H:i:s');
	
			// Retrieve product, price, and quantity arrays from the form
			
	
			// Initialize an array to store sales data
			// $salesData = [];
	
			// Loop through the arrays and insert each product
			// for ($i = 0; $i < count($products); $i++) {
			// 	$total = $prices[$i] * $quantities[$i]; // Calculate total based on price and quantity
	
				$salesData = [
					'patientName' => $this->input->post('patient_name'),
					'InvoiceNo' => $this->input->post('InvoiceNo'),
					'status' => $this->input->post('status'),
					'date'=>$this->input->post('date'),
					'created_at' => $date
				];
	
			 
			$result = $this->um->insertData("sales", $salesData);
	
			if ($result) {

				$product = $this->input->post('product');
				$quantity = $this->input->post('quantity');
				$price = $this->input->post('price');
				$total = $this->input->post('total');

				if(count($product) > 0){
					for ($i=0; $i < count($product); $i++) { 

						

							$itObject = [
							'sales_id' => $result,
							'product' => $product[$i],
							'quantity' => $quantity[$i],
							'price' => $price[$i],
							'total' => $total[$i],
							'created_at' => $date
						];


						$itLastId = $this->um->insertData("sales_log",$itObject);
					
					}
				}
				$this->session->set_flashdata('success_msg', "Sales Created Successfully.");
				redirect('sales');
			} else {
				// Handle the case where the insert fails
				$this->session->set_flashdata('error_msg', "Failed to insert sales record(s).");
				redirect('sales');
			}
		// } else {
		// 	$this->session->set_flashdata('error_msg', "Patient not found.");
		// 	redirect('sales');
		// }
	}
	
	





	public function edit($sales_id)

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Rates Update";
        $data['types'] = $this->um->getPatientdata("patient",[]);

		$data['sales'] = $this->um->getlaboratoryData("sales",['sales_id' => $sales_id])->row_array();
		$data['log'] = $this->um->getSalesLogData("sales_log",['sales_id' => $sales_id]);

		$this->settemplate->dashboard("sales/edit",$data);
	}

	}


	public function update($sales_id)
	{
		// $this->form_validation->set_rules('patientName', 'patientName', 'trim|required');
		// $this->form_validation->set_rules('InvoiceNo', 'InvoiceNo', 'trim|required');
	
		// if ($this->form_validation->run() == FALSE) {
		// 	$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		// 	$this->edit($sales_id);
		// } else {
			$whr = ['sales_id' => $sales_id];
			$lastId = $this->um->deleteData("sales_log", $whr);

			$date = date('Y-m-d H:i:s');
	
			// Get the patient's name based on the provided patient_id
			$patient_id = $this->input->post('patient_id'); // Assuming the input name is 'patient_id'
			// $patient = $this->um->getPatientName($patient_id);
	
			// if ($patient) {
			// 	$patientName = $patient->name;
	
				// Prepare the data for updating the sales table
				$salesData = [
					'patientName' => $this->input->post('patient_name'),
					'InvoiceNo' => $this->input->post('InvoiceNo'),
					'status' => $this->input->post('status'),
					'date'=>$this->input->post('date')
				];
	
				// Update the data in the sales table
				$result = $this->um->updateData("sales", $salesData, $whr);
	
				if ($result) {

					$product = $this->input->post('product');
					$quantity = $this->input->post('quantity');
					$price = $this->input->post('price');
					$total = $this->input->post('total');

					if(count($product) > 0){
						for ($i=0; $i < count($product); $i++) { 

							

								$itObject = [
								'sales_id' => $sales_id,
								'product' => $product[$i],
								'quantity' => $quantity[$i],
								'price' => $price[$i],
								'total' => $total[$i],
								'created_at' => $date
							];


							$itLastId = $this->um->insertData("sales_log",$itObject);
						
						}
					}

					$this->session->set_flashdata('success_msg', "Sales Updated Successfully.");
					redirect('sales');
				} else {
					// Database update failed, log the error and show an error message
					// $db_error = $this->db->error();
					// log_message('error', 'Database error: ' . $db_error['message']);
					// $this->session->set_flashdata('error_msg', "Failed to update sales record.");
					redirect('sales');
				}
			// } else {
			// 	$this->session->set_flashdata('error_msg', "Patient not found.");
			// 	redirect('sales');
			// }
		// }
	}
	


	public function delete($sales_id)
	{
		$whr = ['sales_id' => $sales_id];
			$lastId = $this->um->deleteData("sales", $whr);
			$lastId1 = $this->um->deleteData("sales_log", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "sales  Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('sales');
	}


	public function view($sales_id)

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Rates Update";
        $data['types'] = $this->um->getPatientdata("patient",[]);

		$data['sales'] = $this->um->getlaboratoryData("sales",['sales_id' => $sales_id])->row_array();
		$data['log'] = $this->um->getSalesLogData("sales_log",['sales_id' => $sales_id]);

		$this->settemplate->dashboard("sales/view",$data);
	}

	}

	

}