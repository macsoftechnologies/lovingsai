<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Doctor extends CI_Controller {



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
		$data['page_title']="Coupons";
		$data['doctor'] = $this->um->getDoctorsDetails("admin a",['a.type_id' => 3]);
		$this->settemplate->dashboard("Doctor/index",$data);
	}

	}

	public function create()

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Department Create";

		$this->settemplate->dashboard("Doctor/create",$data);
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
				// Define $date or use a valid date string
				$date = date('Y-m-d H:i:s');
		
				$userData = [
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					 
					 
					 
					'created_at' => $date
				];
		
				$userId = $this->um->insertData("department", $userData);
		
				if ($userId > 0) {
					$this->session->set_flashdata('success_msg', "Department Created Successfully.");
					redirect('department');
				} else {
					$this->session->set_flashdata('error_msg', "Failed, Something went wrong.");
					redirect('department');
				}
			}
		}
		
	

	public function edit($department_id)

	{
		if($this->session->userdata('admin_id') == '') {
			redirect('adminlogin');

		}else {

		$data['page_title'] = "Update";

		$data['department'] = $this->um->getDepartments("department",['department_id' => $department_id])->row_array();

		$this->settemplate->dashboard("department/edit",$data);
	}

	}



	public function update($department_id)

	{

		$this->form_validation->set_rules('name','name', 'trim|required');
		$this->form_validation->set_rules('description','description', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->edit($department_id);

		}		

		else	

		{

			// $image_path = "";
			// //insert Image here
			// if(isset($_FILES['offer_banner_image']) && $_FILES['offer_banner_image']['size'] > 0){
			// 	$getFlag = 0;
			// 	$imgName = $_FILES['offer_banner_image']['name'];
			// 	$file_size =$_FILES['offer_banner_image']['size'];
			// 	$file_tmp =$_FILES['offer_banner_image']['tmp_name'];

			// 	$temp_tr = explode(".", $_FILES["offer_banner_image"]["name"]);
			// 	$file_ext = end($temp_tr);
			// 	$expensions= array("jpeg","jpg","png");
			// 	if(in_array($file_ext,$expensions)=== false){
			// 		$getFlag = 1;
			// 		$this->session->set_flashdata(['status' => 401,'message' =>'Invalid File.Image']);
			//   	}
			//   	if($file_size > 10194304){
			//   		$getFlag = 2;
			//         $this->session->set_flashdata(['status' => 401,'message' =>'File size must be excately 10 MB.']);
			//     }

			//     if($getFlag == 0){
			//     	$file_name = round(microtime(true)) . '.' . end($temp_tr);

			//     	$img_directory =  "assets/profiles";
			//     	if (!file_exists($img_directory)) {
			// 		    mkdir($img_directory, 0777, true);
			// 		}
			// 			$image_path = base_url().$img_directory."/".$file_name;
			// 		move_uploaded_file($file_tmp,$img_directory."/".$file_name);
			//     }
			// }else{
			// 	$getImg = $this->um->getOffers("offers",['offer_id' => $offer_id])->row_array();
			// 	if($getImg['offer_banner_image'] != ""){
			// 		$image_path = $getImg['offer_banner_image'];
			// 	}else{
			// 		$image_path = "";
			// 	}
			// }


			$whr = ['department_id' => $department_id];

			$date = date('Y-m-d H:i:s');

			$userData = [

				
				'name' => $this->input->post('name'),

				'description' => $this->input->post('description'),

				 
			];



			$userId = $this->um->updateData("department",$userData,$whr);

           

			if($userId > 0){

				$this->session->set_flashdata('success_msg',  "department Updated Successfully.");

				redirect('offers');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('department');

			}

			

		}

	}




	public function delete($department_id)
	{
		$whr = ['department_id' => $department_id];
			$lastId = $this->um->deleteData("department", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "department Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('department');
	}

	

}