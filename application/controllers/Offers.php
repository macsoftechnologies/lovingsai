<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Offers extends CI_Controller {



	public function __Construct(){

		parent::__Construct();

		$this->load->model('UserModel', 'um');

		$this->admin = $this->session->userdata('admin_id');

		// is_logged_in();

	}



	public function index()

	{

		$data['page_title'] = "Coupons";

		$data['offers'] = $this->um->getOffers("offers",[]);

		$this->settemplate->dashboard("offers/index",$data);

	}

	public function create()

	{

		$data['page_title'] = "Offer Create";

		$this->settemplate->dashboard("offers/create",$data);

	}





	public function insert()

	{

		$this->form_validation->set_rules('offer_title','Offer Title', 'trim|required');
		$this->form_validation->set_rules('offer_amount','Offer Amount', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->create();

		}		

		else	

		{

			$image_path = "";
			//insert Image here
			if(isset($_FILES['offer_banner_image']) && $_FILES['offer_banner_image']['size'] > 0){
				$getFlag = 0;
				$imgName = $_FILES['offer_banner_image']['name'];
				$file_size =$_FILES['offer_banner_image']['size'];
				$file_tmp =$_FILES['offer_banner_image']['tmp_name'];

				$temp_tr = explode(".", $_FILES["offer_banner_image"]["name"]);
				$file_ext = end($temp_tr);
				$expensions= array("jpeg","jpg","png");
				if(in_array($file_ext,$expensions)=== false){
					$getFlag = 1;
					$this->session->set_flashdata(['status' => 401,'message' =>'Invalid File.Image']);
			  	}
			  	if($file_size > 10194304){
			  		$getFlag = 2;
			        $this->session->set_flashdata(['status' => 401,'message' =>'File size must be excately 10 MB.']);
			    }

			    if($getFlag == 0){
			    	$file_name = round(microtime(true)) . '.' . end($temp_tr);

			    	$img_directory =  "assets/profiles";
			    	if (!file_exists($img_directory)) {
					    mkdir($img_directory, 0777, true);
					}
						$image_path = base_url().$img_directory."/".$file_name;
					move_uploaded_file($file_tmp,$img_directory."/".$file_name);
			    }
			}

			$date = date('Y-m-d H:i:s');

			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
        	$randstring = '';
		    if($characters > 0){ 
				 for ($j = 0; $j < 6; $j++) {
		            $randstring .= $characters[rand(0, $charactersLength - 1)];
		        }

			$userData = [

				'offer_title' => $this->input->post('offer_title'),

				'offer_amount' => $this->input->post('offer_amount'),

				'offer_desc' => $this->input->post('offer_desc'),

				'offer_banner_image' => $image_path,

				'offer_code' => $randstring,

				'status' => 'Y',

				'created_at' =>  $date

			];



			$userId = $this->um->insertData("offers",$userData);




			if($userId > 0){

				$this->session->set_flashdata('success_msg',  "Offer Created Successfully.");

				redirect('offers');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('offers');

			}
		}

			

		}

	}





	public function edit($offer_id)

	{

		$data['page_title'] = "Rates Update";

		$data['offer'] = $this->um->getOffers("offers",['offer_id' => $offer_id])->row_array();

		$this->settemplate->dashboard("offers/edit",$data);

	}



	public function update($offer_id)

	{

		$this->form_validation->set_rules('offer_title','Offer Title', 'trim|required');
		$this->form_validation->set_rules('offer_amount','Offer Amount', 'trim|required');

		if ($this->form_validation->run() == FALSE)

		{	

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			$this->edit($offer_id);

		}		

		else	

		{

			$image_path = "";
			//insert Image here
			if(isset($_FILES['offer_banner_image']) && $_FILES['offer_banner_image']['size'] > 0){
				$getFlag = 0;
				$imgName = $_FILES['offer_banner_image']['name'];
				$file_size =$_FILES['offer_banner_image']['size'];
				$file_tmp =$_FILES['offer_banner_image']['tmp_name'];

				$temp_tr = explode(".", $_FILES["offer_banner_image"]["name"]);
				$file_ext = end($temp_tr);
				$expensions= array("jpeg","jpg","png");
				if(in_array($file_ext,$expensions)=== false){
					$getFlag = 1;
					$this->session->set_flashdata(['status' => 401,'message' =>'Invalid File.Image']);
			  	}
			  	if($file_size > 10194304){
			  		$getFlag = 2;
			        $this->session->set_flashdata(['status' => 401,'message' =>'File size must be excately 10 MB.']);
			    }

			    if($getFlag == 0){
			    	$file_name = round(microtime(true)) . '.' . end($temp_tr);

			    	$img_directory =  "assets/profiles";
			    	if (!file_exists($img_directory)) {
					    mkdir($img_directory, 0777, true);
					}
						$image_path = base_url().$img_directory."/".$file_name;
					move_uploaded_file($file_tmp,$img_directory."/".$file_name);
			    }
			}else{
				$getImg = $this->um->getOffers("offers",['offer_id' => $offer_id])->row_array();
				if($getImg['offer_banner_image'] != ""){
					$image_path = $getImg['offer_banner_image'];
				}else{
					$image_path = "";
				}
			}


			$whr = ['offer_id' => $offer_id];

			$date = date('Y-m-d H:i:s');

			$userData = [

				
				'offer_title' => $this->input->post('offer_title'),

				'offer_amount' => $this->input->post('offer_amount'),

				'offer_desc' => $this->input->post('offer_desc'),

				'offer_banner_image' => $image_path,
			];



			$userId = $this->um->updateData("offers",$userData,$whr);

           

			if($userId > 0){

				$this->session->set_flashdata('success_msg',  "Offer Updated Successfully.");

				redirect('offers');

			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('offers');

			}

			

		}

	}




	public function delete($offer_id)
	{
		$whr = ['offer_id' => $offer_id];
			$lastId = $this->um->deleteData("offers", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "Offer Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('offers');
	}

	

}