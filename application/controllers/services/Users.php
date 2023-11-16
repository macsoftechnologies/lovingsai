<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Users extends REST_Controller {
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('UserModel','um');
		$this->date = date('Y-m-d H:i:s');
	}

	public function mainFunction($method)
	{
		if($method != 'POST'){
			$this->response(['status' => 400,'message' =>'Bad request.']);
		}else{
			$check_auth_client = $this->um->check_auth_client();
			if($check_auth_client == true){
				return true;
			}else{
				return false;
			}
		}
	}


    // <--------------------------------  Start Users Data  ---------------------------------->


	public function create_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		$res = $this->mainFunction($method);
		if($res == 1){
			//Code for Registration
			if(!$this->post('name') && !$this->post('mobile') && !$this->post('email') && !$this->post('password') && !$this->post('device_id')){				
				$this->response(['status'=> 405,'message' =>"Some Perameters Are Missing!"]);
			}else{
				$chek_user = $this->um->checkUserExistOrNot("users",$this->post('email'),$this->post('mobile'));
				if($chek_user > 0){
					$this->response(['status'=> 406,'message' =>"Email/Moblienumber already exist",'result'=> null]);
				}else{
					$date = date('Y-m-d H:i:s');
					$formData = [
						    'name' => $this->post('name'),
					        'mobile' => $this->post('mobile'),
					        'email' => $this->post('email'),
					        'pincode' => $this->post('pincode'),
					        'device_id' => $this->post('device_id'),
					        'gaid' => $this->post('gaid'),
					        'login_token' => $this->post('login_token'),
					        'password' => md5($this->post('password')),
					        'status' => 'Y',
					        'created_at' => $this->date
					];
					$insertId = $this->um->insertData("users",$formData);
					if($insertId){

						$this->response(['status'=> 200,'message' =>"Successfull Registerd.",'UserId'=> $insertId]);
					}else{
						$this->response(['status'=> 409,'message' =>"Registration Failed,please try again",'result'=> null]);
					}
				}
			}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}

	 public function login_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);
     	if($res == 1){
			if(!$this->post('email') && !$this->post('password') && !$this->post('device_id') && !$this->post('login_token')){
				$this->response(['status'=> 404,'message' =>"Some Perameters Are Missing!"]);
			}else{
				$device_id = $this->post('device_id');
				$email = $this->post('email');
				$userpassword = md5($this->post('password'));
				$result = $this->um->check_usersdatalogin($device_id,$email,$userpassword);



				if($result == ''){
					$this->response(['status'=> 404,'message' =>"Invalid Details, Please enter proper details"]);
					
				}else{
					$whr = ['user_id' => $result['user_id']];
				$update = ['login_token' => $this->post('login_token')];
				$updateId = $this->um->updateData("users", $update,$whr);
					 $this->response(['status'=> 200,'message' =>"Login Successfully",'userdata' => $result]);
				}
			}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}
	public function getuserDetailsById_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		$res = $this->mainFunction($method);
		if($res == 1){
			if(!$this->post('user_id')){
				$this->response(['status'=> 405,'message' =>"Some Perameters Are Missing!"]);
			}else{
				$whr = [
					'user_id' => $this->post('user_id'),
					'status' => 'Y'
			];
				$users = $this->um->getCustomersData("users",$whr)->row_array();
				if($users){
					$this->response(['status'=> 200,'message' =>"Success",'result'=> $users]);
				}else{
					$this->response(['status'=> 404,'message' =>"Failed,please try again",'result'=> null]);
				}
			}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	  
	}

	public function update_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);

     	if($res == 1){
			if(!$this->post('firstname') && !$this->post('mobilenumber') && !$this->post('address')){
				$this->response(['status'=> 404,'message' =>"Some Perameters Are Missing!"]);
			}else{
				$whr = ['user_id' => $this->post('user_id')];
				$userData = [
					        'firstname' => $this->post('firstname'),
					        'lastname' => $this->post('lastname'),
					        'email' => $this->post('email'),
					        'address' => $this->post('address'),
					        'mobilenumber' => $this->post('mobilenumber')
				        ];
				$updateId = $this->um->updateData("users", $userData,$whr);
				if($updateId > 0){
					$this->response(['status'=> 200,'message' =>"User Updated Successfully."]);
				}else{
					$this->response(['status'=> 404,'message' =>"Failed, please try again."]);
				}
			}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}


	public function changePassword_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		$res = $this->mainFunction($method);

		if($res == 1){
		if(!$this->post('user_id') && !$this->post('password')){
			$this->response(['status'=> 405,'message' =>"Some Perameters Are Missing!"]);
		}else{
			if($this->post('password') == $this->post('newpassword')) {
				
				$this->response(['status' => 400,'message' =>'Fail','result'=>'Old password Newpasswword Matched Please try another password']);
			}else{

				$pwd = md5($this->post('password'));
	        $chk_password = $this->um->checkOldPass("users", ['password' => $pwd, 'user_id' => $this->post('user_id')]);
	       
	        if($chk_password == 0){
	        	$this->response(['status' => 209,'message' =>'Fail','result' => 'Invalid Old Password Please try again.']);
	        }else{ 
	          	 $upWhr = ['user_id' => $this->post('user_id')];
	        	 $set = ['password' => md5($this->post('newpassword'))];
				 $newpassword = $this->um->updatepass("users",$set,$upWhr);
				 $this->response(['status' => 200,'message' =>'Success','result' => 'Password Updated Successfully']);
	            }

			}
			
            }
        }
	}

	public function forgotPassword_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		$res = $this->mainFunction($method);

		if($res == 1){
			if(!$this->post('email')){
				$this->response(['status'=> 405,'message' =>"Some Perameters Are Missing!"]);
			}else{
				$whr = ['email' => $this->post('email')];
				$users = $this->um->getCustomersData("users",$whr)->row_array();

				if($users){

						$this->response(['status'=> 200,'message' =>"Successfull.",'user_id'=> $users['user_id']]);
					}else{
						$this->response(['status'=> 409,'message' =>"Unkonown Email Failed,please try again",'result'=> null]);
					}

				// echo "<pre>";
				// print_r($users);
				// exit;
			}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}


	public function forgotchangePassword_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		$res = $this->mainFunction($method);

		if($res == 1){
		if(!$this->post('user_id') && !$this->post('password')){
			$this->response(['status'=> 405,'message' =>"Some Perameters Are Missing!"]);
		}else{
			$users = $this->um->getCustomersData("users",['user_id' => $this->post('user_id')])->row_array();
			if($users['password'] == md5($this->post('password'))) {
				
				$this->response(['status' => 400,'message' =>'Fail','result'=>'Old password Newpasswword Matched Please try another password']);
			}else{

				$pwd = md5($this->post('password'));
	        // $chk_password = $this->um->checkOldPass("users", ['password' => $pwd, 'user_id' => $this->post('user_id')]);
	       
	        // if($chk_password == 0){
	        // 	$this->response(['status' => 209,'message' =>'Fail','result' => 'Invalid Old Password Please try again.']);
	        // }else{ 
	          	 $upWhr = ['user_id' => $this->post('user_id')];
	        	 $set = ['password' => md5($this->post('password'))];
				 $newpassword = $this->um->updatepass("users",$set,$upWhr);
				 $this->response(['status' => 200,'message' =>'Success','result' => 'Password Updated Successfully']);
	            // }

			}
			
            }
        }
	}

	public function subscribedCreate_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);
     	if($res == 1){
			if(!$this->post('email')){
				$this->response(['status'=> 404,'message' =>"Some Perameters Are Missing!"]);
			}else{
					$date = date('Y-m-d H:i:s');
				    $userData = [
					        'email' => $this->post('email'),
					        'status' => 1,
					        'created_at' => $this->date
				        ];
				
				$lastId = $this->um->insertData("subscribed_users", $userData);
				if($lastId > 0){

					$this->response(['status'=> 200,'message' =>"Subscribed user created Successfully."]);

				}else{
					$this->response(['status'=> 404,'message' =>"email, please try again."]);
				}
		}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}


	public function quesriesCreate_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);
     	if($res == 1){
			if(!$this->post('name') && !$this->post('email') && !$this->post('phone') && !$this->post('message')){
				$this->response(['status'=> 404,'message' =>"Some Perameters Are Missing!"]);
			}else{
					$date = date('Y-m-d H:i:s');
				    $userData = [
					        'name' => $this->post('name'),
					        'email' => $this->post('email'),
					        'phone' => $this->post('phone'),
					        'message' => $this->post('message'),
					        'status' => 1,
					        'created_at' => $this->date
				        ];
				
				$lastId = $this->um->insertData("quaries", $userData);
				if($lastId > 0){

					$this->response(['status'=> 200,'message' =>"Query created Successfully."]);

				}else{
					$this->response(['status'=> 404,'message' =>"email, please try again."]);
				}
		}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}


	public function subscribedCreatewithMobile_post()
	{
		$method = $_SERVER['REQUEST_METHOD'];
 		$res = $this->mainFunction($method);
     	if($res == 1){
			if(!$this->post('email') && !$this->post('mobilenumber')){
				$this->response(['status'=> 404,'message' =>"Some Perameters Are Missing!"]);
			}else{
					$date = date('Y-m-d H:i:s');
				    $userData = [
					        'email' => $this->post('email'),
					        'mobilenumber' => $this->post('mobilenumber'),
					        'status' => 1,
					        'created_at' => $this->date
				        ];
				
				$lastId = $this->um->insertData("subscribed_users", $userData);
				if($lastId > 0){




					$email = $this->post('email');
					$mobile_number = $this->post('mobilenumber');
					$to = 'esupport@vysyarajujewellers.com';
		                $subject = 'Vysyaraju jewellers';
		                $message = "<h1>Subscribed User Details</h1>";
		                $message .= "<hr>";
		                $message .= '<p><b>Email:</b> '.$email.'</p>';
		                $message .= '<p><b>Phone:</b> '.$mobile_number.'</p>';
		                
		                
		                $message .= "<hr>";
		              
		                $headers = "MIME-Version: 1.0\r\n";
		                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		                // send email
		                mail($to, $subject, $message, $headers);

					$this->response(['status'=> 200,'message' =>"Subscribed user created Successfully."]);

				}else{
					$this->response(['status'=> 404,'message' =>"email, please try again."]);
				}
		}
		}else{
			$this->response(['status' => 401,'message' =>'Unauthorized.']);
		}
	}


    // <-------------------------------- End Customers Data  ---------------------------------->

}