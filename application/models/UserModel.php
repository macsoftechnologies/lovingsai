<?php 

class UserModel extends CI_Model
{
	public function __construct()
	{
        parent::__construct();
        /*header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");*/
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    }

    var $auth_key       = "earncashRestApi";

    public function check_auth_client(){
        $auth_key  = $this->input->get_request_header('Auth-Key', TRUE);

        if($auth_key == $this->auth_key){
            return true;
        } else {
        	return false;
        }
    }

	public function insertData($tablename,$data)
	{
		$this->db->insert($tablename,$data);
		return $this->db->insert_id();
	}

	public function updateData($tablename,$set,$whr)
	{
		$this->db->set($set)->where($whr)->update($tablename);
		return true;
	}

	public function updatepass($tableName,$set,$upWhr)
    {
        $this->db->set($set)->where($upWhr)->update($tableName);
    }
	
	public function deleteData($tablename,$data)
	{
		$this->db->where($data)->delete($tablename);
		return true;
	}

	public function checkAdminLogin($tablename,$email,$pwd)
	{
		$result = array();
		$this->db->select('admin_id, name, email, phone,address, type_id, type_name, department_id, profile');
		$this->db->from($tablename);
		$this->db->where("(email = '$email')");
		$this->db->where('password',$pwd);
		$result = $this->db->get()->row_array();
		return $result;
	}

	public function getStatus($tableName,$whr)
	{
		$this->db->select('status_id, status_name');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function check_userlogin($emailmobile,$userpassword)
	{
		$result = array();
		$this->db->select('admin_id, name, email, phone, address');
		$this->db->from('admin');
		$this->db->where("(email = '$emailmobile' OR phone = '$emailmobile')");
		$this->db->where('password',$userpassword);
		$this->db->where('status',1);
		$result = $this->db->get()->row_array();
		return $result;
	}

	public function check_usersdatalogin($device_id,$email,$userpassword)
	{
		$result = array();
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where("(device_id = '$device_id')");
		$this->db->where("(email = '$email')");
		$this->db->where('password',$userpassword);
		$this->db->where('status','Y');
		// $this->db->get();
		// print_r($this->db->last_query());
		// exit;
		$result = $this->db->get()->row_array();
		return $result;
	}


	public function adminDetails($tableName,$whr)
	{
		$this->db->select('admin_id, name, email, phone, password, address');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get()->row_array();
		return $result;
	}

	public function getCategories($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}


	public function getStocks($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getSubCategories($tableName,$whr)
	{
		$this->db->select('s.sub_cat_id, s.category_id, s.sub_cat_name, s.sub_cat_image, s.subcat_description, c.category_name, c.category_image');
		$this->db->from($tableName);
		$this->db->where($whr);
        $this->db->join('categories c','s.category_id = c.category_id', 'LEFT');
		$result = $this->db->get();
		return $result;
	}

	public function checkUserExistOrNot($tableName,$email,$mobileNumber)
	{
		$this->db->query("SET sql_mode = '' ");
		$res = 0;
		$this->db->select('user_id');
		$this->db->from($tableName);
		$this->db->where("(email = '$email' OR mobile = '$mobileNumber')");
		// $this->db->where('status',1);
		$result = $this->db->get()->row_array();
		if($result['user_id'] != ""){
			$res = $result['user_id'];
		}
		return $res;
	}

	public function getCustomersData($tableName)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		//$this->db->where($whr);
		// $this->db->order_by('accountant_id','desc');
		$result = $this->db->get();
		return $result;
	}


	public function getOffersData($tableName)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$result = $this->db->get();
		return $result;
	}





