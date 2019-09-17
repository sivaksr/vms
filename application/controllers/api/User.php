<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class User extends REST_Controller
{
    
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit']    = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit']   = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('security');
        $this->load->model('Mobile_model');
        
        
    }
	 public function login_post()
    {
        $email = $this->post('email');
        $pwd = $this->post('pwd');
		if($email=='') {
			$message = array('status' => 0,'message' => 'Email id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($pwd=='') {
			$message = array('status' => 0,'message' => 'Password is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$login=$this->Mobile_model->login_details($email,md5($pwd));
		if(count($login)>0){
			if($login['l_status']==0){
				unset($login['a_email_id'],$login['password'],$login['org_password'],$login['a_status'],$login['updated_at'],$login['mobile_verification'],$login['otp'],$login['created_by']);
				$this->Mobile_model->update_user($login['a_id'],array('l_status'=>1));
				$message = array('status' => 1,'details'=>$login,'message' => 'User login succesfully');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				 $message = array('status' => 0,'message' => 'User already login. Please try after logout');
				$this->response($message, REST_Controller::HTTP_OK);
			}
			
		}else{
			 $message = array('status' => 0,'message' => 'Invalid login details .Please try again');
            $this->response($message, REST_Controller::HTTP_OK);
		}
     }
	 public function logout_post()
    {
        $a_id = $this->post('a_id');
		if($a_id=='') {
			$message = array('status' => 0,'message' => 'user id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$login=$this->Mobile_model->update_user($a_id,array('l_status'=>0));
		if(count($login)>0){
				$message = array('status' => 1,'message' => 'User logout succesfully');
				$this->response($message, REST_Controller::HTTP_OK);
		}else{
			 $message = array('status' => 0,'message' => 'Invalid login details .Please try again');
            $this->response($message, REST_Controller::HTTP_OK);
		}
     }
	 public function changepassword_post(){
		$a_id=$this->post('a_id');
		$oldpassword=$this->post('oldpassword');
		$password=$this->post('password');
		$confirmpassword=$this->post('confirmpassword');
		if($a_id==''){
			$message = array('status'=>0,'message'=>'User Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($password==''){
			$message = array('status'=>0,'message'=>'Password is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if($confirmpassword==''){
			$message = array('status'=>0,'message'=>'Confirm password is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		
		if(md5($password)==md5($confirmpassword)){
			
			$check_user=$this->Mobile_model->check_user_pwd_details($a_id);
			if(count($check_user)>0){
				
				if(md5($oldpassword)==$check_user['password']){
						$u_d=array(
							'password'=>md5($confirmpassword),
							'org_password'=>($confirmpassword),
						);
						$update=$this->Mobile_model->update_user($a_id,$u_d);
						if(count($update)>0){
								$message = array('status'=>1,'a_id'=>$a_id,'message'=>'Password Successfully Updated');
								$this->response($message, REST_Controller::HTTP_OK);
						}else{
								$message = array('status'=>0,'a_id'=>$a_id,'message'=>'Technical problem will occured. Please try again.');
								$this->response($message, REST_Controller::HTTP_OK);
						}
				}else{
					$message = array('status'=>0,'a_id'=>$a_id,'message'=>'Old password does not match. Please try again');
					$this->response($message, REST_Controller::HTTP_OK);
				}
				
			}else{
				$message = array('status'=>0,'a_id'=>$a_id,'message'=>'Invalid User id.Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
			
		}else{
			$message = array('status'=>0,'a_id'=>$a_id,'message'=>'Your password and confirmation password do not match');
				$this->response($message, REST_Controller::HTTP_OK);
		}
		
	}
	 public  function forgotpwd_post(){
		$email=$this->post('email');
		if($email=='') {
			$message = array('status' => 0,'message' => 'Mobile number/email id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$check=$this->Mobile_model->check_mobile_email_exist($email);
		if(count($check)>0){
			$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->to($check['email']);
				$this->email->from('admin@tejpanth.com', 'tejpanth'); 
				$this->email->subject('Forgot Password'); 
				$body = "<b> Your Account login Password is </b> : ".$check['org_password'];
				$los=$this->email->message($body);
				$this->email->send();
			 $message = array('status' =>1,'user_id'=>$check['a_id'],'message' =>'Check Your mail for password!');
             $this->response($message, REST_Controller::HTTP_OK);
		}else{
			 $message = array('status' => 0, 'user_id'=>'','message' =>'The email/ Mobile number you entered is not a registered. Please try again');
             $this->response($message, REST_Controller::HTTP_OK);	
		}
	 }
	 public  function gstdetails_post(){
		$a_id=$this->post('a_id');
		$gst=$this->post('gst');
		if($a_id==''){
			$message = array('status'=>0,'message'=>'User Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($gst==''){
			$message = array('status'=>0,'message'=>'GST is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$url = 'https://commonapi.mastersindia.co/oauth/access_token/';
			$params = array (
			'username' =>'info@foliyoo.com',
			'password' =>'Subh@123#',
			'client_id' =>'ssUokqRzlVDTuSJcdb',
			'client_secret' =>'FE46LWpKqZYXNUlFEw2mZacI',
			'grant_type' =>'password'
			);
			$data_string = json_encode($params);                                                                                   			
			$headers = array(
				'Content-Type: application/json',
				'client_id: 242324v424244255545343',
			);			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url); //Remote Location URL
			  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 7); //Timeout after 7 seconds
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); //parameters data
			$result = curl_exec($ch);
			curl_close($ch);
			$out=json_decode($result, TRUE);
			$post=$this->input->post();
			$url1 = 'https://commonapi.mastersindia.co/commonapis/searchgstin?gstin='.$gst;
			$token = $out['access_token'];
			$ch1 = curl_init($url1);
			curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch1, CURLOPT_HTTPHEADER, array(
			   'Content-Type: application/json',
			   'client_id: ssUokqRzlVDTuSJcdb',
			   'Authorization: Bearer ' . $token
			   ));
			curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
			curl_setopt($ch1, CURLOPT_CONNECTTIMEOUT, 7); //Timeout after 7 seconds
			curl_setopt($ch1, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
			curl_setopt($ch1, CURLOPT_HEADER, 0);
			$results1 = curl_exec($ch1);
			curl_close($ch1);
			$out2=json_decode($results1, TRUE);			
			$c_name=isset($out2['data']['lgnm'])?$out2['data']['lgnm']:'';
			$add_flno=isset($out2['data']['pradr']['addr']['flno'])?$out2['data']['pradr']['addr']['flno']:'';
			$add_lgnm=isset($out2['data']['pradr']['addr']['bnm'])?$out2['data']['pradr']['addr']['bnm']:'';
			$add_st=isset($out2['data']['pradr']['addr']['st'])?$out2['data']['pradr']['addr']['st']:'';
			$add_loc=isset($out2['data']['pradr']['addr']['loc'])?$out2['data']['pradr']['addr']['loc']:'';
			$add_dstc=isset($out2['data']['pradr']['addr']['loc'])?$out2['data']['pradr']['addr']['dst']:'';
			$add_pncd=isset($out2['data']['pradr']['addr']['pncd'])?$out2['data']['pradr']['addr']['pncd']:'';
			$address=$add_flno.','.$add_lgnm.','.$add_st.','.$add_loc.','.$add_dstc.','.$add_pncd;
			
			
			//echo '<pre>';print_r($out2);exit;
			if($out2['error']==''){
				$de=array('companyname'=>$c_name,'companyaddress'=>$address);
				$message = array('status'=>1, 'a_id'=>$a_id,'details'=>$de,'message'=>'Details are found.');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'a_id'=>$a_id,'details'=>array(),'message'=>'Technical problem will occured. Please try again.');
				$this->response($message, REST_Controller::HTTP_OK);
			}
		
	 }
	 
	 public  function profile_post(){
		$a_id=$this->post('a_id');
		if($a_id==''){
			$message = array('status'=>0,'message'=>'User Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$details=$this->Mobile_model->get_profiledetails($a_id);		
		if(count($details)>0){
				$message = array('status'=>1, 'a_id'=>$a_id,'details'=>$details,'path'=>base_url('assets/profilepics/'),'message'=>'Details are found.');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'a_id'=>$a_id,'details'=>array(),'path'=>base_url('assets/profilepics/'),'message'=>'profile details are not found. Please try again.');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	 }
	 public  function updateprofile_post(){
		$a_id=$this->post('a_id');
		$gst=$this->post('gst');
		$pan=$this->post('pan');
		$name=$this->post('name');
		$mobile_number=$this->post('mobile_number');
		$companyname=$this->post('company_name');
		$email=$this->post('email');
		$address=$this->post('address');
		$billing_add=$this->post('billing_add');
		$godan_add=$this->post('godan_add');
		$current_godan_add=$this->post('current_godan_add');
		$current_billing_add=$this->post('current_billing_add');
		if($a_id==''){
			$message = array('status'=>0,'message'=>'User Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($gst==''){
			$message = array('status'=>0,'message'=>'gst is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($pan==''){
			$message = array('status'=>0,'message'=>'pan is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($name==''){
			$message = array('status'=>0,'message'=>'name is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($mobile_number==''){
			$message = array('status'=>0,'message'=>'Mobile is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($companyname==''){
			$message = array('status'=>0,'message'=>'companyname is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($email==''){
			$message = array('status'=>0,'message'=>'email is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($address==''){
			$message = array('status'=>0,'message'=>'email is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($godan_add==''){
			$message = array('status'=>0,'message'=>'godan Address is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}if($billing_add==''){
			$message = array('status'=>0,'message'=>'billing Address is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		/*if($current_godan_add==''){
			$message = array('status'=>0,'message'=>' Current godan address is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if($current_billing_add==''){
			$message = array('status'=>0,'message'=>'Current billing address id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}*/
		$u_d=array(
			'gst'=>$gst,
			'pan'=>$pan,
			'name'=>$name,
			'mobile_number'=>$mobile_number,
			'company_name'=>$companyname,
			'email'=>$email,
			'address'=>$address,
			'godan_add'=>$godan_add,
			'billing_add'=>$billing_add,
			'updated_at'=>date('Y-m-d H:i:s'),
		);
		$update=$this->Mobile_model->update_user($a_id,$u_d);		
		if(count($update)>0){
				$message = array('status'=>1, 'a_id'=>$a_id,'message'=>'profile successfully updated.');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'a_id'=>$a_id,'message'=>'Technical problem will occured. Please try again.');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	 }
	 public  function editprofile_post(){
		$a_id=$this->post('a_id');
		if($a_id==''){
			$message = array('status'=>0,'message'=>'User Id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		$details=$this->Mobile_model->get_profiledetails($a_id);		
		if(count($details)>0){
			$c_b_a=$this->Mobile_model->get_c_b_a_details($a_id);
			$c_g_a=$this->Mobile_model->get_c_g_a_details($a_id);
				$message = array(
				'status'=>1,
				'a_id'=>$a_id,
				'details'=>$details,				
				'billingaddress_list'=>$c_b_a,
				'godanaddress_list'=>$c_g_a,				
				'path'=>base_url('assets/profilepics/'),'message'=>'Details are found.');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'a_id'=>$a_id,'details'=>array(),'path'=>base_url('assets/profilepics/'),'message'=>'profile details are not found. Please try again.');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	 }
    
	
}
