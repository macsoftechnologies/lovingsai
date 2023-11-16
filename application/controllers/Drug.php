<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Drug extends CI_Controller {



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

		$data['drug'] = $this->um->getmedicieData("medicine",[]);

		$this->settemplate->dashboard("drug/index",$data);
	}

	}

	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "drug Create";
        $data['medicine'] = $this->um->getmedicieData("medicine", []);
		$this->settemplate->dashboard("drug/create",$data);
	}

	}




    public function insert()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            $this->create();
        } else {
             //$date = date('Y-m-d H:i:s');
    
            $userData = [
				'name' => $this->input->post('name'),

				'description' => $this->input->post('description'),

				'product_type'=>$this->input->post('product_type'),

				'aliasname'=>$this->input->post('aliasname'),

				'generic'=>$this->input->post('generic'),

				'status' => $this->input->post('status'),
                 //'created_at' => $date
            ];
    
            $userId = $this->um->insertData("medicine", $userData);
    
            if ($userId > 0) {
                $this->session->set_flashdata('success_msg',  "medicine added Successfully.");
                redirect('Drug');
            } else {
                $this->session->set_flashdata('error_msg',  "Failed, Something went wrong.");
                redirect('Drug');
            }
        }
    }
    



	public function edit($medicine_id)

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Rates Update";

		$data['drug'] = $this->um->getmedicieData("medicine",['medicine_id' => $medicine_id])->row_array();

		$this->settemplate->dashboard("drug/edit",$data);
	}

	}



	public function update($medicine_id)

	{

		$this->form_validation->set_rules('name','name', 'trim|required');
		$this->form_validation->set_rules('description','description', 'trim|required');
               

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->edit($medicine_id);

		}		

		else	

		{

			 

			$whr = ['medicine_id' => $medicine_id];

			$date = date('Y-m-d H:i:s');

			$userData = [

				
				'name' => $this->input->post('name'),

				'description' => $this->input->post('description'),

				'product_type'=>$this->input->post('product_type'),

				'aliasname'=>$this->input->post('aliasname'),

				'generic'=>$this->input->post('generic'),

				'status' => $this->input->post('status')

			];



			$userId = $this->um->updateData("medicine",$userData,$whr);

           

			if($userId > 0){

				$this->session->set_flashdata('success_msg',  "medicine Updated Successfully.");

				redirect('Drug');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('Drug');

			}

			

		}

	}




	public function delete($medicine_id)
	{
		$whr = ['medicine_id' => $medicine_id];
			$lastId = $this->um->deleteData("medicine", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "medicine Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('Drug');
	}

	

}