	public function getRates($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getProductDjnilujoetails($tableName,$whr)
	{
		$this->db->select('p.product_id, p.weight, p.name, p.type, p.category_id, c.category_name, p.style_code, p.description, p.price, p.discount, p.front_image, p.measurement, p.stone, p.weight, p.net_weight, p.clousure, p.weight, p.stone_color, p.gst, p.status, p.sub_cat_id,s.sub_cat_name, p.price_type, p.length, p.width, p.size, p.stock, p.diamond_color, p.diamond_clarity, p.diamond_carat, p.diamond_pcs');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->join('categories c','p.category_id = c.category_id','INNER');
		$this->db->join('sucategories s','p.sub_cat_id = s.sub_cat_id','INNER');
		$this->db->order_by('p.product_id', 'desc');
		$result = $this->db->get();
		return $result;
	}

	public function getProductDetails($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->order_by('product_id', 'desc');
		$result = $this->db->get();
		return $result;
	}

	public function getProductImages($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getProductStones($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getCartItems($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}


	public function getCartProductsItems($tableName,$whr)
	{
		$this->db->select('c.cart_id, c.product_id, c.user_id, c.order_status, c.quantity, c.total_amount, c.discount, c.status, p.name, p.category_id, p.sub_cat_id, p.style_code, p.description, p.price, p.discount, p.front_image, p.clousure, p.weight, p.type, p.price_type, p.net_weight, cc.category_name,s.sub_cat_name,c.coupon_name,p.stock');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->join('tbl_product p','c.product_id = p.product_id','LEFT');
		$this->db->join('categories cc','p.category_id = cc.category_id','LEFT');
		$this->db->join('sucategories s','p.sub_cat_id = s.sub_cat_id','LEFT');
		// $this->db->join('coupons cp','c.coupon_name = cp.coupon_name','LEFT');
		$result = $this->db->get();
		return $result;
	}

	public function getMyorders($tableName,$whr)
	{
		$this->db->select('order_id, user_id, grand_total, order_txn, tracking_id, bank_ref, delivery_date, order_status, status, created_at, updated_at, first_name, last_name, email, address, city, state, phone_number, zipcode');
		$this->db->from($tableName);
		$this->db->where($whr);
		// $this->db->order_by('order_id','desc');
		$this->db->order_by('order_id', 'desc');
		$result = $this->db->get();
		return $result;
	}

	public function getStoneTypes($tableName,$whr)
	{
		$this->db->select('stone_id, stone_name,  weight, price, total, status, product_id');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getbackgroundeImagesProductTypes($tableName,$whr)
	{
		$this->db->select('image_id, product_id, image, status, created_at');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}


	public function getorderStatus($tableName,$whr)
	{
		$this->db->select('order_status_id, status_name, status');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getWhistListItems($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}


	public function getWhistlistItemsData($tableName,$whr)
	{
		$this->db->select('w.whistlist_id, w.product_id, w.user_id,  p.name, p.category_id, p.sub_cat_id, p.style_code, p.description, p.price, p.discount, p.front_image, p.clousure, p.weight, p.type, p.price_type, p.net_weight, cc.category_name,s.sub_cat_name,');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->join('tbl_product p','w.product_id = p.product_id','LEFT');
		$this->db->join('categories cc','p.category_id = cc.category_id','INNER');
		$this->db->join('sucategories s','p.sub_cat_id = s.sub_cat_id','INNER');
		$result = $this->db->get();
		return $result;
	}


	public function getPaymentScreenDate($tableName,$from, $to,$order_status)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where("order_status = '$order_status'");
		if($from != "" && $to != ""){
			$this->db->where("created_at >= '$from' and created_at <= '$to'");
		}
		$result = $this->db->get();
		return $result;
	}


	public function getDepartments($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		// $this->db->order_by('created_at', 'desc');
		$result = $this->db->get();
		return $result;
	}


	public function getexpenditures($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getDepartments123($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->distinct();
        $this->db->group_by('patient_code');
        $this->db->where_not_in('status',0);
		$result = $this->db->get();
		return $result;
	}


	public function getDepartments123Namesearch($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->distinct();
        $this->db->group_by('patient_code');
        $this->db->where_not_in('status',0);
		$result = $this->db->get();
		return $result;
	}

	public function getDepartmentsDare($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where_not_in('date',date('Y-m-d'));
		$this->db->distinct();
        $this->db->group_by('patient_code');
        $this->db->where_not_in('status',0);
		// $this->db->order_by('created_at', 'desc');
		$result = $this->db->get();
		return $result;
	} 


	public function getDepartmentsCount($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->distinct();
        $this->db->group_by('patient_code');
		$this->db->where_not_in('status',0);
		$this->db->where_not_in('appointment',1);
		$result = $this->db->get();
		return $result;
	} 


	public function getCoupons($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getBanners($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}


	public function checkOldPass($tableName,$whr)
    {
    	$res = 0;
        $this->db->select('user_id,password');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get()->row_array();
		if($result['user_id'] != ""){
			$res = $result['user_id'];
		}
		return $res;
    }

    public function getFaqs($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}


	public function getReviews($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function checkEmailexistOrNot($tableName,$whr)
	{
		$res = 0;
		$this->db->select('user_id');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get()->row_array();
		if($result['user_id'] != ""){
			$res = $result['user_id'];
		}
		return $res;
	}

	public function getSuibscribedusersDetails($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->order_by('subscribed_id', 'desc');
		$result = $this->db->get();
		return $result;
	}


	public function getOrdersDetails($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getFaqsDetails($tableName,$whr)
	{
		$this->db->select('f.faq_id, f.name, f.mobile_number, f.user_id, f.question, f.status, u.firstname, u.lastname, u.email, u.mobilenumber');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->join('users u','f.user_id = u.user_id','INNER');
		$this->db->order_by('faq_id', 'desc');
		$result = $this->db->get();
		return $result;
	}

	public function getreviewsDetails($tableName,$whr)
	{
		$this->db->select('r.review_id, r.name, r.rating, r.summary, r.review, r.user_id, u.firstname, u.lastname, u.email, u.mobilenumber, r.created_at');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->join('users u','r.user_id = u.user_id','INNER');
		$this->db->order_by('review_id', 'desc');
		$result = $this->db->get();
		return $result;
	}

	// public function getBanners($tableName,$whr)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from($tableName);
	// 	$this->db->where($whr);
	// 	$result = $this->db->get();
	// 	return $result;
	// }

	public function getQuariesDetails($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->order_by('query_id', 'desc');
		$result = $this->db->get();
		return $result;
	}


	public function getminiBanners($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}


	public function getuserDetails123($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}


	public function getProductDjnilujoetailsByNAmedata($tableName,$whr)
	{
		$this->db->select('p.product_id, p.weight, p.name, p.type, p.category_id, c.category_name, p.style_code, p.description, p.price, p.discount, p.front_image, p.measurement, p.stone, p.weight, p.net_weight, p.clousure, p.weight, p.stone_color, p.gst, p.status, p.sub_cat_id,s.sub_cat_name, p.price_type, p.length, p.width, p.size, p.stock');
		$this->db->from($tableName);
		$this->db->like($whr);
		$this->db->join('categories c','p.category_id = c.category_id','INNER');
		$this->db->join('sucategories s','p.sub_cat_id = s.sub_cat_id','INNER');
		$this->db->order_by('p.product_id', 'desc');
		$result = $this->db->get();
		return $result;
	}




	public function getRecord($rowno,$rowperpage) {			
		$this->db->select('p.product_id, p.weight, p.name, p.type, p.category_id, c.category_name, p.style_code, p.description, p.price, p.discount, p.front_image, p.measurement, p.stone, p.weight, p.net_weight, p.clousure, p.weight, p.stone_color, p.gst, p.status, p.sub_cat_id,s.sub_cat_name, p.price_type, p.length, p.width, p.size, p.stock, p.new_arrival');
		$this->db->from('tbl_product p');
		$this->db->join('categories c','p.category_id = c.category_id','INNER');
		$this->db->join('sucategories s','p.sub_cat_id = s.sub_cat_id','INNER');
		$this->db->order_by('p.product_id', 'desc');
		$this->db->where_not_in('p.status',0);
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();       	
		return $query->result_array();
	}

	public function getRecordCount() {
    	$this->db->select('count(*) as allcount');
      	$this->db->from('tbl_product');
      	$this->db->where_not_in('status',0);
      	$query = $this->db->get();
      	$result = $query->result_array();      
      	return $result[0]['allcount'];
    }


    public function getRecordCount123() {
    	$this->db->select('count(*) as allcount');
      	$this->db->from('users');
      	// $this->db->where_in('status',1);
      	$this->db->order_by('user_id','desc');
      	$query = $this->db->get();
      	$result = $query->result_array();      
      	return $result[0]['allcount'];
    }


    public function getRecord123($rowno,$rowperpage) {			
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('user_id','desc');
		$this->db->where_in('status',1);
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();       	
		return $query->result_array();
	}


	public function getAllUSersDetailsData($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}


// <---------  start Hmsci Queries  ------------->

//doctors get 
public function getDoctorDetailsWithDepartment($tableName, $whr)
{
    $this->db->select('d.doctor_id, d.name AS doctor_name, d.email, d.password, d.address, d.phone, d.department_id, d.profile, dp.name AS department_name');
    $this->db->from($tableName.' d');
    $this->db->where($whr);
    $this->db->join('department dp', 'd.department_id = dp.department_id', 'LEFT');
    $result = $this->db->get();
    return $result;
}

public function getTypes($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getAdminDetails($tableName,$whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$this->db->where_not_in('type_id',1);
		$result = $this->db->get();
		return $result;
	}


	public function getMdedicine($tableName)
	{
	 	$this->db->select('*');
	 	$this->db->from($tableName);
	    $result= $this->db->get();
	    return $result;
	}

	public function getDoctorsDetails($tableName, $whr)
	{
	 	$this->db->select('a.*, dp.name as departmentname, dp.description');
	 	$this->db->from($tableName);
	 	$this->db->where($whr);
	 	$this->db->join('department dp', 'a.department_id = dp.department_id', 'LEFT');
	    $result= $this->db->get();
	    return $result;
	}

	public function getPresciptionDetails($tableName, $whr)
	{
	 	$this->db->select('p.*, pa.name, pa.phone, pa.address, pa.sex, pa.birth_date, pa.age, pa.blood_group, pa.height, pa.weight, pa.bmi, pa.alcohol, pa.smoking, a.name as adminname, a.phone as phonenumber, a.email as adminemail, a.address as adminaddress, pa.patient_code, dp.name as departmentname');
	 	$this->db->from($tableName);
	 	$this->db->where($whr);
	 	$this->db->join('patient pa', 'pa.patient_id = p.patient_id', 'LEFT');
	 	$this->db->join('admin a', 'p.doctor_id = a.admin_id', 'LEFT');
	 	$this->db->join('department dp', 'a.department_id = dp.department_id', 'LEFT');
	    $result= $this->db->get();
	    return $result;
	}

	public function getPresciptionDetailsDistict($tableName, $whr)
	{
	 	$this->db->select('p.*, pa.name, pa.phone, pa.address, pa.sex, pa.birth_date, pa.age, pa.blood_group, pa.height, pa.weight, pa.bmi, pa.alcohol, pa.smoking, a.name as adminname, a.phone as phonenumber, a.email as adminemail, a.address as adminaddress, pa.patient_code, dp.name as departmentname');
	 	$this->db->from($tableName);
	 	$this->db->where($whr);
	 	$this->db->join('patient pa', 'pa.patient_id = p.patient_id', 'LEFT');
	 	$this->db->join('admin a', 'p.doctor_id = a.admin_id', 'LEFT');
	 	$this->db->join('department dp', 'a.department_id = dp.department_id', 'LEFT');
	 	$this->db->distinct();
        $this->db->group_by('p.patient_id');
	    $result= $this->db->get();
	    return $result;
	}

	public function getMedicineDetails($tableName, $whr)
	{
	 	$this->db->select('a.*, m.name, m.aliasname, m.generic, m.description, m.product_type, m.groups');
	 	$this->db->from($tableName);
	 	$this->db->where($whr);
	 	$this->db->join('medicine m', 'a.medicine_id = m.medicine_id', 'LEFT');
	    $result= $this->db->get();
	    return $result;
	}


	public function getMedicines($tableName, $whr)
	{
	 	$this->db->select('m.*,c.description, c.name as manufacturing');
	 	$this->db->from($tableName);
	 	$this->db->where($whr);
	 	$this->db->join('medicine_category c', 'm.medicine_category_id = c.medicine_category_id', 'INNER');
	    $result= $this->db->get();
	    return $result;
	}

	
	public function getmedicieData($tableName,$whr)
{
	$this->db->select('*');
	$this->db->from($tableName);
	$this->db->where($whr);
	$this->db->order_by('name','asc');
	$result = $this->db->get();
	return $result;
}
 

public function getlaboratoryData($tableName, $whr)
{
	$this->db->select('*');
	$this->db->from($tableName);
	$this->db->where($whr);
	$result = $this->db->get();
	return $result;
}


public function getAppointmentData($tableName,$whr)
{
	$this->db->select('*');
	$this->db->from($tableName);
	$this->db->where($whr);
	$result = $this->db->get();
	return $result;
}

public function getPresciptionDetailsRecent($tableName, $whr)
	{
	 	$this->db->select('p.*, p.provisional_diagnostics, pa.name, pa.phone, pa.address, pa.sex, pa.birth_date, pa.age, pa.blood_group, pa.height, pa.weight, pa.bmi, pa.alcohol, pa.smoking, a.name as adminname, a.phone as phonenumber, a.email as adminemail, a.address as adminaddress, pa.patient_code, dp.name as departmentname, pa.bp, pa.hypertention, pa.diabetes');
	 	$this->db->from($tableName);
	 	$this->db->where($whr);
	 	$this->db->join('patient pa', 'pa.patient_id = p.patient_id', 'LEFT');
	 	$this->db->join('admin a', 'p.doctor_id = a.admin_id', 'LEFT');
	 	$this->db->join('department dp', 'a.department_id = dp.department_id', 'LEFT');
	 	$this->db->order_by('p.presciption_id','desc');
	    $result= $this->db->get();
	    return $result;
	}

	public function getLabBills($tableName,$whr)
{
	$this->db->select('*');
	$this->db->from($tableName);
	$this->db->where($whr);
	$this->db->order_by('lab_bills_id','desc');
	$result = $this->db->get();
	return $result;
}


	public function getCOmpleteDetailsLabBills($tableName,$whr)
{
	$this->db->select('l.*, pa.patient_code as patientid');
	$this->db->from($tableName);
	$this->db->where($whr);
	$this->db->join('patient pa', 'pa.patient_id = l.patient_id', 'LEFT');
	$this->db->order_by('lab_bills_id','desc');
	$result = $this->db->get();
	return $result;
}





	public function getPatientdata($tableName, $whr)
{
    $this->db->select('patient_id, name'); 
    $this->db->from($tableName);
 
    $this->db->join('sales', 'sales.patientName = patient.name', 'left');

    $this->db->where($whr);

    $result = $this->db->get();
    return $result;
}




	public function getEmployeeDetails($tableName)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$result = $this->db->get();
		return $result;
	}

	public function getemployeeImage($tableName,$whr)
	{
		$this->db->select('employee_id, image');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get()->row_array();
		return $result;
	}


	public function getAllempData($tableName,$whr)
	{
		$this->db->select("employee_id, name, admin_id, mobile_number, aadhar_number,image, designation, address, daily_wage, minimum_wage_days, overtime_commission_per_hours, status");
		$this->db->from($tableName);
		$this->db->where($whr);
		$response = $this->db->get();
		return $response;
	}

	public function getEmployeeId($tableName,$whr)
	{
		$this->db->select('employee_id, name, mobile_number, aadhar_number, image, daily_wage, minimum_wage_days, overtime_commission_per_hours, address');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get()->row_array();
		return $result;
	}


	public function checkUserTransaction($tableName,$whr)
	{
		$res = 0;
		$this->db->select("emp_account_id");
		$this->db->from($tableName);
		$this->db->where($whr);
		$response = $this->db->get()->row_array();
		if($response['emp_account_id'] !="" ){
			$res = $response['emp_account_id'];
		}
		return $res;
	}

	public function checkUserAttendace($tableName,$whr)
	{
		$res = 0;
		$this->db->select("emp_attendence_id");
		$this->db->from($tableName);
		$this->db->where($whr);
		$response = $this->db->get()->row_array();
		if($response['emp_attendence_id'] !="" ){
			$res = $response['emp_attendence_id'];
		}
		return $res;
	}


	public function getAttendaceData($tableName,$whr)
	{
		$this->db->select("attendence");
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get()->row_array();
		return $result;

	}

	public function getAttendence($tableName,$whr, $from, $to)
	{
		$this->db->select('e.date, e.attendence , a.type');
		$this->db->from($tableName);
		$this->db->where($whr);
		if($from != "" && $to != ""){
			$this->db->where("date >= '$from' and date <= '$to'");
		}
		$this->db->join('tbl_mst_attendence a','e.attendence = a.mst_attendence_id','INNER');
		$result = $this->db->get();
		return $result;
	}

	public function getTestsDetails($tableName, $whr)
	{
	 	$this->db->select('a.*, l.test, l.package_name, l.laboratory_type');
	 	$this->db->from($tableName);
	 	$this->db->where($whr);
	 	$this->db->join('laboratory l', 'a.laboratory_id = l.laboratory_id', 'LEFT');
	 	$this->db->where_not_in('a.laboratory_id',0);
	    $result= $this->db->get();
	    return $result;
	}

	public function getemployeesLeavesData($tableName,$whr)
	{
		$this->db->select("*");
		$this->db->from($tableName);
		$this->db->where($whr);
		$response = $this->db->get();
		return $response;
	}

	public function getSearchProducts($tableName, $patient_id, $whr, $from_date, $to_date)
	{
		$this->db->select('*');
		$this->db->from($tableName);

		if($patient_id > 0){
			$this->db->where('patient_id', $patient_id);
		}

		if($to_date == ''){
			$this->db->where('date', $from_date);
 
		}else if($from_date == ''){
			
		}else {
			$this->db->where("date <= '$to_date' and date >= '$from_date'");
		}

		$this->db->where($whr);
		// $this->db->get();

		// print_r($this->db->last_query());
		// exit;
		$result = $this->db->get();
		return $result;
	}


	public function getSearchLabreports($tableName, $whr, $from_date, $to_date)
	{
		$this->db->select('*');
		$this->db->from($tableName);

		if($to_date == ''){
			$this->db->where('created_at', $from_date);
 
		}else if($from_date == ''){
			
		}else {
			$this->db->where("created_at <= '$to_date' and created_at >= '$from_date'");
		}

		$this->db->where($whr);
		// $this->db->get();

		// print_r($this->db->last_query());
		// exit;
		$result = $this->db->get();
		return $result;
	}

	public function getSalesLogData($tableName, $whr)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where($whr);
		$result = $this->db->get();
		return $result;
	}

	public function getSearchExpenditurereports($tableName, $whr, $from_date, $to_date)
	{
		$this->db->select('*');
		$this->db->from($tableName);

		if($to_date == ''){
			$this->db->where('date', $from_date);
 
		}else if($from_date == ''){
			
		}else {
			$this->db->where("date <= '$to_date' and date >= '$from_date'");
		}

		$this->db->where($whr);
		// $this->db->get();

		// print_r($this->db->last_query());
		// exit;
		$result = $this->db->get();
		return $result;
	}


	public function getSearchPurchasereports($tableName, $whr, $from_date, $to_date)
	{
		$this->db->select('*');
		$this->db->from($tableName);

		if($to_date == ''){
			$this->db->where('date', $from_date);
 
		}else if($from_date == ''){
			
		}else {
			$this->db->where("date <= '$to_date' and date >= '$from_date'");
		}

		$this->db->where($whr);
		// $this->db->get();

		// print_r($this->db->last_query());
		// exit;
		$result = $this->db->get();
		return $result;
	}


	public function getSearchSalesreports($tableName, $whr, $from_date, $to_date)
	{
		$this->db->select('*');
		$this->db->from($tableName);

		if($to_date == ''){
			$this->db->where('date', $from_date);
 
		}else if($from_date == ''){
			
		}else {
			$this->db->where("date <= '$to_date' and date >= '$from_date'");
		}

		$this->db->where($whr);
		// $this->db->get();

		// print_r($this->db->last_query());
		// exit;
		$result = $this->db->get();
		return $result;
	}



	public function getdateAppointment($tableName, $whr)
{
    $this->db->select('*');
    $this->db->from($tableName);
    $this->db->where($whr,);
    $this->db->distinct();
    $this->db->where_not_in('status', 0);
	//$this->db->where("DATE(appointment_date)", $search_date);
	$result = $this->db->get();
    return $result;
}


public function getsetdateAppointment($tableName, $whr)
{
    $this->db->select('*');
    $this->db->from($tableName);
    $this->db->where($whr);
    $this->db->distinct();
    $this->db->where_not_in('status', 0);
    // $this->db->where('appointment_date', $appointment_dae);
    $result = $this->db->get();
    return $result;
}


public function getdatelabbils($tableName, $whr)
{
    $this->db->select('*');
    $this->db->from($tableName);
    $this->db->where($whr,);
    $this->db->distinct();
   	$result = $this->db->get();
    return $result;
}

public function getLabBill($tableName,$date,$date1)
	{
		$this->db->select('*');
		$this->db->from($tableName);
		$this->db->where("created_at >= '$date' and created_at <= '$date1'");
		// $this->db->get();

		// print_r($this->db->last_query());
		// exit;
		 $result = $this->db->get();
		return $result;
	}


}	