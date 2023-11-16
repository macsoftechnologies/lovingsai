<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Purchase extends CI_Controller {



	public function __Construct(){

		parent::__Construct();

		$this->load->model('UserModel', 'um');

		$this->admin = $this->session->userdata('admin_id');

		// is_logged_in();

	}



	public function index()

	{

		$data['page_title'] = "Coupons";

		$data['purchase'] = $this->um->getlaboratoryData("purchase",[]);

		$this->settemplate->dashboard("purchase/index",$data);

	}

	public function create()

	{

		$data['page_title'] = "purchase Create";
      
		$this->settemplate->dashboard("purchase/create",$data);

	}
 

  
	public function insert()

	{

		$this->form_validation->set_rules('name','name', 'trim|required');
		 

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->create();

		}		

		else	

		{

			$date = date('Y-m-d H:i:s');
 			$userData = [

                    'name' => $this->input->post('name'),
					'invoiceNo' => $this->input->post('invoiceNo'),
					'product' => $this->input->post('product'),
					'price' => $this->input->post('price'),
					'quantity' => $this->input->post('quantity'),
					'total' => $this->input->post('total'),
                    'due'=>$this->input->post('due'),
                    'date'=>$this->input->post('date'),
                    'created_at' => $date
					 

			];



			$userId = $this->um->insertData("purchase",$userData);




			if($userId > 0){

				$this->session->set_flashdata('success_msg',  "purchase Created Successfully.");

				redirect('purchase');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('purchase');

			}
		}

			

		}



		

	





	public function edit($purchase_id)

	{

		$data['page_title'] = "Rates Update";
        

		$data['purchase'] = $this->um->getlaboratoryData("purchase",['purchase_id' => $purchase_id])->row_array();

		$this->settemplate->dashboard("purchase/edit",$data);

	}

    public function update($purchase_id)

    {
     
        $whr = ['purchase_id' => $purchase_id];
    
            // $date = date('Y-m-d H:i:s');
    
            $userData = [
    
                   'name' => $this->input->post('name'),
					'invoiceNo' => $this->input->post('invoiceNo'),
					'product' => $this->input->post('product'),
					'price' => $this->input->post('price'),
					'quantity' => $this->input->post('quantity'),
					'total' => $this->input->post('total'),
                    'due'=>$this->input->post('due'),
    
                 
            ];
    
    
    
            $userId = $this->um->updateData("purchase",$userData,$whr);
    
           
    
            if($userId > 0){
    
                $this->session->set_flashdata('success_msg',  "purchase Updated Successfully.");
    
                redirect('purchase');
    
            }else{
    
                $this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
    
                redirect('purchase');
    
            }
    
            
    
        }
    
    

	public function delete($purchase_id)
	{
		$whr = ['purchase_id' => $purchase_id];
			$lastId = $this->um->deleteData("purchase", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "purchase  Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('purchase');
	}

	

}